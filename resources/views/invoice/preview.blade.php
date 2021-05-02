<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suindent</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/png"/>

</head>
<body>


<div class="container mt-3">
    <div>
        <a href="{{route('invoice.history')}}" class="btn btn-dark btn-lg mb-5">« Invoices History</a>
        <a target="_blank" href="{{route('invoice.download')}}" class="btn btn-primary btn-lg float-right mb-5">Print & Download PDF</a>
    </div>

    <div class="row">
        <div class="col-12 border border-dark">
            <h1 class="m-3 p-4 border border-secondary d-inline-block"><img class=" mr-2" src="{{ asset('img/logo.png') }}" width="60" height="60" >Suindent-Sarl</h1>
            <h6>ville : Tiflet</h6>
            <h6>adress : N5 KISSARIAT HAY OULED CHRIFA AVENUE LA MARCHE VERTE.</h6>
            <h6>Numero : 0661936502</h6>
            <p class="font-weight-bold"><u>www.Suindent.com</u></p>
        </div>
        <div class="col-12 mt-4">
            <p class="font-weight-bold">Créé à : {{ $invoice->created_at }}</p>
            <h4 class="">Destinataire : {{ $invoice->InvoiceRecipient }}</h4>
            <h3 class="float-right">Facture Numero : #{{ $invoice->id }}</h3>
        </div>

    </div>
    <table class="table table-bordered ">
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
            @php $i = 1; @endphp
            @foreach($rows as $row)
                <tr>
                    <td class="text-center">@php echo $i; $i++;  @endphp</td>
                    <td class="text-center">{{ $row->ProductName }}</td>
                    <td class="text-center">{{ $row->Quantity }}</td>
                    <td class="text-center">{{ $row->UnitPrice }} DH</td>
                    <td class="text-center">{{ $row->Total }} DH</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-6 ml-auto mt-3">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Sous-total</th>
                    <td class="font-weight-bold">{{ $invoice->SubTotal }} DH</td>
                </tr>
                <tr>
                    <th>TVA %</th>
                    <td class="font-weight-bold">{{ $invoice->Tax }} %</td>
                </tr>
                <tr>
                    <th>Montant TVA</th>
                    <td class="font-weight-bold">{{ $invoice->TaxAmount }} DH</td>
                </tr>
                <tr>
                    <th>Montant Total Finale</th>
                    <td class="font-weight-bold">{{ $invoice->GrandTotal }} DH</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="boder border-top border-dark">
        <div class="container text-center">
            <p class="text-muted text-center">Merci pour votre comande.</p>
            <p class="text-center">N5 KISSARIAT HAY OULED CHRIFA AVENUE LA MARCHE VERTE</p>
            <p class="text-center">SARL AU CAPITAL DE 10 000,00 DH TP : 29526457 RC: 27247<br>IF : 15234003</p>
            <p class="text-center">ICE : 001840570000037</p>
        </div>
    </footer>



</div>





<style>
    body{
        color: #1a202c;
        background-color: #ffffff;
    }
    .table td,.table th{
        border: black solid 1px !important;
    }

</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
