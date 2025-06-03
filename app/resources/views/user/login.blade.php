<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FoodLovers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">FoodLovers</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html" class="btn-signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <main class="auth-container">
        <div class="auth-form">
            <h2>Welcome Back</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" name="password" required>
                </div>
                <button type="submit" class="btn-primary">Login</button>
            </form>
            <p class="auth-link">Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 FoodLovers. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>