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
        @include('frontend.body.header')

        <section class="login">
            <div class="container">
                <h1 class="title">Sign Up</h1>

                <form action="" method="get" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your fullname...">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter your email address...">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Enter your password...">
                    </div>

                    <div class="mb-5">
                        <label class="form-label">Confim Password</label>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Enter your password...">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <a href="" class="btn">
                    <span>Sign up with Google</span>
                </a>
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