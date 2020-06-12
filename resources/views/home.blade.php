@extends ('layouts.layout')

@section ('content')
    <title>wongus - portfolio</title>
    <nav class="headernav fixed-top" id="header" style="height: 15vh;">
        <div class="container-fluid position-absolute">
            <div class="row d-flex justify-content-end">
                @guest
                    <ul class="nav-links m-0 d-flex">
                        <li class="m-2">
                            <a style="color: #D1CDC7;" href="/login">Login</a>
                        </li>
                        <li class="mt-2">
                            <p style="color: #D1CDC7;">|</p>
                        </li>
                        <li class="m-2">
                            <a style="color: #D1CDC7;" href="/register">Register</a>
                        </li>
                    </ul>
                @else
                    <ul class="nav-links m-0 d-flex">
                        <li class="m-3">
                            <div class="dropdown">
                                <a class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown"
                                   aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fas fa-child"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a href="/logout" class="dropdown-item" type="button"><i class="fas fa-sign-out-alt" style="color:#e55f56"></i> Log out</a>
                                    @can('manage-users')
                                        <a href="admin/users" class="dropdown-item" type="button"><i class="fas fa-users-cog" style="color:#D1CDC7"></i> Manage users</a>
                                    @endcan
                                </div>
                            </div>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
        <div class="pb-2 text-center">
            <b id="logo" style="font-size: 6.5vh;">wongus</b>
        </div>
        <ul class="nav-links d-flex justify-content-between" style="padding-left: 0;">
            <li><a data-page="subject1" href="#subject1">Intro</a></li>
            <li><a data-page="subject2" href="#subject2">Who</a></li>
            <li><a data-page="subject3" href="#subject3">Info</a></li>
            <li><a data-page="subject4" href="#subject4">Blog</a></li>
            <li><a data-page="subject5" href="#subject5">Work</a></li>
            <div class="selected"></div>
        </ul>
    </nav>
    <div class="container-fluid text-center">
        <section class="subject1" id="subject1">
            <p class="subjectHeader font-weight-light" style="padding-top: 20vh; font-size: 20vh;">Hello!</p>
            <p class="subjectHeader pt-0 font-weight-light" style="font-size: 20vh;">I'm wongus.</p>
        </section>
        <section class="subject2" id="subject2">
            <h1 class="subjectHeader">Who?</h1>
            <div class="aboutSubject text-center">
                <br>
                <p>IT Student, music lover and designer at heart.</p>
            </div>
        </section>
        <section class="subject3" id="subject3">
            <h1 class="subjectHeader">Info</h1>
            <br>
            <a class="btn button" href="/dashboard">
                <p>View courses</p>
            </a>
            <br>
            <div class="aboutSubject text-center">
                <p>Dashboard containing followed courses, earned grades and useful links</p>
            </div>
        </section>
        <section class="subject4" id="subject4">
            <h1 class="subjectHeader">Blog</h1>
            <br>
            <a class="btn button" href="/blog">
                <p>View articles</p>
            </a>
        </section>
        <section class="subject5" id="subject5">
            <h1 class="subjectHeader">Meeting Old "Friends"</h1>
            <br>
            <a class="btn button" href="/Meetingoldfriends/meetingoldfriends.html" target="_blank">
                <p>Open in new tab</p>
            </a>
            <div class="aboutSubject text-center">
                <br>
                <p>Meeting Old "Friends" is a game intended for children in the 6th grade of 'de Regenboog'
                    located in Middelburg, the Netherlands.</p>
                <p>In this game the player learns how to act around strangers online and gets a score
                    based
                    on how well they do.</p>
                <br>
                <p>Let op: vergeet niet om fullscreen te activeren en je zoom aan te passen.</p>
                <p>(Je kunt fullscreen activeren door op f11 te drukken en je zoom pas je aan door ctrl
                    ingedrukt te houden en dan te scrollen.)</p>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script src="./siteAssets/app.js"></script>
    </div>
@endsection

