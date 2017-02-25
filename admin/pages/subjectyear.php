<?php include "../templates/templates.php";
headertemplate('Add Subject to Year Level | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('subjyear'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Add Subject to Year Level
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List of Year Level</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Add New Subject" id="add">Add Subjects</button>
              <button class="btn btn-flat btn-info"  data-toggle="tooltip" title="View Subject" id="view">View Subjects</button>
            </div>
          </div>
          <div class="box-body">
            <table id="yearlevel" class="table table-bordered table-hover">
              <thead>
                <th>Select</th>
                <th>Year Level</th>
                <th>Section</th>
              </thead>
              <tbody></tbody>
            </table>
          </div><!-- /.box-body -->

        </div><!-- /.box -->
      </section>

      <div class="add-modal">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <div id="warning"></div>
                <h4 class="modal-title" id="year_name"></h4>
              </div>
              <div class="modal-body">
                <table id="subjecttable" class="table table-bordered table-hover">
                  <thead>
                    <th>Select</th>
                    <th>Subject Code</th>
                    <th>Description</th>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Save" id="save">Save</button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Close" id="close">Close</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div><!-- /.example-modal -->

      <div class="view-modal">
        <div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">

                <h4 class="modal-title" id="view-year-name"></h4>
              </div>
              <div class="modal-body">
                <table id="subjecttable2" class="table table-bordered table-hover">
                  <thead>
                    <th>Select</th>
                    <th>Subject Code</th>
                    <th>Description</th>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-toggle="tooltip" title="Delete Subjects" id="delete"><i class="glyphicon glyphicon-remove"></i></button>
                <button type="button" class="btn btn-default pull-left" data-toggle="tooltip" title="Close" id="close-view">Close</button>
                <button  id="print-subject" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div><!-- /.example-modal -->





      </div><!-- /.content-wrapper -->

      <?php footertemplate();?>
      <script type="text/javascript" src="../js/subjectYear.js"></script>
    </body>
    </html>
