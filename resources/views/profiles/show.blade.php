@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $user->username }}</h1>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if($user->isOnline())
                            <span class="text-success" title="User is online!"><i class="glyphicon glyphicon-record"></i> Online!</span><br>
                        @else
                            <span class="text-danger" title="User is offline!"><i class="glyphicon glyphicon-record"></i> Offline!</span><br>
                        @endif
                    </div>
                </div>

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">
                                Profile
                            </span>

                            @if(auth()->check() && auth()->user()->id === $user->id)
                                <a href="{{ route('edit-profile') }}">Edit Profile</a>
                            @endif
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" width="1%">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date of Birth (age)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{ $user->profile->id }}</th>
                            <td>{{ $user->profile->name }}</td>
                            <td>{{ $user->profile->location }}</td>
                            <td>{{ $user->profile->date_of_birth->format('jS F Y') }} - ({{ $user->profile->age }})</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">
                                Details
                            </span>

                            @if(auth()->check() && auth()->user()->id === $user->id)
                                <a href="{{ route('edit-settings') }}">Edit Settings</a>
                            @endif
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col" width="1%">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    {{ (!$loop->last)?$role->name  . ',':$role->name }}
                                @endforeach
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection