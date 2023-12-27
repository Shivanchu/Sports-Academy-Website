<html>
    <head><title>Add New Coach</title></head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet" type="text/css">
    <STYLE>
        A{TEXT-DECORATION:NONE;}
    </STYLE>
    <?php include_once("AdminHeader.php"); ?>
    <body bgcolor="black">
        <form method="post" action="Extra.php" enctype="multipart/from-data">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <br><label for="fname">Coach Name:</label>
                    </div>
                    <div class="col-90">
                        <br><input type="text" id="Name" name="Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="Sport" required >Sports Category:</label>
                    </div>
                    <div class="col-90">
                        <select name="Sport" id="Sport">
                            <option value="SS">-- Select Sport --</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Football">Football</option>
                            <option value="BasketBall">BasketBall</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <br><label for="mobile">Specialization:</label>
                    </div>
                    <div class="col-90">
                        <br><input type="text" id="Specialization" name="Specialization">
                    </div>
                </div>
                <div class="row">
                    <div class="col-90">
                        <br><input type="Submit" value="Submit"></a>
                    </div>
                </div>
            </div>
        </form><br><br><br><br><br><br><br><br><br><br><hr color="goldenrod">
    </body>
    <?php include_once("AdminFooter.php"); ?>
</html>