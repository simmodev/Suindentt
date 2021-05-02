<?php

use App\Http\Controllers\admin\login;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\invoice\InvoiceController;
use App\Http\Controllers\SubController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::post('/sub', [SubController::class, 'store' ])->name('sub');

Route::get('/admin/login', [login::class, 'index' ])->name('login');
Route::post('/admin/login', [login::class, 'check' ]);



Route::group(['middleware'=>['AuthCheck']],function (){
    Route::get('/admin/dashboard', [Dashboard::class, 'index' ])->name('admin.dashboard');

    Route::get('/invoice', [InvoiceController::class, 'index' ])->name('invoice');
    Route::post('/invoice/preview', [InvoiceController::class, 'StoreInvoice' ])->name('StoreInvoice');

    Route::get('/invoice/history', [InvoiceController::class, 'history' ])->name('invoice.history');

    Route::get('/invoice/download', [InvoiceController::class, 'pdf' ])->name('invoice.download');

    Route::post('/invoice/{id}/preview', [InvoiceController::class, 'PreviewFromHistory' ])->name('PreviewFromHistory');
    Route::post('/invoice/history/{id}', [InvoiceController::class, 'delete' ])->name('invoice.delete');
});
