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
        <a class="btn btn-secondary btn-lg mb-3" href="{{ route('admin.dashboard') }}">« Back</a>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="pb-1">Invoices history</h1>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <th>Numero De Facture</th>
                        <th>Nom De Destinataire</th>
                        <th>Totale Montant</th>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->InvoiceRecipient}}</td>
                                <td>{{$item->GrandTotal}} DH</td>
                                <td>
                                    <form action="{{ route('PreviewFromHistory', $item->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary ml-3">preview</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('invoice.delete', $item->id) }}" method="post">
                                        @csrf
                                        <button onclick="return confirm('This item will be deleted. Click OK to confirm.')" type="submit" class="btn btn-danger ml-3">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>




    <style>
        body{
            background-color: #FFFFFF;
            color: black;
        }
        .table td,.table th{
            border: black solid 1px !important;
        }
    </style>
</body>

