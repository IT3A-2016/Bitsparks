
      var table = $("#teachertable").DataTable();

      $('#teachertable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');

        }
        else {
            //table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        } );

      $(document).ready(function(){
        var datastring = 'action=load&tablename=teachers';

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

      $("#idnum, #fname, #mname, #lname, #degree").keyup(function(){
        var idnum = $("#idnum").val();
        var fname = $("#fname").val();
        var mname = $("#mname").val();
        var lname = $("#lname").val();
        var degree = $("#degree").val();
        var masteral = $("#masteral").val();

        if(idnum!='' && fname!='' && mname!='' && lname!='' && degree!=''){
           $("#save").removeClass("disabled");
        }
        else{
          $("#save").addClass("disabled");
        }
        return false;
      });

      $("#idnum").keyup(function(){
        var idnum = $("#idnum").val();
        var datastring = 'action=validate&string='+idnum+'&fieldname=teach_no&tablename=teachers';
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
        var degree = $("#degree").val();
        var masteral = $("#masteral").val();
        var gender = $('#gender[type="radio"]:checked').val();
        var datastring = 'action=add-teacher&idnum='+idnum+'&fname='+fname+'&mname='+mname+'&lname='+lname+'&gender='+gender+'&degree='+degree+'&masteral='+masteral;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            var string = ['<input type="checkbox" name="teach_id" id="teach_id" value='+result+'>',idnum,fname+' '+mname+' '+lname,gender,degree,masteral];
            var rownode = table.row.add(string).draw().node();
            $(rownode).css('background-color','#00FF7F');
            $("#add-modal").modal('hide');
            document.getElementById('idnum').value='';
            document.getElementById('fname').value='';
            document.getElementById('mname').value='';
            document.getElementById('lname').value='';
            document.getElementById('degree').value='';
            document.getElementById('masteral').value='';
            $("#save").addClass("disabled");
             $("#hasclass").removeClass("has-success");
            $("#validate-idnum").html(' ');
          }
        });
        return false;
      });

      $("#edit").click(function(e){
        var id = $('#teach_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-content&id='+id+'&tablename=teachers&fieldname=teach_id';
        if(id==null){
          alert("Select a teacher");
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
              document.getElementById('editteachid').value=data.teach_id;
              document.getElementById('editidnum').value=data.idnum;
              document.getElementById('editfname').value=data.fname;
              document.getElementById('editmname').value=data.mname;
              document.getElementById('editlname').value=data.lname;
              document.getElementById('editdegree').value=data.degree;
              document.getElementById('editmasteral').value=data.masteral;

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

      $("#editidnum, #editfname, #editmname, #editlname, #editdegree, #editmasteral").keyup(function(){
        var idnum = $("#editidnum").val();
        var fname = $("#editfname").val();
        var mname = $("#editmname").val();
        var lname = $("#editlname").val();
        var degree = $("#editdegree").val();
        var masteral = $("#editmasteral").val();

        if(idnum !='' && fname !='' && mname !='' && lname !='' && degree !='' && masteral !=''){
          $("#save-changes").removeClass("disabled");

        }
        else{
          $("#save-changes").addClass("disabled");
        }
        return false;
      });

      $("#editidnum").keyup(function(){
        var idnum = $("#editidnum").val();
        var id = $("#editteachid").val();
        var datastring = 'action=validate-edit&string='+idnum+'&id='+id+'&tablename=teachers&fieldnameid=teach_id&fieldname=teach_no';

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
        var degree = $("#editdegree").val();
        var masteral = $("#editmasteral").val();
        var gender = $('#editgender[type="radio"]:checked').val();
        var id = $("#editteachid").val();
        var datastring = 'action=edit-teacher&id='+id+'&idnum='+idnum+'&fname='+fname+'&mname='+mname+'&lname='+lname+'&degree='+degree+'&masteral='+masteral+'&gender='+gender;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="success"){
              table.row('.selected').remove().draw(false);
               var string = ['<input type="checkbox" name="teach_id" id="teach_id" value='+id+'>',idnum,fname+' '+mname+' '+lname,gender,degree,masteral];
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
        var id = $('#teach_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'delete','id':id,'fieldnameid':'teach_id','tablename':'teachers'};
        if(id==''){
          alert("Select at least one teacher");
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
