
      var table = $("#studenttable").DataTable();

      $('#studenttable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');

        }
        else {
            //table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        } );

      $(document).ready(function(){
        var datastring = 'action=load&tablename=students';

        $.ajax({
          type: "POST",
          data: datastring,
          url: "../php/crud.php",
          dataType: 'json',
          success: function(data){
            table.rows.add(data).draw();
          }
        });
        return false;
      });

      $("#add").click(function(){
        $("#add-modal").modal('show');
      });

      $("#idnum, #fname, #mname, #lname, #age").keyup(function(){
        var idnum = $("#idnum").val();
        var fname = $("#fname").val();
        var mname = $("#mname").val();
        var lname = $("#lname").val();
        var age = $("#age").val();

        if(idnum!='' && fname!='' && mname!='' && lname!='' && age!=''){
           $("#save").removeClass("disabled");
        }
        else{
          $("#save").addClass("disabled");
        }
        return false;
      });

      $("#idnum").keyup(function(){
        var idnum = $("#idnum").val();
        var datastring = 'action=validate&string='+idnum+'&fieldname=stud_no&tablename=students';
        if(idnum==""){
          $("#hasclass").removeClass("has-success");
          $("#hasclass").removeClass("has-error");
          $("#validate-idnum").html(' ');
        }
        else{

          $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
              if(result=="available"){
                $("#hasclass").addClass("has-success");
                $("#hasclass").removeClass("has-error");
                $("#validate-idnum").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass").addClass("has-error");
                $("#hasclass").removeClass("has-success");
                $("#validate-idnum").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save").addClass("disabled");
              }
            }
          });

        }
        return false;
      });

      $("#save").click(function(){
        var idnum = $("#idnum").val();
        var fname = $("#fname").val();
        var mname = $("#mname").val();
        var lname = $("#lname").val();
        var age = $("#age").val();
        var gender = $('#gender[type="radio"]:checked').val();
        var datastring = 'action=add-student&idnum='+idnum+'&fname='+fname+'&mname='+mname+'&lname='+lname+'&gender='+gender+'&age='+age;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            var string = ['<input type="checkbox" name="stud_id" id="stud_id" value='+result+'>',idnum,fname+' '+mname+' '+lname,gender,age];
            var rownode = table.row.add(string).draw().node();
            $(rownode).css('background-color','#00FF7F');
            $("#add-modal").modal('hide');
            document.getElementById('idnum').value='';
            document.getElementById('fname').value='';
            document.getElementById('mname').value='';
            document.getElementById('lname').value='';
            document.getElementById('age').value='';
            $("#save").addClass("disabled");
             $("#hasclass").removeClass("has-success");
            $("#validate-idnum").html(' ');
          }
        });
        return false;
      });

      $("#edit").click(function(e){
        var id = $('#stud_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-content&id='+id+'&tablename=students&fieldname=stud_id';
        if(id==null){
          alert("Select a student");
        }
        else{
          $('#edit-modal').modal({
            backdrop: 'static',
            keyboard: false
          });

          $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            dataType: 'json',
            success: function(data){
              document.getElementById('editstudid').value=data.stud_id;
              document.getElementById('editidnum').value=data.idnum;
              document.getElementById('editfname').value=data.fname;
              document.getElementById('editmname').value=data.mname;
              document.getElementById('editlname').value=data.lname;
              document.getElementById('editage').value=data.age;

              if(data.gender =="Male"){
                $('#editgender[name="editgender"][value="Male"]').prop('checked',true);
              }
              else{
                $('#editgender[name="editgender"][value="Female"]').prop('checked',true);
              }

            }
          });
        }
        e.preventDefault();
      });

      $("#close").click(function(){
        $("#edit-modal").modal('hide');
        return false;
      });

      $("#editidnum, #editfname, #editmname, #editlname, #editage").keyup(function(){
        var idnum = $("#editidnum").val();
        var fname = $("#editfname").val();
        var mname = $("#editmname").val();
        var lname = $("#editlname").val();
        var age = $("#editage").val();

        if(idnum !='' && fname !='' && mname !='' && lname !='' && age !=''){
          $("#save-changes").removeClass("disabled");

        }
        else{
          $("#save-changes").addClass("disabled");
        }
        return false;
      });

      $("#editidnum").keyup(function(){
        var idnum = $("#editidnum").val();
        var id = $("#editstudid").val();
        var datastring = 'action=validate-edit&string='+idnum+'&id='+id+'&tablename=students&fieldnameid=stud_id&fieldname=stud_no';

        if(idnum==''){
          $("#hasclass-edit").removeClass("has-success");
          $("#hasclass-edit").removeClass("has-error");
          $("#validate-edit-idnum").html(' ');
        }
        else{
          $.ajax({
          type: "POST",
          url:"../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="available"){
                $("#hasclass-edit").addClass("has-success");
                $("#hasclass-edit").removeClass("has-error");
                $("#validate-edit-idnum").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass-edit").addClass("has-error");
                $("#hasclass-edit").removeClass("has-success");
                $("#validate-edit-idnum").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save-changes").addClass("disabled");
              }
          }
        });
        }
        return false;
      });

      $("#save-changes").click(function(e){
        var idnum = $("#editidnum").val();
        var fname = $("#editfname").val();
        var mname = $("#editmname").val();
        var lname = $("#editlname").val();
        var age = $("#editage").val();
        var gender = $('#editgender[type="radio"]:checked').val();
        var id = $("#editstudid").val();
        var datastring = 'action=edit-student&id='+id+'&idnum='+idnum+'&fname='+fname+'&mname='+mname+'&lname='+lname+'&age='+age+'&gender='+gender;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="success"){
              table.row('.selected').remove().draw(false);
               var string = ['<input type="checkbox" name="stud_id" id="stud_id" value='+id+'>',idnum,fname+' '+mname+' '+lname,gender,age];
              var rownode = table.row.add(string).draw(false).node();
               $(rownode).css('background-color','#00FF7F');
               $("#edit-modal").modal('hide');
            }
            else{
              alert("Error to update");
            }
          }
        });
        e.preventDefault();
      });

      $("#delete").click(function(){
        var id = $('#stud_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'delete','id':id,'fieldnameid':'stud_id','tablename':'students'};
        if(id==''){
          alert("Select at least one student");
        }
        else{
          var con = confirm('Are you sure you want to delete this items(s)?');

          if(con==true){
            $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            success: function(result){
              if(result=="success"){
                table.rows('.selected').remove().draw(false);
              }
              else{
                alert("There's an error in deleting some items");
              }
            }
          });
          }
        }

        return false;
      });
