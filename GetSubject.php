<?php
 session_start();

include('DBconnection.php');
$q = '';
$q = $_REQUEST["q"];

$connection = db_connect();
$query1      = 'select T1.SubjectKey,T1.SubjectID,T2.Grade from alsubjectmaster T1 left join (select * from studentalsubjectmap where StudentKey=?) T2 on T1.SubjectKey =T2.SubjectKey where (ifnull(?,"")="" or T1.SubjectID like ? or T1.SubjectID like ? ) ORDER BY SubjectID';


$stmt = $connection->stmt_init();
if(isset($_SESSION["BasicDetails"])){
if (!$stmt->prepare($query1)) {
    print "Failed to prepare statement\n";
} else {

  
    $stmt->bind_param("ssss",$param0, $param1, $param2, $param3);
    $param0 =  $_SESSION["StudentKey"];
    $param1 = $q;
    $param2 = $q . "%";
    $param3 = "%" . $q;
    
    $stmt->execute();

    $result = $stmt->get_result();
    
    $value = '';
    while ($row = $result->fetch_assoc()) {

      $addbtn = '';
      $grade = '';
      if ($row["Grade"]==''){
        echo $row["Grade"];
        $addbtn = '<a id="addsubjectbtn' . $row["SubjectKey"] . '" class="w3-btn w3-white w3-tiny w3-border " onclick="appendText(\'' . $row["SubjectID"] . '\',\'' . $row["SubjectKey"] . '\')" ><i class="glyphicon glyphicon-plus" style="color:#009688"></i> Add</a>';

        $grade='<select class="w3-select w3-border" id="alsubject' . $row["SubjectKey"] . '" name="option">
          <option value="0"  disabled selected>Choose Grade</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="S">S</option>
          <option value="W">W</option>
          <option value="F">F</option>
          <option value="ab">ab</option>
        </select>';
      }
      else{
        $addbtn = '<span id="helptext" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>';

         $grade='<input type="text" style="width:100%" id="alsubject' . $row["SubjectKey"] . '" value="'.$row["Grade"].'" readonly="true" />';
      }
        $value = $value . '<tr>
          <td>' . $row["SubjectID"] . '</td>
          <td>
          '.$grade.'
          </td>
          <td>'.$addbtn.'
          </td>
       </tr>';
    }
  }
  echo $value;
}


?>