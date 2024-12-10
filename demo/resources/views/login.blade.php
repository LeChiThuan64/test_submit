{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TTT</title>
</head>

<body>
    <form action="{{ url('/api/login') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
<script>
    // Ví dụ về cách lưu trữ token sử dụng JavaScript
    function handleLoginResponse(response) {
        if (response.token) {
            localStorage.setItem('authToken', response.token);
            alert('Login successful!');
            window.location.href = '/dashboard'; // Chuyển hướng người dùng đến trang dashboard
        } else {
            alert('Login failed!');
        }
    }
</script>

</html>