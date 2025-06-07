
@extends('layouts.homepage')

@section('title', 'iFlexs - Sewa iPhone Tanpa Harus Memiliki')

@section('content')
    @include('sections.hero')
    @include('sections.testimonials') 
    @include('sections.why-rent')
    @include('sections.latest-phones')
    @include('sections.how-to-rent')
    @include('sections.cta')
@endsection