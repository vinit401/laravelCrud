<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

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
            max-width:420px;
            background:#fff;
            padding:30px;
            border-radius:12px;
            box-shadow:0 5px 20px rgba(0,0,0,.15);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
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
            padding:13px;
            border:none;
            background:#ffc107;
            color:#000;
            font-size:16px;
            font-weight:bold;
            border-radius:6px;
            cursor:pointer;
            transition:.3s;
        }

        .btn:hover{
            background:#e0a800;
        }

        .back{
            display:block;
            text-align:center;
            margin-top:18px;
            text-decoration:none;
            color:#0d6efd;
            font-weight:bold;
        }

        .back:hover{
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
                padding:10px;
                font-size:14px;
            }

            .btn{
                padding:11px;
                font-size:14px;
            }

            .back{
                font-size:14px;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <h2>Edit Student</h2>

    <form action="{{ route('update',$student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $student->name }}" required>
        </div>

        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" value="{{ $student->city }}" required>
        </div>

        <div class="form-group">
            <label>Marks</label>
            <input type="number" name="marks" value="{{ $student->marks }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $student->email }}" required>
        </div>

        <button type="submit" class="btn">
            Update Student
        </button>

    </form>

    <a href="{{ route('formview') }}" class="back">
        ⬅ Back to Student List
    </a>

</div>

</body>
</html>