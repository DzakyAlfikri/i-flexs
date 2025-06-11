<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="navhighlight">i</span>Flexs</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}" href="{{ route('product') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bantuan</a>
                </li>
                @auth
                    <!-- Mobile only menu items -->
                    <li class="nav-item d-lg-none">
                        <a href="{{ route('profile.edit') }}" class="nav-link">Edit Profil</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <form method="POST" action="{{ route('logout') }}" class="nav-link">
                            @csrf
                            <button type="submit" class="btn-logout">Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
            
            <!-- Desktop only profile menu -->
            <ul class="nav-profil d-none d-lg-block">
                <li class="nav-item">
                    @auth
                        <div class="user-menu">
                            <button class="login-btn" onclick="toggleDropdown()">
                                {{ Auth::user()->name }}
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown" id="userDropdown">
                                <li><a href="{{ route('profile.show') }}">Profil Saya</a></li>
                                <li><a href="{{ route('profile.edit') }}">Edit Profil</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="login-btn">
                            Masuk <i class="fas fa-sign-in-alt"></i>
                        </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the navbar toggler button and collapse element
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');

        // Toggle menu on hamburger click
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
            this.setAttribute('aria-expanded', 
                this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
            );
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navbarToggler.contains(e.target) && 
                !navbarCollapse.contains(e.target) && 
                navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });

        // Function for user dropdown
        window.toggleDropdown = function() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        };
    });
</script>