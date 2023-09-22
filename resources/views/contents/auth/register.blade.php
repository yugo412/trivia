@extends('layouts.auth')

@section('content')
  <div class="container container-tight py-4">
    <div class="text-center mb-4">
      <a href="/" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('img/logo.svg') }}" height="36" alt=""></a>
    </div>
    <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
      @csrf
      @method('post')

      <div class="card-body">
        <h2 class="card-title text-center mb-4">@lang('Create new account')</h2>
        <div class="mb-3">
          <label class="form-label">@lang('Name')</label>
          <input type="text" name="name" value="{{ old('name') }}"
                 class="form-control @error('name') is-invalid @enderror" placeholder="@lang('Enter full name')">
          @error('name')
          <span class="invalid-feedback">{{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Email address')</label>
          <input type="email" name="email" value="{{old('email')}}"
                 class="form-control @error('email') is-invalid @enderror">
          @error('email')
          <span class="invalid-feedback">{{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Password')</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                 autocomplete="off">
          @error('password')
          <span class="invalid-feedback">{{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">@lang('Repeat password')</label>
          <input type="password" name="password_confirmation" placeholder="@lang('Re-type password')" class="form-control"
                 autocomplete="off">
        </div>
        <div class="mb-3">
          <label class="form-check">
            <input type="checkbox" class="form-check-input"/>
            <span class="form-check-label">Agree the <a href="{{ url('/tos') }}"
                                                        tabindex="-1">terms and policy</a>.</span>
          </label>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary w-100">@lang('Create new account')</button>
        </div>
      </div>
    </form>
    <div class="text-center text-muted mt-3">
      Already have account? <a href="{{ route('login') }}" tabindex="-1">@lang('Sign in')</a>
    </div>
  </div>
@endsection
