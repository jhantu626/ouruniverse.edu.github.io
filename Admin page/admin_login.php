<?php
include("admin_login_connection.php");

$sql="SELECT * FROM adminlogin1";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result)){
    $email=$row['email'];
    $pass=$row['password'];
}

if(isset($_POST['login'])){
    if($_POST['email']==$email && $_POST['password']==$pass){
        echo "<script>alert('WellCome'); window.location='admin.html'</script>";
    }else{
        echo "<script>alert('Sorry');</script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
    <style>
        body{
    background-color: rgb(48, 161, 161);
}
.container{
    display: flex;
    width: 38%;
    height: 50vh;
    background-color: rgb(34, 121, 121);
    margin-left: 30%;
    margin-top: 7.5%;
    border-radius: 10px;
    border: solid 1px;
    color: white;
}
.table{
    display: flex;
    margin-left: -70%;
    margin-top: 25%;
    line-height: 3;
}
.table .tdname{
    font-size: 22px;
}
.table .input input{
    width: 30vh;
    height: 3vh;
    margin-left: 15%;
}
.login{
    border-radius: 5px;
    width: 15vh;
    height: 5vh;
    margin-top: 4%;
    margin-left: 60%;
    font-size: 30px;
    font-family: Papyrus;
    cursor: pointer;
}
.p{
    /* font-size: 15px; */
    letter-spacing: 0.2ch;
    word-spacing:1ch;
    margin-left: -40%;
}



    </style>
</head>
<body>
    <button type="button" href="" id="btnback" onclick="btnback()"><i class="fa fa-arrow-left">Back</i></button>
    <div class="container">
        <h1 style="margin-left:40%;">Admin</h1>
        
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        
            <table class="table">
                <tr>
                    <td class="tdname">Email ID:</td>
                    <td class="input"><input name="email" type="email" required="required"></td>
                </tr>
                <tr>
                    <td class="tdname">Password:</td>
                    <td class="input"><input name="password" type="password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="login" class="login" type="submit" value="Login"></td>
                </tr>
            </table>
            <h3 class="p">You have No Account?<a href="#">SignIn</a></h3>
        </form>
        
    </div>
</body>
</html>