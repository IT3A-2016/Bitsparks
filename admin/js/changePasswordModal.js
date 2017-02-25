$("#change").click(function()
{
  $("#change-modal").modal('show');
});
function changePass()
{
	var oldpass = $("#oldpass").val();
	var newpass = $("#newpass").val();
	var confirmpass = $("#confirmpass").val();
	$.post("../php/changePassword.php",{oldPass:oldpass,newPass:newpass,confirmPass:confirmpass},function(data){
		if(data == "success")
		{
			alert("Password has been changed!");
      $("#change-modal").modal('hide');
			location.replace("changePassword.php");
		}
		else if(data == "reconnect")
		{
			alert("Please fill up all the fields!");
		}
		else if(data == "notSame")
		{
			alert("New password doesn't match to confirmation!");
			$("#confirmpass").val("");
			$("#newpass").val("");
		}
		else if(data == "wrongDetail")
		{
			alert("Current password doesn't match to your account!");
		}
	});
}
