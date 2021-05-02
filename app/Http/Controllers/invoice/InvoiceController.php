<?php

namespace App\Http\Controllers\invoice;

use App\Http\Controllers\Controller;
use App\Models\invoice;
use App\Models\InvoiceRows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PDF;

class InvoiceController extends Controller
{
    public function index(){
        return view('invoice.invoice');
    }

    public function LoginRedirect(){
        return view('admin.login');
    }

    /*
    public function PreviewIndex(Request $request){
        return view('invoice.InvoicePreview',['invoice'=>$request]);
    }

    */

    public function StoreInvoice(Request $request){
        /*
        $validator = Validator::make($request->all(), [
            'InvoiceRecipientInfo'=>'required|max:255',
            'SubTotal'=>'required|max:255',
            'Tax'=>'required|max:255',
            'TaxAmount'=>'required|max:255',
            'GrandTotal'=>'required|max:255',
        ]);
        if ($validator->fails()) {
            return back()->withInput($request->all())->with('error', 'Please fill in all fields');
        }
        for($j=0;$j<=$request->RowCount;$j++) {
            $g = strval($j);
            $ProductName = "ProductName" . $g;
            $Quantity = "Quantity" . $g;
            $UnitPrice = "UnitPrice" . $g;

            $validator = Validator::make($request->all(),[
                $ProductName =>'required|max:255',
                $Quantity=>'required|max:255',
                $UnitPrice=>'required|max:255',
            ]);
        }

        if ($validator->fails()) {
            return back()->withInput($request->all())->with('error', 'Please fill in all fields');
        }
        */

        invoice::create([
            'InvoiceRecipient'=>$request->InvoiceRecipientInfo,
            'SubTotal'=>$request->SubTotal,
            'Tax'=>$request->Tax,
            'TaxAmount'=>$request->TaxAmount,
            'GrandTotal'=>$request->GrandTotal,
        ]);
        $InvoiceId = DB::getPdo()->lastInsertId();
        for($i=0;$i<=$request->RowCount;$i++) {

            $g = strval($i);
            $ProductName = "ProductName" . $g;
            $Quantity = "Quantity" . $g;
            $UnitPrice = "UnitPrice" . $g;
            $Total = "Total" . $g;


            InvoiceRows::create([
                'InvoiceId'=>$InvoiceId,
                'ProductName'=>$request->$ProductName,
                'Quantity'=>$request->$Quantity,
                'UnitPrice'=>$request->$UnitPrice,
                'Total'=>$request->$Total,
            ]);
        }
        $invoice = DB::table('invoices')->where('id', '=', $InvoiceId)->first();
        $rows = DB::table('invoice_rows')->where('InvoiceId', '=', $InvoiceId)->get();


        Session::put('InvoiceNumber', $InvoiceId);

        return view('invoice.preview',['invoice'=>$invoice, 'rows'=>$rows]);

    }

    public function history(){
        $data = invoice::orderBy('created_at', 'desc')->paginate(10);
        return view('invoice.history', ['data'=>$data]);
    }

    public function delete($id){
        DB::table('invoice_rows')->where('InvoiceId', '=', $id)->delete();
        DB::table('invoices')->where('id', '=', $id)->delete();

        $data = invoice::orderBy('created_at', 'desc')->paginate(10);
        return redirect()->route('invoice.history', ['data'=>$data]);

    }

    public function pdf(){
        $InvoiceId = Session::get('InvoiceNumber');
        $invoice = DB::table('invoices')->where('id', '=', $InvoiceId)->first();
        $rows = DB::table('invoice_rows')->where('InvoiceId', '=', $InvoiceId)->get();
        $pdf = PDF::loadview('invoice.download', ['invoice'=>$invoice, 'rows'=>$rows])
        ->save(''.public_path('PDFs').'/invoice-'.$InvoiceId.'.pdf');
        return $pdf->stream('invoice-'.$InvoiceId.'.pdf');
    }

    public function PreviewFromHistory($id){
        $invoice = DB::table('invoices')->where('id', '=', $id)->first();
        $rows = DB::table('invoice_rows')->where('InvoiceId', '=', $id)->get();
        Session::put('InvoiceNumber', $id);
        return view('invoice.preview',['invoice'=>$invoice, 'rows'=>$rows]);
    }


}
