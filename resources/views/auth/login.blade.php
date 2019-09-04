@extends('layouts.auth')

@section('content')
<div class="form-body">
    
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">

            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <div class="page-links">
                        <a href="{{ url('/login')}}" class="active">Login</a>
                        <a href="{{ url('/register')}}">Register</a>
                    </div>
                    <form method="post" action="{{ route('login') }}">
                      
                       @csrf
                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" value="{{ old('email') }}" required autocomplete="email">
                        
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label" for="remember">Remeber me</label>
                        
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Login</button> <a href="#">Forget password?</a>
                        </div>
                        
                                
                    </form>
                    <div class="other-links">
                        <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
