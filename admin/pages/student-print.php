<?php include "../templates/templates.php";
headertemplate('Student Print | Administrator');
include "../php/functionConnect.php";
include "../php/functions.php";
?>
<body onload="window.print();">
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="glyphicon glyphicon-th-list"></i>  <?php get_year_name($_GET['year_id'])?>
            <small class="pull-right">Date: <?php echo $date = date('m/d/Y'); ?></small>
          </h2>
        </div><!-- /.col -->
      </div>

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $year = $_GET['year_id'];
              $sy = $_GET['sy'];
              get_print_students($year,$sy); ?>
            </tbody>
          </table>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <?php mysql_close($con); ?>
    </section><!-- /.content -->
  </div><!-- ./wrapper -->
  <!-- AdminLTE App -->
  <script src="../../dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>
