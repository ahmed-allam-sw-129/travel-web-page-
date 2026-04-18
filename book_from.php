<?php 
$conn = mysqli_connect('localhost','root','','book_db');
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivales = $_POST['arrivales'];
    $leaving = $_POST['leaving'];
 $request ="insert into book_form(name, email, phone, address, location, guests, arrivales, leaving) values ('$name','$email','$phone','$address','$location','$guests','$arrivales','$leaving')";
   mysqli_query($conn,$request);
 header('location:book.php');
 
}
else{
    
    echo"something do an error";

}
