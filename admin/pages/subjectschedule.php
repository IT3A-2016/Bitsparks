<?php include "../templates/templates.php";
headertemplate('Schedule | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('subjectschedule'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Schedule
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Create Schedule" id="create">Create Schedule</button>
              <button class="btn btn-flat btn-success"  data-toggle="tooltip" title="View Schedule" id="view">View Schedule</button>
              <button class="btn btn-flat btn-default"  data-toggle="tooltip" title="Cancel Create Schedule" id="cancel" style="display:none">Cancel</button>
              <button  id="print-sched" data-toggle="tooltip" title="Print Schedule" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <duv class="col-xs-12">
                  <div class="col-xs-2">
                    <label>School Year</label>
                    <input type="text" class="form-control" id="sy" placeholder="Input year eg.2014">
                  </div>
                  <div class="col-xs-2">
                    <h3 id="sy2"></h3>
                  </div>
                  <div class="col-xs-4">
                    <label>Year Level</label>
                    <select class="form-control" id="year_level"></select>
                  </div>
                  <div class="col-xs-3" id="createsched" style="display:none">
                    <label>Room</label>
                    <div class="input-group input-group-sm">
                      <input type="text" class="form-control" id="room" placeholder="input room">
                      <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="button" id="generateschedule">Generate Schedule</button>
                      </span>
                    </div>
                  </div>
                </div>
                <br><br><br><br>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-12">
                      <div id="results"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->

          </div><!-- /.box -->
        </section>

      </div><!-- /.content-wrapper -->

      <?php footertemplate();?>
      <script type="text/javascript" src="../js/subjectSchedule.js"></script>
    </body>
    </html>
