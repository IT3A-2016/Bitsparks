
      var table = $("#subjecttable").DataTable();

      $('#subjecttable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');

        }
        else {
            //table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        } );

      $(document).ready(function(){
        var datastring = 'action=load&tablename=subjects';

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

      $("#subjcode, #subjdesc,#units ").keyup(function(){
        var code = $("#subjcode").val();
        var desc = $("#subjdesc").val();
        var units = $("#units").val();
        if(code!='' && desc!='' && units!=''){
           $("#save").removeClass("disabled");
        }
        else{
          $("#save").addClass("disabled");
        }
        return false;
      });

      $("#subjdesc").keyup(function(){
        var desc = $("#subjdesc").val();
        var datastring = 'action=validate&string='+desc+'&fieldname=subj_desc&tablename=subjects';
        if(desc==""){
          $("#hasclass").removeClass("has-success");
          $("#hasclass").removeClass("has-error");
          $("#validate-add-subject").html(' ');
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
                $("#validate-add-subject").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass").addClass("has-error");
                $("#hasclass").removeClass("has-success");
                $("#validate-add-subject").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save").addClass("disabled");
              }
            }
          });

        }
        return false;
      });

      $("#save").click(function(){
        var code = $("#subjcode").val();
        var desc = $("#subjdesc").val();
        var units = $("#units").val();
        var datastring = 'action=add-subject&code='+code+'&desc='+desc+'&units='+units;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            var string = ['<input type="checkbox" name="subj_id" id="subj_id" value='+result+'>',code,desc,units];
            var rownode = table.row.add(string).draw().node();
            $(rownode).css('background-color','');
            $("#add-modal").modal('hide');
            document.getElementById('subjcode').value='';
            document.getElementById('subjdesc').value='';
            document.getElementById('units').value='';
            $("#save").addClass("disabled");
             $("#hasclass").removeClass("has-success");
            $("#validate-add-subject").html(' ');
          }
        });
        return false;
      });

      $("#edit").click(function(e){
        var id = $('#subj_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-content&id='+id+'&tablename=subjects&fieldname=subj_id';
        if(id==null){
          alert("Select a subject");
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
              document.getElementById('editsubjid').value=data.subj_id;
              document.getElementById('editsubjcode').value=data.subj_code;
              document.getElementById('editsubjdesc').value=data.subj_desc;
               document.getElementById('editunits').value=data.units;
            }
          });
        }
        e.preventDefault();
      });

      $("#close").click(function(){
        $("#edit-modal").modal('hide');
        return false;
      });

      $("#editsubjcode, #editsubjdesc, #editunits").keyup(function(){
        var code = $("#editsubjcode").val();
        var desc = $("#editsubjdesc").val();
        var units = $("#editunits").val();
        var id = $("#editsubjid").val();

        if(code !='' && desc !='' && id !='' && units!=''){
          $("#save-changes").removeClass("disabled");

        }
        else{
          $("#save-changes").addClass("disabled");
        }
        return false;
      });

      $("#editsubjdesc").keyup(function(){
        var desc = $("#editsubjdesc").val();
        var id = $("#editsubjid").val();
        var datastring = 'action=validate-edit&string='+desc+'&id='+id+'&tablename=subjects&fieldnameid=subj_id&fieldname=subj_desc';

        if(desc==''){
          $("#hasclass-edit").removeClass("has-success");
          $("#hasclass-edit").removeClass("has-error");
          $("#validate-edit-subject").html(' ');
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
                $("#validate-edit-subject").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass-edit").addClass("has-error");
                $("#hasclass-edit").removeClass("has-success");
                $("#validate-edit-subject").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save-changes").addClass("disabled");
              }
          }
        });
        }
        return false;
      });

      $("#save-changes").click(function(e){
        var code = $("#editsubjcode").val();
        var desc = $("#editsubjdesc").val();
        var id = $("#editsubjid").val();
        var units = $("#editunits").val();
        var datastring = 'action=edit-subject&id='+id+'&code='+code+'&desc='+desc+'&units='+units;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="success"){
              table.row('.selected').remove().draw(false);
              var string = ['<input type="checkbox" name="subj_id" id="subj_id" value='+id+'>',code,desc,units];
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
        var id = $('#subj_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'delete','id':id,'fieldnameid':'subj_id','tablename':'subjects'};
        if(id==''){
          alert("Select at least one subject");
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
