            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Your account:</div>
                    <div class="list-group">
                        <a href="{{ route('edit-profile') }}" class="list-group-item{{ (url()->current() === route('edit-profile'))?" active":""  }}">Edit Profile</a>
                        <a href="{{ route('edit-settings') }}" class="list-group-item{{ (url()->current() === route('edit-settings'))?" active":""  }}">Edit Settings</a>
                        <a href="{{ route('edit-password') }}" class="list-group-item{{ (url()->current() === route('edit-password'))?" active":""  }}">Edit Password</a>
                    </div>
                </div>

                <a href="{{ route('deactivate-page') }}" class="btn btn-danger btn-block">Deactivate Account</a>
            </div>

