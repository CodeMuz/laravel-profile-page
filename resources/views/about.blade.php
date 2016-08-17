@extends('layouts.master')

@section('title', 'Home')

@section('content')

        <!-- Header -->
<header>
    <div class="profile-wrapper">
        <img class="img-responsive" style="visibility:hidden" src="img/profile.png" alt="">
    </div>
</header>
<div class="panel panel-default about-panel">
    <div class="panel-body">
        <section class="about-text-block">

            <h1>About me</h1>

            <p>Hi I'm Murray, a tech enthusiast, explorer and music lover. I've lived and worked in London for several
                years and enjoy getting out in the vibrant city, wandering around the parks, museums and restaurants.
            </p>

            <p>I studied Computer Science and Mathematics at Bristol University and was awarded an MSc in Advanced
                Computing (Internet Technologies with Security)</p>

            <p>I'm passionate about all things digital and how they can be used to benefit society.</p>

            <p>When I'm not at the computer I love to explore the world and experience new cultures, see some of the
                places you might
                find me <a href="" onclick="return false;" data-toggle="modal" data-target="#myModal">here</a>.</p>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Travel Map</h4>
                        </div>
                        <div class="modal-body">
                            <iframe id="travel-map-iframe"
                                    src="https://www.google.com/maps/d/embed?mid=1JugdoW0l7ttbn98psy-84lkhVuQ"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <p>The last books I read were: the Darwin's Ghosts, Foundation Trilogy and the Jungle Book. Check out
                other the things I
                remember reading <a target="_blank"
                                    href="https://www.goodreads.com/user/show/43312599-murray-wynnes">here</a>.</p>

            <p>I've also recently started <a target="_blank"
                                             href="https://blog.murraywynnes.com">blogging</a> and you can find me over on <a target="_blank"
                                                                                                                              href="https://laracasts.com/@murrayw">laracasts</a> refining skills.</p>

            <p><a download href="http://bit.ly/murray_cv" class="btn btn-success" id="resume-dwnld"
                  role="button"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Download my resume</a></p>


            {{--<h1>Competences</h1>--}}

            {{--<div class="skill-bars">--}}

                {{--@foreach ($compentency as $skill)--}}
                    {{--<span>{{ $skill->name }}</span>--}}

                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-info" role="progressbar"--}}
                             {{--aria-valuenow="{{ $skill->value }}"--}}
                             {{--aria-valuemin="0"--}}
                             {{--aria-valuemax="100" style="width:{{ $skill->value }}%">--}}
                            {{--<span class="sr-only">{{ $skill->value }}% Complete</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}

            {{--</div>--}}

        </section>


        <section class="about-text-block">

            <h1>This website</h1>

            <p>This website was built using PHP, HTML5, SCSS and JQuery. For the framework I'm using <a
                        target="_blank" href="https://laravel.com/">Laravel 5.2</a> and for a responsive layout
                I'm using <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3.6</a>. The site is
                built and packaged with <a
                        target="_blank"
                        href="http://gulpjs.com/">Gulp</a> using <a href="https://laravel.com/docs/5.0/elixir"
                                                                    target="_blank">Elixer</a>.
            </p>

            <p>This app is hosted on <a target="_blank" href="https://www.heroku.com/">Heroku</a>
                and is under the Creative Commons License <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC
                    BY-NC-SA 4.0</a>.
            </p>

            <a target="_blank" id="github-btn" href="https://github.com/CodeMuz/laravel-profile-page"
               class="btn btn-primary"
               role="button"><i class="fa fa-github" aria-hidden="true"></i> View
                source on Github</a>
        </section>
    </div>
</div>

@endsection