<nav class="navbar ">
    <div class="container">
        <ul>
            <li class="nav-item">
                <a href="{{ route('frontend') }}" class="nav-link">
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('frontend.books') }}" class="nav-link">
                    <span>Books</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('frontend.authors') }}" class="nav-link">
                    <span>Authors</span>
                </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('frontend.blog') }}" class="nav-link">
                    <span>Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('frontend.about') }}" class="nav-link">
                    <span>About Us</span>
                </a>
            </li>
        </ul>
    </div>
</nav>