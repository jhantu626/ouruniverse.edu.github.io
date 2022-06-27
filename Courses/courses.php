<?php 
include("course_connection.php");


echo "<div id='display_course' class='display-container' style='width:175vh; height:65vh;   
 position:absolute; margin-left:5%; margin-top: 16%; border-radius: 10px;
 overflow: hidden; overflow-y: scroll; cursor:pointer;
'> <center>";

$sql="SELECT * FROM course_detail";
$result=mysql_query($sql,$con);
echo "<table align='center' border='1px' width='70%' height='50%'>
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
<div id='search_display' style='position:absolute; width:62.5%;
 height:50vh;  margin-left:18.5%; margin-top: 38.5vh; border-radius:15px; display:none; '> 
</div>
";



if(isset($_POST["search"])){
    $sql2="SELECT * FROM course_detail WHERE course_name='".$_POST['search_course']."'";
    $result2=mysql_query($sql2,$con);

    echo "<table border='1' width='60%' style='position: absolute; margin-left: 20%; margin-top:40vh;'>
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


;
$count2=mysql_num_rows($result2);
if($count2==0){
    echo "<script>
    alert('Data Not Found');
    window.location='courses.php';
    </script>";
}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" href="course2.css">
    <title>Course_OurUniverse</title>
</head>
<body>
    <div class="main-head-bar">
        <div class="menu1">
            <ul>
                <li class="li1"><a href="">Addmision</a><i style="color: white; " class="fa fa-angle-down"></i>
                        <div class="admission_under_head">
                            <div class="admission_under_head_div1">
                                <div class="admission_under_head_div1_logo">
                                    <h1>OurUniverse</h1>
                                </div>
                                <div class="admission_under_head_div1_content">
                                                 <table style="width: 60%; color: black;">
                                                     <tr>
                                                         <td><i class="fa fa-envelope-open-o"></i></td>
                                                         <td><a href="#" style="color: black; font-family: Bodoni MT;">How To Apply</a></td>
                                                     </tr>  
                                                     <tr>
                                                        <td><i class="fa fa-adn"></i></td>
                                                        <td><a href="" style="color: black; font-family: Bodoni MT;">Our Courses</a></td>
                                                    </tr>  
                                                    <tr>
                                                        <td><i class="fa fa-newspaper-o"></i></td>
                                                        <td><a href="" style="color: black; font-family: Bodoni MT;">Entrance Exam</a></td>
                                                    </tr>  
                                                    <tr>
                                                        <td><i class="fa fa-graduation-cap"></i></td>
                                                        <td><a href="#" style="color: black; font-family: Bodoni MT;">Scolarship</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="applynow_td_addmission" colspan="2"><a href="../apply_now/apply_now.php" style="color: black; font-family: Bodoni MT; font-size: 30px;">Apply Now</a></td>
                                                    </tr>
    
                                                 </table>               
                                </div>
    
                            </div>
    
    
                            <div class="admission_under_head_div2">
                                <center style="margin-top: 5%;"><h1>Campus Help Line Number</h1></center>
                                <center style="margin-top: 10%;">
                                <h3>Our University Kolkata</h3>
                                <h4>RECEPTION NO: 033-71020-304</h4>  &nbsp;&nbsp;&nbsp;&nbsp;                    
                                
    
                                <h3>ADMISSION HELP LINE:</h3>&nbsp;
                                <h4>TOLL FREE: 18001023320 &nbsp;</h4>
                                   <h4> EMAIL : ADMISSIONS.OurUniverse@gmail.com</h4>&nbsp;&nbsp;&nbsp;
    
                                <h3>OTHER INFORMATION :</h3>
    
                                <h4>ADMISSION OFFICE IS OPEN FROM
                                    MONDAY TO FRIDAY : 9:30 AM TO 6:00 PM
                                    SATURDAY : 10:00 AM TO 4:00 PM
                                    SUNDAY : CLOSED</h4>&nbsp;&nbsp;&nbsp;
                            </center>
                            </div>
                        </div>
                    
                </li>
                <li class="li1 ouruniverse_dropdown"><a href="">Our Universe</a><i style="color: white;" class="fa fa-angle-down"></i>
    
                    <div class="our_universe_under_head">
                        <div class="our_universe_under_head_headbar">
                            <div class="our_universe_under_head_headbar_logo">
                                <h1>OurUniverse</h1>
                            </div>
                            <div class="our_universe_under_head_headbar_campus">
                                <table class="our_universe_under_head_headbar_campus_table">
                                    <tr style="font-weight: bold; font-size: 26px;">
                                        <td align="center" bgcolor="aqua">Campuses</td>
                                        <td align="center" bgcolor="aqua" >Courses</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Kolkata</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Master of Computer Application (MCA) </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Noida</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">M.Sc in Information & Cyber Security</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Mumbai</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">M. Sc. In Computer Science</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Gurgaon</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">J2EE (Core Java + Advanced Java)</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Jaipur</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Web App Design using PHP + MySQL </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Lucknow</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Ethical Hacking & Cyber Security</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Ranchi</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">R Programming</td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Our University Raipur</td>
                                        <td style="font-family: Bodoni MT; font-size: 18px;" align="center">Graphics Designing </td>
                                    </tr>
                                </table>
                            </div>
    
                        </div>
    
                    </div>
                
                </li>
                <li class="li1"><a href="../Admin page/admin_login.php">Admin</a></li>
                <li class="li1" id="addmision-login"><a href="../blog/blog.html">Blog</a></li>
            </ul>
        </div>
    </div>
    
    
    
    <div class="sub-main-headbar">
        <div class="logo">
        <h1>OurUniverse</h1>
        </div>
    
        <div class="menu-contant">
            <ul>
                <li class="sub-menu-contant"><a href="../About_campus/about_campus.html">About Campus</a></li>
                <li class="sub-menu-contant"><a href="../Galary/gallery.html">Galary</a></li>
                <li class="sub-menu-contant"><a href="#">Courses</a></li>
                <li class="sub-menu-contant"><a href="../Contact_Page/contact.html">Contact Us</a></li>
                <li class="sub-menu-contant" id="ApplyNow"><a href="../apply_now/apply_now.php">Apply Now</a></li>
            </ul>
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








        
    <div class="last_div">
        <center>
            <h2>Eiilm / BCA / INTERNSHIP PROJECT BY AB COACHING CENTER /</h2>
            <P>Content Owned By Jhantu Bala/Pritam Bala/</P>
            <h3>@Eastern Institute for Integrated Learning in Management</h3>
            <h4>Vishnu Tower, DN 14, DN Block, Sector V, <br>Bidhannagar, Kolkata, West Bengal 700091</h4>
            <h2>Date:01/06/2022</h2>
        </center>
    </div>
</body>
</html>