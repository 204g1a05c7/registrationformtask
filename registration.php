<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">

   
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="registration_process.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
