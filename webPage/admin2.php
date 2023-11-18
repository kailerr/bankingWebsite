<!-- Admin Page 2 that shows User Reports(contact table)-->
<?php
require_once('conn.php');
$query = "select * from contact_users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOIR CAPITAL BANK - ADMIN PANEL</title>

    <link rel="stylesheet" type="text/css" href="admin.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body class="bg-dark">
    <header>
        <a href "#" class="logo">NOIR CAPITAL BANK (Admin 2)</a>

        <ul class="navlist">
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <section class="bank">
        <div class="bank-text">
            <h4>Admin Page.</h4>
            <p>User Reports</p>
            <form style="margin-left: -200px; color:gray; margin-top: 50px;">
                <label for="account_number">Admin Pages</label>
                <!--<input type="text" id="accountnumber" name="accountnumber" style="background-color: lightgray;">-->
                <br>
                <br>
                <button type="button" onclick="openAllUsers()" style="width: 200px;">All Users Details</button>
                <br>
                <br>
                <button type="button" onclick="openAllSavings()" style="width: 200px;"> User Details(Savings)</button>
                <br>
                <br>
                <button type="button" onclick="openAllCheckings()" style="width: 200px;">User Details(Checking)</button>
                <br>
                <br>
                <button type="button" onclick="openUserReports()" style="width: 200px;">User Reports</button>
            </form>
        </div>

        <div class="bank-text">
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <div class="card-mt-5">
                            <div class="card-header">
                                <h2 class="display">User Reports</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <tr>
                                        <td>User ID</td>
                                        <td>Name</td>
                                        <td>Phone Number</td>
                                        <td>Email</td>
                                        <td>Message</td>
                                        <td>Inquiry</td>
                                    </tr>
                                    <tr>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <td class="customrows"><?php echo $row['id'] ?></td>
                                            <td class="customrows"><?php echo $row['name'] ?></td>
                                            <td class="customrows"><?php echo $row['phone'] ?></td>
                                            <td class="customrows"><?php echo $row['email'] ?></td>
                                            <td class="customrows"><?php echo $row['message'] ?></td>
                                            <td class="customrows"><?php echo $row['inquiry'] ?></td>
                                    </tr>
                                <?php
                                        }
                                ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="icons">

    </div>

    <script>
        function openAllUsers() {
            window.location.href = "admin.php";
        }

        function openUserReports() {
            window.location.href = "admin2.php";
        }

        function openAllSavings() {
            window.location.href = "admin3.php";
        }

        function openAllCheckings() {
            window.location.href = "admin4.php";
        }
    </script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="home.js"></script>
    <footer>
        &copy; 2023 NOIR CAPITAL BANK. All rights reserved.
    </footer>
</body>

</html>