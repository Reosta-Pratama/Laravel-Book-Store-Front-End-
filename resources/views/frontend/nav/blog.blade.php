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

        <section class="banner">
            <div class="container">
                <h1 class="title">Blog</h1>
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>Blog</span>
                </div>
            </div>
        </section>

        <section class="blog">
            <div class="container">
                <form action="" method="get" enctype="multipart/form-data">
                    @csrf
                    <div class="row filter">
                        <div class="col-3">
                            <div class="content-book">
                                <select class="form-select">
                                    <option selected="selected" disabled="disabled">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="content-book">
                                <select class="form-select">
                                    <option selected="selected" disabled="disabled">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="content-book">
                                <select class="form-select">
                                    <option selected="selected" disabled="disabled">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="content-book">
                                <button type="button" class="send btn btn-success">Success</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>

                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>
                                    
                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>
                                    
                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>

                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>
                                    
                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="content-blog">
                            <div class="image">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <div class="desc">
                                <div class="top">
                                    <span class="date">October 11, 2022</span>
                                    <span class="author">
                                        By admin</span>
                                </div>

                                <h3 class="title">Behind the Scenes with Author Victoria Aveyard</h3>

                                <div class="foot">
                                    <span class="category">In
                                        <a href="">Uncategorized</a>
                                    </span>
                                    
                                    <a class="btn" href="">
                                        <span>Read More</span>
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
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