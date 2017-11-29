

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Deactivate Account</div>
            <div class="panel-body">
                <p><strong>Before you go...</strong></p>

                <p>Remember that you are welcome back <em>any</em> time.</p>
                <p>Whilst your account is deactivated people will not be able to engage with your account.</p>
                <p>To reactivate your account simply log in and your account will be fully restored.</p>
            </div>
        </div>

        <div class="col-md-2 col-md-offset-5">
            <form method="post" action="{{ route('deactivate-profile') }}" id="deactivate">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-block btn-danger">Deactivate Account</button>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $("#deactivate").submit(function() {
            r = confirm('Are you sure you wish to deactivate your account?');

            if(r) {
                return true;
            }

            history.go(-1);
            return false;
        });
    </script>
@endsection