@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Members (temporary page)</div>
                <table class="table">
                    @forelse($users as $user)
                        <tr>
                            <td style="width: 1%;">{{ $user->id }}</td>
                            <td><a href="{{ route('profile', ['username' => $user->username]) }}">{{ $user->username }} {{ ($user->profile->name)?"({$user->profile->name})":"" }}</a>  ({{ $user->profile->age }})</td>
                        </tr>
                    @empty
                        <tr>
                            <td>No registered members.</td>
                        </tr>
                    @endforelse
                </table>
            </div>

            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection