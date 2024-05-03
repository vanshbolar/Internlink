<?php include('./dbconfig/dbconfig.php');?>
<?php
// include header.php file
include('./header.php');
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-7 position-relative z-index-2">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0">Registered Students</h2>
                            </div>

                        </div>
                    </div>




        </div>
    </div>

</div>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong></strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php

    unset ($_SESSION['status']);
}
?>


<div class="card mt-5">
    <div class="card-header">
        <h4>View Data

            
        </h4>
    </div>
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Regno</th>
      <th scope="col">Email</th>
      <th scope="col">Stream</th>
      <th scope="col">Company</th>
   
    </tr>
  </thead>
  <tbody>
    <?php

    $fetch_query= "SELECT * FROM intregs";
    $fetch_query_run = mysqli_query($connection,$fetch_query);

    if(mysqli_num_rows($fetch_query_run)>0)
    {
        foreach($fetch_query_run as $row)
        {
            ?>
            <tr>
                
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['regno']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['stream']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                
                <td>
                    <form method="post" action="codereg.php">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                        <button name="delete_btn" type="submit" class="btn btn-danger btn-sm">Delete </button>    
                    </form>

                </td>
            </tr>
            <?php
        }
    }
    else{

    }

    ?>

  </tbody>
</table>
    </div>
</div>

<?php
// include header.php file
include('./footer.php');
?>