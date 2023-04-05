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

        <section class="hero">
            <div class="container-fluid">
                <div class="owl-carousel owl-theme hero-carousel">
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="content-hero">
                                        <div class="image">
                                            <img src="{{ asset('assets/img/book/book-1.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="bk-image">
                                            <img src="{{ asset('assets/img/book/bk-book1.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content-hero">
                                        <div class="desc">
                                            <h3 class="title">Rich Dad Poor Dad</h3>
                                            <a href="" class="btn">
                                                <span>Get Now</span>
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="content-hero">
                                        <div class="image">
                                            <img src="{{ asset('assets/img/book/book-2.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="bk-image">
                                            <img src="{{ asset('assets/img/book/bk-book1.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content-hero">
                                        <div class="desc">
                                            <h3 class="title">Mask of Death</h3>
                                            <a href="" class="btn">
                                                <span>Get Now</span>
                                                <i class="icofont-rounded-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="info">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="content-info">
                            <div class="image purple">
                                <i class="icofont-book-alt"></i>
                            </div>

                            <div class="desc">
                                <span>
                                    15,254
                                </span>
                                <h3 class="title">
                                    total books
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="content-info">
                            <div class="image blue">
                                <i class="icofont-book-alt"></i>
                            </div>

                            <div class="desc">
                                <span>
                                    15,254
                                </span>
                                <h3 class="title">
                                    total categories
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="content-info">
                            <div class="image green">
                                <i class="icofont-book-alt"></i>
                            </div>

                            <div class="desc">
                                <span>
                                    15,254
                                </span>
                                <h3 class="title">
                                    total downloads
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="content-info">
                            <div class="image orange">
                                <i class="icofont-book-alt"></i>
                            </div>

                            <div class="desc">
                                <span>
                                    15,254
                                </span>
                                <h3 class="title">
                                    total authors
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">Bestselling books</h2>
                    </div>

                    <a href="" class="btn">
                        <span>View All</span>
                        <i class="icofont-rounded-right"></i>
                    </a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="owl-carousel owl-theme best-carousel">
                    <div class="item">
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

                    <div class="item">
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

                    <div class="item">
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

                    <div class="item">
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
        </section>

        <section class="book-side">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">Deals Of The Week</h2>
                    </div>

                    <a href="" class="btn">
                        <span>View All</span>
                        <i class="icofont-rounded-right"></i>
                    </a>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="content-side">
                            <div class="image-full">
                                <img src="{{ asset('assets/img/book/book-1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-side">
                            <ul>
                                <li>
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
                                </li>

                                <li>
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
                                </li>

                                <li>
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
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="carousel-side">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">What's In Trend
                        </h2>
                    </div>

                    <a href="" class="btn">
                        <span>View All</span>
                        <i class="icofont-rounded-right"></i>
                    </a>
                </div>

                <div class="owl-carousel owl-theme side-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-5">
                                <div class="content-side">
                                    <div class="image">
                                        <img
                                            src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                            alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-7">
                                <div class="content-side">
                                    <div class="desc">
                                        <h3 class="title">
                                            The Story of Success</h3>
                                        <span class="author">Arthur Gonzalez</span>
                                        <p>
                                            Quis est iste et aliquam similique facere. Corrupti et et laborum ab. Voluptatem
                                            ea possimus quaerat sit laborum sed non.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-5">
                                <div class="content-side">
                                    <div class="image">
                                        <img
                                            src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                            alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-7">
                                <div class="content-side">
                                    <div class="desc">
                                        <h3 class="title">
                                            The Story of Success</h3>
                                        <span class="author">Arthur Gonzalez</span>
                                        <p>
                                            Quis est iste et aliquam similique facere. Corrupti et et laborum ab. Voluptatem
                                            ea possimus quaerat sit laborum sed non.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row">
                            <div class="col-5">
                                <div class="content-side">
                                    <div class="image">
                                        <img
                                            src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                            alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>

                            <div class="col-7">
                                <div class="content-side">
                                    <div class="desc">
                                        <h3 class="title">
                                            The Story of Success</h3>
                                        <span class="author">Arthur Gonzalez</span>
                                        <p>
                                            Quis est iste et aliquam similique facere. Corrupti et et laborum ab. Voluptatem
                                            ea possimus quaerat sit laborum sed non.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">
                            Popular Books
                        </h2>
                    </div>

                    <a href="" class="btn">
                        <span>View All</span>
                        <i class="icofont-rounded-right"></i>
                    </a>
                </div>

                <div class="row">
                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

                    <div class="col-3 bor">
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

        <section class="genre">
            <div class="container">
                <div class="top">
                    <div class="desc">
                        <h2 class="title">
                            Categories
                        </h2>
                    </div>

                    <a href="" class="btn">
                        <span>View All</span>
                        <i class="icofont-rounded-right"></i>
                    </a>
                </div>

                <div class="owl-carousel owl-theme genre-carousel">
                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('assets/img/genre/genre-1.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h3 class="title">Sci-Fi</h3>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('assets/img/genre/genre-2.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h3 class="title">Sci-Fi</h3>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('assets/img/genre/genre-3.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h3 class="title">Sci-Fi</h3>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="{{ asset('assets/img/genre/genre-2.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h3 class="title">Sci-Fi</h3>
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
            $('.hero-carousel').owlCarousel({
                animateOut: 'fadeOut',
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                lazyLoad: true,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            })
        </script>

        <script>
            $('.best-carousel').owlCarousel({
                stagePadding: 100,
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                lazyLoad: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>

        <script>
            $('.side-carousel').owlCarousel({
                loop: false,
                margin: 50,
                center: true,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        </script>

        <script>
            $('.genre-carousel').owlCarousel({
                loop: true,
                nav: true,
                navText: [
                    "<i class='icofont-rounded-left'></i>", "<i class='icofont-rounded-right'></i>"
                ],
                dots: false,
                margin: 50,
                responsive: {
                    0: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        </script>
    </body>
</html>