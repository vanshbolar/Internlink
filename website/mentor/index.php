<?php

$con = mysqli_connect("localhost", "root", "", "internlink");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
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
                        <h2 class="font-weight-bolder mb-0">Student Internship Report</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-item" "><a class=" btn btn-danger float-end" href="./logout.php">logout</a></div>
</div>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {

?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php

    unset($_SESSION['status']);
}
?>


<div class="card mt-5">
    <div class="card-header">



    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Regno</th>
                    <th scope="col">Report</th>


                </tr>
            </thead>
            <tbody>
                <?php

                # $fetch_query= "SELECT * FROM user";
                # $fetch_query_run = mysqli_query($connection,$fetch_query);

                #if(mysqli_num_rows($fetch_query_run)>0)
                #{
                # foreach($fetch_query_run as $row)
                #  {
                ?>
                <tr>
                    <td><?php  #echo $row['id']; 
                        ?></td>
                    <td><?php # echo $row['username']; 
                        ?></td>
                    <td><?php # echo $row['email']; 
                        ?></td>
                    <td><?php # echo $row['password']; 
                        ?></td>
                    </form>

                    </td>
                </tr>
                <?php
                # }
                # }
                #  else{

                #  }

                ?>

            </tbody>
        </table>
    </div>
</div>