<?php  
     session_start();
     $conn=mysqli_connect("localhost","root","","dhruv");
     if($conn){
     }

     else{
        echo "failed";
     }

     $name = $_POST['name'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $mobile  = $_POST['mobile'];
     $submit = $_POST['submit'];

     $data = "INSERT INTO dev VALUES('','$name','$email','$gender','$city','$state','$mobile')";
     $check = mysqli_query($conn,$data);
     if($check){
        echo "Send Data";
     }

     else{
        echo "failed";
     }

       header("location:submit.html");
     
    ?>