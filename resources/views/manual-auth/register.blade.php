@extends('auth.app')

@section('content')
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Create Account</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('auth.action.register') }}" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your full name"
                        name="name" value="{{ old('name') }}" />
                    <label for="inputFirstName">Full Name</label>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"
                        value="{{ old('email') }}" />
                    <label for="inputEmail">Email address</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPassword" type="password" placeholder="Create a password"
                                name="password" />
                            <label for="inputPassword">Password</label>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputPasswordConfirm" type="password"
                                placeholder="Confirm password" name="password_confirmation" />
                            <label for="inputPasswordConfirm">Confirm Password</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="{{ route('auth.login') }}">Have an account? Go to login</a></div>
        </div>
    </div>
@endsection
