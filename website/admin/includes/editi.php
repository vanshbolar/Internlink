<?php include('./dbconfig/dbconfig.php'); ?>
<?php
// include header.php file
include('./header.php');
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-7 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">Student Info</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <h4>Edit Data
            <a href="./indexi.php" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>

    <?php

    $cid = $_GET['cid'];
    $fetch_query = "SELECT * FROM intinfo WHERE cid='$cid'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);

if ($fetch_query_run) {
      foreach ($fetch_query_run as $row) {
        ?>
        <div class="card-body">

        <form action="./codei.php" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" value="<?php echo $row['cid'] ?>" name="cid" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Company name</label>
                <input type="text" class="form-control" value="<?php echo $row['cname'] ?>" name="cname" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Company description</label>
                <input type="textbox" class="form-control" value="<?php echo $row['cdesc'] ?>" name="cdesc" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="textbox" class="form-control" value="<?php echo $row['idesc'] ?>" name="idesc" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" value="<?php echo $row['duration'] ?>" name="duration" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" value="<?php echo $row['time'] ?>" name="time" id="exampleInputPassword1" required>
            </div>
            <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
        </form>

    </div>
    <?php
     }
  } else {
       echo "no record found";
    }

    ?>



</div>

<?php
// include header.php file
include('./footer.php');
?>