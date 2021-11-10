@extends('layouts.app')
 
@section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('USER DATA') }}</div>
 
                 <div class="card-body">
                     @if (session('status'))
                         <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                         </div>
                     @endif
                     
                     <!-- Start kode untuk form pencarian -->
                    <form class="form float-right" method="get" action="{{ route('searchU') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan data">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                    <!-- Start kode untuk form pencarian -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                     <a href="/users/create" class="btn btn-primary">Add Data</a> <br><br>

                     <table class="table table-responsive table-striped">
                         <thead>
                             <tr>
                                 <th>Username</th> 
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Role</th>
                                 <th>Create At</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($user as $s)
                             <tr>
                                 <td>{{ $s->username }}</td>
                                 <td>{{ $s->name }}</td>
                                 <td>{{ $s->email }}</td>
                                 <td>{{ $s->role }}</td>
                                 <td>{{ $s->created_at }}</td>
                                 <td> <form action="/users/{{$s->id}}" method="POST">
                                     <a href="/users/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                     @method('GET')
                                     <a href="/users/{{$s->id}}" class="btn btn-primary">View</a>
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                     </form>
                                 </td>
                             </tr>
                             @endforeach 
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
</div>
@endsection 