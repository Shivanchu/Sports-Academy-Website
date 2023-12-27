<?php
include_once("Conn.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="admin.css" type="text/css">
    </head>
    <?php include_once("AdminHeader.php"); ?>
    <body>
        <div class="main">
            <a href="AddCoach.php"><input type="button" value="Add New Coach"></a>   
            <div id=content>
                <table id="table" border="" width=100%>
                    <thead id="thead">
                        <tr id="tr">
                            <td id="td">Serial-No</td>
                            <td id="td">Coach Name</td>
                            <td id="td">Coach Sport</td>
                            <td id="td">Coach Specialization</td>
                            <td id="td">Operation's</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php

                        $qu="select * from coach";
                        $exe=mysqli_query($con,$qu);

                        while($res=mysqli_fetch_assoc($exe))
                        { ?>
                        <tr id="tr">
                            <td id="td"><?php echo $id=$res["SerialNo"]; ?></td>
                            <td id="td"><?php echo $res["Name"]; ?></td>
                            <td id="td"><?php echo $res["Sport"]; ?></td>
                            <td id="td"><?php echo $res["Specialization"]; ?></td>
                            <td id="td"><?php echo "<a href='DeleteCoach.php?id=$id'>"?><input type="button" value="Delete"><?php "</a>" ?><td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <?php include_once("AdminFooter.php"); ?>
</html>