@extends('layouts.app')

@section('title', 'flex-IT | Izstrāde')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.development')
@endsection
