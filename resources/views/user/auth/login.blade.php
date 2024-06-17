@extends('user.layouts.app')
@section('meta_title','law')

@include('user.includes.navbar')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<section class="inner_banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="inr_bnr">
					<img src="images/banner_inner.jpg" alt="bnr">
				</div>
			</div>	
		</div>
	</div>	
</section>

<section class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="login_inr login-form">  <h3>Login</h3>
            <p>Enter your email and password to login:</p>
            
            <form method="POST" action="{{ route('client.login.submit') }}">
              @csrf
              <div class="form-group">
                  <input class="form-control" type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                  @error('email')
                      <span>{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                  <input class="form-control" type="password" name="password" placeholder="Password">
                  {{-- <a class="frgt" href="forgot_password.html">Forgot your Password?</a> --}}
              </div>
              <div class="form-group">
                  <button type="submit" class="btn">Login</button>
              </div>
          </form>
          
          
          </div>
        </div>
  
        <div class="col-md-6">
          <div class="login_inr signup-form">
              <h3>Sign Up</h3>
              <p>Please fill in the information below:</p>
      
              @if (session('success') && Route::currentRouteName() == 'client.register.submit')
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
      
              @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
      
              <form method="POST" action="{{ route('client.register.submit') }}">
                  @csrf
                  <div class="form-group">
                      <input class="form-control" type="text" name="firstname" placeholder="First Name" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="text" name="lastname" placeholder="Last Name" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="phone" name="phone" placeholder="Phone Number" required>
                  </div>
                  <div class="form-group">
                      <input class="form-control" type="text" name="adrs" placeholder="address" required>
                  </div>
                  <div class="form-group" style="text-align: left;">
                      <input type="checkbox" id="rgstr" name="rgstr" value="0">
                      <label for="rgstr"> Register to our newsletter</label>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn">Create Account</button>
                  </div>
                  <p>Already have an account? <a href="{{ route('client.login') }}">Login</a></p>
              </form>
          </div>
      </div>
      
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection