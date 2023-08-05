@extends('layouts.main')
@section('page-title', 'Register - Tommy Realty')
@section('content')
   <div class="auth-page auth-page--login">
        <form action="" method="POST" class="auth-page__form">
            @csrf
            
            <h3 class="auth-page__title">Register</h3>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="username">Username</label>
                <input class="auth-page__form-input" type="name" name="name" >
            </div>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="email">Email</label>
                <input class="auth-page__form-input" type="email" name="email" >
            </div>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="password">Password</label>
                <input class="auth-page__form-input" type="password" name="password" >
            </div>
            <div class="auth-page__form-group">
                <label class="auth-page__form-label"  for="password">Password Confirmation</label>
                <input class="auth-page__form-input" type="password" name="password_confirmation" >
            </div>
            <div class="auth-page__form-group text-end">
                <a href="{{route('login')}}" style="float: right">Already have account? Login</a>
            </div>
            <div class="auth-page__form-group">
                <button class="auth-page__form-button" type="submit" >Register</button>
            </div>
        </form>
   </div>
@endsection
