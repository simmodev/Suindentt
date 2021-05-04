<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suindent</title>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="{{ secure_asset('/img/logo.png') }}" type="image/png"/>

</head>
<body>
<form action="{{ route('StoreInvoice') }}" method="post">
    @csrf
    <div class="container">
        <a class="btn btn-secondary btn-lg mb-5" href="{{ route('admin.dashboard') }}">« Back</a>

        @if(session('error'))
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="alert alert-danger font-weight-bold">
                        {{session('error')}}
                    </div>
                </div>
            </div>
        @endif

        <input type="hidden" id="RowCount" name="RowCount" value=0>
        <div class="row">
            <div class="col-4">
                <textarea name="InvoiceRecipientInfo" rows="2" placeholder="Nom De Destinataire" class="form-control @error('InvoiceRecipientInfo') border-danger @enderror" required></textarea>
            </div>
        </div>
        <table class="table table-bordered mt-4" id="table1">
            <thead class="thead-light">
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Produit</th>
                <th class="text-center">Quantité</th>
                <th class="text-center">Prix Unitaire</th>
                <th class="text-center">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr id="addr0">
                <td>1</td>
                <td><input name="ProductName0" type="text" placeholder="Nom De Produit" class="form-control" required></td>
                <td><input name="Quantity0" type="number" placeholder="Quantite" class="form-control" required></td>
                <td><input name="UnitPrice0" type="number" placeholder="Prix Unitaire" class="form-control" required></td>
                <td><input name="Total0" type="text" placeholder="0" class="form-control total" readonly></td>
            </tr>
            <tr id="addr1"></tr>

            </tbody>
        </table>
        <div class="">
            <botton class="btn btn-primary mr-4" id="AddRow">Add Row</botton>
            <button class="btn btn-info mr-4" name="PreviewButton" type="submit">Save & Preview</button>

            <botton class="btn btn-secondary float-right" id="DeleteRow">Delete Row</botton>
        </div>
        <div class="row">
            <div class="col-6 ml-auto mt-3">
                <table class="table table-bordered" id="table2">
                    <tbody>
                    <tr>
                        <th>Sous-total</th>
                        <td class="font-weight-bold"><input id="SubTotal" name="SubTotal" type="text" placeholder="0.00" class="form-control" readonly></td>
                    </tr>
                    <tr>
                        <th>TVA %</th>
                        <td>
                            <div class="input-group">
                                <input id="Tax" name="Tax" type="text" placeholder="0" value="0" class="form-control">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">%</span>
                                </div>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th>Montant TVA</th>
                        <td class="font-weight-bold"><input id="TaxAmount" name="TaxAmount" type="text" placeholder="0.00" class="form-control" readonly></td>
                    </tr>
                    <tr>
                        <th>Montant Total Finale</th>
                        <td class="font-weight-bold"><input id="GrandTotal" name="GrandTotal" type="text" placeholder="0.00" class="form-control" readonly></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>






    <style>
        body{
            color: #1a202c;
            background-color: #FFFFFF;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script src="{{ secure_asset('js/invoice.js') }}"></script>
</body>

