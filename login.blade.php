<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - IT Student Portal</title>
</head>
<body>
    <h1>Login to Portal</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div>
            <label>Email Address</label>
            <input name="email" type="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Password</label>
            <input name="password" type="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('register') }}">Need an account? Register here</a>
</body>
</html>
