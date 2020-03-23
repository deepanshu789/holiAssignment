<?php
include('dbconnect.php');
?>
<?php $enroll=$_GET['enroll'];
?>

<?php
    $sql = "SELECT * FROM `student` WHERE Enrollment='$enroll'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $username = $data['Name'];
    $age = $data['Age'];
    $course = $data['Course'];
    $branch = $data['Branch'];
    $contact = $data['Contact'];
    $email = $data['Email'];
?>


<?php
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `users` SET Name='$username', Age='$age', Course='$course, Branch='$branch', Contact='$contact', Email='$email' WHERE Enrollment='$enroll'";
    if(mysqli_query($conn, $sql)){
        echo "UPDATED.";
    }
    else{
        echo "TRY AGAIN";
    }
}
else{
    echo "click here to update";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit.php?id=<?php echo $enroll ?>" method="post">
      Name: <input type="text" name="username" value="<?php echo $username; ?>"<br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" <br>
      Course:<input type="text" name="course" value="<?php echo $course; ?>" <br>
      Course:<input type="text" name="branch" value="<?php echo $branch; ?>" <br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" <br>
      Email: <input type="email" name="email" value="<?php echo $email; ?>" <br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>