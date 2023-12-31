@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Register</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="frist_name">Name</label>
                    <input id="frist_name" type="text"
                        class="form-control @error('name', 'createUser')
                        is-invalid
                    @enderror"
                        name="name" value="{{ request()->input('name', old('name')) }}" autofocus>
                    @error('name', 'createUser')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email"
                        class="form-control @error('email', 'createUser')
                        is-invalid
                    @enderror"
                        name="email" value="{{ request()->input('email', old('email')) }}">
                    <div class="invalid-feedback">
                    </div>
                    @error('email', 'createUser')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password"
                        class="form-control
                    @error('password', 'createUser')
                        is-invalid
                    @enderror"
                        name="password">
                    @error('password', 'createUser')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password2" class="d-block">Password Confirmation</label>
                    <input id="password2" type="password" class="form-control
                    @error('password_confirmation', 'createUser')
                        is-invalid
                    @enderror"
                        name="password_confirmation">
                    @error('password_confirmation', 'createUser')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-muted mt-5 text-center">
        Have an account? <a href="{{ route('login') }}">Login</a>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
