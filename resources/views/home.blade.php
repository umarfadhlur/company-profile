@extends('layouts.app')

@section('title', 'PT GLS NUSARAYA - Pipeline | Steel Structure | Mechanical Engineering')
@section('description', 'Welcome to BizLand - We are team of talented designers making websites with Bootstrap')

@section('content')
    @include('sections.hero')
    @include('sections.featured-services')
    @include('sections.values')
    @include('sections.about')
    {{-- @include('sections.skills') --}}
    {{-- @include('sections.stats') --}}
    @include('sections.services')
    @include('sections.clients')
    {{-- @include('sections.testimonials') --}}
    @include('sections.portfolio')
    {{-- @include('sections.team') --}}
    @include('sections.contact')
@endsection
