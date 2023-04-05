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
                <h1 class="title">Favorites</h1>
                <div class="breadcumb">
                    <a href="{{ route('frontend') }}" class="btn">Home</a>
                    <i class="icofont-arrow-right"></i>
                    <span>Favorites</span>
                </div>
            </div>
        </section>

        <section class="allfavorites">
            <div class="container">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="remove">
                                <i class="icofont-ui-delete"></i>
                            </td>

                            <td class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </td>

                            <td class="desc">
                                <h3 class="title">
                                    A Crown of Petals and Ice</h3>
                                <span>Warren Graham
                                </span>
                            </td>

                            <td class="action">
                                <button type="button" class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="remove">
                                <i class="icofont-ui-delete"></i>
                            </td>

                            <td class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </td>

                            <td class="desc">
                                <h3 class="title">
                                    A Crown of Petals and Ice</h3>
                                <span>Warren Graham
                                </span>
                            </td>

                            <td class="action">
                                <button type="button" class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="remove">
                                <i class="icofont-ui-delete"></i>
                            </td>

                            <td class="image">
                                <img
                                    src="{{ asset('assets/img/cover.book/cover-1.jpg') }}"
                                    alt=""
                                    class="img-fluid">
                            </td>

                            <td class="desc">
                                <h3 class="title">
                                    A Crown of Petals and Ice</h3>
                                <span>Warren Graham
                                </span>
                            </td>

                            <td class="action">
                                <button type="button" class="btn btn-success">Download</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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