<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suindent</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/png"/>

</head>
<body>

 <div class="container">
     <div class="row">
         <div class="col-4">
             <h5>{{ $invoice->InvoiceRecipientInfo }}</h5>
         </div>
     </div>
     <table class="table table-bordered ">
         <thead class="thead-light">
         <tr>
             <th class="text-center">#</th>
             <th class="text-center">Product</th>
             <th class="text-center">Qty</th>
             <th class="text-center">Unit Price</th>
             <th class="text-center">Total</th>
         </tr>
         </thead>
         <tbody>
         @for($i=0;$i<=$invoice->RowCount;$i++)
             <p hidden>
                 <!--I know this is weird and not a clean coding but i am just a beginner now
                 and sometimes u have to work with only what u have.
                 at least it is doing the job... :) -->

                 {{$g = strval($i)}}
                 {{$ProductName = "ProductName".$g}}
                 {{$Quantity = "Quantity".$g}}
                 {{$UnitPrice = "UnitPrice".$g}}
                 {{$Total = "Total".$g}}
             </p>

             <tr>
                 <td class="text-center">{{ $i+1 }}</td>
                 <td class="text-center">{{ $invoice->$ProductName }}</td>
                 <td class="text-center">{{ $invoice->$Quantity }}</td>
                 <td class="text-center">{{ $invoice->$UnitPrice }} DH</td>
                 <td class="text-center">{{ $invoice->$Total }} DH</td>
             </tr>
         @endfor
         </tbody>
     </table>
     <div class="row">
         <div class="col-6 ml-auto mt-3">
             <table class="table table-bordered">
                 <tbody>
                 <tr>
                     <th>Sub Total</th>
                     <td class="font-weight-bold">{{ $invoice->SubTotal }} DH</td>
                 </tr>
                 <tr>
                     <th>Tax %</th>
                     <td class="font-weight-bold">{{ $invoice->Tax }} %</td>
                 </tr>
                 <tr>
                     <th>Tax Amount</th>
                     <td class="font-weight-bold">{{ $invoice->TaxAmount }} DH</td>
                 </tr>
                 <tr>
                     <th>Grand Total</th>
                     <td class="font-weight-bold">{{ $invoice->GrandTotal }} DH</td>
                 </tr>
                 </tbody>
             </table>
             <h3>{{$invoice->Total}}</h3>
         </div>
     </div>
 </div>


<style>
    body{
        color: #1a202c;
        background-color: #FFFFFF;
    }
    .table td,.table th{
        border: black solid 1px !important;
    }

</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
