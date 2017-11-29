@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('profiles.nav')

            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Profile</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{ route('update-profile') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ auth()->user()->profile->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="location" class="col-md-4 control-label">Location</label>
                                <div class="col-md-6">
                                    <input type="text" id="location" class="form-control" name="location" value="{{ auth()->user()->profile->location }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth" class="col-md-4 control-label">Date of Birth</label>
                                <div class="col-md-6">
                                    <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" value="{{ auth()->user()->profile->date_of_birth->format('Y-m-d') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection