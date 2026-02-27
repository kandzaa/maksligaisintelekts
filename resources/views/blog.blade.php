@extends('layouts.app')

@section('title', 'flex-IT | Blogs')

@section('headerClass', 'inner-page-header')

@section('content')
  @include('template.' . app()->getLocale() . '.blog')
@endsection
