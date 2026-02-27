@extends('layouts.app')

@section('title', 'flex-IT | Home')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.home-en')
@endsection
