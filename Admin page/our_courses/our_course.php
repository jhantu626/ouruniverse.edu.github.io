<?php 
include("our_course_connection.php");


echo "<div id='display_course' class='display-container' style='width:120vh; height:55vh;   
 position:absolute; margin-left:25%; margin-top: 10%; border-radius: 10px;
 overflow: hidden; overflow-y: scroll; cursor:pointer;
'> <center>";

$sql="SELECT * FROM course_detail";
$result=mysql_query($sql,$con);
echo "<table align='center' border='1px' width='70%' height='40%'>
       <tr style='text-decoration:underline; font-size: 30px; color: white;'>
       <td align='center'>Course Name</td>
        <td align='center'>Course Duration</td>
         <td align='center'>Course Fees</td> 
       </tr>";

while($row=mysql_fetch_array($result)){
    echo "
    <tr align='center' style='font-size: 22px; height:5vh; color: rgb(5, 100, 69);'>
    <td>".$row['course_name']."</td>
    <td>".$row['course_duration']."</td>
    <td>".$row['course_fees']."</td>
    </tr>
    ";
}
echo "</table>";

echo "</center></div>";



echo "
<div id='search_display' style='position:absolute; width:35%';
 height:50vh;  margin-left:18.5%; margin-top: 38.5vh; border-radius:15px; display:none; '> 
</div>
";



if(isset($_POST["search"])){
    $sql2="SELECT * FROM course_detail WHERE course_name='".$_POST['search_course']."'";
    $result2=mysql_query($sql2,$con);

    echo "<table border='1' width='30%' style='position: absolute; margin-left: 45%; margin-top:30vh;'>
    <tr align='center' style='text-decoration:underline; font-size: 30px; color: white;'>
    <td>Course Name</td>
    <td>Course Duration</td>
    <td>Course Fees</td>
    </tr>";
    while($row2=mysql_fetch_array($result2)){ 
        echo "
    <tr align='center' style='font-size: 22px; height:5vh; color: rgb(5, 100, 69);'>
    <td>".$row2['course_name']."</td>
    <td>".$row2['course_duration']."</td>
    <td>".$row2['course_fees']."</td>
    </tr>
    ";
    }
    echo "</table>";

    echo "<script>
    let con=document.getElementById('display_course');
    con.style.display='none';

    

    let con2=document.getElementById('search_display');
    con2.style.display='block';
    </script>"; 


;}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="our_course.css">
    <title>Courses</title>
</head>
<body>
    <div class="container">
        <h1 align="center" style="text-decoration: underline; color:white; " >Admin Page</h1>
        <div class="containt">
            <h1 id="Add_Student_Detail" class="student_detail"><a href="../Add_Student/add_student_detail.php">Add Student Detail>>></a></h1>
            <h1><a href="../Add_Course_Detail/Add_course_detail.php">Add Course detail>>></a></h1>
            <h1><a href="../Display_Student_Detail/display_student_detail.php">Display Student Detail>>></a></h1>
            <h1><a href="">Delete Student>>></a></h1>
            <h1><a href="">OurUniverse Courses>>></a></h1>     
            <a id="logout" style="border-radius:10px; background-color: rgb(41, 117, 231); position:absolute;
            margin-left: 80px; margin-top: 5%;
            text-decoration:none; color:white; font-size: 38px;" 
            name="logout" href="../../index.html">
                <i class="fa fa-arrow-circle-o-left"></i>
                Logout</a>        
        </div>
    </div>

    


    
    <div class="show_course">
        <div class="search_box">
            <div class="search_box_logo">
                <h1 style="color: white;">OurUniverse</h1>
            </div>
            <div class="search_box_search">
                <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">
                    <input type="search" name="search_course" placeholder="Search By Course Name">
                    <button type="submit" name="search"><i class="fa fa-search"></i></button>
                </form>
            </div>

        </div>

    </div>


</body>
</html>