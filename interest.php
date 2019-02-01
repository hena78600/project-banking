<html>
<head>
    <title>% interest rate</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
       <form action="interest.php"method="POST"> 
    <?php
        include"header.php";
    ?>
           <center>
        <div id="interest">
            <h2><u><font color="orange">The rate of interest on Saving Bank Deposit</font></u></h2>
            <table border="4"solid black>
                <tr>
                    <th>Serial No.</th>
                <th>Balance</th>
                    <th>Rate of Interest</th>
                </tr>
            <tr>
                 <td>1.</td>
                <td>Balance Avove Rs 50 Lakh</td>
                <td>11.90 %</td>
                </tr>
                <tr>
                    <td>2.</td>
                <td>Balance Below Rs 50 Lakh</td>
                    <td>10.90 %</td>
                 </tr>
            <tr>
                    <td>3.</td>
                <td>Balance Upto 30 Lakh or above</td>
                    <td>10.00 %</td>
                 </tr>
            <tr>
                    <td>4.</td>
                <td>Balance Below Rs 30 Lakh</td>
                    <td>9.90 %</td>
                 </tr>
               <tr>
                    <td>5.</td>
                <td>Balance upto 10 Lakh or above</td>
                    <td>9.00 %</td>
                 </tr>
                <tr>
                    <td>6.</td>
                <td>Balance Below Rs 10 Lakh</td>
                    <td>8.80 %</td>
                 </tr>
                <tr>
                    <td>7.</td>
                <td>Balance upto Rs 5 Lakh or above</td>
                    <td>8.00 %</td>
                 </tr>
                <tr>
                    <td>8.</td>
                <td>Balance below Rs 5 Lakh</td>
                    <td>7.80 %</td>
                 </tr>
                <tr>
                    <td>9.</td>
                    <td>Balance Rs 1 Lakh or above</td>
                    <td>7.50 %</td>
                 </tr>
                <tr>
                    <td>10.</td>
                <td>Balance upto Rs 10 Thousand or above </td>
                    <td>7.00 %</td>
                 </tr>
                <tr>
                    <td>11.</td>
                <td>Balance Below Rs 10 Thousand</td>
                    <td>6.50 %</td>
                 </tr>
            
            
            
            
            
            
            
            </table>
        </div>
           </center>
        </form>
    </body>
    
</html>
