<?php

function sanitized($string){
	$string = mysql_real_escape_string(trim($string));
	return $string;
}

function loaddata($tablename){

	$sel = mysql_query("SELECT * FROM $tablename");
	while($row=mysql_fetch_assoc($sel)){
		extract($row);

		if($tablename=="subjects"){
			$data[] = array('<input type="checkbox" name="subj_id" id="subj_id" value='.$subj_id.'>',$subj_code,$subj_desc,$units);
		}
		else if($tablename=="year_level"){
			$data[] = array('<input type="checkbox" name="year_id" id="year_id" value='.$year_id.'>',$year_level,$section);
		}
		else if($tablename=="teachers"){
			$data[] = array('<input type="checkbox" name="teach_id" id="teach_id" value='.$teach_id.'>',$teach_no,$teach_fname.' '.$teach_mname.' '.$teach_lname,$teach_gender,$teach_degree,$teach_masteral);
		}
		else if($tablename=="students"){
			$data[] = array('<input type="checkbox" name="stud_id" id="stud_id" value='.$stud_id.'>',$stud_no,$stud_fname.' '.$stud_mname.' '.$stud_lname,$stud_gender,$stud_age.' years old');
		}

	}

	echo json_encode($data);
}

function validate($string,$fieldname,$tablename){

	$val = mysql_query("SELECT $fieldname from $tablename where $fieldname='$string' ");

	$num = mysql_num_rows($val);

	if($num==0){
		echo 'available';
	}
	else{
		echo 'not';
	}
}

function validate_edit($string,$id,$tablename,$fieldname,$fieldnameid){
	$val = mysql_query("SELECT $fieldname FROM $tablename where $fieldname='$string' and $fieldnameid='$id' ");
	$num = mysql_num_rows($val);

	if($num==1){
		echo 'available';
	}
	else{
		$val2 = mysql_query("SELECT $fieldname from $tablename where $fieldname='$string' ");
		$num2 = mysql_num_rows($val2);
		if($num2==1){
			echo 'not';
		}
		else{
			echo 'available';
		}
	}
}

function validate_section($section,$grade){
	$sel = mysql_query("SELECT * from year_level where year_level='$grade' and section='$section' ");
	$num = mysql_num_rows($sel);
	if($num==1){
		echo 'failed';
	}
	else{
		echo 'available';
	}
}

function validate_section_edit($section,$grade,$id){
	$sel = mysql_query("SELECT * from year_level where year_level='$grade' and section='$section' and year_id='$id' ");
	$num = mysql_num_rows($sel);
	if($num==1){
		echo 'available';
	}
	else{
		$sel = mysql_query("SELECT * from year_level where year_level='$grade' and section='$section'");
		$num = mysql_num_rows($sel);
		if($num==1){
			echo "failed";
		}
		else{
			echo "available";
		}
	}
}

function addquery($data,$tablename){

	$fieldname = array_keys($data);

	$add = mysql_query("INSERT INTO ".$tablename."(".implode(",", $fieldname).") VALUES('".implode("','", $data)."')");
}

function get_content($id,$tablename,$fieldname){
	$sel = mysql_query("SELECT * from $tablename where $fieldname='$id' ");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);

		if($tablename=="subjects"){
			$data = array('subj_id'=>$subj_id,'subj_code'=>$subj_code,'subj_desc'=>$subj_desc,'units'=>$units);
		}
		else if($tablename=="year_level"){
			$data = array('year_id'=>$year_id,'year_level'=>$year_level,'section'=>$section);
		}
		else if($tablename=="teachers"){
			$data = array('teach_id'=>$teach_id,'fname'=>$teach_fname,'mname'=>$teach_mname,'lname'=>$teach_lname,'gender'=>$teach_gender,'degree'=>$teach_degree,'masteral'=>$teach_masteral,'idnum'=>$teach_no);
		}
		else if($tablename=="students"){
			$data = array('stud_id'=>$stud_id,'fname'=>$stud_fname,'mname'=>$stud_mname,'lname'=>$stud_lname,'gender'=>$stud_gender,'age'=>$stud_age,'idnum'=>$stud_no);
		}
	}

	echo json_encode($data);
}

function editquery($id,$fieldname,$data,$tablename){

	foreach ($data as $key => $value) {
		$val[] = "$key='$value' ";
	}
	$updatedata = implode(",", $val);

	$edit = mysql_query("UPDATE $tablename SET $updatedata WHERE $fieldname='$id' " );

	if($edit==true){
		echo 'success';
	}
	else{
		echo 'failed';
	}
}

