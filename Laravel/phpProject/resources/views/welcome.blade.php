@extends ('layout')

@section ('contentHome')
    <title>wongus - portfolio</title>
    <div class="siteWrapper">
        <a id="top"></a>
        <div role="banner" class="header">
            <div id="logo">
                <h1><b>wongus</b></h1>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <ul class="nav-links">
                <li><a data-page="subject1" href="#top">Intro</a></li>
                <li><a data-page="subject2" href="#subject2">Who</a></li>
                <li><a data-page="subject3" href="#subject3">Info</a></li>
                <li><a data-page="subject4" href="#subject4">Blog</a></li>
                <li><a data-page="subject5" href="#subject5">Work</a></li>
                <div class="selected"></div>
            </ul>
        </div>
        <main>
            <div id="subject1">
                <section class="subject1">
                    <div class="subject">
                        <p class="greeting">Hello!</p>
                        <p class="greeting">I'm wongus.</p>
                    </div>
                </section>
            </div>
            <div id="subject2">
                <section class="subject2">
                    <div class="subject">
                        <h1 class="subjectHeader">Who?</h1>
                        <div class="aboutSubject">
                            <br>
                            <p>IT Student, music lover and designer at heart.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div id="subject3">
                <section class="subject3">
                    <div class="subject">
                        <h1 class="subjectHeader">Info</h1>
                        <br>
                        <br>
                        <a class="button" href="./dashboard" target="_blank">
                            <p>Open in new tab</p>
                        </a>
                        <div class="aboutSubject">
                            <br>
                            <p>Dashboard containing followed courses, earned grades and useful links</p>
                            <p class="invisText">(Je kunt fullscreen activeren door op f11 te drukken en je zoom pas je
                                aan
                                door ctrl
                                ingedrukt te houden en dan te scrollen.)</p>
                        </div>
                    </div>
                </section>
            </div>

            <div id="subject4">
                <section class="subject4">
                    <div class="subject">
                        <h1 class="subjectHeader">Blog</h1>
                        <br>
                        <br>
                        <a class="button" href="./blog" target="_blank">
                            <p>Open in new tab</p>
                        </a>
                        <div class="aboutSubject">
                            <br>
                            <p class="invisText">Let op: vergeet niet om fullscreen te activeren en je zoom aan te
                                passen.</p>
                            <p class="invisText">(Je kunt fullscreen activeren door op f11 te drukken en je zoom pas je
                                aan
                                door ctrl
                                ingedrukt te houden en dan te scrollen.)</p>
                        </div>
                    </div>
                </section>
            </div>

            <div id="subject5">
                <section class="subject5">
                    <div class="subject">
                        <h1 class="subjectHeader">Meeting Old "Friends"</h1>
                        <br>
                        <br>
                        <a class="button" href="./meetingoldfriends.html" target="_blank">
                            <p>Open in new tab</p>
                        </a>
                        <div class="aboutSubject">
                            <br>
                            <p>Meeting Old "Friends" is a game intended for children in the 6th grade of 'de Regenboog'
                                located in Middelburg, the Netherlands.</p>
                            <p>In this game the player learns how to treat a complete stranger online and gets a score
                                based
                                on how well they do.</p>
                            <br>
                            <br>
                            <p>Let op: vergeet niet om fullscreen te activeren en je zoom aan te passen.</p>
                            <p>(Je kunt fullscreen activeren door op f11 te drukken en je zoom pas je aan door ctrl
                                ingedrukt te houden en dan te scrollen.)</p>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script src="./siteAssets/app.js"></script>
    </div>
@endsection
