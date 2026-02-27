@extends('layouts.app')

@section('title', 'flex-IT | Sākums')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.home')
@endsection
