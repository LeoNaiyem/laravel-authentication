<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS for Design -->
    <style>
        /* Global body and layout settings */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2C3E50;
            color: #fff;
            padding-top: 30px;
            transition: 0.3s;
            z-index: 100;
        }

        .sidebar a {
            color: #ecf0f1;
            padding: 12px 20px;
            text-decoration: none;
            display: block;
            font-size: 18px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495E;
            border-radius: 5px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
            font-size: 22px;
        }

        .sidebar .logo a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar .active {
            background-color: #2980b9;
        }

        /* Content Styling */
        .content {
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
            color: #2C3E50;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #fff;
            color: #2C3E50;
            font-weight: bold;
            font-size: 18px;
        }

        .card-body {
            background-color: #fff;
            padding: 20px;
        }

        .card-body p {
            font-size: 22px;
            color: #2980b9;
        }

        .icon-box {
            font-size: 30px;
            color: #2980b9;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Media Query for responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                width: 60px;
                padding-top: 20px;
            }

            .sidebar a {
                padding: 10px;
                text-align: center;
            }

            .sidebar a i {
                display: block;
                font-size: 20px;
            }

            .content {
                margin-left: 0;
            }

            .navbar-brand {
                font-size: 18px;
            }

            .card-body {
                padding: 15px;
            }

            .card-header {
                font-size: 16px;
            }
        }

        /* Sidebar toggle for small screen */
        .sidebar-toggle {
            font-size: 30px;
            color: #2C3E50;
            display: none;
            margin-left: 20px;
        }

        @media (max-width: 768px) {
            .sidebar-toggle {
                display: block;
            }

            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0;
            }

            .sidebar.active {
                display: block;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <a href="#">Dashboard</a>
        </div>
        <a href="{{ route('dashboard') }}" class="active"><i class="fas fa-tachometer-alt icon-box"></i> Dashboard</a>
        <a href="#"><i class="fas fa-chart-line icon-box"></i> Analytics</a>
        <a href="#"><i class="fas fa-users icon-box"></i> Users</a>
        <a href="#"><i class="fas fa-cogs icon-box"></i> Settings</a>
        <a href="#"><i class="fas fa-file-alt icon-box"></i> Reports</a>
        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt icon-box"></i> Log Out</a>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="sidebar-toggle" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">Company Dashboard</a>
        </nav>

        <!-- Main content grid -->
        <div class="container-fluid">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Users
                        </div>
                        <div class="card-body">
                            <i class="fas fa-users icon-box"></i>
                            <p>1,250</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Sales Revenue
                        </div>
                        <div class="card-body">
                            <i class="fas fa-dollar-sign icon-box"></i>
                            <p>$7,000</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            New Signups
                        </div>
                        <div class="card-body">
                            <i class="fas fa-user-plus icon-box"></i>
                            <p>320</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Card 4 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Website Traffic
                        </div>
                        <div class="card-body">
                            <i class="fas fa-chart-bar icon-box"></i>
                            <p>150,000 Visitors</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Revenue by Region
                        </div>
                        <div class="card-body">
                            <p>North America: $4,000</p>
                            <p>Europe: $2,000</p>
                            <p>Asia: $1,000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer">
                <p>&copy; 2025 Company Name. All Rights Reserved.</p>
            </footer>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery, Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS for Sidebar Toggle -->
    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
        }
    </script>
</body>

</html>