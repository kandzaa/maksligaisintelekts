@extends('layouts.app')

@section('title', 'flex-IT | Blog')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.blog-en')
@endsection
