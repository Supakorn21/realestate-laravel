@extends('layouts.main')
@section('page-title', 'Login - Tommy Realty')
@section('content')
   <div class="auth-page auth-page--login">
        <form action="" method="POST" class="auth-page__form">
            @csrf
            
            <h3 class="auth-page__title">Login</h3>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="email">Email</label>
                <input class="auth-page__form-input" type="email" name="email" >
            </div>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="password">Password</label>
                <input class="auth-page__form-input" type="password" name="password" >
            </div>
            <div class="auth-page__form-group text-end">
                <a href="{{route('register')}}" style="float: right">No account? Register</a>
            </div>
            <div class="auth-page__form-group">
                <button class="auth-page__form-button" type="submit"  >Login</button>
            </div>
        </form>
   </div>
@endsection
