<html>
<head>
    <title>Shop Online</title>
    <link rel="stylesheet"type="text/css"href="style.css">
    </head>
    <body>
    <form action="shoponline.php"method="POST">
        <?php
        include "header.php";
        ?>
        
        <table>
        <tr>
            <td><input type="text" name="txtsearch"></td>
            <td><input type="submit"name="submit"value="Search"></td>
            </tr>
        </table>
        </form>
    </body>
</html>