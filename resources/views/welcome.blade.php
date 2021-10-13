@extends('layouts.main')

@section('title', 'Quality')

@section('content')

<h1>Teste</h1>
<img src="/img/banner.jpg" alt="Banner">
@if (10 > 5)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "João")
<p>O nome é João</p>
@elseif($nome == "Yago")
<p>O nome é {{$nome}} e ele tem {{$idade}} anos,</p>
@else
<p>O nome não é João</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }}</p>
@endfor

@foreach ($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

@endsection
