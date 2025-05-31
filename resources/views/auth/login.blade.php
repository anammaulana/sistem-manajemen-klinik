<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0070f3; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            background-color: #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
        }

        .login-box button {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    {{-- <form method="POST" action="{{ route('login') }}"> --}}
        {{-- @csrf --}}
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    {{-- </form> --}}
</div>

</body>
</html>