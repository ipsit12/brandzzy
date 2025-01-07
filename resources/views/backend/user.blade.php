@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit and View User Details</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: auto;
            padding-top: 20px;
        }

        /* Form container styling */
        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            border: 1px solid #ddd;
        }

        /* Form title styling */
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Input field styling */
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Submit button styling */
        .form-container button {
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        /* Table container styling */
        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            width: 100%;
            margin-top: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th, .table-container td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-container th {
            background-color: #f4f4f9;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Submit User Details</h2>
        <form action="/userpost" method="POST">
            @csrf
            <label><b>Name:</b></label>
            <input type="text" name="name" placeholder="Enter your name" required>
            <label><b>Email:</b></label>
            <input type="email" name="email" placeholder="Enter your email" required>
            <label><b>Mobile Number:</b></label>
            <input type="text" name="phone" placeholder="Enter your phone" required>
            <label><b>Password:</b></label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <label><b>Address:</b></label>
            <input type="text" name="address" placeholder="Enter your address" required>
            <label><b>Role:</b></label>
            <select name="role" class="form-control">
                @foreach($roles as $role)
                <option value="{{$role->role}}">{{$role->role}}</option>
                @endforeach
            </select>
            <label><b>Permission:</b></label>
            <select name="permission" class="form-control">
                @foreach($permissions as $permission)
                <option value="{{$permission->permission}}">{{$permission->permission}}</option>
                @endforeach
            </select>
            <button type="submit">Submit</button> 
            <button type="button" onclick="window.location.reload()">Show Details</button>
        </form>
    </div>

    <!-- Table to display user data -->
    <div class="table-container">
        <h2>Submitted User Details</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Permission</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($admins as $index => $admin)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->address }}</td>
                    <td>{{ $admin->role }}</td>
                    <td>{{ $admin->permission }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
