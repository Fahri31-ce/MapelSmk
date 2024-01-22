<?php
session_start();
if (isset ($_POST['Login'])) {
    $user = $_post ['user'];
    $pass = $_POST ['pass'];
    // periksa login
     if ($user =="achmatim" && $pass = "123"){
        //menciptakan session
        $_SESSION['Login']= $user;
        //menuju ke halaman pemeriksaan session 
        echo"<h1>Anda berhasil login</h1>";
        echo"<h2>Klik <a href='session02.php'>di sini(session02.php)</a>Untuk menuju ke pemeriksaan session";

     }

}else{
    ?>
    <html>
        <head>
            <title>Login Here..</title>
            
        </head>
        <body>
        
        <form action="" method="post">
            <h2>Login here..</h2>
            username: <input type ="text" name="user"><br>
            password: <input type ="password" name="pass"> <br>
            <input type="submit" name="Login" value="Log In">
        </form>
        
        </body>
    </html>
  <?  
    }
