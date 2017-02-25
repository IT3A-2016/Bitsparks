<?php include "../templates/templates.php";
headertemplate('Course | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('yearlevel'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Year Level
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List of Course</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Add New Record" id="add"><i class="glyphicon glyphicon-plus"></i> ADD COURSE</button>
              <button class="btn btn-flat btn-success" data-toggle="tooltip" title="Edit Record" id="edit"><i class="glyphicon glyphicon-pencil"></i> EDIT COURSE</button>
              <button class="btn btn-flat btn-danger"  data-toggle="tooltip" title="Delete Record" id="delete"><i class="glyphicon glyphicon-minus"></i> DELETE COURSE</button>
            </div>
          </div>
          <div class="box-body">
            <table id="yearlevel" class="table table-bordered table-hover">
              <thead>
                <th>Select</th>
                <th>Course</th>
                <th>Section</th>
              </thead>
              <tbody></tbody>
            </table>
          </div><!-- /.box-body -->

        </div><!-- /.box -->
      </section>

      <div class="add-modal">
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Course</h4>
              </div>
              <div class="modal-body">

                <div id="reqsection" class="form-group">
                  <label class="control-label" for="inputSuccess">Course <br><div id="warning-section"></div></label>
                  <input type="text" class="form-control" id="year" placeholder="Input Year level" style="width:50%">
                </div>
                <div id="hasclass" class="form-group">
                  <label class="control-label" for="inputSuccess">Section<br><div id="validate-add-year" ></div></label>
                  <input type="text" class="form-control" id="section" placeholder="Input Section">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left disabled" data-toggle="tooltip" title="Save" id="save"><i class="glyphicon glyphicon-check" ></i> Save</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div><!-- /.example-modal -->

      <div class="edit-modal">
        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Course</h4>
              </div>
              <div class="modal-body">

                <div id="reqdesc" class="form-group">
                  <label class="control-label" for="inputSuccess">Course<br><div id="warning-section-edit"></div></label>
                  <input type="text" class="form-control" name="edityear" id="edityear" style="width:50%">
                </div>
                <div id="hasclass-edit"  class="form-group">
                  <label class="control-label" for="inputSuccess">Section<br><div id="validate-edit-year" ></div></label>
                  <input type="text" class="form-control" name="editsection" id="editsection">
                  <input type="hidden" class="form-control" name="edityrid" id="edityrid">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-toggle="tooltip" title="Save Changes" id="save-changes"><i class="glyphicon glyphicon-check" ></i> SAVE</button>
                <button type="button" class="btn btn-default pull-left" data-toggle="tooltip" title="Close" id="close"><i class="glyphicon glyphicon-circle-arrow-left" ></i> BACK</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div><!-- /.example-modal -->





    </div><!-- /.content-wrapper -->

    <?php footertemplate();?>
    <script type="text/javascript" src="../js/yearLevel.js"></script>
  </body>
  </html>
