@extends('layouts.master')

@section('title', 'Work')

@section('content')

    <div class="panel panel-default work-panel">
        <div class="panel-body">

            <h1>Professional work and experience</h1>

            <h2>Captive Health</h2>
            <span class="date">2013 - 2016</span>

            <p>
                Since 2013 I've helped to build and maintain applications for Captive Health which are used within the
                NHS around the UK. Some of the features we developed were responsive surveys, automatic reports
                and dynamic mapping tools. The platform is being used effectively in many hospitals and includes many
                web applications
                connecting to respective native mobile apps.
            </p>

            <h2>Loqiva</h2>
            <span class="date">January 2016 - April 2016</span>

            <p>Developed a content management system for future smart cities called
                <i>Loqiva</i>.
                The features of the mobile app include surveys, payment channels, rewards, notifications and maps. All
                content is served
                to mobile application platforms via an API consumed by both android
                and iOS devices... <a href="work/loqiva">Read More</a>

            </p>

            <h2>Malaria Mapper</h2>
            <span class="date">July, 2014</span>

            <p>Helped researchers at World Health Organisation with displaying malaria data visually so as to make
                better
                conclusions about the results and the resources needed to mitigate the spread of the tropical disease,
                view <a href="https://github.com/CodeMuz/mapgen" target="_blank">source</a> on GitHub.</p>

            <h1>Personal projects</h1>

            <h2>Festival Joy</h2>
            <span class="date">2015 - current</span>

            <p>After searching for the next music festivals coming up around europe I wasn't satisfied with the
                user
                experience offered by other websites, so using AngularJS and Google Maps my brother and I built <a
                        target="_blank" href="http://festivaljoy.com/">FestivalJoy</a>. In summary it's a responsive
                mapping tool which allows you to filter through marker
                objects on a map and get a better taste of where and when awesome things are happening... <a
                        href="work/festivaljoy">Read More</a>

            <h2>Advent of code</h2>
            <span class="date">December 2015</span>

            <p>Over christmas I decided to get involed with Eric Wastl's Advent of Code game as an excuse to learn some
                new
                languages, particularly python. Its very addictive to find all the ways to solve a problem, so far I've
                completed 19/25; you can view my solutions <a
                        href="https://github.com/CodeMuz/adventofcode"
                        target="_blank">here</a> and I've
                contributed some of my better solutions to the public <a
                        href="https://github.com/ChrisPenner/Advent-Of-Code-Polyglot"
                        target="_blank">repository</a>.</p>

            <h2>Twitter Fever</h2>
            <span class="date">September 2015</span>

            <p>A Ruby on Rails app which allows you to search for tweets on a users twitter account and displays the
                most
                recent ones containing that word. I used Justin Beiber as a use case and the result was that searching
                for
                the word 'love' quickly depleated your twitter API allowance, view source <a
                        href="https://github.com/CodeMuz/twitter-api-beiber" target="_blank">here</a>.</p>

            <h2>Studyswap</h2>
            <span class="date">November 2012 - April 2013</span>

            <p>A final year project at Bristol University, I worked with other students to build a social network for
                academics to be able to share and discuss their research. We chose Codeigniter framework for our
                application and also made use
                of
                Amazons web services (S3, Elastic Beanstalk, RDS). View my <a href="http://bit.ly/mw_asn2012"
                                                                              target="_blank">thesis and findings (8.2
                    MB)</a></p>

        </div>
    </div>

@endsection