<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <div class="card shadow mb-4">
    <div class="card-header py-3">

        <h6 class="m-0 font-weigth-bold text-primary">Edit Flight Schedule
        </h6>
    </div>
<div class="card-body">
<?php
$connection= mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['edit_btn']))
{
  $id=$_POST['edit_id'];
  
  $query= "select * from flightschedule where id='$id' ";
  $query_run=mysqli_query($connection,$query);

  foreach($query_run as $row){
      ?>

 <form action="scheduleRegisterCode.php" method="post">
     <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">
<div class="form-group">
            <label>Flight Name</label>
            <input type="text" name="edit_flightname" value="<?php echo $row['flightname'] ?>" class="form-control" placeholder="Enter flightname">
        </div>

        <div class="form-group">
            <label>Arrival Time</label>
            <input type="number" name="edit_arrivaltime" value="<?php echo $row['arrivaltime'] ?>" class="form-control" placeholder="Enter arrivaltime">
        </div>

        <div class="form-group">
            <label>Departure Time</label>
            <input type="number" name="edit_departuretime" value="<?php echo $row['departuretime'] ?>" class="form-control" placeholder="Enter departuretime">
        </div>

        <div class="form-group">
            <label>Schedule Date</label>
            <input type="number" name="edit_scheduledate" value="<?php echo $row['scheduledate'] ?>" class="form-control" placeholder="Enter scheduledate">
        </div>
        <div class="form-group">
            <label>Path</label>
            <input type="number" name="edit_path" value="<?php echo $row['path'] ?>" class="form-control" placeholder="Enter path">
        </div>

        
        <a href="scheduleRegister.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
  </form>
        <?php
  }
}
?>
        

</div>
</div>
</div>
</div>


<?php
include('includes/script.php');


?>