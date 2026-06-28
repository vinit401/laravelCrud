<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f2f5f9;
            padding:40px;
        }

        .container{
            width:90%;
            margin:auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#0d6efd;
            color:white;
            padding:12px;
        }

        td{
            padding:12px;
            text-align:center;
            border-bottom:1px solid #ddd;
        }

        tr:nth-child(even){
            background:#f8f9fa;
        }

        tr:hover{
            background:#e9f2ff;
        }

        .btn{
            display:inline-block;
            margin-bottom:20px;
            padding:10px 18px;
            background:#198754;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        .btn:hover{
            background:#157347;
        }

        .edit{
            background:#ffc107;
            color:black;
            padding:6px 12px;
            text-decoration:none;
            border-radius:5px;
        }

        .delete{
            background:#dc3545;
            color:white;
            padding:6px 12px;
            text-decoration:none;
            border-radius:5px;
            margin-left:5px;
        }

        .edit:hover{
            background:#e0a800;
        }

        .delete:hover{
            background:#bb2d3b;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Student Details</h2>

    <a href="/" class="btn">+ Add Student</a>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Marks</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @foreach($students as $student)

        <tr>

            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->city }}</td>
            <td>{{ $student->marks }}</td>
            <td>{{ $student->email }}</td>

            <td>

                <a href="{{ url('/edit', $student->id) }}" class="edit">Edit</a>

                <a href="{{ url('/delete', $student->id) }}" class="delete">Delete</a>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>