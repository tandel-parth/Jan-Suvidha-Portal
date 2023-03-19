<?php 

// include 'config.php';

// session_start();


// if(isset($_SESSION['Username'])){
//     header("Location: welcome.php");
// }

// if (isset($_POST['submit'])) {
//     $Email = $_POST['Email'];
//     $Password = $_POST['Password'];

//     $sql = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";
//     $result = mysqli_query($conn, $sql);

//     if($result -> num_rows > 0){
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['Username'] = $row['Username'];
//         $_SESSION['Email'] = $row['Email'];
//         header("Location: welcome.php");
//     }else{
//         echo "<script>alert('email or password is wrong.')</script>";
//     }
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <titLe>LoginForm</titLe>
</head>
<body>
    <div class="box">
    <div class="container">
        <form action="" method="POST" class="loginform">
            <h1 class="formheader">Login</h1>
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
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="logintoregister">Don't have an account? <a href="Signup.php">Signup</a></p>
        </form>
    </div>
    </div>
</body>
</html>
