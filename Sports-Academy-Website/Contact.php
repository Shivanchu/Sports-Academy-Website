<html>
    <head><title>Contact Us</title></head>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
    <STYLE>
        A{TEXT-DECORATION:NONE;}
    </STYLE>
    <?php include_once("Header.php")?>
    <body bgcolor="Black">
        <!--Start Contact-->
            <p>
                <font face="Times New Roman" color="goldenrod" size="8">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<b>SPEAK WITH US</b><br>
                </font>
                <font face="Times New Roman" color="White">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Fill out the contact form below and we will get back to you as soon as possible.
                </font>
            </p>
        <form method="post" action="Extra2.php" enctype="multipart/from-data">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <br><label for="fname">First Name:</label>
                    </div>
                    <div class="col-90">
                        <br><input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <br><label for="lname">Last Name:</label>
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
                        <br><input type="email" id="email" name="email" placeholder="it should contain @,.">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <br><label for="mobile">Mobile:</label>
                    </div>
                    <div class="col-90">
                        <br><input type="text" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <br><label for="Issue" required >Your Issue:</label>
                    </div>
                    <div class="col-90">
                        <br><select name="issue" id="issue">
                            <option value="SYI">-- Select Your Issue --</option>
                            <option value="NPSP">Not a Proper Sessions for Practice</option>
                            <option value="CNS">Coaching is not Satisfied</option>
                            <option value="ENP">Equipments are not Good Enough</option>
                            <option value="Nothing">Nothing</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <br><label for="question">Other Issue's:</label>
                    </div>
                    <div class="col-90">
                        <br><textarea name="question" id="question" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-90">
                        <br><input type="Submit" value="Submit"></a>
                    </div>
                </div>
            </div>
        </form>
        <!--End Contact--> 
    </body>
    <?php include_once("Footer.php")?>
    <script src="Script.js"></script>
</html>