<?php include "../templates/templates.php";
headertemplate('Subject Print | Administrator');
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
            <i class="glyphicon glyphicon-th-list"></i>  <?php get_year_name($_GET['id'])?>
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
                <th>Subject Code</th>
                <th>Description</th>
                <th>Units</th>
              </tr>
            </thead>
            <tbody>
              <?php


              get_print_subjects($_GET['id']); ?>
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
