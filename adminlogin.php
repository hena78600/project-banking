<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body style="background-image:url('background.jpg');background-repeat:no-repeat;background-size:cover;">
        <?php
        include "header.php";
        ?>
    <form action="adminlogin.php"method="POST">
        <center>
        <div class="login">
            <center>
        <table border="5px" solid black>
            <h1><center>ADMIN LOGIN</center></h1>
            <hr/>
        <tr>
            <td>USER ID</td>
            <td><input type="text"name="txtuserid" required></td>
            </tr>
            <tr>
            <td>PASSWORD</td>
            <td><input type="password"name="txtpassword" required></td>
            </tr>
            <tr>
            <td><input type="submit"name="submit"value="LOGIN"></td>
            </tr>
        </table> 
            </center>
        </div>
            
       
        </center>
        </form>
        <?php
        if(!isset($_POST["submit"]))
        {
            
        }
        else if($_POST["submit"]=="LOGIN")
        {
            $user=$_POST["txtuserid"];
            $pass=$_POST["txtpassword"];
            $con=mysqli_connect("localhost","root","","netbanking");
            $sql="select count(*) from admin_login where userid='$user' and password='$pass'";
            
            $result=mysqli_query($con,$sql);
            $res="";
            while($row=mysqli_fetch_row($result))
            {
                $res=$row[0];
                
            }
                if($res=="0")
                {
                    echo "invalid username and password";
                }
            else
            {
                session_start();
                $_SESSION["u"]=$user;
                

               header("location:admin/adminhome.php");
            }
                
            
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        
        ?>
    </body>
</html>