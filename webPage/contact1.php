<?php
$submitted = false;
if (isset($_POST["username"]) && isset($_POST["phonenumber"]) && isset($_POST["email"]) && isset($_POST["usermessage"]) && isset($_POST["inquiry"])) {

    if ($_POST["username"] && $_POST["phonenumber"] && $_POST["email"] && $_POST["usermessage"] && $_POST["inquiry"]) {
        $name = $_POST["username"];
        $phonenumber = $_POST["phonenumber"];
        $email = $_POST["email"];
        $message = $_POST["usermessage"];
        $inquiry = $_POST["inquiry"];

        // create connection
        $conn = mysqli_connect("localhost", "root", "", "bankregistration");
        // check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // user contact
        $sql = "INSERT INTO contact_users(`name`, `phone`, `email`, `message`, `inquiry`) VALUES ('$name','$phonenumber','$email','$message','$inquiry')";

        $results = mysqli_query($conn, $sql);

        if ($results) {
            $submitted = true;
        } else {
            echo mysqli_error($conn);
        }

        mysqli_close($conn); // close connection
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href ="homepage.html" class="logo">NOIR CAPITAL BANK</a>

        <ul class="navlist">
            <li><a href="../webPage/homepage.html">Home</a></li>
            <li><a href="../webPage/login.php">Sign In</a></li>
            <li><a href="../webPage/contact1.php">Contact</a></li>
            <li><a href="../webPage/about.html">About</a></li>
            <li><a href="../webPage/atm.html">ATM</a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <br>
    <br>
    <br>


    <div class="container">
        <h1>Contact Us</h1>
        <p>Feel free to contact us through our email and/or number, and a message of your inquiry.</p>

        <div class="contact-box">
            <div class="contact-left">
                <h3>Ask a Question!</h3>
                <form action="contact1.php" method="post">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name </label>
                            <input type="text" placeholder="Name" name="username" required>
                        </div>


                        <div class="input-group">
                            <label>Phone </label>
                            <input type="text" placeholder="415-0000-0000" name="phonenumber" required>
                        </div>
                    </div>


                    <div class="input-row">
                        <div class="input-group">
                            <label>Email </label>
                            <input type="email" placeholder="sjsu@sjsu.edu.com" name="email" required>
                        </div>

                        <div class="input-group">
                            <label>Message</label>
                            <input type="text" placeholder="Message" name="usermessage" required>
                        </div>
                    </div>

                    <label>Inquiry</label>
                    <textarea rows="6" placeholder="Input Message" required name="inquiry"> </textarea>

                    <button type="submit">Submit</button>

                    <?php
                    if ($submitted) {
                        echo '<script type="text/javascript">window.onload = function () { let popup = document.getElementById("popup");
                            popup.classList.add("open-popup"); }</script>';
                    }
                    ?>
                </form>


                <div class="popup" id="popup">
                    <img src="../assets/bluetick.png">
                    <h2>Thank You!</h2>
                    <p>Contact Information been submited</p>
                    <button onclick="closePopup()">okay</button>
                </div>
            </div>


            <div class="contact-right">
                <h3>Contact Information</h3>
                <table>
                    <tr>
                        <td>Email: </td>
                        <td>sjsu@sjsu.edu</td>

                    </tr>

                    <tr>
                        <td>Number: </td>

                        <td>415-0000-000</td>
                        <br>
                    </tr>

                    <tr>
                        <td>Address: </td>
                        <td>1 Washington Sq, San Jose, CA 95192</td>
                        <br>
                    </tr>

                </table>

            </div>


        </div>
        <script src="../js/script.js"></script>
        <script>
            function closePopup() {
                let popup = document.getElementById("popup");
                popup.classList.remove("open-popup");
            }
        </script>
        <footer class="footer">
            &copy; 2023 NOIR CAPITAL BANK. All rights reserved.
        </footer>
</body>

</html>