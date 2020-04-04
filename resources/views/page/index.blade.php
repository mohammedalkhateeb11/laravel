@extends('layouts.app')
@section('content')
<style>
  body {
  background-color: #050505;
}
</style>

 <div class="jumbotron">
    <h1 class="display-4">Hello, I am Muhammad Al-Khatib, a web developer</h1>
    <p class="lead">This life is hard but you have to go over everything.</p>
    <hr class="my-4">
    <p>Let's discover this world.</p>
    <p class="lead">
      <a class="btn btn-info" href="{{ route('login') }}" role="button">Login</a>
    </p>
    <p class="lead">
        <a class="btn btn-success" href="{{ route('register') }}" role="button">Sign Up</a>
      </p>
  </div>
@endsection