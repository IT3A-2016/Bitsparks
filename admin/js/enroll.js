var table = $("#studenttable").DataTable();
var table2 = $("#studenttable2").DataTable();

$('#studenttable2 tbody').on( 'click', 'tr', function () {
  if ( $(this).hasClass('selected') ) {
      $(this).removeClass('selected');

  }
  else {
      //table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
  }

  } );

$(document).ready(function(){
  var datastring = 'action=dropdown&tablename=year_level';

  $.ajax({
        type: "POST",
        data:datastring,
        url:"../php/crud.php",
        success: function(result){
          $("#year, #year1").html(result);
        }
      });
});

$("#sy").keyup(function(){
  var sy = $("#sy").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  if(sy==''){
    $("#sy2").html('');
  }
  else{
    $("#sy2").html('- '+sy2);
  }

});

$("#sy3").keyup(function(){
  var sy = $("#sy3").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  if(sy==''){
    $("#sy4").html('');
  }
  else{
    $("#sy4").html('- '+sy2);
  }

});

$("#ok").click(function(){
  var sy = $("#sy").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  var datastring = 'action=getstudentbyyear&sy='+schoolyear;
  if(sy==''){

  }
  else{
    $.ajax({
        type: "POST",
        data:datastring,
        url:"../php/crud.php",
        dataType: "json",
        success: function(result){
          table.rows().remove().draw();
          table.rows.add(result).draw();
          $("#yr").show();
          $("#x").show();
        }
      });
  }


  return false;
});

$("#x").click(function(){
  $("#yr").hide();
  $("#x").hide();
  table.rows().remove().draw();
  document.getElementById('sy').value='';
  $("#sy2").html('');
});

$("#sy, #sy3").forceNumeric();

$("#add").click(function(){
  var year = $("#year").val();
  var sy = $("#sy").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  var id = $('#stud_id[type="checkbox"]:checked').map(function(){
          return this.value;
      }).get();
  var datastring = {'action':'enroll-student','sy':schoolyear,'year':year,'stud_id':id};
  if(year==0){
    alert("Year Level is required");
  }
  else if(id==null){
    alert("Please select at least one student to enroll");
  }
  else{
    $.ajax({
      type: "POST",
      url:"../php/crud.php",
      data: datastring,
      dataType:'json',
      success:function(result){
        table.rows().remove().draw();
        table.rows.add(result).draw();
      }
    });
  }
  return false;
});


$("#view").click(function(){
  $("#view-modal").modal('show');
});

$("#search").click(function(){
  var year = $("#year1").val();
  var sy = $("#sy3").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  var datastring = 'action=getstudentbyyearsy&sy='+schoolyear+'&year='+year;
  if(sy=='' && year ==0){

  }
  else{
    table2.rows().remove().draw();
    $.ajax({
        type: "POST",
        data:datastring,
        url:"../php/crud.php",
        dataType: "json",
        success: function(result){

          table2.rows.add(result).draw();
        }
      });
  }


  return false;
});

$("#delete").click(function(){
  var id = $('#stud_id[type="checkbox"]:checked').map(function(){
          return this.value;
      }).get();
  var datastring = {'action':'delete','tablename':'student_year_level','id':id,'fieldnameid':'syl_id'};
  var con = confirm("Are you sure you want to delete this item(s)?");
  if(con==true){
    $.ajax({
    type:"POST",
    url:"../php/crud.php",
    data: datastring,
    success: function(result){
      if(result=="success"){
        table2.rows('.selected').remove().draw();
      }
      else{
        alert("Some items is not deleted");
      }
    }
  });
  }

  return false;
});

  $("#print-student").click(function(){
  var year = $("#year1").val();
   var sy = $("#sy3").val();
  var sy2 = sy * 2/2+1;
  var schoolyear = sy+'-'+sy2;
  window.open('student-print.php?year_id='+year+'&sy='+schoolyear);
});
