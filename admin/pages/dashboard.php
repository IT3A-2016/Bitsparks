<?php include "../templates/templates.php";
headertemplate('Dashboard | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('dashboard'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Admin Dashboard
        </h1>
      </section>

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!--<div class="box">
            <div class="box-header with-border">
            <h3 class="box-title"><input type="text" name="sy" id="sy" placeholder="Input year"></h3>
            <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-toggle="tooltip" title="Minimize" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-toggle="tooltip" title="Close" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>box-header
        <div class="box-body">
        <div class="row">
        <div class="col-md-12">
        <p class="text-center">
        <strong id="year"></strong>
      </p>
      <div class="chart-responsive">
      Sales Chart Canvas
      <div id="bar-chart" height="180"></div>
    </div>chart-responsive
  </div>
</div>
</div>
</div>-->
<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header">
      <i class="ion ion-clipboard"></i>
      <h3 class="box-title">Schedule for School Year 2016-2017</h3>
      <div class = "col-lg-12">
        <h1>
          Under Updating
        </h1>
      </div>
    </div><!-- /.box-header-->

    <div class="box-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Course 1</th>
            <th class="text-center">First Day</th>
            <th class="text-center">Second Day</th>
            <th class="text-center">Third Day</th>
            <th class="text-center">Time</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td></td>
            <td>Subject 1<br>Proctor 1<br>Room 1</td>
            <td>Subject 2<br>Proctor 2<br>Room 2</td>
            <td>Subject 3<br>Proctor 3<br>Room 3</td>
            <td>7:30 - 9:00 AM</td>
          </tr>
          <tr>
            <td></td>
            <td>Subject 4<br>Proctor 4<br>Room 4</td>
            <td>Subject 5<br>Proctor 5<br>Room 5</td>
            <td>Subject 6<br>Proctor 6<br>Room 6</td>
            <td>9:00 - 10:30 AM</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Course 2</th>
            <th class="text-center">First Day</th>
            <th class="text-center">Second Day</th>
            <th class="text-center">Third Day</th>
            <th class="text-center">Time</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td></td>
            <td>Subject 4<br>Proctor 4<br>Room 4</td>
            <td>Subject 5<br>Proctor 5<br>Room 5</td>
            <td>Subject 6<br>Proctor 6<br>Room 6</td>
            <td>7:30 - 9:00 AM</td>
          </tr>
          <tr>
            <td></td>
            <td>Subject 4<br>Proctor 4<br>Room 4</td>
            <td>Subject 5<br>Proctor 5<br>Room 5</td>
            <td>Subject 6<br>Proctor 6<br>Room 6</td>
            <td>9:00 - 10:30 AM</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Course 3</th>
            <th class="text-center">First Day</th>
            <th class="text-center">Second Day</th>
            <th class="text-center">Third Day</th>
            <th class="text-center">Time</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td></td>
            <td>Subject 7<br>Proctor 7<br>Room 7</td>
            <td>Subject 8<br>Proctor 8<br>Room 8</td>
            <td>Subject 9<br>Proctor 9<br>Room 9</td>
            <td>10:30 - 12:00 PM</td>
          </tr>
          <tr>
            <td></td>
            <td>Subject 10<br>Proctor 10<br>Room 10</td>
            <td>Subject 11<br>Proctor 11<br>Room 11</td>
            <td>Subject 12<br>Proctor 12<br>Room 12</td>
            <td>1:30 - 3:00 PM</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Course 4</th>
            <th class="text-center">First Day</th>
            <th class="text-center">Second Day</th>
            <th class="text-center">Third Day</th>
            <th class="text-center">Time</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td></td>
            <td>Subject 19<br>Proctor 19<br>Room 19</td>
            <td>Subject 20<br>Proctor 20<br>Room 20</td>
            <td>Subject 21<br>Proctor 21<br>Room 21</td>
            <td>7:30 - 9:00 AM</td>
          </tr>
          <tr>
            <td></td>
            <td>Subject 22<br>Proctor 22<br>Room 22</td>
            <td>Subject 23<br>Proctor 23<br>Room 23</td>
            <td>Subject 24<br>Proctor 24<br>Room 24</td>
            <td>10:30 - 12:00 PM</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="box-footer clearfix no-border">
    </div>
  </div><!-- /.box -->
</div>

</div>
</div>
</section>

</div><!-- /.content-wrapper -->

<?php footertemplate();?>

<script type="text/javascript" src="../js/dashboard.js"></script>
</body>
</html>
