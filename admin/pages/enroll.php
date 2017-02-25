<?php include "../templates/templates.php";
headertemplate('Enroll Students | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('enroll'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Enroll Students
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <div class="row">
              <div class="col-xs-12">
                <div class="col-xs-2">
                  <input type="text" class="form-control" name="sy" id="sy" style="width:110%" placeholder="Input School Year">
                </div>
                <div class="col-xs-1">
                  <h4 id="sy2"></h4>
                </div>
                <div class="col-xs-3" id="yr" style="display:none">
                  <select class="form-control" id='year'>
                  </select>
                </div>
                <div class="col-xs-2">
                  <button class="btn btn-flat btn-primary" data-toggle="tooltip" title="Search Students" id="ok">OK</button>
                  <button class="btn btn-flat btn-danger" data-toggle="tooltip" title="Cancel" id="x" style="display:none"><i class="glyphicon glyphicon-remove"></i></button>
                </div>
              </div>
            </div>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary" data-toggle="tooltip" title="Add Students to Year Level" id="add">Enroll Student(s)</button>
              <button class="btn btn-flat btn-success" data-toggle="tooltip" title="View Enroll Students" id="view">View Enrolled Student</button>
            </div>
          </div>
          <div class="box-body">
            <table id="studenttable" class="table table-bordered table-hover">
              <thead>
                <th>Select/Grade</th>
                <th>Student ID Number</th>
                <th>Name</th>
              </thead>
              <tbody></tbody>
            </table>
          </div><!-- /.box-body -->

        </div><!-- /.box -->
      </section>


      <div class="view-modal">
        <div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">View Enrolled Students</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-2">
                      <input type="text" class="form-control" name="sy" id="sy3" style="width:110%" placeholder="Input School Year">
                    </div>
                    <div class="col-xs-2">
                      <h4 id="sy4"></h4>
                    </div>
                    <div class="col-xs-3">
                      <select class="form-control" id='year1'>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <button class="btn btn-flat btn-primary" data-toggle="tooltip" title="Search Students" id="search">Search</button>
                    </div>
                    <div class="col-xs-12">
                      <table id="studenttable2" class="table table-bordered table-hover">
                        <thead>
                          <th>Select</th>
                          <th>Student ID Number</th>
                          <th>Name</th>
                          <th>Grade</th>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-toggle="tooltip" title="Remove Student" id="delete"><i class="glyphicon glyphicon-remove" ></i></button>
                <button  id="print-student" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div><!-- /.example-modal -->

      </div><!-- /.content-wrapper -->

      <?php footertemplate();?>
      <script type="text/javascript" src="../js/enroll.js"></script>
    </body>
    </html>
