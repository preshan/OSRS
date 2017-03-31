<?php
   session_start();
   if(isset($_SESSION["BasicDetails"])){
    $row = $_SESSION["BasicDetails"];
  }
  if(isset($_SESSION["StudentATIDetails"])){
    $row2 = $_SESSION["StudentATIDetails"];
  }
  if(isset($_SESSION["ALExamDetails"])){
    $row7 = $_SESSION["ALExamDetails"];
  }
   ?>
  }
<!DOCTYPE html>
<html>
    <div>
                  <p class="w3-text-teal"><b>Course</b></p>
                  <a onclick="document.getElementById('id03').style.display='block', loadCourseDoc()" class="w3-btn w3-teal w3-section">Add Course</a>
                  <table class="w3-table w3-striped" id='appendcoursetext' >
                    <tr id="courseheading">
                      <th>Course Name</th>
                      <th>Priority</th>
                    </tr>
                     <?php 
                   
                     if(isset($_SESSION["BasicDetails"])){
                   
                    $query1      = 'SELECT S.CourseKey,S.StudentKey,S.Priority,SM.CourseID from studentcoursemap S inner join coursemaster SM on S.CourseKey = SM.CourseKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
                    
                     $result = $connection->query($query1);
                      while ($row = $result->fetch_assoc()) {

                        echo '<tr id="coursetr'.$row['CourseKey'].'"><td>'.$row['CourseID'].'</td>'
                            .'<td>'.$row['Priority'].'</td><input type="hidden" class="priorityclass" value="'.$row['Priority'].'" />'
                            .'<td>'
                            .'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletecourse" onclick="deleteCourse(\''.$row['CourseKey'].'\',\''.$row['Priority'].'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                             .'</tr>';

                      }
                    }

                    ?>
                    </table>
               </div>
               <div class=" w3-container   w3-padding w3-card-2" id='declaration'  >
               
         <header class="w3-container w3-teal">
            <h4>Declaration</h4>
         </header>
         <p>  I do hereby declare that I am not following any other full-time course of study 
            in any other state institution. I am aware that my registration will be canceled 
            at any time during the period of study if it is found that, I concurrently follow 
            a full-time course at any other state institution. I do hereby certify that the 
            information furnished here is true and accurate to the best of my knowledge.
         </p>
         <label >
            <input  class="w3-check" type="checkbox" > I have read and accept the above terms.
            <div class="w3-checkmark"></div>
           
         </label>
         
         </div>
      </div>
      </div>
</html>