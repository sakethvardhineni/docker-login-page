<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login and Signup Page</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <div class="form-container">
        <form id="loginForm" class="login-form" action="index1.php" method="POST" >
            <h2>Login</h2>
            <input type="text" id="loginUsername" name="loginUsername" placeholder="Username" required autocomplete="off">
            <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required>
            <button type="submit">Login</button>
            <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        </form>
    </div>
</div>


</body>
</html>
