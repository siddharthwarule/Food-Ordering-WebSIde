<?php
include("header.php");

// $name=$_POST['Item_name'];
// $price=$_POST['price'];




// session_start();

// if(!isset($_SESSION['logged']) || $_SESSION['logged'] == false ){


// header("location:admin.php");

// exit();
// } 







//session_start();
//if(!isset($_SESSION['logged']) || $_SESSION['logged'] == false ){


  //session_unset();
 // session_destroy();
  
 // header("location:admin.php");
 // exit();
 // } 

   
 
 
  // include 'partials/_dbconnect.php';


$server = "localhost"; 
$username = "root";
$password = "";
$database = "orderdata1";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn){
  echo "connection success";
}
else{
    echo  mysqli_connect_error;
}
 

    // "sr_number " .$row['sr no']."name of person ".$row['name'];   //phone number ==".$row['phone_no']."email =="$row['email']."order ==".$row['order1']."date-time==".$row['date-time'];


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <body>

    <?php //require 'partials/_nav.php' ?>
  
     <table class="table">
     <thead>
      <tr>
    
      <th scope="col">sr number</th>
      <th scope="col">name of customer</th>
      <th scope="col">phone number</th>
      <th scope="col">Email</th>
      <th scope="col">order</th>
      <th scope="col">date-time</th>
      <th scope="col">Address </th>
      <th scope="col">price</th>
          <th scope="col" colspan="2">Manage Orders</th>

 
     </tr>
   </thead>
  <tbody>

 <?php
   $sql = "SELECT * FROM `details`";
   echo "<br>";
   $result = mysqli_query($conn,$sql);
   // select no of row fetch into the database 
 
   $num =  mysqli_num_rows($result);
   echo  "<h3>number of order are present =</h3><h3>".($num/2)."</h3>";
   echo "<br>";
   if($num > 0){
   $row= mysqli_fetch_assoc($result);
   //  echo var_dump ($row);  
    }
    $id = 0;
    while($row= mysqli_fetch_assoc($result)){

     $id = $id+1;
     $namecustomer =$row['name'];
     $phone_no = $row['phone_no'];
     $email =$row['email'];
     $date_time =$row['date-time'];
     $address =$row['address'];

     if($id+1){
     $price =$row['price'];
     $ordername =$row['order1'];
     }

      echo '  <tr>
     <th scope="row">'.$id.'</th>
     <td>'.$namecustomer.'</td>
     <td>'.$phone_no. '</td>
     <td>'.$email.    '</td>
     <td>'.$ordername.    '</td>
     <td>'.$date_time. '</td>
     <td>' .$address. '</td>  
     <td>' .$price. '</td> 
           
     <td><button>update</button> </td>
     <td><button>delete</button> </td></tr>';
          
    
    }
 


    //  $sql=UPDATE `detailsforms` SET `srno`='[value-1]',`name`='[value-2]',`phone_no`='[value-3]',
    // `email`='[value-4]',`order1`='[value-5]',`date-time`='[value-6]',`address`='[value-7]' WHERE 


    ?>

  </tbody>
</table>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
    
    </html>