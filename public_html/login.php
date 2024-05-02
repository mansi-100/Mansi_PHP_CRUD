
<?php ob_start(); ?>

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
    <h3 style="color:blue; text-decoration:underline;">Please Login First : </h3><br><br>
    <?php

if(isset($_POST['snv']))
{ 
     $con=mysqli_connect("localhost","id20526708_root","~--Ci6r>3E926#s[","id20526708_mansi");
    if($con)
    {
        $nm=$_POST['n'];
        $pd=$_POST['pwd'];
        $sql="select * from register where name='$nm' and password='$pd'";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($res);
        if(mysqli_num_rows($res) > 0)
        {
               
            echo "<center><font color='red'>Login Success</font></center>";
        echo "<center><a href='Request.php' class='m m2 m3' >click to redirect</a></center>";
            // header("Location:Request.php");
            // exit;
            // echo "<a href='https://www.google.com'>click to redirect</a>";
            
        }
        else
        {
            echo "<center><font color='red'>please Register Yourself First</font></center>";
        }
    }
    else
    {
        echo "error";
    }
}    
?>
    <table border='2'> <br><tr>
        <td>Enter Your Full Name : </td><td><input type="textbox" name="n" required></td>
    </tr>
    
   
    <tr>
        <td>Enter Your Password : </td>
        <td><input type="password" name="pwd"></td>
    </tr>

    <tr>
        <td colspan="2" ><center><input type="submit" style="background-color:yellow;color:red;" name="snv"></center></td>
    </tr>

    </table>
    </center>
</form>
</body>
</html>

<?php ob_end_flush(); ?>
