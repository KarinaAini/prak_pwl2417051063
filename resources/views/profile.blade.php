<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .profile {
            width: 300px;
            text-align: center;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #888;
            margin-bottom: 25px;
        }

        .data {
            background-color: #d9d9d9;
            padding: 7px;
            margin-bottom: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <div class="profile">

        <img src="{{ asset('lia 1.jpeg') }}" alt="Profile">

        <div class="data">
            {{ $nama }}
        </div>

        <div class="data">
            {{ $kelas }}
        </div>

        <div class="data">
            {{ $npm }}
        </div>

    </div>

</body>
</html>