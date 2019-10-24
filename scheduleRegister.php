<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>



<div class="modal fade" id="addschedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="scheduleRegisterCode.php" method="post">
      <div class="modal-body">
        <div class="form-group">
            <label>Flight Name</label>
            <select>
            <input type="text" name="flightname" class="form-control" placeholder="Enter flight">
            </select>
        </div>

        <div class="form-group">
            <label>Arrival Time</label>
            <input type="time" name="arrivaltime" class="form-control" >
        </div>
        <div class="form-group">
            <label>Departure Time</label>
            <input type="time" name="departuretime" class="form-control">
        </div>
        <div class="form-group">
            <label>Schedule Date</label>
            <input type="date" name="scheduledate" class="form-control" >
        </div>

        <div class="form-group">
            <label>Path</label>
            <input type="text" name="path" class="form-control" placeholder="Enter path">
        </div>
      
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
      </div>
</form>
    </div>
  </div>
</div>


<div class="container-fluid">

    <div class="card shadow mb-4">
    <div class="card-header py-3">

        <h6 class="m-0 font-weigth-bold text-primary">Flight Schedule

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addschedule">
            Add Flight Schedule
            </button>
        </h6>
    </div>
<div class="card-body">

<?php
    if(isset($_SESSION['success'])&& $_SESSION['success']!=""){

        echo '<h2 class="bg-primary">'.$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['status'])&& $_SESSION['status']!=""){

        echo '<h2 class="bg-danger">'.$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }
?>
    <div class="table-responsive">

    <?php
            $connection=mysqli_connect("localhost","root","","adminpanel");
            $query="select * from flightschedule";
            $query_run=mysqli_query($connection,$query);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Flightname</th>
                    <th>Arrival Time</th>
                    <th>Departure Time</th>
                    <th>Schedule Date</th>
                    <th>Path</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>

            <?php
                if(mysqli_num_rows($query_run)>0){
                    while($row=mysqli_fetch_assoc($query_run)){
                       ?>
              
                <tr>  
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Flight Name']; ?></td>
                    <td><?php echo $row['Arrival Time']; ?></td>
                    <td><?php echo $row['Departure Time']; ?></td>
                    <td><?php echo $row['Schedule Date']; ?></td>
                    <td><?php echo $row['Path']; ?></td>



                    <td>
                    
                    <form action="scheduleRegisterEdit.php" method="post">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">   
                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>

                    </td>
                    </form>

                    <td>
                        <form action="scheduleRegisterCode.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                         </form> 
                    </td>

                </tr>
                <?php    
                 }


                }
                else{
                    echo "No record found";
                }
                ?>
               
            </tbody>
        </table>
        </div>
    </div>
</div>

</div>
 
<?php
include('includes/script.php');


?>
