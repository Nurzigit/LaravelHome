
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-2 mb-4 mt-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-2 mt-2 mx-5">NG_IT</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-3 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('home') }}">Home</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href={{ route('about') }}>About</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href={{ route('contact') }}>Contact</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href={{ route('contact-data') }}>Message</a>


                    <a style="color: black" id="navbarDropdown" class="nav-link dropdown-toggle btn m-auto mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>


        </nav>
    </div>


</header>
