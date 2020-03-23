
<!DOCTYPE html>
<html>
<head>
	<title>database</title>
</head >
<body>
  <table>
        <tr>
           <th>Enrollment No</th>
           <th>NAME</th>
           <th>AGE</th>
           <th>COURSE</th>
           <th>BRANCH</th>
           <th>CONTACT</th>
           <th>EMAIL</th>
           <th>ACTIONS</th>

        </tr><br>
 <?php
     include 'dbconnect.php';

   $sql =  "SELECT * FROM student";
   $result=mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result))
   {
   ?>
     <tr>
      <td><?php echo $row['Enrollment'];?></td>
       <td> <?php echo $row['Name'];?></td>
       <td> <?php echo $row['Age'];?></td>
       <td><?php echo $row['Course'];?></td>
       <td><?php echo $row['Branch'];?></td>
       <td> <?php echo $row['Contact'];?></td>
       <td> <?php echo $row['Email'];?></td>
       <td><button><a href="edit.php?enroll=<?php echo ($row["enroll"]); ?>">Edit </a></button><button><a href="delete.php?enroll=<?php echo ($row["enroll"]); ?>">  delete</a></button></td>
   </tr>
    <?php
   }
 ?>
 </table>
<button><a href="add.php">Add</a></button>
</body>
</html>