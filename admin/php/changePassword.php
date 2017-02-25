<?php
	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];
	$confirmPass = $_POST['confirmPass'];

	if($oldPass && $newPass && $confirmPass)
	{
		include "functionConnect.php";

		if($newPass == $confirmPass)
		{
			$query = mysql_query("SELECT * FROM admin WHERE adm_password = '" . md5($oldPass) . "'");
			$num_rows = mysql_num_rows($query);
			if($num_rows > 0)
			{
				$query = mysql_query("UPDATE admin SET adm_password = '" . md5($newPass) . "'");
				echo "success";
			}
			else
			{
				echo "wrongDetail";
			}
		}
		else
		{
			echo "notSame";
		}
	}
	else
	{
		echo "reconnect";
	}

?>
