<footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
       
      </div>

    </div>
  </div>
</footer>
</main>

<script src="./assets/bootstrap.bundle.min.js"></script>

<?php
if(isset($_SESSION['status'])&& $_SESSION['status'] != '')
{
  ?>
  <script>
swal("Hello world!");
  </script>
  <?php
  unset($_SESSION['status']);
}
?>


<script>

</script>
</body>
</html>