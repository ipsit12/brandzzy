<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Sidebar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            transition: all 0.3s;
        }

        .sidebar .nav-link {
            color: #fff;
            margin: 10px 0;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            border-radius: 5px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .collapsed-sidebar {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .collapsed-content {
            margin-left: 0;
        }

        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 250px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .collapsed-btn {
            left: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <h4>WELCOME ADMIN</h4>
        <ul class="nav flex-column">
           
            <li class="nav-item">
                <a class="nav-link" href="{{route('user-role')}}">ADD ROLE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user-permission')}}">ADD PERMISSION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user')}}">ADD USER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>

    <div class="content" id="content">
        <button class="btn btn-primary toggle-btn" id="toggle-btn">☰</button>
       
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');
        const toggleBtn = document.getElementById('toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed-sidebar');
            content.classList.toggle('collapsed-content');
            toggleBtn.classList.toggle('collapsed-btn');
        });
    </script>
</body>
</html>
