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

        <section class="detailbook">
            <div class="container">
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>About Us</span>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="content-detailbook">
                            <div class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="content-detailbook">
                            <div class="top">
                                <h2 class="name">Book Store</h2>

                                <div class="links">
                                    <a href="" class="btn prev">
                                        <i class="icofont-rounded-left"></i>
                                        <span>prev</span>
                                    </a>

                                    <a href="" class="btn next">
                                        <span>next</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>

                            <h2 class="title">The Girl and the Last Sleepover</h2>

                            <ul class="sub">
                                <li>
                                    <span>Author:</span>
                                    <a href="">Suzanne Casey</a>
                                </li>
                                <li>
                                    <span>Author:</span>
                                    <a href="">Suzanne Casey</a>
                                </li>
                                <li>
                                    <span>Author:</span>
                                    <a href="">Suzanne Casey</a>
                                </li>
                            </ul>

                            <p class="desc">
                                Aut eligendi voluptatem adipisci unde iusto. Vitae aut voluptas velit beatae at
                                nam maiores. Sunt dolorem cumque qui sit in esse quia occaecati. Eos et vero
                                optio eaque nemo. Qui omnis nihil accusantium dolorum molestiae. Assumenda rem
                                et non. Aut fugiat fugiat voluptatum vero vitae error. Sequi fugit vitae dolor
                                velit. Nemo et sapiente repudiandae. Quam dolorum accusantium odio amet. Commodi
                                consequatur distinctio voluptas repellat doloribus quia. Consectetur ad
                                similique atque voluptas ut. Earum vel delectus in facilis. Voluptatum minus
                                nobis cum temporibus perferendis est ut. Sed aut saepe ipsum animi asperiores.
                                Nihil nihil repudiandae adipisci quis ea voluptatum dicta.
                            </p>

                            <div class="button">
                                <a href="" class="btn download">
                                    <span>Download</span></a>
                                <a href="" class="btn">
                                    <i class="icofont-heart"></i>
                                    <span>Add to wishlist</span>
                                </a>
                            </div>

                            <ul class="categories">
                                <li>
                                    <span>Categories:</span>
                                    <a href="">Activity Books</a>
                                </li>
                            </ul>

                            <ul class="tags">
                                <li>
                                    <span>tags:</span>
                                </li>
                                <li>
                                    <a href="">Books</a>
                                    <a href="">Books</a>
                                    <a href="">Books</a>
                                    <a href="">Books</a>
                                    <a href="">Books</a>
                                </li>
                            </ul>

                            <ul class="medsos">
                                <li>
                                    <a href="" class="btn fb">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="btn tw">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="btn wa">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                            </ul>
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
                            Related Books
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