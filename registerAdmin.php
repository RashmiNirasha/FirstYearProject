<?php include 'files/navbar.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>New admin</title>
    <link rel="stylesheet" href="assets/css/cuslog.css">
</head>

<body style="margin: auto;">
    <form action="files\admininsert.php" method="post">
        <div class="container">
            <h1>Register an ADMIN</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="fName" id="fName" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter username" name="username" id="username" required>

            <label for="tel"><b>Telphone No.</b></label>
            <input type="text" placeholder="Enter telephone number" name="tel" id="tel" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter address" name="address" id="address" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <hr>

            <button type="submit" class="registerbtn">Register</button>
        </div>

    </form>

</body>

</html>