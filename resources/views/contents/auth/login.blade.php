@extends('layouts.auth')

@section('content')
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('img/logo.svg') }}" height="36" alt=""></a>
    </div>
    <div class="card card-md">
      <div class="card-body">
        <h2 class="h2 text-center mb-4">@lang('Login to your account')</h2>
        <form action="{{ route('login') }}" method="post" autocomplete="off" novalidate>
          @csrf
          @method('post')

          <div class="mb-3">
            <label class="form-label">@lang('Email address')</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   placeholder="your@email.com" autocomplete="off">
            @error('email')
            <span class="invalid-feedback">{{ $message }}
            @enderror
          </div>
          <div class="mb-2">
            <label class="form-label">
              Password
              <span class="form-label-description">
                    <a href="{{ route('password.request') }}">@lang('I forgot password')</a>
                  </span>
            </label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                   placeholder="Your password" autocomplete="off">
            @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
          <div class="mb-2">
            <label class="form-check">
              <input type="checkbox" name="remember" class="form-check-input"/>
              <span class="form-check-label">@lang('Remember me on this device')</span>
            </label>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">@lang('Sign in')</button>
          </div>
        </form>
      </div>
      <div class="hr-text">or</div>
      <div class="card-body">
        <div class="row">
          <div class="col"><a href="#" class="btn w-100">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24"
                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                   stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path
                  d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"/>
              </svg>
              @lang('Login with Github')
            </a></div>
          <div class="col"><a href="#" class="btn w-100">
              <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24"
                   viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                   stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path
                  d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"/>
              </svg>
              @lang('Login with Twitter')
            </a></div>
        </div>
      </div>
    </div>
    <div class="text-center text-muted mt-3">
      @lang('Don\'t have account yet?') <a href="{{ route('register') }}" tabindex="-1">@lang('Sign up')</a>
    </div>
  </div>
@endsection