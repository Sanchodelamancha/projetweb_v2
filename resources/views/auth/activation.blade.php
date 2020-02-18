@extends('layouts.app')

@section('template_title')
    {{ trans('titles.activation') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card card-default">
                    <div class="card-header">{{ trans('titles.activation') }}</div>
                    <div class="card-body">
                        <p>{{ trans('auth.regThanks') }}</p>
                        <p>{{ trans('auth.anEmailWasSent',['email' => $email ] ) }}</p>
                        <p>{{ trans('auth.clickInEmail') }}</p>
                        <p><a class="btn btn-primary" href="{{ url('/') }}">
                                {!! config('app.home', trans('titles.home')) !!}
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
