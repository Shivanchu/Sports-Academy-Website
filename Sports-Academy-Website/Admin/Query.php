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
            <div id=content>
                <table id="table" border="" width=100%>
                    <thead id="thead">
                        <tr id="tr">
                            <td id="td">Serial-No</td>
                            <td id="td">First Name</td>
                            <td id="td">Last Name</td>
                            <td id="td">E-Mail</td>
                            <td id="td">Contact</td>
                            <td id="td">Isuue</td>
                            <td id="td">Other Issue</td>
                            <td id="td">Operation's</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php

                        $qu="select * from contact_form";
                        $exe=mysqli_query($con,$qu);

                        while($res=mysqli_fetch_assoc($exe))
                        { ?>
                        <tr id="tr">
                            <td id="td"><?php echo $id=$res["Serial_No"]; ?></td>
                            <td id="td"><?php echo $res["First_Name"]; ?></td>
                            <td id="td"><?php echo $res["Last_Name"]; ?></td>
                            <td id="td"><?php echo $res["EMail"]; ?></td>
                            <td id="td"><?php echo $res["Contact"]; ?></td>
                            <td id="td"><?php echo $res["Issue"]; ?></td>
                            <td id="td"><?php echo $res["Other_Issue"]; ?></td>
                            <td id="td"><?php echo "<a href='DeleteQuery.php?id=$id'>"?><input type="button" value="Delete"><?php "</a>" ?><td>
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