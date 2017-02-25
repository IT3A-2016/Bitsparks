$(document).ready(function(){
  var datastring = 'action=dropdown&tablename=year_level';

  $.ajax({
    type:"POST",
    url: "../php/crud.php",
    data: datastring,
    success: function(data){
      $("#year_level").html(data);
    }
  });

  return false;
});
$("#sy").forceNumeric();

$("#sy").keyup(function(){
  var sy1 =  $("#sy").val();
  var sy2 = sy1 *2/2+1;
  var schoolyear = sy1+'-'+sy2;

  if(sy1==''){
    $("#sy2").html('');
  }
  else{
    $("#sy2").html('-'+sy2);
  }

  return false;
});

$("#create").click(function(){
  var sy1 =  $("#sy").val();
  var sy2 = sy1 *2/2+1;
  var schoolyear = sy1+'-'+sy2;
  var year = $("#year_level").val();


  if(sy1==''){
    alert('School Year Required');
  }
  else if(year==0){
    alert('Year Level Required');
  }
  else{
    $("#createsched").show();
    $("#create").hide();
    $("#view").hide();
    $("#cancel").show();
    $("#print-sched").hide();
  }

});

$("#generateschedule").click(function(){
  var sy1 =  $("#sy").val();
  var sy2 = sy1 *2/2+1;
  var schoolyear = sy1+'-'+sy2;
  var year = $("#year_level").val();
  var room = $("#room").val();
  var datastring = 'action=generate-schedule&sy='+schoolyear+'&year='+year+'&room='+room;
   if(sy1==''){
    alert('School Year Required');
  }
  else if(year==0){
    alert('Year Level Required');
  }
  else if(room==''){
    alert("Room Required");
  }
  else{
    $.ajax({
    type:"POST",
    url: "../php/crud.php",
    data: datastring,
    success: function(result){
      $("#results").html(result);
    }
  });
  }


  return false;
});

$("#cancel").click(function(){
    $("#createsched").hide();
    $("#create").show();
    $("#view").show();
    $("#cancel").hide();
    $("#print-sched").show();

});

function updateteacher(sched_id){
  var teach_id = $('#selteacher option:selected').val();
  alert(sched_id+' '+teach_id);

  e.preventDefault();
}
