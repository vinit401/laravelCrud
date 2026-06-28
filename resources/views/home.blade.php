<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f2f5f9;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            padding:20px;
        }

        .container{
            width:100%;
            max-width:450px;
            background:#fff;
            padding:30px;
            border-radius:12px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        h2{
            text-align:center;
            color:#333;
            margin-bottom:25px;
        }

        .success{
            background:#d4edda;
            color:#155724;
            padding:12px;
            margin-bottom:20px;
            border-radius:5px;
            text-align:center;
            font-weight:bold;
        }

        .form-group{
            margin-bottom:18px;
        }

        label{
            display:block;
            margin-bottom:6px;
            font-weight:bold;
            color:#555;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:6px;
            outline:none;
            font-size:16px;
            transition:.3s;
        }

        input:focus{
            border-color:#0d6efd;
            box-shadow:0 0 5px rgba(13,110,253,.3);
        }

        .btn{
            width:100%;
            background:#0d6efd;
            color:#fff;
            border:none;
            padding:13px;
            border-radius:6px;
            cursor:pointer;
            font-size:16px;
            font-weight:bold;
            transition:.3s;
        }

        .btn:hover{
            background:#084ec1;
        }

        .view-btn{
            display:block;
            text-align:center;
            margin-top:15px;
            text-decoration:none;
            color:#198754;
            font-weight:bold;
        }

        .view-btn:hover{
            text-decoration:underline;
        }

        /* Tablet */

        @media (max-width:768px){

            body{
                padding:15px;
            }

            .container{
                max-width:100%;
                padding:25px;
            }

            h2{
                font-size:24px;
            }

            input{
                font-size:15px;
            }

            .btn{
                font-size:15px;
            }

        }

        /* Mobile */

        @media (max-width:480px){

            body{
                padding:10px;
            }

            .container{
                padding:20px;
                border-radius:10px;
            }

            h2{
                font-size:22px;
            }

            label{
                font-size:14px;
            }

            input{
                font-size:14px;
                padding:10px;
            }

            .btn{
                padding:11px;
                font-size:14px;
            }

            .view-btn{
                font-size:14px;
            }

        }

    </style>

</head>
<body>

<div class="container">

    <h2>Student Registration</h2>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('create') }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter your name"
                required>
        </div>

        <div class="form-group">
            <label>City</label>
            <input
                type="text"
                name="city"
                placeholder="Enter your city"
                required>
        </div>

        <div class="form-group">
            <label>Marks</label>
            <input
                type="number"
                name="marks"
                placeholder="Enter your marks"
                required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required>
        </div>

        <button type="submit" class="btn">
            Save Student
        </button>

    </form>

    <a href="{{ route('formview') }}" class="view-btn">
        📋 View Student List
    </a>

</div>

</body>
</html>