function deletequery($id,$tablename,$fieldname){
	$count = count($id);
	$var = 0;
	foreach ($id as $subject) {
		$del = mysql_query("DELETE From $tablename where $fieldname='$subject' ");
		if($del==true){
			$var +=1;
		}
	}

	if($count==$var){
		echo 'success';
	}
	else{
		echo 'failed';
	}
}

function dropdown($tablename){
	$sel = mysql_query("SELECT * from $tablename");
			echo '<option value=0>Select Year Level</option>';
	while($row=mysql_fetch_assoc($sel)){
		extract($row);

		echo '<option value='.$year_id.'>'.$year_level.'-'.$section.'</option>';
	}
}

function getstudentbyyear($sy){
	$sel = mysql_query("SELECT * from students");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		$sel2 = mysql_query("SELECT * FROM student_year_level as syl join year_level as yl on syl.year_id=yl.year_id where syl.stud_id='$stud_id' and syl.schoolyear='$sy'");
		$num = mysql_num_rows($sel2);
		if($num==0){
			$data[] = array('<input type="checkbox" name="stud_id" id="stud_id" value='.$stud_id.'>',$stud_no,$stud_fname.' '.$stud_mname.' '.$stud_lname);
		}
		else{
			while($row=mysql_fetch_assoc($sel2)){
				extract($row);
				$data[] = array($year_level,$stud_no,$stud_fname.' '.$stud_mname.' '.$stud_lname);
			}

		}
	}
	echo json_encode($data);
}

function enroll_student($year,$sy,$stud_id){

	foreach ($stud_id as $id) {
		$insert = mysql_query("INSERT INTO student_year_level (stud_id,year_id,schoolyear) values ('$id','$year','$sy') ");
	}
}

function getstudentbyyearsy($sy,$year){
	$sel = mysql_query("SELECT * from student_year_level as syl join students as s on syl.stud_id=s.stud_id join year_level as yl on syl.year_id=yl.year_id where syl.schoolyear='$sy' and syl.year_id='$year' ");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		$data[] = array('<input type="checkbox" name="stud_id" id="stud_id" value='.$syl_id.'>',$stud_no,$stud_fname.' '.$stud_mname.' '.$stud_lname,$year_level);

	}
	echo json_encode($data);
}

function getdatachart($sy){
	$sel = mysql_query("SELECT * FROM year_level");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		$sel2 = mysql_query("SELECT * from student_year_level where year_id='$year_id' and schoolyear='$sy' ");
		$num = mysql_num_rows($sel2);
		$data[] = array('y'=>$year_level,'a'=>$num);
	}

	echo json_encode($data);
}

function get_year_name($id){
	$sel = mysql_query("SELECT * from year_level where year_id='$id' ");
	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		echo $year_level.'- '.$section;
	}
}

function add_subjects_grades($grade,$subject){
	$count = count($subject);
	$var = 0;
	foreach ($subject as $subj_id) {
		$sel = mysql_query("SELECT * from year_level_subject where subj_id='$subj_id' and year_id='$grade' ");
		$num = mysql_num_rows($sel);
		if($num==0){
			$insert = mysql_query("INSERT INTO year_level_subject (subj_id,year_id) values ('$subj_id','$grade') ");
			if($insert==true){
				$var +=1;
			}
		}
	}

	if($count==$var){
		echo 'success';
	}
	else{
		echo 'notcomplete';
	}
}

function load_year_subjects($id){
	$sel = mysql_query("SELECT * FROM year_level_subject as yls join subjects as s on yls.subj_id=s.subj_id  where yls.year_id='$id' ");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		$data[] = array('<input type="checkbox" name="yls_id" id="yls_id" value='.$yls_id.'>',$subj_code,$subj_desc);
	}
	echo json_encode($data);
}

function get_print_subjects($id){
	$totalunits = 0;
	$sel = mysql_query("SELECT * FROM year_level_subject as yls join subjects as s on yls.subj_id=s.subj_id  where yls.year_id='$id' ");
	while($row=mysql_fetch_assoc($sel)){
		extract($row);
		echo '<tr>';
		echo '<td>'.$subj_code.'</td>';
		echo '<td>'.$subj_desc.'</td>';
		echo '<td>'.$units.'</td>';
		echo '</tr>';
		$totalunits += $units;
	}
	echo '<tr>';
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
	echo '</tr>';

	echo '<tr>';
	echo '<th>Total Units</th>';
    echo '<td></td>';
	echo '<th>'.$totalunits.' units'.'</th>';
	echo '</tr>';
}

