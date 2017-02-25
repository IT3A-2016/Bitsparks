<?php

include "functions.php";

$host = "localhost";
$user = "root";
$password = "";
$db = "faithscheduling";

$con = mysql_connect($host,$user,$password) or die ("Error selecting database");

$seldb = mysql_select_db($db) or die ("Error selecting Database");


$action = $_POST["action"];

switch ($action) {
	case 'load':
		$tablename = sanitized($_POST['tablename']);
		loaddata($tablename);
		break;
	case 'getdatachart':
		$sy = sanitized($_POST['sy']);
		getdatachart($sy);
		break;
	case 'validate':
		$string = sanitized($_POST['string']);
		$fieldname = sanitized($_POST['fieldname']);
		$tablename = sanitized($_POST['tablename']);
		validate($string,$fieldname,$tablename);
		break;
	case 'validate-edit':
		$string = sanitized($_POST['string']);
		$id = sanitized($_POST['id']);
		$fieldname = sanitized($_POST['fieldname']);
		$tablename = sanitized($_POST['tablename']);
		$fieldnameid = sanitized($_POST['fieldnameid']);
		validate_edit($string,$id,$tablename,$fieldname,$fieldnameid);
		break;
	case 'validate-section':
		$section = sanitized($_POST['section']);
		$grade = sanitized($_POST['grade']);
		validate_section($section,$grade);
		break;
	case 'validate-section-edit':
		$section = sanitized($_POST['section']);
		$grade = sanitized($_POST['grade']);
		$id = sanitized($_POST['id']);
		validate_section_edit($section,$grade,$id);
		break;
	case 'get-content':
		$id = sanitized($_POST['id']);
		$tablename = sanitized($_POST['tablename']);
		$fieldname = sanitized($_POST['fieldname']);
		get_content($id,$tablename,$fieldname);
		break;
	case 'delete':
		$tablename = sanitized($_POST['tablename']);
		$fieldname = sanitized($_POST['fieldnameid']);
		deletequery($_POST['id'],$tablename,$fieldname);
		break;
	case 'add-subject':
		$code = sanitized($_POST['code']);
		$desc = sanitized($_POST['desc']);
		$units = sanitized($_POST['units']);
		$data = array('subj_code'=>$code,'subj_desc'=>$desc,'units'=>$units);
		$tablename = 'subjects';
		addquery($data,$tablename);
		echo mysql_insert_id();
		break;
	case 'edit-subject':
		$code = sanitized($_POST['code']);
		$desc = sanitized($_POST['desc']);
		$units = sanitized($_POST['units']);
		$id = sanitized($_POST['id']);
		$data = array('subj_code'=>$code,'subj_desc'=>$desc,'units'=>$units);
		$tablename = "subjects";
		$fieldname = "subj_id";
		editquery($id,$fieldname,$data,$tablename);
		break;
	case 'add-year-level':
		$year = sanitized($_POST['year']);
		$section = sanitized($_POST['section']);
		$data = array('year_level'=>$year,'section'=>$section);
		$tablename = 'year_level';
		addquery($data,$tablename);
		echo mysql_insert_id();
		break;
	case 'edit-year-level':
		$year = sanitized($_POST['year']);
		$section = sanitized($_POST['section']);
		$id = sanitized($_POST['id']);
		$data = array('year_level'=>$year,'section'=>$section);
		$tablename = "year_level";
		$fieldname = "year_id";
		editquery($id,$fieldname,$data,$tablename);
		break;
	case 'add-teacher':
		$idnum = sanitized($_POST['idnum']);
		$fname = sanitized($_POST['fname']);
		$mname = sanitized($_POST['mname']);
		$lname = sanitized($_POST['lname']);
		$gender = sanitized($_POST['gender']);
		$degree = sanitized($_POST['degree']);
		$masteral = sanitized($_POST['masteral']);
		$data = array('teach_no'=>$idnum,'teach_fname'=>$fname,'teach_mname'=>$mname,'teach_lname'=>$lname,'teach_degree'=>$degree,'teach_gender'=>$gender,'teach_masteral'=>$masteral);
		$tablename = 'teachers';
		addquery($data,$tablename);
		echo mysql_insert_id();
		break;
	case 'edit-teacher':
		$idnum = sanitized($_POST['idnum']);
		$fname = sanitized($_POST['fname']);
		$mname = sanitized($_POST['mname']);
		$lname = sanitized($_POST['lname']);
		$gender = sanitized($_POST['gender']);
		$degree = sanitized($_POST['degree']);
		$masteral = sanitized($_POST['masteral']);
		$id = sanitized($_POST['id']);
		$data = array('teach_no'=>$idnum,'teach_fname'=>$fname,'teach_mname'=>$mname,'teach_lname'=>$lname,'teach_degree'=>$degree,'teach_masteral'=>$masteral,'teach_gender'=>$gender);
		$tablename = "teachers";
		$fieldname = "teach_id";
		editquery($id,$fieldname,$data,$tablename);
		break;
	case 'add-student':
		$idnum = sanitized($_POST['idnum']);
		$fname = sanitized($_POST['fname']);
		$mname = sanitized($_POST['mname']);
		$lname = sanitized($_POST['lname']);
		$gender = sanitized($_POST['gender']);
		$age = sanitized($_POST['age']);
		$data = array('stud_no'=>$idnum,'stud_fname'=>$fname,'stud_mname'=>$mname,'stud_lname'=>$lname,'stud_age'=>$age,'stud_gender'=>$gender);
		$tablename = 'students';
		addquery($data,$tablename);
		echo mysql_insert_id();
		break;
	case 'edit-student':
		$idnum = sanitized($_POST['idnum']);
		$fname = sanitized($_POST['fname']);
		$mname = sanitized($_POST['mname']);
		$lname = sanitized($_POST['lname']);
		$gender = sanitized($_POST['gender']);
		$id = sanitized($_POST['id']);
		$age = sanitized($_POST['age']);
		$data = array('stud_no'=>$idnum,'stud_fname'=>$fname,'stud_mname'=>$mname,'stud_lname'=>$lname,'stud_age'=>$age,'stud_gender'=>$gender);
		$tablename = 'students';
		$fieldname = "stud_id";
		editquery($id,$fieldname,$data,$tablename);
		break;
	case 'dropdown':
		$tablename = sanitized($_POST['tablename']);
		dropdown($tablename);
		break;
	case 'getstudentbyyear':
		$sy = sanitized($_POST['sy']);
		getstudentbyyear($sy);
		break;
	case 'enroll-student':
		$year = sanitized($_POST['year']);
		$sy = sanitized($_POST['sy']);
		enroll_student($year,$sy,$_POST['stud_id']);
		getstudentbyyear($sy);
		break;
	case 'getstudentbyyearsy':
		$sy = sanitized($_POST['sy']);
		$year = sanitized($_POST['year']);
		getstudentbyyearsy($sy,$year);
		break;
	case 'get-year-name':
		$id = sanitized($_POST['id']);
		get_year_name($id);
		break;
	case 'add-subjects-grades':
		$grade = sanitized($_POST['grade']);
		add_subjects_grades($grade,$_POST['subject']);
		break;
	case 'loadyearsubjects':
		$id = sanitized($_POST['id']);
		load_year_subjects($id);
		break;
	case 'generate-schedule':
		$sy=sanitized($_POST['sy']);
		$year_id = sanitized($_POST['year']);
		$room = sanitized($_POST['room']);
		generate_schedule($sy,$year_id,$room);
		break;


}













mysql_close($con);


?>
