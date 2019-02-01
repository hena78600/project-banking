<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
        <?php 
      include"header.php";
    ?>
         <form action="contact.php"method="POST">
   
        <center>
            <div id="contact">
                <center>
                    <h1><u><center><font color="blue">Contact Us</font></center></u></h1>
        
            
                    <u> <h3>CALL US</h3></u>            
                 <b><u>Toll Free</u></b> : 1809849205 (For ATM related Issues)<br>
        
                   <b> <u>Toll Free </u> </b>: 1845028376 (for Others Banking Problem)
            
                    <u><h3>WRITE US</h3></u>
            
                <b><u>e-Mail ID</u></b> : atm.switch@myonlinebank.in (For ATM related Issues)<br>
           <b><u>e-Mail ID</u></b> : help.customercare@myonlinebank.in (for Others Banking Problem)
            
               <u> <h3>Self Services</h3>
            </u>
            <b><u> ATM Card Block</u></b> : Send a SMS BLOCK CARD  Last 6 digit of Card Number from your Registered Mobile Number to 8979657309.<br>
            
                  <b><u> ATM Card Block</u></b> : Change your ATM PIN by login in to Internet Banking.
                    
                    <table>
                    
                    <u><h3>Comments</h3></u>
                   <tr>
                       <td>Enter your name</td>
                        <td><input type="text"name="txt1"></td>
                    </tr>
                           <tr>
                       <td>Mobile Number</td>
                        <td><input type="text"name="txt2"></td>
                    </tr>
                           <tr>
                       <td>Email ID</td>
                        <td><input type="email"name="txt3"></td>
                    </tr>
                        
                    <tr><td>Description</td>
                    <td><textarea cols="6"rows="2" name="txtdes"></textarea></td>
                    </tr>
                    <tr><td><input type="submit"name="submit" value="Comment"></td></tr>
                
                    </table>
                    </center>
    
        </div>
        </center>
        </form>
        <?php
        if(!isset($_POST["submit"]))
        {
            
        }
        else if($_POST["submit"]=="Comment")
        {
            $nm=$_POST["txt1"];
            $mb=$_POST["txt2"];
            $email=$_POST["txt3"];
            $des=$_POST["txtdes"];
            include "connect.php";
            $sql="insert into comment (name,mobile,email,description) values('$nm',$mb,'$email','$des')";
            mysqli_query($con,$sql);
            mysqli_close($con);
            
        }
        
        
        ?>
    </body>
    
</html>