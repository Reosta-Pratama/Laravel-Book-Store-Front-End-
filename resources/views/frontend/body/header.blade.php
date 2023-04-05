<header class="header">
    <div class="container">
        <div class="image">
            <img src="{{ asset('assets/img/logo/logo-1.svg') }}" alt="" class="img-fluid"></div>

            <form class="box-search" action="" method="get" enctype="multipart/form-data">
                @csrf
                <div class="select">
                    <select class="form-select" aria-label="Default select example">
                        <option selected="selected" disabled="disabled">Categories</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="search">
                    <input type="text" class="form-control" placeholder="Search Product...">
                        <button type="submit" class="btn btn-primary">
                            <i class="icofont-search"></i>
                        </button>
                    </div>
                </form>

                <div class="other">
                    <ul>
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="icofont-user-alt-6"></i>
                            </a>
                        </li>
                        <li>
                            <a class="position-relative" href="{{ route('frontend.favorites') }}">
                                <i class="icofont-heart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    9+
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        </li>
                    </ul>

                    {{-- <a href="" class="btn">Login</a> --}}
                </div>
            </div>
        </header>