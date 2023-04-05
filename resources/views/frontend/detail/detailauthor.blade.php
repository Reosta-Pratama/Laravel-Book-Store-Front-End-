<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!-- Favicons -->
        <link href="" rel="icon">
        <link href="" rel="apple-touch-icon">

        <!-- Font -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Sora:thin,extra-light,light,100,200,300,400,500,600,700,800">

        <!-- Vendor CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/icofont/icofont.min.css') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    </head>
    <body>
        @include('frontend.body.header') @include('frontend.body.nav')

        <section class="detailauthor">
            <div class="container">
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>About Us</span>
                </div>

                <div class="row">
                    <div class="col-3 pad">
                        <div class="content-detailauthor">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-9 pad">
                        <div class="content-detailauthor">
                            <h1 class="title">
                                Tricia Allison
                            </h1>

                            <p class="desc">
                                Janice Hallett is a British author, screenwriter and an award-winning
                                journalist, best known for her phenomenally successful debut thriller The
                                Appeal. Before her breakout entry into the realms of crime fiction, Janice
                                Hallett worked as a journalist, magazine editor and speech writer for the
                                Cabinet Office and Home Office, as well as writing for the stage and screen. Her
                                first feature film Retreat (co-written and directed by Carl Tibbetts) came out
                                in 2011, and she won the award for Best New Screenplay at the 2014 British
                                Independent Film Festival.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="related">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">
                            Books By Tricia Allison
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 bor">
                        <div class="content-popular">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="desc">
                                <h3 class="title">
                                    The Story of Success</h3>
                                <span class="author">Arthur Gonzalez</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.body.footer')

        <!-- Vendor JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/frontend.js') }}"></script>
    </body>
</html>