@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">
                               <strong>Larastart [2.0]</strong>
                            </span>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p>After a number of projects, I came to notice I was doing a lot of the same for each project.</p>
                        <p>I decided that I'd create a scaffolding so that all I had to do was pull the scaffolding and everything was done for me.</p>
                        <p>The scaffolding pulls in many packages that I use the most, as well as some basic functionality for potential sites users.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="level">
                            <span class="flex">
                                <strong>What's included</strong>
                            </span>

                            <span class="packages_count"></span>&nbsp;packages
                        </div>
                    </div>

                    <div class="list-group packages">
                        <a href="https://github.com/barryvdh/laravel-debugbar" class="list-group-item" target="_blank">barryvdh/laravel-debugbar</a>
                        <a href="https://github.com/barryvdh/laravel-dompdf" class="list-group-item" target="_blank">barryvdh/laravel-dompdf</a>
                        <a href="https://github.com/chumper/zipper" class="list-group-item" target="_blank">chumper/zipper</a>
                        <a href="https://github.com/GrahamCampbell/Laravel-Exceptions" class="list-group-item" target="_blank">GrahamCampbell/Laravel-Exceptions</a>
                        <a href="https://github.com/GrahamCampbell/Laravel-Manager" class="list-group-item" target="_blank">GrahamCampbell/Laravel-Manager</a>
                        <a href="https://github.com/GrahamCampbell/Laravel-Markdown" class="list-group-item" target="_blank">GrahamCampbell/Laravel-Markdown</a>
                        <a href="https://github.com/intervention/image" class="list-group-item" target="_blank">intervention/image</a>
                        <a href="https://github.com/laracasts/Laravel-5-Generators-Extended" class="list-group-item" target="_blank">laracasts/Laravel-5-Generators-Extended</a>
                        <a href="https://github.com/laravelcollective/html" class="list-group-item" target="_blank">laravelcollective/html</a>
                        <a href="https://github.com/Maatwebsite/Laravel-Excel" class="list-group-item" target="_blank">Maatwebsite/Laravel-Excel</a>
                        <a href="https://github.com/spatie/laravel-permission" class="list-group-item" target="_blank">spatie/laravel-permission</a>
                        <a href="https://github.com/toin0u/geocoder-laravel" class="list-group-item" target="_blank">toin0u/geocoder-laravel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- Modal -->
    <form method="post" action="{{ route('request') }}" class="form-horizontal">
        {{ csrf_field() }}

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                    </div>
                    <div class="modal-body" style="!important; padding: 30px; !important;padding-bottom: 0px; !important;padding-top:10px;">
                        <div class="form-group">
                            <label for="type" class="control-label">Request Type:</label>
                            <select name="type" class="form-control" id="type">
                                <option value="include-package">Include Package</option>
                                <option value="new-feature">New Feature</option>
                                <option value="bug-fix">Bug Fix</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type" class="control-label">Your Email Address:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea class="form-control" name="body" required></textarea>
                            <div id="info" style="display: none;">
                                <div class="alert alert-info">
                                    <strong>Please:</strong> Give me as much information as you can.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Make Request</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            // Update packages count
            var packages_count = $('.packages a').length;
            $('.packages_count').html(packages_count);

            // Remove border-bottom on last link
            $('.packages a:last').css('border-bottom','none');

            // Request Package
            $('#type').change(function () {
                req = $(this).val();

                if(req === "bug-fix")
                {
                    $('#info').show();
                }

                $('.info').hide();
            });
        });
    </script>
@endsection
