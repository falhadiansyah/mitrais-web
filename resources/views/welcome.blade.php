@extends('layouts.app')

@section('title', 'Mitrais Test - Dashboard')

@section('custom-js')
    <script src="./assets/js/app.js"></script>
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('signin'))
            <div class="top-right links">
                <a href="javascript:void();" id="btn-logout">Logout</a>
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">Dashboard</div>
        </div>
    </div>
@endsection
