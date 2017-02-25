<?php include "../templates/templates.php";
headertemplate('Proctor | Administrator'); ?>

<body class="skin-blue">
  <div class="wrapper">

    <?php navbar('teachers'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Teachers
        </h1>
      </section>

      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List of Proctors</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Add New Record" id="add"><i class="glyphicon glyphicon-plus"></i> ADD PROCTOR</button>
              <button class="btn btn-flat btn-success" data-toggle="tooltip" title="Edit Record" id="edit"><i class="glyphicon glyphicon-pencil"></i> EDIT PROCTOR</button>
              <button class="btn btn-flat btn-danger"  data-toggle="tooltip" title="Delete Record" id="delete"><i class="glyphicon glyphicon-minus"></i> DELETE PROCTOR</button>
            </div>
          </div>
          <div class="box-body">
            <table id="teachertable" class="table table-bordered table-hover">
              <thead>
                <th>Select</th>
                <th>ID Number</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Degree</th>
                <th>Masteral/Others</th>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Proctor</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12">
                      <div id="hasclass" class="form-group">
                        <label class="control-label" for="inputSuccess">Proctor ID<br><div id="validate-idnum"></div></label>
                        <input type="text" class="form-control" id="idnum" placeholder="Teacher's ID" style="width:30%">
                      </div>
                    </div>
                  <div class="col-xs-4">
                    <div id="reqfnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">First Name<br><div id="warning-fname"></div></label>
                      <input type="text" class="form-control" id="fname" placeholder="Input First Name">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqmnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">Middle Name<br><div id="warning-mname"></div></label>
                      <input type="text" class="form-control" id="mname" placeholder="Input Middle Name">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqlnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">Last Name<br><div id="warning-lname"></div></label>
                      <input type="text" class="form-control" id="lname" placeholder="Input Last Name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div id="reqgender" class="form-group">
                      <label class="control-label" for="inputSuccess">Gender: <br><div id="warning-gender"></div></label>
                      <input type="radio"   name="gender" id="gender" checked value='Male'> <label>Male</label>
                      <input type="radio"  name="gender" id="gender" value='Female'> <label>Female</label>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqdegree" class="form-group">
                      <label class="control-label" for="inputSuccess">Degree<br><div id="warning-degree"></div></label>
                      <input type="text"   class="form-control" name="degree" id="degree" placeholder="Input Degree">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqmasteral" class="form-group">
                      <label class="control-label" for="inputSuccess">Masteral/Others<br><div id="warning-fname"></div></label>
                      <input type="text"   class="form-control" name="masteral" id="masteral" placeholder="Input Masteral">
                    </div>
                  </div>
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
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Proctor</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-12">
                      <div id="hasclass" class="form-group">
                        <label class="control-label" for="inputSuccess">Teacher ID<br><div id="validate-edit-idnum"></div></label>
                        <input type="text" class="form-control" id="editidnum"  style="width:30%">
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqfnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">First Name<br><div id="warning-fname"></div></label>
                      <input type="text" class="form-control" id="editfname" >
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqmnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">Middle Name<br><div id="warning-mname"></div></label>
                      <input type="text" class="form-control" id="editmname">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqlnamec" class="form-group">
                      <label class="control-label" for="inputSuccess">Last Name<br><div id="warning-lname"></div></label>
                      <input type="text" class="form-control" id="editlname">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div id="reqgender" class="form-group">
                      <label class="control-label" for="inputSuccess">Gender: <br><div id="warning-gender"></div></label>
                      <input type="radio"   name="editgender" id="editgender" checked value='Male'> <label>Male</label>
                      <input type="radio"  name="editgender" id="editgender" value='Female'> <label>Female</label>
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqdegree" class="form-group">
                      <label class="control-label" for="inputSuccess">Degree<br><div id="warning-degree"></div></label>
                      <input type="text"   class="form-control" name="editdegree" id="editdegree" >
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div id="reqmasteral" class="form-group">
                      <label class="control-label" for="inputSuccess">Masteral/Others<br><div id="warning-fname"></div></label>
                      <input type="text"   class="form-control" name="editmasteral" id="editmasteral" >
                      <input type="hidden"   class="form-control" name="editteachid" id="editteachid" >
                    </div>
                  </div>
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
    <script type="text/javascript" src="../js/teachers.js"></script>
  </body>
  </html>
