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
            <a href="./index.php" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>

    <?php

    $id = $_GET['id'];
    $fetch_query = "SELECT * FROM user WHERE id='$id'";
    $fetch_query_run = mysqli_query($connection, $fetch_query);

if ($fetch_query_run) {
      foreach ($fetch_query_run as $row) {
        ?>
        <div class="card-body">

        <form action="./code.php" method="POST">
            <div class="mb-3">
                <input type="hidden" class="form-control" value="<?php echo $row['id'] ?>" name="id" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $row['username'] ?>" name="username" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="email" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" value="<?php echo $row['password'] ?>" name="password" id="exampleInputPassword1" required>
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