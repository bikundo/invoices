<footer class="main-footer d-flex p-2 px-3 bg-white border-top">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
        </li>
    </ul>
    <span class="copyright ml-auto my-auto mr-2">Copyright © {!! today()->format('Y') !!}
             {!! config('app.name', 'Laravel') !!}
            </span>
</footer>