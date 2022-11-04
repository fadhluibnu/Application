<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="Assets/logo.svg" alt="blogs logo" width="40" class="d-inline-block align-text-top">
            <span class="my-logo ms-2">IDK</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/"><i
                            class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'blog' ? 'active' : '' }}" href="/blog"><i
                            class="bi bi-blockquote-left"></i> Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'category' ? 'active' : '' }}" href="/category"><i
                            class="bi bi-x-diamond-fill"></i> Category</a>
                </li>
            </ul>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>