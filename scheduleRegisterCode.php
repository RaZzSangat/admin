<?php
session_start();

$connection=mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['registerbtn'] ))
{
    $flightname=$_POST['flightname'];
    $arrivaltime=$_POST['arrivaltime'];
    $departuretime=$_POST['departuretime'];
    $scheduledate=$_POST['scheduledate'];
    $path=$_POST['path'];




   
        $query="insert into flightschedule(Flight Name,Arrival Time,Departure Time,Schedule Date,Path) 
        values('$flightname',' $arrivaltime',' $departuretime',' $scheduledate',' $path')";
        $query_run=mysqli_query($connection,$query);
    
        if($query_run){
                //echo "saved";
                $_SESSION['success']="Flight is added";
                header('Location:scheduleRegister.php');
        }else{
            //echo "not saved";
            $_SESSION['status']="Flight can not be added";
            header('Location:scheduleRegister.php');
    
        }

    }



if(isset($_POST['updatebtn'])){
   
 $id=$_POST['edit_id'];
 $flightname=$_POST['edit_flightname'];
 $arrivaltime=$_POST['edit_arrivaltime'];
 $departuretime=$_POST['edit_departuretime'];
 $scheduledate=$_POST['edit_scheduledate'];
 $path=$_POST['edit_path'];



 $query="update flightschedule set flightname='$flightname',arrivaltime='$arrivaltime',departuetime='$departuretime',scheduledate='$scheduledate',path='$path' where id='$id'";
$query_run=mysqli_query($connection,$query);

if($query_run){
    $_SESSION['success']="Your data is Updated";
    header('location:scheduleRegister.php');
}
else{
    $_SESSION['status']="Your data is not Updated";
    header('location:scheduleRegister.php');

}
}


if(isset($_POST['delete_btn'])){
    $id=$_POST['delete_id'];

    $query="delete from flightschedule where id='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
            $_SESSION['success']="Your data is deleted";
            header('location:schdeuleRegister.php');
        }

    else{
        $_SESSION['status']="YOUR DATA IS NOT DELETED";
        header('location:schdeuleRegister.php');


    }
}

?>