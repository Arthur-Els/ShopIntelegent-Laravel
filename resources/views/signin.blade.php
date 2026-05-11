@extends('layout.app')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="card p-4 col-10 col-md-6 mt-5">
        <div class="text-center">
            <h1>Welcome!</h1>
            <p>Sign in to continue.</p> 
        </div>

        <form class="container-fluid" action="/">
            <label class="px-1" for="">Email</label>
            <input type="email" class="form-control" placeholder="Username" required>

            <label class="px-1 mt-2" for="">Password</label>
            <input type="password" class="form-control" placeholder="Password" required>

            <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card bg-primary">
                <div class="card-body">
                    asd
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-danger">
                <div class="card-body">
                    bcd
                    <a href="" class="btn btn-outline-primary">Submit</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-warning">
                <div class="card-body">
                    zxc
                </div>
            </div>
        </div>
    </div>
</div>

@endsection