<form action='login.php' method='POST'>
    <?php
      $con=mysqli_connect("localhost","root","","drconsult");

      $nm=$_POST["nm"];
      $mail=$_POST["mail"];
      $phone=$_POST["num"];
      $pass=$_POST["pass"];

      $r=mysqli_query($con,"insert into registrationdetails(Name,Email,Pno,Pass) values('$nm','$mail','$phone','$pass') ");
      if($r)
      header("location:login.php");


    ?>

</form>
