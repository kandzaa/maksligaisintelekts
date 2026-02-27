@extends('layouts.app')

@section('title', 'flex-IT | Web Izstrāde')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.service-web-development')
@endsection
