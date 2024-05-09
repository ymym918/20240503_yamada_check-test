@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
        <button class="header-nav__button">logout</button>
            <a class="login__button-submit" href="/login"></a>
    </div>

@extends('layouts.default')
<style>
th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
    }
    tr:nth-child(odd) td{
    background-color: #FFFFFF;
    }
    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
        }
</style>
@section('title', 'index.blade.php')

@section('content')

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
    <th>nationality</th>
</tr>
@foreach ($authors as $author)
<tr>
    <td>{{$author->id}}</td>
    <td>{{$author->name}}</td>
    <td>{{$author->age}}</td>
    <td>{{$author->nationality}}</td>
</tr>
@endforeach
</table>
@endsection
