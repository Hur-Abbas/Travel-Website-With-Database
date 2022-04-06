<?php
/* include "db.php";

if ( isset($_POST['submit']) ) {
    if ( !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['place']) && !empty($_POST['other']) ) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $place = $_POST['place'];
        $other = $_POST['other'];

        $query = "INSERT INTO userinfo(Name,Email,Number,Place,Other) values('$name','$email','$number','$place','$other')";

        $run = mysqli_query($con,$query);

        if ( $run ) {
            echo " form submitted succesfully";
        }else{
            echo "form submit denied";
        }

    }else{
        echo "enter all fields";
    }
} */

/* $a = readline('Enter a string:');
 
// For output
echo $a; */

/* function marks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
      $sum += $value;
    }
    return $sum;
  }

  function percentage($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
      $sum += $value;
      $i++;
    }
    return $sum/500*100;
  }
  
  $hurmark = [97,95,96,92,92];
  $hurtotalmarks = marks($hurmark);
  echo "Total Marks are $hurtotalmarks <br>";
  $hurpercentage = percentage($hurmark);
  echo "percentage is $hurpercentage";  */
  
?> 