@extends('_layout/login')

@section('form')

                <form method="POST" action="{{ route('getLogin')}}" role="login">
                    <img src="assets/images/logo.png" class="img-responsive" alt="" />
                
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Email" required class="form-control input-lg" />
                    <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />
                    
                    <input type="checkbox" name="remember" value="1" /> Remember me<br />
                    <input type="checkbox" name="tos" value="1" /> You agree to <a href="#" class="text-primary">Terms</a> and 
                    <a href="#" class="text-primary">Privacy Policy</a>
                    
                    <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Sign in</button>
                </form>

@stop