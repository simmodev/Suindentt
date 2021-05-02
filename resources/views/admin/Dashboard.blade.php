@extends('admin.header')
@section('content')
    <div class="container">
        <div class="mb-4">
            <a class="btn btn-primary btn-lg"  href="{{ route('invoice') }}">Create Invoice</a>
            <a class="btn btn-secondary ml-5 btn-lg" href="{{ route('invoice.history') }}">Invoices History</a>
        </div>
        <div class="text-dark">

            <div class="row">
                <div class="col-lg-10 col-sm-12">
                    <h4 class="pb-1">Les Inscrivants Liste</h4>
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->PhoneNumber }}</td>
                                <td>{{ $item->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{$data->links("pagination::bootstrap-4")}}

                </div>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: #FFFFFF;
        }
        .table td,.table th{
            border: black solid 1px !important;
        }
    </style>
@endsection
