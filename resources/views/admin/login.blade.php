@extends('admin.header')

@section('content')

    <div class="col-lg-6 col-sm-12 m-auto">
        <div class="card bg-secondary text-center card-form">
            <div class="card-body ">
                <h3 class="pb-lg-5">Login as an admin!</h3>
                @if(session('status'))
                    <div class="alert alert-danger">
                        {{session('status')}}
                    </div>

                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg @error('email') border border-danger @enderror" placeholder="Email" >
                        @error('email')
                        <p class="text-danger text-left font-weight-bold">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control form-control-lg @error('password') border border-danger @enderror" placeholder="Password">
                        @error('password')
                        <p class="text-danger text-left font-weight-bold">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <input type="submit" value="Login" class="btn btn-outline-light btn-block">
                </form>
            </div>
        </div>
    </div>

@endsection
