<?php
// Start the session
session_start();
include_once $_SERVER['DOCUMENT_ROOT']. '/conn.php';
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if not logged in
  header("Location: login.php");
  exit();
}
// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOIR - Logout</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    
    <style>
        header{
        position:relative;
        right: 0;
        top: 0;
        z-index:1000;
        width :100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 33px 9%;
        background: #808080;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f1f1;
            text-align: center;
            background: linear-gradient(245.59deg, #555 0%, #333 28.53%, #222 75.52%);
        }

        .message {
            max-width: 750px;
            margin: 50px auto;
            background-color: #808080;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
            text-transform: uppercase;
        }

        .link {
            display: inline-block;
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }
        .navlist{
            display:flex;
        }
        .navlist a{
            color: white;
            margin-left: 60px;
            font-size:15px;
            font-weight: 600;
            border-bottom: 2px solid transparent;
            transition: all .55s ease;
        }
        .navlist a:hover{
            border-bottom: 2px solid white;
        }
        footer {
            background-color: #808080;
            color: #fff;
            padding: 1em;
            text-align: center;
            bottom: 0;
            width: 100%;
        }
        *{
    padding:0;
    margin: 0;
    box-sizing:border-box;
    font-family: 'Poppins', sans-serif;
    list-style:none;
    text-decoration: none;
}
header{
    position:relative;
    right: 0;
    top: 0;
    z-index:1000;
    width :100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 33px 9%;
    background: #808080;
}

.logo{
   font-size: 30px;
   font-weight: 700;
   color: white; 
}
.navlist{
    display:flex;
}
.navlist a{
    color: white;
    margin-left: 60px;
    font-size:15px;
    font-weight: 600;
    border-bottom: 2px solid transparent;
    transition: all .55s ease;
}
.navlist a:hover{
    border-bottom: 2px solid white;
}
#menu.icon{
    color:white;
    font-size: 30px;
    z-index: 10001;
    cursor: pointer;
    display:none;
}
.bank{
    height: 100%;
    width: 100%;
    min-height:100vh;
    background: linear-gradient(245.59deg, #555 0%, #333 28.53%, #222 75.52%);
    position:relative;
    display:grid;
    grid-template-columns: repeat(1,1fr);
    align-items:center;
    gap: 2rem;
}
section{
    padding: 0 19%;
    
}
.bank-text h5{
    font-size: 14px;
    font-weight: 400;
    color:white;
    margin-bottom: 10px;
    margin-top: 80px;
}
.bank-text h1{
    font-size: 70px;
    line-height:1;
    color:white;
    margin: 0 0 45px;
    margin-top: 100px;
}
.bank-text h4{
    font-size: 18px;
    font-weight: 600;
    color: white;
    margin-bottom: 10px;
}
.bank-text p{
    color: white;
    font-size:15px;
    line-height: 1.9;
    margin-bottom: 40px;
}
.bank-img img{
    margin-top: 50px;
    width: 600px;
    height: auto;
}
.bank-login form{
    margin-top: 5px;
    width: 600px;
    height: auto;
}
.bank-text a{
    display: incline-block;
    color: white;
    background: #333;
    border: 1px solid transparent;
    padding: 12px 30px;
    line-height: 1.4;
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    text-transform:uppercase;
    transition: all .55s ease;
}
.bank-text a:hover{
    background: transparent;
    border: 1px solid white;
    transform: translateY(3px);
}
.bank-text a.ctaa{
   background: transparent;
   border: 1 px solid white;
   margin-left: 20px; 
}
.bank-text a.ctaa i{
    vertical-align: middle;
    margin-right: 5px;
}
.icons i{
    display: block;
    margin: 26px 0;
    font-size: 24px;
    color: white;
    transition: all .50s ease;
}
.icons i:hover{
    color: #555;
    transform: translateY(-5px);
}
.scroll-down{
    position: absolute;
    bottom: 6%;
    right: 9%;
}
.scroll-down i{
    display: block;
    padding: 12px;
    font-size: 25px;
    color: white;
    background: #555;
    border-radius: 30px;
    transition: all .50s ease
}
.scroll-down i:hover{
    transform: translate(-5px);
}
.bank-login{
    text-align: center;
}
.bank-login form {
    display: flex;
    max-width: 100px;
    margin-top: -35px;
    color: white;
    border-radius: 8px;
    justify-content: center;
  } 
  .bank-login form label {
    margin-bottom: 0.5em;
  }
  
  .bank-login form input {
    padding: 0.5em;
    margin-bottom: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .bank-login form button {
    background-color: #555;
    color: #fff;
    padding: 0.5em;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
    margin-bottom:-40px;
    transition: all .55s ease;
    margin-left: 10px;
  }
  
  .bank-login form button:hover {
    background: #990f02;
    border: 1px solid white;
    transform: translateY(-2px);
  }
@media(max-width: 1535px){
    header{
        padding: 15px 3%;
        transition: .2s;
    }
    .icons{
        padding: 0 3%;
        transition: .2s;
    }
    .scroll-down{
        right: 3%;
        transition: .2s;
    }
}
@media (max-width: 1460px){
    section{
        padding: 0 12%;
        transition: .2s;
    }
}
@media (max-width: 1340px){
    .bank-img img{
        width:100%;
        height: auto;
    }
    .bank-login form{
        width:100%;
        height: auto;
    }
    .bank-text h1{
        font-size: 75px;
        margin: 0 0 30px;
    }
    .bank-text h5{
        margin-bottom: 25px;
    }
}
@media(max-width:1195px){
    section{
        padding: 0 3%;
        transition: .2s;
    }
    .bank-text{
        padding-top: 0px;
    }
    .bank-img{
        text-align: center;
    }
    .bank-img img{
        width: 560px;
        height: auto;
    }
    .bank-login{
        text-align: center;
    }
    .bank-login form{
        width: 560px;
        height: auto;
    }
    .bank{
        height: 100%;
        gap: 1rem;
        grid-template-columns: 1fr;
    }
  .bank-text-dashboard{
      margin-left: -45px;
      margin-top: -90px;
  }
    .icons{
        display: none;
    }
    .scroll-down{
        display: none;
    }
}
@media (max-width:990px){
    #menu-icon{
        display: block;
    }
    .navlist{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 200px;
        height: 30vh;
        background: #707070;
        display: flex;
        align-items:center;
        flex-direction: column;
        padding: 30px 20px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        transition: all .55s ease;
    }
    .navlist a{
        display: block;
        margin: 7px 0;
        margin-left: 0;
      margin-top: -5px;
    }
    .navlist.open{
        right:0;
    }
  
}
@media (max-width:680px){
    .bank-img img{
        margin-top: 5px;
        width: 100%;
        height: auto;
    }
    .bank-login form{
        margin-top: 5px;
        width: 100%;
        height: auto;
    }

}
.bank-account {
    color: white;
    background-color: #808080;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    max-width: 600px;
}
.bank-account h4, .bank-account p {
    margin-bottom: 0px;
    margin-top: -10px;
}

.bank-text-dashboard a{
    color: white;
    background: #808080;
    border: 1px solid transparent;
    padding: 12px 30px;
    line-height: 1.4;
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    text-transform:uppercase;
    transition: all .25s ease;
    margin-left: 180px;
    max-width: 300px;
    text-align:center;
    justify-content: center;
}
.bank-text-dashboard a:hover{
    background: transparent;
    border: 1px solid white;
    transform: translateX(8px);
}
footer {
    background-color: #808080;
    color: #fff;
    padding: 1em;
    text-align: center;
    bottom: 0;
    width: 100%;
  }
  table {
    border-collapse: collapse;
    width: 100%;
    color: white;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    color: white;
    background-color: #808080;
    max-height: 20px;
    text-align: center;
    justify-content: center;
}
h2 {
    color: white;
} 
form{
    margin-top:20px;
    color: white;
    text-align:center;
    font-size: 13px;
}


.bank-text-dashboard{
    margin-top: 280px;
}
.bank-text-dashboard form button:hover{
    background: #3cb043;
    border: 1px solid white;
    transform: translateY(-2px);
}
    </style>
</head>

<body>
<header>
    <a href "#" class="logo">NOIR CAPITAL BANK</a>

    <ul class="navlist">
      <li><a href="homepage.html">Home</a></li>
      <li><a href="login.php">Sign In</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
    <div class="bx bx-menu" id="menu-icon"></div>
  </header>
  <section class="bank">
  <div class="bank-text">
    <div class="message">
        <h3>You have been successfully logged out</h3>
        <a href="homepage.html" class="link">Return to Homepage</a>
    </div>
    </div>
</section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="home.js"></script>
<footer>
&copy; 2023 NOIR CAPITAL BANK. All rights reserved.
</footer>
</body>
</html>
