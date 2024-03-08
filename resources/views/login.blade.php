@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Login Page</h1>

    <form action="" method="post" id="login_form">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    </div>

 @endsection   