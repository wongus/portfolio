@extends ('layouts.layout')
@section ('content')

    <div class="subject" style="padding-top: 30px;">
        <h1 class="subjectHeader text-center" style="font-size: 30vh; padding-top: 40px;">500</h1>
        <div class="aboutSubject">
            <div class="text-center">
                Oops, looks like our servers had some trouble processing your request
            </div>
            <div class="text-center" style="padding-top: 10px;">
                Maybe try these links instead..
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
