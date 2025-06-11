<div class="sidebar">
        <a href="#" class="brand justify-content-center" >i<span>Flexs</span></a>
        
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-home"></i> Dashboard
            </a>
            <a class="nav-link" href="{{ route('kategoris.index') }}">
                <i class="fas fa-tag"></i> Kategori
            </a>
            <a class="nav-link" href="{{ route('penyimpanans.index') }}">
                <i class="fas fa-database"></i> Penyimpanan
            </a>
            <a class="nav-link" href="{{ route('warnas.index') }}">
                <i class="fas fa-palette"></i> Warna
            </a>
            <a class="nav-link" href="{{ route('iphones.index') }}">
                <i class="fas fa-mobile"></i> Iphone
            </a>
            <a class="nav-link" href="{{ route('variasi-iphones.index') }}">
                <i class="fas fa-cog"></i> Variasi Iphone
            </a>
            <a class="nav-link" href="{{ route('admin.transaksi.index') }}">
                <i class="fas fa-exchange-alt"></i> Transaksi
            </a>
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i> User
            </a>
        </nav>
    </div>

    <div class="main-content">
        <div class="top-bar">
            <div class="d-flex justify-content-end w-100">
                <div class="user-menu">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-2"></i>
                            <span>Admin</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-user me-2"></i> Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background: var(--light-dark);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            height: 60px;          /* Match top-bar height */
            padding: 0 20px;
        }

        .brand span {
            color: var(--primary);
        }

        .nav-link {
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary);
            color: black;
        }

        .nav-link i {
            width: 25px;
        }

        .top-bar {
            background-color: #7ED321;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 1000;
            margin-bottom: 0 !important;
            height: 70px;          /* Explicitly set height */
            display: flex;
            align-items: center;
        }

        .user-menu .btn {
            padding: 0.5rem 1rem;
        }

        .user-menu .dropdown-toggle {
            width: 200px;                /* Set fixed width for admin button */
            padding: 0.5rem 1rem;
            justify-content: center; /* Align text to left */
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .user-menu .dropdown-menu {
            width: 200px;               /* Match width with admin button */
            margin-top: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            padding: 0.5rem 0;
        }

        .user-menu .dropdown-item {
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .user-menu .dropdown-item form {
            width: 100%;
        }

        .user-menu .dropdown-item button {
            width: 100%;
            text-align: left;
            padding: 0.5rem 1rem;
            background: none;
            border: none;
            display: flex;
            align-items: center;
        }

        .user-menu .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .user-menu .dropdown-item.text-danger:hover {
            background-color: #ffeaea;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownToggle = document.querySelector('.user-menu .dropdown-toggle');
            const dropdownMenu = document.querySelector('.user-menu .dropdown-menu');

            dropdownToggle.addEventListener('click', function (e) {
                e.preventDefault();
                dropdownMenu.classList.toggle('show');
            });

            document.addEventListener('click', function (e) {
                if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    </script>