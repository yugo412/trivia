@extends('layouts.auth')

@section('content')
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="/" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('img/logo.svg') }}" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="{{ route('password.request') }}" method="post" autocomplete="off" novalidate>
      @csrf
      @method('post')

      <div class="card-body">
        <h2 class="card-title text-center mb-4">@lang('Request Password')</h2>

        <div class="mb-3">
          <label class="form-label">@lang('Email address')</label>
          <input type="email" name="email" value="{{old('email')}}"
                 class="form-control @error('email') is-invalid @enderror">
          @error('email')
          <span class="invalid-feedback">{{ $message }}
          @enderror
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">@lang('Send link')</button>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      @lang('Already have account?') <a href="{{ route('login') }}" tabindex="-1">@lang('Sign in')</a>
    </div>
  </div>
@endsection
