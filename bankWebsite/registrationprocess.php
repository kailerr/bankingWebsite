<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOIR - Register</title>
    <link rel="stylesheet" type="text/css" href="home.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    
</html>
<style>
    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #808080;
    }

    #message-container {
        color: white;
        height: 80%;
        width: 70%;
        max-height: 1000px;
        max-width: 500px;
        background-color: #595f57;
        text-align: center;
        padding: 20px;
        border-radius: 5px;
        background: linear-gradient(245.59deg, #555 0%, #333 28.53%, #222 75.52%);
    }

    @media (max-width: 600px) {
        #container {
            width: 90%;
        }
    }
    a{
        color:white;
    }

    /* Add more styles as needed */
</style>
<?php
if (isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST["phone"]) && isset($_POST["address"]) && isset($_POST["zipcode"]) && isset($_POST["state"]) && isset($_POST["securityquestion"]) && isset($_POST["securityresponse"])) {

    if ($_POST["email"] && $_POST["username"] && $_POST["password"] && $_POST["password2"] && $_POST["securityquestion"] && $_POST["securityresponse"]) {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $zipcode = $_POST["zipcode"];
        $state = $_POST["state"];
        $securityquestion = $_POST["securityquestion"];
        $securityresponse = $_POST["securityresponse"];

        // create connection
        $conn = mysqli_connect("localhost", "root", "", "bankregistration");
        // check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $accountnumber = rand(100000000000, 999999999999);
        $debitcard = rand(1000000000000000, 9999999999999999);
        // register user
        $sql = "INSERT INTO bank_users(`email`, `username`, `password1`, `password2`, `phonenumber`, `address`, `zipcode`, `state`, `securityquestion`, `securityresponse`, `accountnumber`, `totalamount`, `debitcard`) VALUES ('$email','$username','$password','$password2','$phone','$address','$zipcode','$state','$securityquestion','$securityresponse',$accountnumber,0,$debitcard)";

        $results = mysqli_query($conn, $sql);

        echo '<div id="message-container">';
        if ($results) {
            echo "<br>";
            echo "<h4>Your Account Has Been Successfully Created!</h4>";
            echo "Lets Begin Your Financial Journey!<br><a href='login.php'>Login Here</a>";
        } else {
            echo mysqli_error($conn);
        }

        mysqli_close($conn); // close connection

    } else {
        echo "Fill in Required Information";
    }
}
?>