function get_print_students($year,$sy){
	$sel = mysql_query("SELECT * from student_year_level as syl join students as s on syl.stud_id=s.stud_id join year_level as yl on syl.year_id=yl.year_id where syl.schoolyear='$sy' and syl.year_id='$year' ");

	while($row=mysql_fetch_assoc($sel)){
		extract($row);

		echo '<tr>';
		echo '<td>'.$stud_no.'</td>';
		echo '<td>'.$stud_fname.' '.$stud_mname.' '.$stud_lname.'</td>';
		echo '<td>'.$stud_gender.'</td>';
		echo '<td>'.$stud_age.'</td>';
		echo '</tr>';
	}
}

function generate_schedule($sy,$year_id,$room){

	$time = array('7:30-9:00 AM','9:00-10:30 AM','10:30-12:00 PM','12:00-1:30 PM','1:30-3:00 PM','3:00-4:30 PM','4:30-6:00 PM','6:00-7:30 PM','7:30-9:00 PM');
	$timecount = count($time);
	$first = "first";
	$second = "second";
	$third = "third";

	$val = mysql_query("SELECT * FROM schedule as sched join year_level_subject as yls on sched.yls_id=yls.yls_id where  sched.schoolyear='$sy' and yls.year_id='$year_id' ");
	$num = mysql_num_rows($val);


	if($num>0){
		echo '<div class="callout callout-danger">
                    <h4>Unable to generate Schedule</h4>
                    <p>This year level in this school year already have schedule try to view the schedule.</p>
                  </div>';
	}
	else{
		$yls = mysql_query("SELECT * from year_level_subject where year_id='$year_id'");
		$x = 0;
		while($row=mysql_fetch_assoc($yls)){
			extract($row);

			$sel = mysql_query("SELECT * FROM schedule as sched join year_level_subject as yls on sched.yls_id=yls.yls_id where sched.schoolyear='$sy' and yls.year_id='$year_id' ");
			$num = mysql_num_rows($sel);
			if($num<3){
				$timehr = $time[$x];
				$ins = mysql_query("INSERT INTO schedule (timehr,days,schoolyear,yls_id,room) VALUEs ('$timehr','$first','$sy','$yls_id','$room') ");
				$x +=1;
			}
			elseif($num>=3 && $num<6){
				$timehr = $time[$x];
				$ins = mysql_query("INSERT INTO schedule (timehr,days,schoolyear,yls_id,room) VALUEs ('$timehr','$second','$sy','$yls_id','$room') ");
				$x +=1;
			}
			else{
				$timehr = $time[$x];
				$ins = mysql_query("INSERT INTO schedule (timehr,days,schoolyear,yls_id,room) VALUEs ('$timehr','$third','$sy','$yls_id','$room') ");
				$x +=1;
			}

		}
		get_schedule($sy,$year_id);
	}

}

function get_schedule($sy,$year_id){
	$sel = mysql_query("SELECT * FROM schedule as sched join year_level_subject as yls on sched.yls_id=yls.yls_id join subjects as s on yls.subj_id=s.subj_id where sched.schoolyear='$sy' and yls.year_id='$year_id' ");
	echo '<table class="table table-bordered table-hover">';
	echo '<thead>
		  <tr>
		  <th>Time</th>
		  <th>Days</th>
		  <th>Subject</th>
		  <th>Teacher</th>
		  </tr>
		  </thead>';

	while($row=mysql_fetch_array($sel)){
		extract($row);
		echo '<tr>';
		echo '<td>'.$timehr.'</td>';
		if($days=="first"){
			echo '<td>First Day</td>';
		}
		elseif($days=="second"){
			echo '<td>Second Day</td>';
		}
		else{
			echo '<td>Third Day</td>';
		}
		echo '<td>'.$subj_code.' '.$subj_desc.'</td>';
		$teach = mysql_query("SELECT * FROM teachers");
		echo '<td><select id="selteacher" onchange="updateteacher('.$sched_id.')" >
			  <option value=0>Select Teacher</option>

		';
		while($row=mysql_fetch_assoc($teach)){
			extract($row);
			echo '<option value='.$teach_id.'>'.$teach_fname.' '.$teach_mname.' '.$teach_lname.'</option>';
		}
		echo '</select></td>';

		echo '</tr>';

	}
	echo '</table>';

}



?>
