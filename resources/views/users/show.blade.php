@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View User Data') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/users/{{$user->id}}" method="get">
                    @csrf
                        <table class="table table-responsive">
                            <tr><th>Username</th><th>:</th><td>{{ $user -> username}}</td></tr>
                            <tr><th>Name</th><th>:</th><td>{{ $user -> name}}</td></tr>
                            <tr><th>Email</th><th>:</th><td>{{ $user -> email}}</td></tr>
                            <tr><th>Create At</th><th>:</th><td>{{ $user -> created_at}}</td></tr>
                            <tr><th>Update At</th><th>:</th><td>{{ $user -> updated_at}}</td></tr>
                            <tr></tr>
                        </table>
                        <a href="http://127.0.0.1:8000/users" class="btn btn-primary float-right">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection