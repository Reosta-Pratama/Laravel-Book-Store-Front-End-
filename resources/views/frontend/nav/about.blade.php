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
                <h1 class="title">About Us</h1>
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>About Us</span>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="top">
                    <div class="image">
                        <img src="{{ asset('assets/img/logo/about.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="desc">
                        <p>
                            We are the premier book retailing chain in the Southeastern United States with
                            more than 260 Book stores in 32 states.
                        </p>
                    </div>
                </div>

                <div class="cover">
                    <img src="{{ asset('assets/img/logo/cover.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="container mx">
                <h2 class="title">
                    Our Story
                </h2>

                <div class="row">
                    <div class="col-6">
                        <div class="content-about">
                            <h2 class="heading">
                                RETAIL STORES
                            </h2>

                            <p class="desc">
                                Mauris tempus erat laoreet turpis lobortis, eu tincidunt erat fermentum. Aliquam
                                non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin sed
                                ultrices erat.
                            </p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="content-about">
                            <h2 class="heading">
                                E-COMMERCE AND INTERNET SERVICES
                            </h2>

                            <p class="desc">
                                Pellentesque sodales augue eget ultricies ultricies. Cum sociis natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur
                                sagittis ultrices condimentum.
                            </p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="content-about">
                            <h2 class="heading">
                                WHOLESALE DISTRIBUTION
                            </h2>

                            <p class="desc">
                                Praesent varius ultrices massa at faucibus. Aenean dignissim, orci sed faucibus
                                pharetra, dui mi dignissim tortor, sit amet condimentum mi ligula sit amet
                                augue.
                            </p>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="content-about">
                            <p class="desc">
                                Aliquam non tincidunt urna. Integer tincidunt nec nisl vitae ullamcorper. Proin
                                sed ultrices erat. Praesent varius ultrices massa at faucibus. Aenean dignissim,
                                orci sed faucibus pharetra, dui mi dignissim tortor, sit amet condimentum mi
                                ligula sit amet augue. Pellentesque vitae eros eget enim mollis placerat.
                            </p>
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