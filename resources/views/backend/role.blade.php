@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Roles</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            gap: 20px;
           
            justify-content: center;
            align-items: flex-start;
        }

        /* Form container styling */
        .form-container {
            background: #fff;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 300px;
            border: 1px solid #ddd;
        }

        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #007BFF;
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
            width: 50%;
            border: 1px solid #ddd;
        }

        .table-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f4f4f9;
        }

        .action-icons i {
            margin-right: 10px;
            cursor: pointer;
        }

        .action-icons i.edit {
            color: #007BFF;
        }

        .action-icons i.delete {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Form Section -->
        <div class="form-container">
            <h2>Add New Role</h2>
            <form action="{{ route('rolepost') }}" method="POST">
                @csrf
                <input type="text" name="role" placeholder="Enter role name" required>
                <button type="submit">Add Role</button>
            </form>
        </div>

        <!-- Table Section -->
        <div class="table-container">
            <h2>Roles List</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $index => $role)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $role->role }}</td>
                        <td class="action-icons">
                            
                            <i class="delete">🗑️</i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   
</body>
</html>
@endsection
