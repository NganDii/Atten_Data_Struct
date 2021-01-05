<?php
if(!isset($_SESSION))
{
    session_start();
}

?>
<html>
    <head>
        <title>Manipur Technical University Attendance</title>
        <link rel="icon" href="mtulogo.png" type="image/png" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="rem.css">
        <script type="text/javascript">
            function check(){
                if(document.getElementById('Name').value=="")
                {
                    alert("Please Enter your Full name");
                    document.getElementById('Name').focus();
                    return false;
                }
                if(document.getElementById('Roll').value=="")
                {
                    alert("Please Enter your Registration Number");
                    document.getElementById('Roll').focus();
                    return false;
                }
                let x=confirm("Are you sure you want to submit");
                if(x!=true)
                return false;
                else
                return true;
            }
        </script>
    </head>
    <body>
    <h3 class="head">Attendance</h3>
        <div align="center">

        <img src="mtulogo.jpeg" alt="Manipur Technical University"/>
            <form action="post.php" method="post" onsubmit="return check();">
                <input type="text" id="Name" name="name" placeholder="Full Name"><br><br>
                <input type="text" id="Roll" name="roll" placeholder="Registration number eg. 1901CS***" minlength="9"><br>
                <br>
                <input type="submit" value="Submit" id="btn" name="btn">
            </form>
        </div>
        <div align="center" style="color: crimson">
            <?php
                /*if(isset($_POST['name']) && isset($_POST['roll']))
                {
                    require_once "post.php";
                }*/

                if (isset($_SESSION['name']) && isset($_SESSION['roll'])) {
                    $user = $_SESSION["name"];
                    echo "<article><b>Hi  <h5> $_SESSION[name]! </h5> <br><br>
                    </article>";
                } else {
                    //
                }

            ?>
            <script type="text/javascript">
                let val = "<?php echo $user; ?>";
                if(val != "")
                {
                    document.getElementById('btn').type = "hidden";
                    document.getElementById('Roll').type = "hidden";
                    document.getElementById('Name').type = "hidden";
                }
                else
                {
                    document.getElementById('btn').type ="submit";
                }

            </script>
        </div>
    </body>
    <footer></footer>
    </html>
