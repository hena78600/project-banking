<html>
<head>
    <title>% interest rate</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
       <form action="findatm.php"method="POST"> 
    <?php
        include"header.php";
    ?>
           
           <center>
             <?php
            $bank="";
            $branch="";
            $code="";
           $location="";
             if(!isset($_POST["submit"]))
        {
            $con=mysqli_connect("localhost","root","","netbanking");
            $sql="select bank,branch,code,location from addbranch";
            
            $result=mysqli_query($con,$sql);
            $table="";
            $table=$table."<table border='2'>
            <caption><h1><u>Find ATM</u></h1></caption>
            <tr style='background-color:pink'>
            
            <th>Bank Name</th>
            <th>Branch</th>
            <th> Code</th>
            <th> Location</th><tr>";
            while($row=mysqli_fetch_row($result))
            {
                $table=$table."<tr><td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                </tr>";
            }
            $table=$table."</table>";
            echo $table;
        }
            
            ?>
           </center>
           
           
           
           
           
           
           
        
        </form>
    </body>
    
</html>
