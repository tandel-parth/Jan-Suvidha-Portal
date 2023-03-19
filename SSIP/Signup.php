

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>

<body>
    <div class="box">
    <div class="container">
        <form method="POST" class="loginform" action="haha.php">
            <h1 class="formheader">Sign up</h1>
            <div class="input-group">
                <input type="text" name="Username" placeholder="Username" id="" required>
            </div>
            <div class="input-group">
                <input type="email" name="Email" placeholder="Email" id="" required>
            </div>
            <div class="input-group">
                <input type="password" name="Password" placeholder="Password" id="" required>
            </div>
            <div class="input-group">
                <input type="password" name="cPassword" placeholder="Confirm Password" id="" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn" id="signup1">Signup</button>
            </div>
            <p class="logintoregister">already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    </div>
    <script>
          $("#signup1").click(function() {
               window.location.replace("haha.php");
          });
     </script>


    
</body>
<?php

// include 'config.php';
// session_start();

// if (isset($_POST['submit'])) {
//     $Username = $_POST['Username'];
//     $Email= $_POST['Email'];
//     $Password= $_POST['Password'];
//     $cPassword = $_POST['cPassword'];

//     if ($Password == $cPassword) {
//         $sql = "SELECT * FROM users WHERE Email = '$Email'";
//         $result = mysqli_query($conn, $sql);

//         if($result -> num_rows > 0){
//             echo "<script>alert('Email Already Exits.')</script>";
//         }else{
//             $sql = "INSERT INTO users (`Username`,`Email`,`Password`) VALUES ('$Username', '$Email', '$Password')";
//             $result = mysqli_query($conn, $sql);
    
//             if (!$result) {
//                 // echo "<script>alert('Sign up successfully.')</script>";
//                 // $Username = "";
//                 // $Email = "";
//                 // $Password = "";
//                 // $cPassword = "";
//                  echo "<script>alert('Something went wrong.')</script>";
//             } else {
//                 echo "<script>alert('Something went wrong.')</script>";
//             }
//         }
      
//     } else {
//         echo "<script>alert('Password Not Matched.')</script>";
//     }
// }
?>

</html>