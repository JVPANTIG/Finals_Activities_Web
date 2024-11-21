<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .login-container .profile-icon {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .login-container select,
        .login-container input,
        .login-container button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Inline SVG for Default Profile Picture -->
        <svg class="profile-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#e9ecef">
            <circle cx="12" cy="8" r="4" fill="#adb5bd"></circle>
            <path d="M12 14c-5 0-9 2-9 5v1h18v-1c0-3-4-5-9-5z" fill="#adb5bd"></path>
        </svg>

        <form action="#" method="post">
            <select name="user_role">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            <input type="text" name="username" placeholder="User Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign in</button>
        </form>
    </div>
</body>
</html>
