@extends('auth.Auth')

@section('title')
<title>Register | Aplikasi</title>
@endsection

@section('form')
<div class="row justify-content-md-center">
    <div class="col-md-12 col-lg-4">
        <div class="card login-box-container">
            <div class="card-body">
                <div class="authent-logo">
                    <a href="/register">Sign Up</a>
                </div>
                <div class="authent-text">
                    <p>System Informasi Klinik</p>
                    <p>Enter your details to create your account</p>
                </div>

                <form action="{{ route ('register.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Fullname">
                            <label for="floatingInput">Username</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingInput1" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="password" name="password_confirmation" class="form-control" id="floatingPassword1" placeholder="Confirm Password">
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary m-b-xs">Register</button>
                    </div>
                </form>
                <div class="authent-login">
                    <p>Already have an account? <a href="/login">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
