<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="display_student.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <h1 align="center" style="text-decoration: underline; color:white; " >Admin Page</h1>
        <div class="containt">
            <h1 id="Add_Student_Detail" class="student_detail"><a href="../Add_Student/add_student_detail.php">Add Student Detail>>></a></h1>
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
    <div class="main_containt" id="main_containt">
        <div class="search_Box">
            
            <div class="search_box_input">
                <form name="myform" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <input type="search" name="searchkey" placeholder="Enter Student Id/Name"><button name="search" style="width: 10%; height: 4.5vh; border-radius: 15px;"><i class="fa fa-search"></i></button>
                </form>
                </div>
            
        </div>
        
    </div>


   
</body>
</html>

<?php
include("Display_connection.php");

if(isset($_POST['search'])){
    $sql="SELECT * FROM add_student_record WHERE sid='".$_POST['searchkey']."' OR name='".$_POST['searchkey']."'";
    $result=mysql_query($sql,$con);

    echo "<table border='1px' align='center' width='50%' style='position: absolute;
    margin-left:40%; margin-top:-40%; '>
    <tr bgcolor='cyan' style='font-size:28px; color: ; font-family: Bodoni MT;'>
    <td align='center' >Student Id</td> 
    <td align='center' >Student Name</td>
     <td align='center' >Student Course</td>
      <td align='center' >Student Email</td>
    </tr>
    ";

    while($row=mysql_fetch_array($result)){
        echo "<tr style='font-size:18px; font-family: Papyrus; '>
        <td align='center'>".$row['sid']."</td>
        <td align='center'>".$row['name']."</td>
        <td align='center'>".$row['stream']."</td>
        <td align='center'>".$row['email']."</td>
        </tr>";
    //     echo "<tr>
    // </tr>";
    }
    echo "</table>";
}
?>

