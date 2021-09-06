@extends('parent')
@push('css')
 <!-- Styles pour la page formation -->
    <link href="{{ asset('css/juni_style.css') }}" rel="stylesheet">
    <!-- Styles fontawesome -->
    <link href="{{ asset('css/fontawesome-free/css/fontawesome-all.min.css') }}" rel="stylesheet">
@endpush

@section('content')
      @yield('content_cycle')
@endsection
@push('js')

@endpush
