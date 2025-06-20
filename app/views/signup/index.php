<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
    <h1>Welcome to the Sign Up Page for Assignment 2!</h1>

    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username..."><br>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Password..."><br>

        <label>Validate Password:</label>
        <input type="password" name="validate_password" placeholder="Re-enter password..."><br>

        <input type="submit" value="Create Account" name="SubmitButton">
        <a href="index.php"><button type="button">Cancel</button></a><br>

        <div style="color:red;"><?php echo isset($this) ? $this->message : $message; ?></div>
    </form>
</body>
</html>