<?php
include('dbconnect.php');
session_start();
if(!isset($_SESSION['name'])){
  header("location: teacher_login.php");
}

$subject = $_SESSION['shortmark'];
if (isset($_POST['Submit'])) {
  $pname1 = $_POST['pname1'];
  $pname2 = $_POST['pname2'];
  $pname3 = $_POST['pname3'];
  $pname4 = $_POST['pname4'];
  $pname5 = $_POST['pname5'];
  $pname6 = $_POST['pname6'];
  $pname7 = $_POST['pname7'];
  $pname8 = $_POST['pname8'];
  $pname9 = $_POST['pname9'];
  $pname10 = $_POST['pname10'];
  $pname11 = $_POST['pname11'];
  $pname12 = $_POST['pname12'];
  $pname13 = $_POST['pname13'];
  $pname14 = $_POST['pname14'];
  $pname15 = $_POST['pname15'];
  $pname16 = $_POST['pname16'];
  $pname17 = $_POST['pname17'];
  $pname18 = $_POST['pname18'];
  $pname19 = $_POST['pname19'];
  $pname20 = $_POST['pname20'];


  if (empty($pname1 || $pname2 || $pname3 || $pname4 || $pname5 || $pname6 ||
  $pname7 || $pname8 || $pname9 || $pname10 || $pname11 || $pname12||
  $pname13 || $pname14 || $pname15 || $pname16 || $pname17||$pname18 || $pname19 || $pname20)) {
    echo "<h3>Please Enter Atleast One Entry</h3>";
  } else {
    $condition = false;
    if(!$condition){
      mysqli_query($con, "update $subject set ca1='$pname1' where Roll_No=1");
      mysqli_query($con, "update $subject set ca1='$pname2' where Roll_No=2");
      mysqli_query($con, "update $subject set ca1='$pname3' where Roll_No=3");
      mysqli_query($con, "update $subject set ca1='$pname4' where Roll_No=4");
      mysqli_query($con, "update $subject set ca1='$pname5' where Roll_No=5");
      mysqli_query($con, "update $subject set ca1='$pname6' where Roll_No=6");
      mysqli_query($con, "update $subject set ca1='$pname7' where Roll_No=7");
      mysqli_query($con, "update $subject set ca1='$pname8' where Roll_No=8");
      mysqli_query($con, "update $subject set ca1='$pname9' where Roll_No=9");
      mysqli_query($con, "update $subject set ca1='$pname10' where Roll_No=10");
      mysqli_query($con, "update $subject set ca1='$pname11' where Roll_No=11");
      mysqli_query($con, "update $subject set ca1='$pname12' where Roll_No=12");
      mysqli_query($con, "update $subject set ca1='$pname13' where Roll_No=13");
      mysqli_query($con, "update $subject set ca1='$pname14' where Roll_No=14");
      mysqli_query($con, "update $subject set ca1='$pname15' where Roll_No=15");
      mysqli_query($con, "update $subject set ca1='$pname16' where Roll_No=16");
      mysqli_query($con, "update $subject set ca1='$pname17' where Roll_No=17");
      mysqli_query($con, "update $subject set ca1='$pname18' where Roll_No=18");
      mysqli_query($con, "update $subject set ca1='$pname19' where Roll_No=19");
      mysqli_query($con, "update $subject set ca1='$pname20' where Roll_No=20");
      $condition = true;
    }

    if($condition==true){
      header('location:student_performance.php');
      echo "<p>Data added successfully.</p>";

    }else{
      echo "<h3>Enter Valid Data</h3>";
    }

  }

}

?>

<!DOCTYPE html>

<html>

<head>

  <title>Marks of CA-1</title>
  <link rel="stylesheet" href="mark_style.css">

</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="teacher_homepage.php">Home</a> </li>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  
  <form action="" method="post" name="form1">
    <table>
      <tr>
        <th>Roll No</th>
        <th>CA-1 Marks</th>
      </tr>

      <tr>
        <td>1</td>
        <td><input type="text" name="pname1"></td>
      </tr>

      <tr>
        <td>2</td>
        <td> <input type="text" name="pname2"> </td>

      <tr>
        <td>3</td>
        <td> <input type="text" name="pname3"> </td>
      </tr>

      <tr>
        <td>4</td>
        <td> <input type="text" name="pname4"> </td>
      </tr>

      <tr>
        <td>5</td>
        <td> <input type="text" name="pname5"> </td>
      </tr>

      <tr>
        <td>6</td>
        <td> <input type="text" name="pname6"> </td>
      </tr>

      <tr>
        <td>7</td>
        <td> <input type="text" name="pname7"> </td>
      </tr>
      <tr>

        <td>8</td>
        <td> <input type="text" name="pname8"> </td>
      </tr>

      <tr>
        <td>9</td>
        <td> <input type="text" name="pname9"> </td>
      </tr>

      <tr>
        <td>10</td>
        <td> <input type="text" name="pname10"> </td>
      </tr>

      <tr>
        <td>11</td>
        <td> <input type="text" name="pname11"> </td>
      </tr>

      <tr>
        <td>12</td>
        <td><input type="text" name="pname12"></td>
      </tr>

      <tr>
        <td>13</td>
        <td><input type="text" name="pname13"></td>
      </tr>

      <tr>
        <td>14</td>
        <td><input type="text" name="pname14"></td>
      </tr>

      <tr>

        <td>15</td>
        <td><input type="text" name="pname15"></td>
      </tr>

      <tr>
        <td>16</td>
        <td><input type="text" name="pname16"></td>
      </tr>


      <tr>
        <td>17</td>
        <td><input type="text" name="pname17"></td>
      </tr>

      <tr>
        <td>18</td>
        <td><input type="text" name="pname18"></td>
      </tr>

      <tr>
        <td>19</td>
        <td><input type="text" name="pname19"></td>
      </tr>

      <tr>
        <td>20</td>
        <td><input type="text" name="pname20"></td>
      </tr>


      <tr>
        <td colspan="2"><input type="submit" name="Submit" class="form-btn" value="SUBMIT MARKS"></td>
      </tr>

    </table>
  </form>

</body>

</html>