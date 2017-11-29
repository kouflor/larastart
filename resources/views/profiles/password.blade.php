@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('profiles.nav')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Password</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{ route('update-password') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                            	<label for="current_password" class="col-md-4 control-label">Current Password</label>
                            
                            	<div class="col-md-6">
                            		<input type="password" id="current_password" name="current_password" class="form-control"  required>
                            
                            		@if ($errors->has('current_password'))
                            			<span class="help-block">
                            				<strong>{{ $errors->first('current_password') }}</strong>
                            			</span>
                            		@endif
                            	</div>
                            </div>
                            <hr>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            	<label for="password" class="col-md-4 control-label">New Password</label>

                            	<div class="col-md-6">
                            		<input type="password" id="password" name="password" class="form-control" required>

                            		@if ($errors->has('password'))
                            			<span class="help-block">
                            				<strong>{{ $errors->first('password') }}</strong>
                            			</span>
                            		@endif
                            	</div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            	<label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>

                            	<div class="col-md-6">
                            		<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>

                            		@if ($errors->has('password_confirmation'))
                            			<span class="help-block">
                            				<strong>{{ $errors->first('password_confirmation') }}</strong>
                            			</span>
                            		@endif
                            	</div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection