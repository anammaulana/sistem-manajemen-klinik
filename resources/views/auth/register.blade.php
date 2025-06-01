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

        .register-box {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .register-box h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .register-box input[type="text"],
        .register-box input[type="password"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            background-color: #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
        }

        .register-box button {
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .register-box .custom-select {
            background-color: #e0e0e0;
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            background-position: right 10px center;
            background-size: 16px;
        }

        .register-box button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="register-box">
        <h2>Register</h2>

        {{-- Tampilkan error validasi --}}
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Tampilkan flash message --}}
        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            <!-- <input type="text" name="role" placeholder="Role (admin/user)" value="{{ old('role') }}" required> -->
            <select name="role" required class="custom-select">
                <option value="" disabled selected>Pilih Role</option>
                <!-- <option value="user">User</option> -->
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="dokter">Dokter</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>


</body>

</html>