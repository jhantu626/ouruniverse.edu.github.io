<?php
include("connection.php");

if(isset($_POST['submit'])){
    if(!mysql_query("INSERT INTO add_student_record VALUES('$_POST[sid]','$_POST[sname]','$_POST[sstream]',
    '$_POST[semail]','$_POST[spassword]')")){
        die("Could Not Save Data".mysql_error());
    }else{
        echo "<script>alert('Done');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_student_detail.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Add Student Details</title>
</head>
<body>
    <div class="container">
        <h1 align="center" style="text-decoration: underline; color:white; " >Admin Page</h1>
        <div class="containt">
            <h1 id="Add_Student_Detail" class="student_detail"><a href="">Add Student Detail>>></a></h1>
            <h1><a href="../Add_Course_Detail/Add_course_detail.php">Add Course detail>>></a></h1>
            <h1><a href="../Display_Student_Detail/display_student_detail.php">Display Student Detail>>></a></h1>
            <h1><a href="">Delete Student>>></a></h1>
            <h1><a href="../our_courses/our_course.php">OurUniverse Courses>>></a></h1>     
            <a id="logout" style="border-radius:10px; background-color: rgb(41, 117, 231); position:absolute;
            margin-left: 80px; margin-top: 5%;
            text-decoration:none; color:white; font-size: 38px;" 
            name="logout" href="../../index.html">
                <i class="fa fa-arrow-circle-o-left"></i>
                Logout</a>        
        </div>
    </div>


   <div class="add_student_detail">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <center>
                <div style="background-color: aquamarine;
                 width: 55%; height: 65vh; margin-top: 7.5%; 
                 display: flex; border-radius: 15px;">
                 
            <table class="table" >
                <tr>
                    <td class="enter">Enter Student Id:</td>
                    <td><input type="text" name="sid" required placeholder="Enter Student Id"></td>
                </tr>
                <tr>
                    <td class="enter">Enter Student Name:</td>
                    <td><input type="text" name="sname" placeholder="Enter Student Name" required></td>
                </tr>
                <tr>
                    <td class="enter">Enter Student Course:</td>
                    <td><input type="text" name="sstream" placeholder="Enter Student Course" required></td>
                </tr>
                <tr>
                    <td class="enter">Enter Student Email:</td>
                    <td><input type="email" name="semail" placeholder="Enter Student Email" required></td>
                </tr>
                <tr>
                    <td class="enter">Enter Student Password:</td>
                    <td><input type="password" name="spassword" placeholder="Enter Password" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input id="input1" type="submit" name="submit" value="Submit">
                    <input id="input1" type="reset" name="reset" value="Reset"></td>
                </tr>
            </table>
            
            </div>
            </center>
        </form>
    </div>
</body>
</html>