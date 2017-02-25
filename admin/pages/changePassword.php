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
            Administrator Page
          </h1>
        </section>

       <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class = "fa fa-leaf"></i> Change Password</h3>

            </div>
            <div class="box-body">
                <br>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="col-xs-12">
                      <div> <!--Opening Div-->
                        <div class="col-xs-12">
                          <div class="col-xs-12">
                            <div id="hasclass" class="form-group">
                              <label class="control-label" for="inputSuccess">Old Password: <br></label>
                              <input type="password" class="form-control" id="oldpass" placeholder="Input Your Old Password" style="width:30%">
                              <br>
                              <label class="control-label" for="inputSuccess">New Password: <br></label>
                              <input type="password" class="form-control" id="newpass" placeholder="Input Your New Password" style="width:30%">
                              <br>
                              <label class="control-label" for="inputSuccess">Confirm Password: <br></label>
                              <input type="password" class="form-control" id="confirmpass" placeholder="Confirm your New Password" style="width:30%">
                              <br>
                              <span class="pull-left">
                                <button class="btn btn-primary" id="change"> Change Password </button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div><!--Ending Div-->
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->

          </div><!-- /.box -->
       </section>

       <div class="change-modal">
             <div class="modal fade" id="change-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">Change Password</h4>
                   </div>
                   <div class="modal-body">
                     <div class="row">
                       <div class="col-xs-12">
                         <div class="col-xs-12">
                           <div id="hasclass" class="form-group">
                             <h3>Are you sure you want to change your password?</h3>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-primary pull-left" data-toggle="tooltip" title="Reset Schedule" id="changePass" onclick="changePass();"><i class="glyphicon glyphicon-pencil" ></i> Change</button>
                   </div>
                 </div><!-- /.modal-content -->
               </div><!-- /.modal-dialog -->
             </div><!-- /.modal -->
           </div><!-- /.example-modal -->
      </div><!-- /.content-wrapper -->
     <?php footertemplate();?>
     <script type="text/javascript" src = "../js/changePasswordModal.js"></script>
  </body>
</html>
