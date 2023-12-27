<?php
    include_once("Conn.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css"></link>
</head>
<?php include_once("AdminHeader.php"); ?>
<body>
    <div id="main-content" class="container allContent-section py-4">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total User</h4>
                    <h5 style="color:white;">
                        <?php
                        $sql="SELECT * from registration_form";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0)
                        {
                            while ($row=$result-> fetch_assoc())
                            {
                                $count=$count+1;
                            }
                        }
                        echo $count;
                        ?>
                    </h5>
                </div>
                <div class="card">
                    <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Query</h4>
                    <h5 style="color:white;">
                    <?php
                    $sql="SELECT * from contact_form";
                    $result=$con-> query($sql);
                    $count=0;
                    if ($result-> num_rows > 0)
                    {
                        while ($row=$result-> fetch_assoc())
                        {
                            $count=$count+1;
                        }
                    }
                    echo $count;
                    ?>
                </h5>
            </div>
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Coach</h4>
                    <h5 style="color:white;">
                    <?php
                    $sql="SELECT * from coach";
                    $result=$con-> query($sql);
                    $count=0;
                    if ($result-> num_rows > 0)
                    {
                        while ($row=$result-> fetch_assoc())
                        {
                            $count=$count+1;
                        }
                    }
                    echo $count;
                    ?>
                </h5>
            </div>
    </div><br><br><hr color="goldenrod">
</body>
<?php include_once("AdminFooter.php"); ?>
</html>