<html>
<head>
    <title>Forget ID</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
        
    <?php
        include "header.php";
        ?>
        <form action="forgetid.php"method="POST">
            <center>
            <div class="login">
                
        <table>
            <h2><u><b><center>Forget Password</center></b></u></h2>
        <tr>
            <td>Enter User ID</td>
            <td><input type="text"name="txtid"></td></tr>
            <tr></tr><tr>
            <td><input type="submit" name="submit"value="Get Password"></td>
            </tr>
            
        
        </table>
        
                </div>
            
            </center>
        
        
        
        
        
        
        
        </form>
        <?php
          if(!isset($_POST["submit"]))
           {
          }
        else if($_POST["submit"]=="Get Password")
        {
               
               $email=$_POST["txtid"];
               $con=mysqli_connect("localhost","root","","netbanking");
               $sql="select password,count(*) from registration where email='$email'";
               
               
               $result=mysqli_query($con,$sql);
             while($row=mysqli_fetch_row($result))
            {
               $password=$row[0];
                $email=$row[1];
                
             }
            if($email=="0")
            {
                echo "<h1>User Name doesn't exist</h1>";
            }
            else
            {
                
            
              echo "<h1> Your Password is $password";
            }
        }
        ?>
    </body>
</html>