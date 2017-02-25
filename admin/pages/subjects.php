<?php include "../templates/templates.php";
headertemplate('Subjects | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('subjects'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Subjects
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List of Subjects</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Add New Record" id="add"><i class="glyphicon glyphicon-plus"></i> ADD SUBJECT</button>
              <button class="btn btn-flat btn-success"  data-toggle="tooltip" title="Edit Record" id="edit"><i class="glyphicon glyphicon-pencil"></i> EDIT SUBJECT</button>
              <button class="btn btn-flat btn-danger"  data-toggle="tooltip" title="Delete Record" id="delete"><i class="glyphicon glyphicon-minus"></i> DELETE SUBJECT</button>
            </div>
          </div>
          <div class="box-body">
            <table id="subjecttable" class="table table-bordered table-hover">
              <thead>
                <th>Select</th>
                <th>Subject Code</th>
                <th>Description</th>
                <th>Units</th>
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
                <h4 class="modal-title">Add Subject</h4>
              </div>
              <div class="modal-body">

                <div id="reqdesc" class="form-group">
                  <label class="control-label" for="inputSuccess">Subject Code<br><div ></div></label>
                  <input type="text" class="form-control" id="subjcode" placeholder="Input Subject Code" id="warning-desc" style="width:50%">
                </div>
                <div id="hasclass" class="form-group">
                  <label class="control-label" for="inputSuccess">Description<br><div id="validate-add-subject" ></div></label>
                  <input type="text" class="form-control" id="subjdesc" placeholder="Input Subject Description">
                </div>
                <div id="requnits" class="form-group">
                  <label class="control-label" for="inputSuccess">Units<br></label>
                  <input type="text" class="form-control" id="units" placeholder="Input Units" style="width:30%">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left disabled" data-toggle="tooltip" title="Save" id="save"><i class="glyphicon glyphicon-check" ></i></button>
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
                <h4 class="modal-title">Edit Subject</h4>
              </div>
              <div class="modal-body">

                <div id="reqdesc" class="form-group">
                  <label class="control-label" for="inputSuccess">Subject Code<br><div id="warning-desc-edit"></div></label>
                  <input type="text" class="form-control" name="editsubjcode" id="editsubjcode" style="width:50%">
                </div>
                <div id="hasclass-edit" class="form-group">
                  <label class="control-label" for="inputSuccess">Description<br><div id="validate-edit-subject" ></div></label>
                  <input type="text" class="form-control" name="editsubjdesc" id="editsubjdesc">
                  <input type="hidden" class="form-control" name="editsubjid" id="editsubjid">
                </div>
                <div  class="form-group">
                  <label class="control-label" for="inputSuccess">Units<br></label>
                  <input type="text" class="form-control" name="editunits" id="editunits" style="width:30%">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-toggle="tooltip" title="Save Changes" id="save-changes"><i class="glyphicon glyphicon-check" ></i> Save</button>
                <button type="button" class="btn btn-default pull-left" data-toggle="tooltip" title="Close" id="close"><i class="glyphicon glyphicon-circle-arrow-left" ></i> Back</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div><!-- /.example-modal -->

    </div><!-- /.content-wrapper -->

    <?php footertemplate();?>
    <script type="text/javascript" src="../js/subjects.js"></script>
  </body>
  </html>
