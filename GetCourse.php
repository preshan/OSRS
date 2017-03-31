<?php
 session_start();

include('DBconnection.php');
$q = '';
$q = $_REQUEST["q"];

$connection = db_connect();
$query1      = 'select T1.CourseKey,T1.CourseID,T2.Priority from coursemaster T1 left join (select * from studentcoursemap where StudentKey=?) T2 on T1.CourseKey =T2.CourseKey where (ifnull(?,"")="" or T1.CourseID like ? or T1.CourseID like ? ) ORDER BY T1.CourseID';


$stmt = $connection->stmt_init();
$value = '';
if (!$stmt->prepare($query1)) {
    print "Failed to prepare statement\n";
} else {

  
    $stmt->bind_param("ssss",$param0, $param1, $param2, $param3);

    if(isset($_SESSION["BasicDetails"])){
    $param0 =  $_SESSION["StudentKey"];
  }
  else{
    $param0 =  '';
  }
    
    $param1 = $q;
    $param2 = "%".$q . "%";
    $param3 = "%" . $q;
    
    $stmt->execute();

    $result = $stmt->get_result();
    
    
    while ($row = $result->fetch_assoc()) {

      $addbtn = '';
      $priority = '';
      if ($row["Priority"]==''){
       
        $addbtn = '<a id="addcoursebtn' . $row["CourseKey"] . '" class="w3-btn w3-white w3-tiny w3-border " onclick="appendCourseText(\'' . $row["CourseID"] . '\',\'' . $row["CourseKey"] . '\')" ><i class="glyphicon glyphicon-plus" style="color:#009688"></i> Add</a>';

         $priority='<select class="w3-select w3-border" id="coursepriority' . $row["CourseKey"] . '" name="option">
          <option value="0"  disabled selected>Choose Priority</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>';

      }
      else{
        $addbtn = '<span id="coursehelptext" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>';

        $priority='<input type="text" style="width:100%" id="coursepriority' . $row["CourseKey"] . '" value="'.$row["Priority"].'" readonly="true" />';

      }
        $value = $value . '<tr>
          <td>' . $row["CourseID"] . '</td>
          <td>'.$priority.'
          </td>
          <td>
          '.$addbtn.'
          </td>
       </tr>';
    }
  }
  echo $value;



?>