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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Details</title>
</head>

<body>
    <div class="box">
    <div class="container">
        <form method="POST" class="loginform" action="userdocument.php">
            <h1 class="formheader">User Details</h1>
            <div class="input-group">
                <input type="text" name="FullName" placeholder="Full Name" id="" required>
            </div>
            <div class="input-group">
                <input type="email" name="Email" placeholder="Email" id="" required>
            </div>
            <div class="input-group">
                <input type="text" name="PhoneNo" maxlength="10" placeholder="Enter your Phone No" required>
            </div>
            <div class="input-group">
            <label> Date of Birth :-</label>
            <input type="date" name="DOB" required>
            </div>
            <label> <span>Gender :-</span></label>
            <div class="input-group" style="display:flex;">
                <div>
                    <input type="radio" name="gender" id="Default1">
                    <label for="Default1">
                        Male
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div>
                    <input type="radio" name="gender" id="Default1">
                    <label for="Default1">
                        Females
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div>
                    <input type="radio" name="gender" id="fDefault1">
                    <label for="Default1">
                        Other
                    </label>
                </div>
            </div>
            <label> <span>MaritalStatus :-</span></label>
            <div class="input-group" style="display:flex;">
                <div>
                    <input type="radio" name="MaritalStatus" id="Default2">
                    <label for="Default2">
                        Married
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div>
                    <input type="radio" name="MaritalStatus" id="Default2">
                    <label for="Default2">
                        Unmarried
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div>
                    <input type="radio" name="MaritalStatus" id="Default2">
                    <label for="Default2">
                        Widow
                    </label>
                </div>
                <div>
                    <input type="radio" name="MaritalStatus" id="Default2">
                    <label for="Default2">
                        Divorced
                    </label>
                </div>
            </div>
            <div class="input-group">
            <select name="Cast" required>
            <option value="Farmer">----Select Cast ----</option>
                <option value="Open">OPEN</option>
                <option value="SEBC">SEBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
            </select>
            </div>
            <div class="input-group">
            <select name="Category" required>
            <option value="Farmer">----Select Category ----</option>
                <option value="Farmer">Farmer</option>
                <option value="Student">Student</option>
                <option value="Woman">Woman</option>
                <option value="Handicapped">Handicapped</option>
                <option value="Senior Citizen">Senior Citizen</option>
            </select>
            </div>
            <div class="col-12">
                <button name="submit" class="btn1" id="signup1">Submit</button> &nbsp;&nbsp;&nbsp;
                <button name="reset" class="btn1" id="signup1">Reset</button>
            </div>
            <!-- <div class="input-group">
                <button name="reset" class="btn" id="signup1">Reset</button>
            </div> -->
        </form>
    </div>
    </div>
    <script>
          $("#signup1").click(function() {
               window.location.replace("userDetails.php");
          });
     </script>


    
</body>

</html>