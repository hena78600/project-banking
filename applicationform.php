<html>
<head>
    <title>Form fillup</title>
     <link rel="stylesheet"type="text/css"href="style.css">
   <script type="text/javascript">
/*     function checkblank()
       {
           
        if(document.getElementsByName("txtname")=="")
            {
                alert ("please Enter the Name");
                return false;
            }
           else if(isNaN(document.getElementsByName("txtfat")))
            {
                alert ("please Enter the Father's Name");
                return false;
            }
       }*/
    
    </script>
    </head>
    <body>
        <form enctype="multipart/form-data" action="applicationform.php"method="POST">
    <?php
        include "header.php";
        ?>
            <div id="formleft">
                <center>
        <table border="2" solid black>
            <h1><u><center>Application Form for Oppening a New Account</center></u></h1>
    
          
            
            <tr></tr>
            
            <tr>
                <td><h3><font color="red"><font="mistral">Personnel Particular</font></font></h3></td>
            </tr>
        <tr>
            <td>Name</td>
            <td><input type="text"name="txtname" ></td>
            <td>Father's Name</td>
            <td><input type="text"name="txtfat" ></td>
            
            <td>Gender</td>
            <td><input type="radio"name="gender"value="Male"checked>Male
             <input type="radio"name="gender"value="Female">Female</td>
            </tr>
        <tr>
            <td>Adhaar Number</td>
            <td><input type="text"name="txtadhaar"></td>
            <td>Mobile Number</td>
            <td><input type="text"name="txtmobile"></td>
            <td>Email-Id</td>
            <td><input type="email"name="txtemail"></td></tr>
        <tr>
            <td>Date Of Birth</td>
            <td><input type="date"name="txtdob"></td>
          
            <td>Address</td>
            <td><textarea cols="15" rows="2" name="txtaddress">
            </textarea></td>
            </tr>  
            <tr>
            <td>Name of the Nominee</td>
            <td><input type="text"name="txtname1"></td>
                 <td>Father's Name</td>
            <td><input type="text"name="txtfat1"></td>
           <td>Gender</td>
            <td><input type="radio"name="gender1"value="Male"checked>Male
                <input type="radio"name="gender1"value="Female">Female</td>
            
            </tr>
            <tr>
                 <td>Adhaar Number</td>
            <td><input type="text"name="txtadhaar1"></td>
           
            <td>Mobile Number:</td>
            <td><input type="text"name="txtmobile1"></td>
            <td>Email-Id</td>
            <td><input type="email"name="txtemail1"></td>
            </tr>
        <tr>
             <td>Date Of Birth</td>
              <td><input type="date"name="txtdob1"></td>
           
            <td>Address</td>
            <td><textarea cols="15" rows="2" name="txtaddress1">
            </textarea></td>
            </tr>
             <tr>
                <td><h3><font color="red"><font="mistral">Account Particular</font></font></h3></td>
            </tr>
            
              <tr>
            <td><li>Password</li></td>
                <td><input type="password"name="pass"></td>
            </tr>
            <tr>
            <td><li>Confirm Password</li></td>
                <td><input type="password"name="cpass"></td>
            </tr>
            
            <tr>
            <td>Name Of The Bank</td>
            <td><input type="text"name="txtbank"></td>
            <td>Branch</td>
            <td><input type="text"name="txtbranch"></td>
            </tr>
            <tr>
            <td>Type of the Account</td>
             <td><select name="type">
                 <option></option>
                 <option>Current</option>
                 <option>Saving</option>
                 </select></td>   
            </tr>
           
           
      
            <tr>
            <td style="border:2px solid black;" height="100px"width="100px"></td>
     
                
                
            </tr>
            
            
            
            <tr>
                <td>Upload your photo here</td>
                </tr>
            <tr>
            <td><input type="file"name="img"></td>
                
            
            </tr>
           
        
            
             <tr>
            <td><input type="submit" name="submit" value="SUBMIT" onclick=" checkblank();"></td>
            
             <td><input type="reset" name="reset" value="RESET"></td>
             <td><a href="customer_login.php"><h2>Log In (if already Registered)</h2></h2></a></td>
            </tr>
            
                </table>
                </center>
            </div>
        
        
        
       </form> 
        <?php
        if(!isset($_POST["submit"]))
        {
            
        }
        else if($_POST["submit"]=="SUBMIT")
        {
            $name=$_POST["txtname"];
            $fname=$_POST["txtfat"];
            $gender=$_POST["gender"];
            $adhaar=$_POST["txtadhaar"];

            $mobile=$_POST["txtmobile"];
            $email=$_POST["txtemail"];
            $dob=$_POST["txtdob"];
            $address=$_POST["txtaddress"];
            $nname=$_POST["txtname1"];
            $nfname=$_POST["txtfat1"];
            $ngender=$_POST["gender1"];
            $nadhaar=$_POST["txtadhaar"];
            $nmobile=$_POST["txtmobile1"];
            $nemail=$_POST["txtemail1"];
            $ndob=$_POST["txtdob1"];
            $naddress=$_POST["txtaddress1"];
            $bankname=$_POST["txtbank"];
            $branch=$_POST["txtbranch"];
            $type=$_POST["type"];
            
            $password=$_POST["pass"];
            $conpassword=$_POST["cpass"];
            
            $img=$_FILES["img"]["name"];
            $temp_image=$_FILES["img"]["tmp_name"];
            move_uploaded_file($temp_image,$img);
            
             
            $con=mysqli_connect("localhost","root","","netbanking");
            if(strcmp($password,$conpassword)==0)
            {
        
            $sql="insert into registration(name,fname,gender,adhaar,mobile,email,dob,address,nname,nfname,ngender,nadhaar,nmobile,nemail,ndob,naddress,bankname,branch,type,password,image,status) values('$name','$fname','$gender','$adhaar','$mobile','$email','$dob','$address','$nname','$nfname','$ngender','$nadhaar','$nmobile','$nemail','$ndob','$naddress','$bankname','$branch','$type','$password','$img','UNBLOCK')";
            mysqli_query($con,$sql);
            mysqli_close($con);
            echo "<h1>Registered Successfully</h1>";
        }
        
        else
        {
           echo "<h1>Confirm Password missmatch</h1>" ;
        }
        }
        ?>
    </body>
</html>     