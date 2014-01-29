<!DOCTYPE html>
<html lang="en">

<?php include('app/layout_partials/_header.php'); ?>

<body style="">
  <?php include('app/layout_partials/_navbar.php'); ?>

  <?php
  //routing 
  if (!empty($_GET['p'])) {
    $page = $_GET['p'];
  } else {
    $page = 'home';
  }
  ?>
  
  <?php include('app/pages/' . $page . '.php'); //yield page ?>

  <?php include('app/layout_partials/_footer.php'); ?>
  
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="dist/js/holder.js"></script>
</body>
</html>