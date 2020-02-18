@extends('layouts.app')

@section('template_title')
    Welcome {{ Auth::user()->name }}
@endsection

@section('head')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-lg-2">
                @include('pages.admin.sidebar')
            </div>

            <div class="col-sm-9 col-md-8 col-lg-10">
                @include('panels.welcome-panel')
            </div>
        </div>
    </div>
@endsection
