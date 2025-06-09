<style>
        :root {
            --primary: #7ED321;
            --dark: #000000;
            --light-dark: #141414;
            --text-light: rgba(255, 255, 255, 0.8);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--dark);
            color: white;
        }

        /* Sidebar Styles */
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
            margin-bottom: 40px;
            color: white;
            text-decoration: none;
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

        /* Main Content Styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .top-bar {
            background: var(--light-dark);
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        .search-box {
            background: var(--dark);
            border: 1px solid var(--primary);
            color: white;
        }

        .search-box:focus {
            background: var(--dark);
            color: white;
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(126, 211, 33, 0.25);
        }

        .card {
            background: var(--light-dark);
            border: none;
            border-radius: 12px;
        }

        .stat-card {
            padding: 20px;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: black;
        }

        .table {
            color: white;
        }

        .table thead th {
            border-bottom: 2px solid var(--primary);
            color: var(--primary);
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-active {
            background: var(--primary);
            color: black;
        }

        .status-pending {
            background: #ffc107;
            color: black;
        }

        .chart-container {
            background: var(--light-dark);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        /* User Menu Styles */
        .user-menu .dropdown-toggle {
            background: none;
            border: none;
            padding: 0.5rem;
        }

        .user-menu .dropdown-toggle:focus {
            box-shadow: none;
        }

        .user-menu .dropdown-menu {
            min-width: 200px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .user-menu .dropdown-item {
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
        }

        .user-menu .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .user-menu .dropdown-item.text-danger:hover {
            background-color: #ffd7d7;
        }
    </style>