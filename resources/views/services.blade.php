@extends('layouts.app')

@section('title', 'flex-IT | Pielietojumi')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.services')
@endsection
