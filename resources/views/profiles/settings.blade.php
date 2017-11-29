@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('profiles.nav')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Settings</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{ route('update-settings') }}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" value="{{ auth()->user()->username }}" disabled="disabled">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            	<label for="email" class="col-md-4 control-label">Email</label>

                            	<div class="col-md-6">
                            		<input type="email" id="email" class="form-control" name="email" value="{{ (old('email')?old('email'):auth()->user()->email) }}" required>

                                        @if ($errors->has('email'))
                            			<span class="help-block">
                            				<strong>{{ $errors->first('email') }}</strong>
                            			</span>
                            		@endif
                            	</div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">Update Settings</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection