<?php
include_once("Conn.php");
?>

<html>
    <head>
        <link rel="stylesheet" href="admin.css" type="text/css">
    </head>
    <style>
        a{
            text-decoration: none;
        }
    </style>
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
                            <td id="td">Gender</td>
                            <td id="td">Date of Birth</td>
                            <td id="td">Address</td>
                            <td id="td">City</td>
                            <td id="td">State</td>
                            <td id="td">Sport Category</td>
                            <td id="td">Duration</td>
                            <td id="td">Operation's</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php

                        $qu="select * from registration_form";
                        $exe=mysqli_query($con,$qu);

                        while($res=mysqli_fetch_assoc($exe))
                        { ?>
                        <tr id="tr">
                            <td id="td"><?php echo $id=$res["Serial_No"]; ?></td>
                            <td id="td"><?php echo $res["First_Name"]; ?></td>
                            <td id="td"><?php echo $res["Last_Name"]; ?></td>
                            <td id="td"><?php echo $res["EMail"]; ?></td>
                            <td id="td"><?php echo $res["Contact"]; ?></td>
                            <td id="td"><?php echo $res["Gender"]; ?></td>
                            <td id="td"><?php echo $res["DOB"]; ?></td>
                            <td id="td"><?php echo $res["Address"]; ?></td>
                            <td id="td"><?php echo $res["City"]; ?></td>
                            <td id="td"><?php echo $res["State"]; ?></td>
                            <td id="td"><?php echo $res["SC"]; ?></td>
                            <td id="td"><?php echo $res["Duration"]; ?></td>
                            <td id="td"><?php echo "<a href='DeleteForm.php?id=$id'>"?><input type="button" value="Delete"><?php "</a>" ?><td>
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