<?php
include('dbconnect.php');
?>


<?php 

if (isset($_POST['btn']))
{
 echo "Dear, ".$_POST['username'].'<br>';
 $enroll = $_POST['enroll'];
 $username = $_POST['username'];
 $age = $_POST['age'];
 $course=$_POST['course'];
 $branch=$_POST['branch'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `student` (Enrollment ,Name, Age, Course, Branch, Contact, Email) VALUES ('$enroll','$username', '$age','$course','$branch','$contact', '$email')";
    mysqli_query($conn, $sql);
    header("Location:show_detail.php");

}
else
{
    echo "Welcome Guest";
}
?>