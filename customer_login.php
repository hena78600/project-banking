<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body style="background-image:url('background.jpg');background-repeat:no-repeat;background-size:cover;">
        
        <?php
        include "header.php";
        ?>
    <form action="customer_login.php"method="POST">
        
        <center>
           <div class="login">
        <table>
            <h2><center>Login to Internet Banking</center></h2>
            <hr/>
        <tr>
            <td>USER ID/CUSTOMER ID</td>
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
        </center>
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
            $sql="select count(*) from registration where email='$userid' and password='$password' and status='UNBLOCK'";
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
                $_SESSION["user"]=$userid;
                

               header("location:customer/home.php");
            }
                
            
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        
        ?>
    </body>
</html>