<?php
include "connection.php";
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- custom css link -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <title>CRUD</title>

</head>
<body>

<div class="container">
<div class="row">

<div class="col-sm-6">
 <h2>View ALL Catgory</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Serial Number</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <!-- show/read all category
     1.query
     2.query to db
     3.value show


     -->
<?php
     $query="SELECT * FROM category ";
     $res=mysqli_query($db,$query);
      $i=0;
     while($row=mysqli_fetch_assoc($res)){
       $cat_id=$row['c_id'];
       $cat_name=$row['c_name'];
       $cat_desc=$row['c_desc'];
       $i++;
     


     ?>
      <tr>
        <td><?php  echo "$i" ?></td>
        <td><?php  echo "$cat_name" ?></td>
        <td><?php  echo "$cat_desc" ?></td>
        <td><a href="index.php?editId=<?php echo $cat_id;?>"><i class="far fa-edit"></i>
        </a>
          <a href="index.php?deleteId=<?php
          echo $cat_id;?>">
        <i class="fas fa-trash"></i></a>
        </td>
      </tr>
      <?php
   }
   ?> 
    </tbody>
  </table>
     
</div>

<div class="col-sm-6">
  <h2>Insert Category & Description</h2>
  <!-- insert form -->
  <form action="" method="POST">
  <div class="form-group">
    <label for="email">Category Name:</label>
    <input type="text" class="form-control" id="email" placeholder="Category name" name="cat_name">
  </div>
  <div class="form-group">
    <label for="pwd">Category Description:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Category description" name="cat_desc">
  </div>
  
  
  <button type="submit" class="btn btn-default" name="confirm">Confirm</button>
  </form>
  








<!-- insert category  -->
  <?php

  if(isset($_POST['confirm'])){
    
    $cat_name=$_POST['cat_name'];
    $cat_desc=$_POST['cat_desc'];
    //query
    //query to db
    //db 

if(empty($cat_name)||empty($cat_desc)){
  echo "<span class='alert alert-info'>Please Fill All the Information</span>";
}
else{

$query="INSERT INTO category(c_name,c_desc)VALUES('$cat_name','$cat_desc')";
$result=mysqli_query($db,$query);
if($result){
  echo "<br>";
  //echo "New Category Added";
 header("Location:index.php");
}
else{
  die("Category Insertion Error!".mysqli_error($db));
}

  }

}

  ?>


<!-- UPDATE OR EDIT -->
     <?php
if(isset($_GET['editId'])){
$editID=$_GET['editId'];
//echo "$editID";
//1st read data from db which you want to be updated
$sql = "SELECT * 
    FROM category 
    WHERE c_id = $editID";
/* $sql="SELECT FROM category WHERE c_id='$editID'"; */
$res=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($res)){
    //$cat_id=$row['c_id'];
    $u_name=$row['c_name'];

    $u_desc=$row['c_desc'];
    //echo "$u_name";
  // echo "$u_desc";
    

}

 ?>
 <!-- update form -->
 <br>
 <h2>Edit Category & Description</h2>
 <form action="" method="POST">
    
       <div class="form-group" >
    <div class="form-group" >
      <label for="pwd">Category Name:</label>
      <input type="text" class="form-control"  placeholder="Enter category name" name="e_name" value="<?php echo "$u_name" ?>">
    </div>
    <label for="pwd">Category Descriptipn:</label>
    
      <input type="text" class="form-control"  placeholder="Enter category details" name="e_desc" value="<?php echo "$u_desc" ?>">
     




    </div>
   
    <button type="submit" class="btn btn-default" name="edit" > Confirm</button>
 

  </form>
  <?php
}

/* update */
?> 
<?php

if(isset($_POST['edit'])){
     $name=$_POST['e_name'];
     $desc=$_POST['e_desc'];
     $query="UPDATE category SET c_name='$name' ,c_desc='$desc' where c_id='$editID'";
     $res=mysqli_query($db,$query);
     if($res){
         header('Location:index.php');
  }

       
     else{
         echo "error in edit";
     }
}
?>
</div>
</div> 
<!-- delete  -->
<?php
if(isset($_GET['deleteId'])){
  $deleteID=$_GET['deleteId'];
  /* query
  query to db
  delete */

$query="DELETE FROM category WHERE c_id='$deleteID'";
$res=mysqli_query($db,$query);
if($res){

  header("Location:index.php");
  
}
else{
 die("Category Delete Error!".mysqli_error($db));
}
}
?>




</div>
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.minjs"></script> 


    <?php  ob_end_flush();?> 

</body>
</html>