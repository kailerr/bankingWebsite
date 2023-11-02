<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '/conn.php';
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if not logged in
  header("Location: login.php");
  exit();
}
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NOIR CAPITAL BANK - Dashboard</title>

  <link rel="stylesheet" type="text/css" href="home.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <a href "#" class="logo">NOIR CAPITAL BANK</a>

    <ul class="navlist">
      <li><a href="homepage.html">Home</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>
  <section class="bank">
    <div class="bank-text">
      <h4>Welcome <?php  echo $_SESSION['username'];?>! Let's Manage Your Finances, Together.</h4>
      <p>Accounts Overview</p>
      
    <div class="bank-account">
      <?php
      $username = $_SESSION['username'];
      $sql = "SELECT accountnumber, totalamount FROM bank_users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
      echo "<h4>{$_SESSION['username']}'s ACCOUNT</h4>";
      echo "Account Number: " . $row["accountnumber"] . "<br>Balance: $" . $row["totalamount"];
      } else 
      echo "0 results";
      ?>
    </div>

    <div class="container">
        <div class="left_side">
              <h4>PERSONAL INFO</h4>
              <?php
      $username = $_SESSION['username'];
      $sql = "SELECT email, phonenumber, address FROM bank_users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
      echo "Email: " . $row["email"] . "<br>Phone Number: " . $row["phonenumber"] . "<br>Address: " . $row["address"];
      } else {
      echo "0 results";
      }?>
    </div>

    <div class="right_side">
              <h4>CARD INFO</h4>
              <?php
      $username = $_SESSION['username'];
      $sql = "SELECT debitcard, password1 FROM bank_users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
      echo "Debit Card #: " . $row["debitcard"] . "<br>Password: " . $row["password1"];
      } else {
      echo "0 results";
      }
      ?>
    </div>

    </div>

  
    <div class="bank-text-dashboard">
      <br>
      <br>
      <br>
      <br>
      <a href="accounts.php"> Manage Accounts </a>
      <br>
      <br>
      <a href="#" href="checkDeposit.html">Electronic Check Deposit</a>
      <br>
      <br>
      <a href="#" href="fundTransfer.html"> Fund Transfers </a>
      <br>
      <br>
    </div>
  </section>

  <div class="icons">

  </div>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script src="home.js"></script>
  <footer>
    &copy; 2023 NOIR CAPITAL BANK. All rights reserved.
  </footer>
</body>

</html>