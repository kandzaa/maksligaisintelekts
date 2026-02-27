@extends('layouts.app')

@section('title', 'flex-IT | Services')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.services-en')
@endsection
