@extends('posts.layout')
@section('section')
<div class="container">
    <form action="store" method="get">
        <div>
        <label for="name" class="form-label">name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="pass">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">create</button>
    </form>
<div>
@endsection
