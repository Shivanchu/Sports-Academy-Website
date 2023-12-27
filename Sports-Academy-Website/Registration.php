<html>
    <head><title>Registration Form</title></head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet" type="text/css">
    <STYLE>
        A{TEXT-DECORATION:NONE;}
    </STYLE>
    <?php include_once("Header.php")?>
    <body>
    <!--Start Registration-->
        <p>
            <font face="Times New Roman" color="goldenrod" size="8">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;<b>Registration Form</b><br>
            </font>
            <font face="Times New Roman" color="White">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Fill out the contact form below and Get Register with us.
            </font>
        </p>
    <form method="post" action="Extra1.php" enctype="multipart/from-data">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <label for="Sports Category" required >Sports Category:</label>
            </div>
            <div class="col-90">
                <select name="SportsCategory" id="SportsCategory">
                    <option value="SYS">-- Select Your Sport --</option>
                    <option value="Cricket">Cricket</option>
                    <option value="Football">Football</option>
                    <option value="BasketBall">BasketBall</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="Duration" required ><br>Duration:</label>
            </div>
            <div class="col-90">
                <br><select name="Duration" id="Duartion">
                    <option value="CD">-- Choose Duartion --</option>
                    <option value="4W">4 Weeks</option>
                    <option value="6W">6 Weeks</option>
                    <option value="8W">8 Weeks</option>
                    <option value="3M">3 Months</option>
                    <option value="6M">6 Months</option>
                    <option value="1Y">1 Year</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label for="Level" required ><br>Sports Level:</label>
            </div>
            <div class="col-90">
                <br><select name="level" id="level">
                    <option value="CL">-- Choose Level --</option>
                    <option value="Locality">Locality</option>
                    <option value="Casual">Casual</option>
                    <option value="Club Level">Club Level</option>
                    <option value="School Level">School Level</option>
                    <option value="College Level">College Level</option>
                    <option value="State Level">State Level</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="fname">Player First Name:</label>
            </div>
            <div class="col-90">
                <br><input type="text" id="fname" name="firstname" placeholder="Enter your first name">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="lname">Player Last Name:</label>
            </div>
            <div class="col-90">
                <br><input type="text" id="lname" name="lastname" placeholder="Enter your last name">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="email">Email:</label>
            </div>
            <div class="col-90">
                <br><input type="email" id="email" name="email" placeholder="It should contain @,.">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="mobile">Mobile:</label>
            </div>
            <div class="col-90">
                <br><input type="text" id="mobile" name="mobile" placeholder="Only 10 digits are allowed">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="gender" required>Gender:</label>
            </div><br>
            <div class="col-90">
                <br><input type="radio" id="male" name="gender" value="male">Male
                <input type="radio" id="female" name="gender" value="female">Female
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="dob">Date Of Birth:</label>
            </div>
            <div class="col-90">
                <br><input type="Date" id="dob" name="dob">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="address">Address:</label>
            </div>
            <div class="col-90">
                <br><textarea name="address" id="address" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="city">City:</label>
            </div>
            <div class="col-90">
                <br><input type="text" id="city" name="city" maxlength="10">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="pincode">Area PIN:</label>
            </div>
            <div class="col-90">
                <br><input type="number" id="pin" name="pin" maxlength="6">
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <br><label for="state">State:</label>
            </div>
            <div class="col-90">
                <br><input type="text" id="state" name="state">
            </div>
        </div>
        <div class="row">
            <div class="col-90">
                <br><input type="submit" value="Submit"></a>
            </div>
        </div>
    </div>
    </form>
    <!--End Registration-->
    </body>
    <?php include_once("Footer.php")?>
    <script src="Script.js"></script>
</html>