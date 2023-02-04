@extends('posts.layout')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('home')</title>
</head>
<body>
    {{--get data pagination--}}
    @section('section')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">password</th>
                <th scope="col">email</th>
            </tr>
            </thead>
            <tbody>
    @foreach($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->email}}</td>
                </tr>
    @endforeach
            </tbody>
        </table>
    @endsection
</body>
</html>

