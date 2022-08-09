<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page </title>
</head>
  
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 4 values from the form data(input)
        $username =  $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $psswrd =  $_REQUEST['psw'];
        $re_passwrd = $_REQUEST['psw-repeat'];
        
          
        // Performing insert query execution
        // here our table name is Register
        $sql = "INSERT INTO Register  VALUES ('$$username', 
            '$email','$psswrd','$re_passwrd')";
          //   mysqli_query() function performs a query against a database.
        if(mysqli_query($conn, $sql)){
            echo "<h3>Congragulations. your account was created.</h3>"; 
  
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>