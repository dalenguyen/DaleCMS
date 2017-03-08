{{-- home.blade.php --}}

@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
	@include('home.includes.intro')
	@include('home.includes.portfolio')
	@include('home.includes.aboutme')
	@include('home.includes.contact')
@endsection
