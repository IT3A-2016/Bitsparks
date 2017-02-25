var chart = Morris.Bar({
element: 'bar-chart',
data: [0,0],
xkey: 'y',
ykeys: ['a'],
labels: ['No. of Students']
});

$("#sy").forceNumeric();

$("#sy").keyup(function(){
var sy =  $("#sy").val();
var year = sy * 2/2+1;
var schoolyear = sy+'-'+year;
var datastring = 'action=getdatachart&sy='+schoolyear;
if(sy==''){
  $("#year").html(' ');
}
else{
  $("#year").html('School Year '+sy+'-'+year);
  $.ajax({
    type:"POST",
    url:"../php/crud.php",
    dataType:'json',
    data:datastring,
    success: function(data){
      chart.setData(data);
    }
  });
}
  return false;
});
