@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::open(['url' => '/admin/products', 'enctype' => 'multipart/form-data']) !!}
    @include('auth.partials.forms.product')
  {!! Form::close() !!} 
@stop