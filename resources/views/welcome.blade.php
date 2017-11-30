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
                        <p>After a number of projects, I came to notice I was doing a lot of the same for each
                            project.</p>
                        <p>I decided that I'd create a scaffolding so that all I had to do was pull the scaffolding and
                            everything was done for me.</p>
                        <p>The scaffolding pulls in many packages that I use the most, as well as some basic
                            functionality for potential sites users.</p>
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
                        <a href="https://github.com/GrahamCampbell/Laravel-Exceptions" class="list-group-item"
                           target="_blank">GrahamCampbell/Laravel-Exceptions</a>
                        <a href="https://github.com/GrahamCampbell/Laravel-Manager" class="list-group-item"
                           target="_blank">GrahamCampbell/Laravel-Manager</a>
                        <a href="https://github.com/GrahamCampbell/Laravel-Markdown" class="list-group-item"
                           target="_blank">GrahamCampbell/Laravel-Markdown</a>
                        <a href="https://github.com/intervention/image" class="list-group-item" target="_blank">intervention/image</a>
                        <a href="https://github.com/laracasts/Laravel-5-Generators-Extended" class="list-group-item"
                           target="_blank">laracasts/Laravel-5-Generators-Extended</a>
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
    <script>
        $(document).ready(function () {
            // Update packages count
            var packages_count = $('.packages a').length;
            $('.packages_count').html(packages_count);

            // Remove border-bottom on last link
            $('.packages a:last').css('border-bottom', 'none');
        });
    </script>
@endsection
