
<html>
<body>
<style>
     body {
            background-image: url("1.png");
            background-size:1700px 800px;
            background-repeat:no-repeat;
            color:white;
            font-family:caudex;
            font-size:30px;

        }
          .m
            {
                background-color:red;
            }
            .m2:hover
            {
                background-color:green;
            }
            .m3
            {
                font-size:30px;
            }
        input
        {
            font-size:30px;
            font-family:caudex;
        }
        table
        {
            font-size:30px;
            padding:20px;
           
        }
        td
        {
            padding:20px;
            font-size:30px;
        }        
        select
        {
            font-size:22px;
        }
   
</style>
<center> 
    <?php
    echo "<marquee style='border:solid red;background-color:pink'><font color='red'>";
    echo "Welcome to Mansi's Website  ";
    echo "</marquee></font>";
?>
   <!-- <h3 style="color:red;font-weight:bold;">Welcome here in Mansi's Singing Website</h3> -->
    <form action="" method="post">
    <h3 style="color:blue; text-decoration:underline;">Please Register Yourself First : </h3><br><br>
    
    
<?php
if(isset($_POST['sv']))
{
$con=mysqli_connect("localhost","id20526708_root","~--Ci6r>3E926#s[","id20526708_mansi");
 if($con)
 {
     $rd=$_POST['r'];
     $sele=$_POST['sel'];
     $v=$_POST['n'];
     $pw=$_POST['pwd'];
 
    
     $sql="insert into register (name,relation,location,password) values ('$v','$rd','$sele','$pw')";
     if(mysqli_query($con,$sql))
     {
          echo "<center><a href='login.php' class='m m2 m3'>Click To Redirect</a></center>";
      // header("Location:Login.php");
       // exit;
     }
     else
     {
         echo "Sorry You can't Register";
     }
 }
 else
 {
     echo "not connected";
 }
}
?>

    <table border='2'> <br><tr>
        <td>Enter Your Full Name : </td><td><input type="textbox" name="n" required></td>
    </tr>
    <tr  rowspan="2">
        <td>How You Know Mansi ? </td><td><input type="radio" name="r" value="From Insta?">From Insta?
        <input type="radio" name="r" value="From Insta?">From Whatsapp?</td>
        <tr>
            <td></td>
            <td><input type="radio" name="r" value="Friend?">Friend?
             <input type="radio" name="r" value="Others?">Others?</td>
        </tr>
    </tr>
    <tr>
        <td>Where are You From ? </td>
        <td><select name="sel">
            <option value="Choose Your City">Choose Your City</option>
            <option value="ahmedabad">ahmedabad</option>
            <option value="Mehsana">Mehsana</option>
            <option value="Surat">Surat</option>
            <option value="Rajsthan">Rajsthan</option>
            <option value="Bharuch">Bharuch</option>
            <option value="Others">others</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>Set Your Password : </td>
        <td><input type="password" name="pwd"></td>
    </tr>

    <tr>
        <td colspan="2" ><center><input type="submit" style="background-color:yellow;color:red;" name="sv"></center></td>
    </tr>

    </table>
    </center>
</form>
</body>
</html>


