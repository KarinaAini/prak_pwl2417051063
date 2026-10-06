<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH"
        crossorigin="anonymous">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .page-content {
            min-height: 75vh;
        }

        .form-card,
        .list-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .form-card {
            max-width: 550px;
            margin: 50px auto;
            padding: 35px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h1 {
            font-weight: bold;
        }

        .form-header p {
            color: #777;
        }

        .list-card {
            margin: 40px auto;
            padding: 30px;
        }

        .list-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .list-header h1 {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .list-header p {
            color: #777;
            margin: 0;
        }

        .id-badge,
        .class-badge {
            padding: 5px 10px;
            border-radius: 20px;
            background-color: #eee;
            font-size: 13px;
            font-weight: bold;
        }

        .class-badge {
            background-color: #e7f1ff;
            color: #0d6efd;
        }

        .footer {
            background-color: #212529;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/user') }}">
                User Management
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ url('/user') }}">
                    Daftar User
                </a>

                <a class="nav-link" href="{{ url('/user/create') }}">
                    Tambah User
                </a>
            </div>
        </div>
    </nav>


    <main class="page-content">
        @yield('content')
    </main>


    <footer class="footer">
        <p>&copy; 2026 User Management. All Rights Reserved.</p>
    </footer>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>
</html>