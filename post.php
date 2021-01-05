<?php
if(!isset($_SESSION))
{
    session_start();
}


$file=fopen("Attendance.txt", "a");
  if(isset($_POST['btn']) && $_POST['name']!="" && $_POST['roll']!="")
  {

      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $_SESSION["name"]=$_POST['name'];
      $_SESSION["roll"]=$_POST['roll'];
          fwrite($file, "Name");
          fwrite($file, "  =  ");
          fwrite($file, $name);
          fwrite($file, "\r\n");
      fwrite($file, "Roll");
      fwrite($file, "  =  ");
      fwrite($file, $roll);
      fwrite($file, "\n");
      fwrite($file, "\r\n");
      if($_SESSION["name"]!="" && $_SESSION["roll"]!="")
      /////////////////////

?>
<html>
<head>
    <title>Manipur Technical University Attendance</title>
    <link rel="icon" href="mtulogo.png" type="image/png" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="rem.css">
    <script type="text/javascript">
        function check() {
            if (document.getElementById('Name').value == "") {
                alert("Please Enter your Full name");
                document.getElementById('Name').focus();
                return false;
            }
            if (document.getElementById('Roll').value == "") {
                alert("Please Enter your Registration Number");
                document.getElementById('Roll').focus();
                return false;
            }
            confirm("Are you sure you want to submit");
        }
    </script>
</head>
<body>
<h3 class="head">Attendance</h3>
<div align="center">

    <img src="mtulogo.jpeg" alt="Manipur Technical University"/>
    <?php
    echo "<br><br><h3> Attendance submitted successfully<br><br><table border='1'><tr><td>Name: </td><td>$name</td></tr><tr><td>Roll: </td><td>$roll</td></tr></table></h3> ";
    ?>
</div>
</body>
<footer></footer>
</html>
<?php
  }
  else
  {
      echo "Please log in properly";
  }
  fclose($file);
  exit;
?>
