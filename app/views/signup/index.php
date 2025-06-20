<?php require_once 'app/views/templates/headerPublic.php'?>
<?php $error = $data['error'] ?? null; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
    <h1>Welcome to the Create a user page for assignment 3!</h1>

    <div class="col-sm-auto">
    <form action="/create/submit" method="post" >
    <fieldset>
        
        <div class="form-group">
            <label for="username">Username</label>
            <input required type="text" class="form-control" name="username">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input required type="password" class="form-control" name="confirm_password">
        </div>
        
        <br>

        <button type="submit" class="btn btn-primary"> Create Account </button>
        
        <a href="index.php">
            <button type="button" class="btn btn-secondary">Cancel</button>
        </a>
        
        <br>
        
    </form>
    </div>

    <?php if ($error): ?>
        <p style="color: red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
        
</body>
</html>