@extends('layouts.app')

@section('content')
    @include('components.home.hero')
    @include('components.home.whoweare')
    @include('components.home.foundation')
    @include('components.home.video-showcase')
    @include('components.home.services')
    @include('components.home.clients')
    @include('components.home.scripts')
@endsection
