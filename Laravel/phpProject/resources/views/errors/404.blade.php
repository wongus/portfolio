@extends ('layouts.layout')
@section ('content')

    <div class="subject" style="padding-top: 30px;">
        <h1 class="subjectHeader text-center" style="font-size: 30vh; padding-top: 40px;">404</h1>
        <div class="aboutSubject">
            <div class="text-center">
                Oops, looks like we couldn't find what you were looking for
            </div>
            <div class="text-center" style="padding-top: 10px;">
                Maybe try one of these links instead..
            </div>
            <div class="container-fluid">
                <div class="row pt-5 justify-content-center">
                    <div class="col-auto error-link"><a href="/">Home</a></div>
                    <div class="col-auto error-link"><a href="/blog">Blog</a></div>
                    <div class="col-auto error-link"><a href="/dashboard">Dashboard</a></div>
                    <div class="col-auto error-link"><a href="/meetingoldfriends.html">Meeting old "friends"</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection
