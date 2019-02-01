<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
        <?php
        include "header.php";
        ?>
    <form action="staff_login.php"method="POST">
        
           <div class="login">
        <table>
            <h2><center>Staff Login</center></h2>
            <hr/>
        <tr>
            <td>USER ID</td>
            <td><input type="text"name="txtuserid"></td>
            </tr>
            <tr>
            <td>PASSWORD</td>
            <td><input type="password"name="txtpassword"></td>
            </tr>
            <tr>
            <td><input type="submit"name="submit"value="LOGIN"></td>
            </tr>
            <tr>
                <td></td>
            <td><a href="forgetid.php">Forget User ID/Password</a></td>
            </tr>
                </table>
            </div>
        </form>
        <?php
        if(!isset($_POST["submit"]))
        {
            
        }
        else if($_POST["submit"]=="LOGIN")
        {
            $userid=$_POST["txtuserid"];
            $password=$_POST["txtpassword"];
            $con=mysqli_connect("localhost","root","","netbanking");
            $sql="select count(*) from addstaff where login_id='$userid' and password='$password'";
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
                $_SESSION["staff"]=$userid;
                

               header("location:staff/home.php");
            }
                
            
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        
        ?>
    </body>
</html>