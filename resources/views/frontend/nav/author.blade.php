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
        <link
            rel="stylesheet"
            href="{{ asset('assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">

        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/frontend.css') }}">
    </head>
    <body>
        @include('frontend.body.header') @include('frontend.body.nav')

        <section class="banner">
            <div class="container">
                <h1 class="title">All Authors</h1>
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>Authors</span>
                </div>
            </div>
        </section>

        <section class="most-download">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">Most Download</h2>
                    </div>
                </div>

                <div class="owl-carousel owl-theme most-carousel">
                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

                    <div class="item bor">
                        <div class="content-download">
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

        <section class="authors">
            <div class="container">
                <div class="filter">
                    <div class="radio">
                        <input
                            type="checkbox"
                            class="btn-check"
                            id="btn-check"
                            autocomplete="off"
                            onchange="location = this.value;">
                        <label class="btn active" for="btn-check">All</label>
                    </div>
                    <div class="radio">
                        <input
                            type="checkbox"
                            class="btn-check"
                            id="btn-check"
                            autocomplete="off"
                            onchange="location = this.value;">
                        <label class="btn" for="btn-check">A</label>
                    </div>
                    <div class="radio">
                        <input
                            type="checkbox"
                            class="btn-check"
                            id="btn-check"
                            autocomplete="off"
                            onchange="location = this.value;">
                        <label class="btn" for="btn-check">B</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="content-author">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/author/author1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>

                            <div class="h2 title">
                                Warren Graham
                            </div>

                            <span>1 published books</span>
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
        <script
            src="{{ asset('assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

        <!-- Main JS -->
        <script src="{{ asset('assets/js/frontend.js') }}"></script>

        <script>
            $('.most-carousel').owlCarousel({
                loop: true,
                stagePadding: 50,
                margin: 0,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
    </body>
</html>