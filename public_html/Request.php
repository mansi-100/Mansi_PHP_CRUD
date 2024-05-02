<html>
    <body>
        <style>
            body
            {
                background-image:url("im.png");
                background-size:1600px 800px;
                background-repeat:no-repeat;
                text-align: center;
                color:white;
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
            td
            {
                font-size:30px;
                padding:30px;
            }
            input
            {
                font-size:30px;
            }
            table
            {
                padding:30px;
                margin:30px;
                font-size:30px;
            }
            </style>
            <form action=" " method="post">
            <h3 style="text-decoration:underline;color:red;">Please Fill this Form and Request your Fav song </h3>
<center>
            <table border='50'>
                <tr>
                    <td>Enter Your Full Name :</td>
                    <td><input type="textbox" name="n" required></td>
                </tr>

                <tr>
                    <td>Enter Today's Date :</td>
                    <td><input type="date" name="d" required></td>
                </tr>
                
                <tr>
                    <td>Enter Your Song Name :</td>
                    <td><input type="textbox" name="s" required></td>
                </tr>

                <tr>
                    <td>Enter Movie or singer Name (Optional) :</td>
                    <td><input type="textbox" name="mv" ></td>
                </tr>  

                <tr>
              <td colspan="2"> <center> <input type="submit" name="sb" style="font-size:30px;"> </center></td>
                </tr>
        </table>

        </form>
        </center>
        <?php
            if(isset($_POST['sb']))
            {
                 $con=mysqli_connect("localhost","id20526708_root","~--Ci6r>3E926#s[","id20526708_mansi");
                if($con)
                {
                    echo "connected";

                    $nm=$_POST['n'];
                    $dt=$_POST['d'];
                    $sn=$_POST['s'];
                    $sing=$_POST['mv'];
                    $sql="insert into song_request (Person_Name,Date,Song_Name,Singer_Name) values('$nm','$dt','$sn','$sing')";
                    if(mysqli_query($con,$sql))
                    {
                        echo "<a href='thanks.php' class='m m2 m3'> Thanks For Request Click Here </a> ";
                       // header("Location:thanks.php");
                        //exit;
                    }
                }
                
            }
        ?>
</body>
</html>