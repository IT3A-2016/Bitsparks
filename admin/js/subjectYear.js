
      var table = $("#yearlevel").DataTable();
       var table1 = $("#subjecttable").DataTable();
       var table2 = $("#subjecttable2").DataTable();


      $('#subjecttable2 tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');

        }
        else {
            //table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        } );

      $(document).ready(function(){
        var datastring = 'action=load&tablename=year_level';

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

      $("#add").click(function(e){

        var id = $('#year_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-year-name&id='+id;
        if(id==null){
          alert("Please select at least one year level");

        }
        else{
           $("#add-modal").modal({
            backdrop: 'static',
            keyboard: false
           });

           $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            success: function(name){
              $("#year_name").html(name);
            }
           });
        }
        e.preventDefault();
      });

      $("#add").click(function(){

         var datastring = 'action=load&tablename=subjects';
         table1.rows().remove().draw();
        $.ajax({
          type: "POST",
          data: datastring,
          url: "../php/crud.php",
          dataType: 'json',
          success: function(data){
            table1.rows.add(data).draw();
          }
        });

        return false;

      });

      $("#close").click(function(){
        $("#add-modal").modal('hide');
        $("#warning").html('');
        return false;
      });

      $("#save").click(function(){
         var grade = $('#year_id[type="checkbox"]:checked').val();
        var subj_id = $('#subj_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'add-subjects-grades','grade':grade,'subject':subj_id};

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="success"){
              $("#warning").html('<div class="callout callout-info"><p>Successfully Added</p></div>');


            }
            else if(result=="notcomplete"){
              $("#warning").html('<div class="callout callout-info"><p>Some of the subject(s) is not added because its already been added. Try to view the subjects.</p> </div>');


            }
            else{
              $("#warning").html('<div class="callout callout-info"> <p>Error in Adding Subjects</p> </div>');


            }
          }
        });
        return false;
      });




     $("#view").click(function(e){

       var id = $('#year_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-year-name&id='+id;
        if(id==null){
          alert("Please select at least one year level");

        }
        else{
           $("#view-modal").modal({
            backdrop: 'static',
            keyboard: false
           });

           $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            success: function(name){
              $("#view-year-name").html(name);
            }
           });
        }
        e.preventDefault();
     });

     $("#view").click(function(){
         var id = $('#year_id[type="checkbox"]:checked').val();
         var datastring = 'action=loadyearsubjects&id='+id;
         table2.rows().remove().draw();
        $.ajax({
          type: "POST",
          data: datastring,
          url: "../php/crud.php",
          dataType: 'json',
          success: function(data){
            table2.rows.add(data).draw();
          }
        });

        return false;

      });

      $("#close-view").click(function(){
        $("#view-modal").modal('hide');
        return false;
      });


      $("#delete").click(function(){
        var id = $('#yls_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'delete','id':id,'fieldnameid':'yls_id','tablename':'year_level_subject'};
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
                table2.rows('.selected').remove().draw(false);
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

      $("#print-subject").click(function(){
        var id = $('#year_id[type="checkbox"]:checked').val();
        window.open('subject-print.php?id='+id);
      });
