@extends('frontend.master')

@section('title', 'Dashboard')

@section('dashboard', 'active')

@section('content')
<section class="section">
    <div class="section-header">
        {{-- <h1>Selamat Datang, {{ Auth::guard('web')->user()->UserLogin }}!</h1> --}}
    </div>

    <div class="section-body">
    </div>
</section>
@endsection
@section('scripts')

@endsection
