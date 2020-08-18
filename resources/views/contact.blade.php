@extends('layout.master')

@section('title','Contact me')

@section('content')
<div class="container">
	this is text from contact me page  hahaha
</div>
@endsection

@section('sidebar')
@parent <br>
this is sidebar from contact page
@endsection

@include('layout.navbar')