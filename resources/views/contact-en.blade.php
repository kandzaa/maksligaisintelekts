@extends('layouts.app')

@section('title', 'flex-IT | Contact')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.contact-en')
@endsection
