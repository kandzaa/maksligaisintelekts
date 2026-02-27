@extends('layouts.app')

@section('title', 'flex-IT | Kontakti')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.contact')
@endsection
