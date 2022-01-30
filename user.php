
<!DOCTYPE html>
<html>
<body>
<?php
       $conn = mysqli_connect("localhost","root","","emp");
      
       $q="SELECT * FROM employe ";
       $result = mysqli_query($conn,$q); 

         if($result){
             if(mysqli_num_rows($result)>1  ){
          while($row = mysqli_fetch_array($result)){
              
          }
        }
    }
 

?>

<center>
<h2>User Details</h2>
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="emp_name" value="<?php echo $row['emp_name'];?>"><br>
    <label for="lname">Email Address:</label><br>
  <input type="text" id="lname" name="Email address"value="<?php echo $row['Email address'];?>"><br>
  <label for="lname">Salary:</label><br>
  <input type="text" id="lname" name="salary" ><br>
  <label for="lname">Product:</label><br>
  <input type="text" id="lname" name="product" ><br>
  <label for="lname">City:</label><br>
  <input type="text" id="lname" name="emp_city" ><br><br>
  <input type="submit" name="sub" value="Submit">
</form> </center>

<?php

?>

</body>
</html>

