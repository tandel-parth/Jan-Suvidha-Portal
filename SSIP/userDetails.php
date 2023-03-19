<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDetails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <Style>
        body {
            background-color: #FAF3E0;
        }

        .Border1 {
            max-width: 700px;
            width: 100%;
            background-color: #EDC88E;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .box {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
        }

        .col-12 {
            text-align: center;
            margin-bottom: 2vh;
        }

        @media only screen and (max-width: 768px) {
            .Border1 {
                width: 85%;
            }
        }
    </Style>
</head>

<body>
    <div class="box">
        <div class="Border1">

            <!-- <label > Full Name :-</label><input class="font-input" type="text" name="FullName" placeholder="Enter your Full Name" required><br><br> -->
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"><Span>Full Name</Span></label>
                <input type="text" name="FullName" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Full Name">
            </div>

            <!-- <label > Email ID :-</label><input  class="font-input" type="email" name="EmailID" placeholder="Enter your Email ID"required><br><br> -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><span>Email address</span></label>
                <input type="email" name="EmailID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your E-mail">
                <div id="emailHelp" class="form-text" style="font-size:small;">We'll never share your email with anyone else.</div>
            </div>

            <!-- <label > Phone No :-</label><input class="font-input" type="text" maxlength = "10" name="PhoneNo" placeholder="Enter your Phone No" required><br><br> -->
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Phone No </label>
                <input type="text" name="PhoneNo" maxlength="10" class="form-control" id="formGroupExampleInput" placeholder="Enter your Phone No">
            </div>



            <label> Date of Birth :-</label><input class="font-input" type="date" name="DOB" placeholder="Enter your Date of Birth" required><br><br>

            <!-- <label> Gender :- </label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="Other"> Other <br><br> -->
            <label for="formGroupExampleInput" class="form-label"> <span>Gender </span></label>
            <div style="display:flex;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Other
                    </label>
                </div>
            </div>
            <br>



            <!-- <label> Marital Status:- </label>
        <input type="radio" name="MaritalStatus" value="Yes"> Yes
        <input type="radio" name="MaritalStatus" value="No">No <br><br> -->

            <label for="formGroupExampleInput" class="form-label"> <span> MaritalStatus</span></label>
            <div style="display:flex;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MaritalStatus" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Married
                    </label>
                </div>&nbsp;&nbsp;&nbsp;
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MaritalStatus" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Unmarried
                    </label>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MaritalStatus" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Widow
                    </label>
                </div>
                &nbsp;&nbsp;&nbsp;
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="MaritalStatus" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Divorced
                    </label>
                </div>

            </div>
            <br>

            <!-- <label> Cast:- </label>
        <select name="Cast">
        <option value="">select cast</option>
        <option value="Open">OPEN</option>
        <option value="SEBC">SEBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
        </select><br><br> -->
            <label for="formGroupExampleInput" class="form-label"> <span> Cast</span></label>
            <select class="form-select form-select-sm" name="Cast" aria-label=".form-select-sm example">
                <option value="Open">OPEN</option>
                <option value="SEBC">SEBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
            </select>
            <br>


            <!-- <label> Category:- </label>
        <select name="Category">
        <option value="Farmer">Farmer</option>
        <option value="Student">Student</option>
        <option value="Woman">Woman</option>
        <option value="Handicapped">Handicapped</option>
        <option value="Senior Citizen">Senior Citizen</option>
        </select><br><br> -->
            <label for="formGroupExampleInput" class="form-label"> <span> Catagory</span></label>
            <select class="form-select form-select-sm" name="Category" aria-label=".form-select-sm example">
                <option value="Farmer">Farmer</option>
                <option value="Student">Student</option>
                <option value="Woman">Woman</option>
                <option value="Handicapped">Handicapped</option>
                <option value="Senior Citizen">Senior Citizen</option>
            </select>
            <br>



            <!-- <input type = "submit" value="Submit" name="submit">
        <input type = "reset" value="Cancel"> -->
            <div class="col-12">
                <a href="Dashboard.html"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></a>&nbsp;&nbsp;&nbsp;
                <button type="submit" name="reset" class="btn btn-primary">Reset</button>
            </div>

        </div>
    </div>
</body>

</html>

<?php
// $UserID=$Name=$Email=$DOB="";
// $username="root";
// $password="";
// $host="localhost";
// $db="hekathon";
// $conn=mysqli_connect($host,$username,$password,$db);
// if(isset($_POST["submit"])){
//     $Name=$_POST["FullName"];
//     $Email=$_POST["EmailID"];
//     $DOB=$_POST["DOB"];
//     $Gender=$_POST["gender"];
//     $Cast=$_POST["Cast"];
//     $Category=$_POST["Category"];
//     $MaritialStatus=$_POST["MaritalStatus"];
//     $PhoneNo=$_POST["PhoneNo"];
//     $sql="insert into `userdata` (Name,Email,DOB,Gender,Cast,Category,MaritalStatus,PhoneNumber) values('$Name','$Email','$DOB','$Gender','$Cast','$Category','$MaritialStatus','$PhoneNo')";
//     $conn->query($sql);
// }



?>