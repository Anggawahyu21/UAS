<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <title>Log In</title>
</head>
<body style="background: #007bff; background: linear-gradient(to right, #0062E6, #33AEFF);">
<x-guest-layout>
        <x-slot name="logo">
            <h5 class="card-title text-center">Sign In</h5>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card card-signin my-5">
                <div class="card-body">
                  <h5 class="card-title text-center">Sign In</h5>
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="email" id="email" type="email" name="email" :value="old('email')" required autofocus class="form-control" placeholder="Email address" required autofocus>
                      <label for="email" value="{{ __('Email') }}">Email address</label>
                    </div>
      
                    <div class="form-label-group">
                      <input type="password" id="password" class="form-control" type="password" name="password" required autocomplete="current-password"  placeholder="Password">
                      <label for="password" value="{{ __('Password') }}">Password</label>
                    </div>
      
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                      <label class="custom-control-label" for="remember_me">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Log in') }}</button>
                    <hr class="my-4">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>  
        </form>
</x-guest-layout>
</body>
</html>
