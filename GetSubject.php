<?php
include('DBconnection.php');
$q = '';
$q = $_REQUEST["q"];

	$connection = db_connect();
  $query = 'select * from olsubjectmaster where (ifnull("'.$q.'","")="" or SubjectID like "'. $q .'%" or SubjectID like "% '. $q .'%" ) ORDER BY SubjectID';
    $result = mysqli_query($connection,$query);
	
    $value='';
	while($row = $result->fetch_assoc()) {
       $value=$value.'<tr>
          <td>'.$row["SubjectID"].'</td>
          <td><select class="w3-select w3-border" id="alsubject'.$row["SubjectKey"].'" name="option">
    <option value="0"  disabled selected>Choose Grade</option>
    <option value="1">A</option>
    <option value="2">B</option>
    <option value="3">C</option>
    <option value="4">S</option>
    <option value="5">W</option>
    <option value="6">F</option>
    <option value="7">ab</option>
  </select></td>
          <td><a id="addsubjectbtn'.$row["SubjectKey"].'" class="w3-btn w3-white w3-tiny w3-border " onclick="appendText(\''.$row["SubjectID"].'\',\''.$row["SubjectKey"].'\')" ><i class="glyphicon glyphicon-plus" style="color:#009688"></i> Add</a>
            <a id="removesubjectbtn'.$row["SubjectKey"].'" style="display:none" class="w3-btn w3-white w3-tiny w3-border " onclick="removeText(\''.$row["SubjectID"].'\',\''.$row["SubjectKey"].'\')" ><i style="color:#d60000" class="glyphicon glyphicon-remove"></i> Remove</a>
          </td>
       </tr>';
   }
   echo $value;    

?>