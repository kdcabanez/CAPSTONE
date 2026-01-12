@extends('index')
@section('content')
    <div class="page-wrapper">
        @include('components.header')
        @include('components.sidebar')
        <div class="content-wrapper">
            <div class="page-content fade-in-up">
                @yield('admin_content')
            </div>

        </div>
    </div>
@endsection
