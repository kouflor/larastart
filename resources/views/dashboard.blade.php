@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(auth()->user()->confirm_token)
                <div class="alert alert-warning">
                    <strong>Alert!</strong> You need to verify your email address.
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="level">
                        <span class="flex">
                            Dashboard
                        </span>
                    </div>
                </div>

                <div class="panel-body">
                    Hello, {{ auth()->user()->profile->display_name }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
