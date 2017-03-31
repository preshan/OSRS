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

<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="CSS/w3.css" type="text/css"/>
      <link rel="stylesheet" href="CSS/bootstrap.min.css" type="text/css"/>
      <link rel="stylesheet" href="CSS/styles.css" type="text/css"/>
      <link rel="stylesheet" href="CSS/iao-alert.css" type="text/css"/>
      <script src="JS/jquery.min.js" type="text/javascript"></script>
      <script src="JS/jquery.min.js"></script>
      <script src="JS/bootstrap.min.js"></script>
      <script src="JS/iao-alert.jquery.js" type="text/javascript"></script>
      <title>Register</title>
   </head>
   <body >
   <div class="container-fluid" style="background-color:#00968F;color:#fff;height:130px;">
            <div class="logo"><img src="Resources/logo.png" />  </div>   
            <div class="header-styles"> <h1>SLIATE Student Registration System</h1>
                <h4 style="letter-spacing: 2px">Sri Lanka Institute of Advanced Technological Education<br/>
                    <br/> 
                   </h4>

            </div>

        </div>
        <nav class="navbar navbar-inverse"  style="border-radius: 0px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="index.jsp">Home</a>
                </div>
                
            </div>
        </nav>
      <div  class="w3-row w3-padding " id='basicdetails' >
         <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >
            <header class="w3-container w3-teal">
               <h2>Basic Information</h2>
            </header>
            <form class="w3-container w3-form" id='basicdetailform'>
               <div >
                 
                  <input type='hidden' value='1' id='institute' name='institute' / >
                    
                    <!--/*  <?php
                   
                     $selected='';
                     if(isset($_SESSION["StudentATIDetails"])){
                      $row3=$_SESSION["StudentATIDetails"];
                     }
                     include("DBconnection.php");
                     $connection = db_connect();
                     $query = 'SELECT * FROM atidetails';
                     $result = $connection->query($query);
                     $value='';
                    while($row4 = $result->fetch_assoc()) {
                      if(isset($_SESSION["StudentATIDetails"])){
                      
                        if ($row3["ATIKey"]==$row4["ATIKey"]){
                          $selected='selected';
                        }
                        else{$selected='';
                      }
                    }
                         $value=$value.'<option value="'.$row4['ATIKey'].'" '.$selected.'>'.$row4['ATIID'].'</option>';
                        }
                        echo $value;
                       
                     ?>*/ -->
                 
               </div>
               
               <div class="w3-group" >      
                  <input class="w3-input" value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['NameWithInitials'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' id='namewithini' type="text" name="name_with_ini" placeholder="eg: SK Gamage"  >
                  <label class="w3-label" >Name With Initials</label>
               </div>
               <div class="w3-group">      
                  <input class="w3-input" id='name' type="text" value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['Name'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' name="name" placeholder="eg: Saman Kumara"  >
                  <label class="w3-label">Name/Name Denoted by Initials</label>
               </div>
               <div   class="w3-group"> 
                  <input  type="date" id='dob' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['DateOfBirth'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>'  class="w3-input" name="dob"  >
                  <label class="w3-label">Date of Birth</label>
               </div>
               <div class="w3-group">      
                  <input class="w3-input" id='nic' type="text" value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['NIC'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>'  name="nic" placeholder="eg: 932658236V"  >
                  <label class="w3-label">National Identity Card Number</label>
               </div>
               <p class="w3-text-teal"><b>Gender</b></p>
               <input class="w3-radio" type="radio" name="gender" id="gender" value="male" <?php
                  if(isset($_SESSION["BasicDetails"])){
                   if($row['Gender']=='m'){
                    echo 'checked';
                   }
                  }
                  else{
                    echo '';
                  }
                  ?> >
               <div class="w3-checkmark"></div>
               <label class="w3-checkbox"> Male
               </label><br>
               <input class="w3-radio" type="radio" name="gender" id="gender" <?php
                  if(isset($_SESSION["BasicDetails"])){
                   if( $row['Gender']=='f'){
                    echo 'checked';
                   }
                  }
                  else{
                    echo '';
                  }
                 
                  ?>  value="female" >
               <div class="w3-checkmark"></div>
               <label class="w3-checkbox" id='gendersection'> Female
               </label>
               <p class="w3-text-teal "><b>Administrative District</b></p>
               <select class="w3-select" id='district' name='district'>
                  <option value="" disabled="" selected="" >Choose Administrative District</option>
                  <?php
                   
                     $selected='';
                     if(isset($_SESSION["StudentDistrict"])){
                      $row5=$_SESSION["StudentDistrict"];
                     }
                     $query1 = 'SELECT * FROM districtdetails';
                     $result = $connection->query($query1);
                     $value2='';
                    while($row6 = $result->fetch_assoc()) {
                      if(isset($_SESSION["StudentDistrict"])){
                      
                        if ($row5["DistrictKey"]==$row6["DistrictKey"]){
                          $selected='selected';
                        }
                        else{$selected='';
                      }
                    }
                         $value2=$value2.'<option value="'.$row6['DistrictKey'].'" '.$selected.'>'.$row6["DistrictID"].'</option>';
                        }
                        echo $value2;
                       
                     ?>
               </select>
               <div class="w3-row" style='float:right' id='basicdetailsbutton'>  <input type='button' class="w3-btn w3-teal w3-section" onclick='validateBasic()' id='basicdetailnextbtn' value='Next &#10095;'>
               
               </div>
            </form>
         </div>
         <div class="w3-col m12 l4 w3-padding">
            <div class="w3-card-2">
            <header class="w3-container w3-teal">
                 <h4>Instructions</h4>
              </header>
                     <ul type="squre">
                       
                         <li>Please fill the application carefully by giving correct details.</li> 
                          <li>You should do any changes before generate the Application Form, otherwise you will have to submit a new application form.</li> 
                           <li>You can generate PDF format of the application after filling data.  </li>
                          <li>You can apply for 3 courses. </li> 
                           
                    </ul>
                </div>

                 <div class="w3-card-2">
              <header class="w3-container w3-teal">
                 <h4>Courses</h4>
              </header>
                     <ul type="squre">
                       
                          <li>Higher National Diploma in Accountancy (HNDA)</li>
                          <li>Higher National Diploma in Agriculture (HNDT.Agri)</li>
                          <li>Higher National Diploma in Building Services (HNDBS)</li>
                          <li>Higher National Diploma in Building Services (HNDBS)</li>
                          <li>Higher National Diploma in Business Administration (HNDBA)</li>
                          <li>Higher National Diploma in English (HNDE)</li>
                          <li>Higher National Diploma in Engineering - Civil</li>
                          <li>Higher National Diploma in Engineering - Electrical</li>
                          <li>Higher National Diploma in Engineering - Mechanical</li>
                          <li>Higher National Diploma in Management (HNDM)</li>
                          <li>Higher Nation Diploma in Information Technology (HNDIT)</li>
                          <li>Higher Nation Diploma in Quantity Survey)</li>
                          <li>Higher Nation Diploma in Tourism and Hospitality Management (HNDTHM)</li>

                           
                    </ul>
                </div>
         </div>
      </div>
      <style>
         .validation {
         border-color:#d60000;
         }
      </style>
      <script>
         function validateBasic(){
             var validationstatus=1;
              $("input").removeClass("validation");
              $("select").removeClass("validation");
              $( "span" ).remove();
             // if ($('#institute :selected').text()=="Choose Advanced Technological Institute"){
             //     $('#institute').addClass("validation");
             //     $('#institute').after('<span id="errortext" style="color:#d60000;font-size: 11px;"></br>This is a required field</span>');
             //     validationstatus = 0;
             // }
             if ($('#course :selected').text()=="Choose a Course"){
                 $('#course').addClass("validation");
                 $('#course').after('<span id="errortext" style="color:#d60000;font-size: 11px;"></br>This is a required field</span>');
                 validationstatus = 0;
             }
             if ($('#namewithini').val()==""){
                 $('#namewithini').addClass("validation");
                 $('#namewithini').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 validationstatus = 0;
             }
             if ($('#name').val()==""){
                 $('#name').addClass("validation");
                 $('#name').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 validationstatus = 0;
             }
             if ($('#dob').val()==""){
                 $('#dob').addClass("validation");
                 $('#dob').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 validationstatus = 0;
             }
             if ($('#nic').val()==""){
                 $('#nic').addClass("validation");
                 $('#nic').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 validationstatus = 0;
             }
             else{
                 var nic = $('#nic').val();
                 nic =  nic.toUpperCase();
                 $('#nic').val(nic);
                 if (!IsValidNIC($('#nic').val())){
                    $('#nic').addClass("validation");
                    $('#nic').after('<span id="errortext" style="color:#d60000;font-size: 11px;">Please enter a valid NIC</span>');
                    validationstatus = 0; 
                 }
             }
             if ($('input[name=gender]').is(':checked')==false){
                 $('#gendersection').after('<span id="errortext" style="color:#d60000;font-size: 11px;"></br>Please select gender</span>');
                 validationstatus = 0;
             }
             if ($('#district :selected').text()=="Choose Administrative District"){
                 $('#district').addClass("validation");
                 $('#district').after('<span id="errortext" style="color:#d60000;font-size: 11px;"></br>This is a required field</span>');
                 validationstatus = 0;
             }
             
         
             if (validationstatus != 0){
             
                 $("#basicdetails").css("display", "none");
                 
                 $("#contactdetails").css("display", "");
         
                
                 $.post("BasicDetails.php", $('#basicdetailform').serialize() ,function(data){});
         
                 $.ajax({
                 type: 'POST',    
                 url:'GetSessionDetails.php',
                 data:{'getApplicationID':''},
                 success: function(data){
                  $('#ApplicationID').html(data);
                 }
                  });

             }
             
         }
         
         
         function IsValidNIC(iNIC) {
         
             var sRange = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
         
             if (iNIC.toString().trim().length != 10) {
                 if (iNIC.toString().trim().length != 12) {
                     return false;
                 }
             }
         
             if (iNIC.toString().trim().length == 10) {
         
                 var i = 0;
                 for (i = 1; i <= iNIC.length; i++) {
                     var sRunChar = iNIC.toString().substr(i - 1, 1);
                     if (i <= 9) {
                         try {
                             parseInt(sRunChar);
                         } catch (err) {
                             return false;
                         }
                     }
                     if (i == 10) {
                         if (sRange.indexOf(sRunChar) <= 0) {
                             return false;
                         }
                     }
                 }
             } else if (iNIC.toString().trim().length == 12) {
                 var i = 0;
                 for (i = 1; i <= iNIC.length; i++) {
                     var sRunChar = iNIC.toString().substr(i - 1, 1);
                     if (i <= 12) {
                         try {
                             parseInt(sRunChar);
                         } catch (err) {
                             return false;
                         }
                     }
                 }
             }
         
             return true;
         }
         
         function loadDoc() {
         
           var http = new XMLHttpRequest();
             var url = "GetSubject.php?q=";
             
             http.open("POST", url, true);
             
         
             http.onreadystatechange = function() {
                 if(http.readyState == 4 && http.status == 200) {
                     document.getElementById("subject").innerHTML = http.responseText;
                     
                 }
             }
             http.send();
         }

          function loadCourseDoc() {
         
           var http = new XMLHttpRequest();
             var url = "GetCourse.php?q=";
             
             http.open("POST", url, true);
             
         
             http.onreadystatechange = function() {
                 if(http.readyState == 4 && http.status == 200) {

                     document.getElementById("course").innerHTML = http.responseText;
                 }
             }
             http.send();
         }

          function loadDoc2() {
         
           var http = new XMLHttpRequest();
             var url = "GetOLSubject.php?q=";
             
             http.open("POST", url, true);
             
         
             http.onreadystatechange = function() {
                 if(http.readyState == 4 && http.status == 200) {
                     document.getElementById("subject2").innerHTML = http.responseText;
                     
                 }
             }
             http.send();
         }

         function loadCource() {
         
           var http = new XMLHttpRequest();
             var url = "GetCourse.php?q=";
             
             http.open("POST", url, true);
             
         
             http.onreadystatechange = function() {
                 if(http.readyState == 4 && http.status == 200) {
                     document.getElementById("coursecontent").innerHTML = http.responseText;
                     
                 }
             }
             http.send();
         }

           function appendText(text,key){
                  var gradeid = "#alsubject"+key+" option:selected";
                  var gradetext = $(gradeid).text();
                 $('#errortext'+key).remove();
                 $('#alsubject'+key).attr('style','border: 1px solid #ccc !important');
                  if($(gradeid).val()==0){
                      $("#errortext").remove();
                      $('#alsubject'+key).attr('style','border: 1px solid #d60000 !important');
                      errormsg='<span id="errortext'+key+'" style="color:#d60000;font-size: 11px;">Please Choose Grade from dropdown list</span>'
                       $('#alsubject'+key).after(errormsg);
                  }
                  else{
                  
                  var textheadings='<tr id="olsubjheading">\n'
                            +'<th >Subject Name</th>\n'
                            +'<th>Grade</th>\n'
                            +'</tr>';
                  var htmltext='<tr id="alsubjecttr'+key+'"><td>'+text+'</td>\n'
                            +'<td>'+$(gradeid).text()+'</td>\n'
                            +'<td>'
                            +'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletealsubject" onclick="deleteALSubject(\''+key+'\',\''+$(gradeid).text()+'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                            +'</tr>\n';

                            var textbox = "<input type='text' style='width:100%'' id='alsubject' value='"+$(gradeid).text()+"' readonly='true' />";

                  $('#alsubject'+key).after(textbox);
                  $('#alsubject'+key).remove();
                           
               
                  if($('#olsubjheading').length){
                     
                      $('#olsubjheading').after(htmltext);

                       $.post( 'AddAlSubject.php',
                        { subject: key , gradeid:  gradetext }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });
                  }
                  else{

                      text=textheadings+text;
                      document.getElementById("appendtext").innerHTML = htmltext;

                       $.post( 'AddAlSubject.php',
                        { subject: key , gradeid: gradetext }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });

                  }
                  $('#addsubjectbtn'+key).after('<span id="helptext'+key+'" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                  $('#addsubjectbtn'+key).hide();
                 
               }
                 }
                 function searchcoursetext(){
               $.ajax({
               type: 'POST',    
               url:'GetCourse.php',
               data:{'q':$('#searchcourse').val()},
               success: function(data){
               document.getElementById("course").innerHTML = data;
               }
               });
               }

               function deleteCourse(coursekey,priority){
            
            $.post( 'RemoveCourse.php',
            { coursekey: coursekey,priority: priority  }, 
            function( data ){  

               $('#coursetr'+coursekey).remove();

               $.iaoAlert({ msg: "Course Removed", type: "success" });
            });

          }
         
         
      </script>
      <!--*****************contactdetails***************************************************-->
      <div  class="w3-row w3-padding " id='contactdetails' style='display: none;'>
         <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >
            <header class="w3-container w3-teal">
               <h2>Contact Details</h2>
            </header>
            <form class="w3-container w3-form" id='contactdetailsform' >
               <div class="w3-group">      
                  <input class="w3-input" type="text" id='addressl1' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['AddressL1'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' name="address_line1" placeholder="Address line1" required="">
                  <label class="w3-label">Permanent Address</label>
                  <input class="w3-input" id='addressl2' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['AddressL2'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' type="text" name="address_line2" placeholder="Address line2" required="">
                  <label class="w3-label"></label>
                  <input  type="text"  class="w3-input" id='addressl3' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['AddressL3'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' name="address_line3" placeholder="Address line3" required="">
                  <label class="w3-label"></label>
               </div>
               <div class="w3-group">      
                  <input class="w3-input" id='contactno' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['ContactNo'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' type="text"  name="contact_no" placeholder="eg: 091xxxxxxx " required="">
                  <label class="w3-label">Contact Phone Number</label>
               </div>
               <div class="w3-group">      
                  <input class="w3-input" type="text" id='email' value='<?php
                  if(isset($_SESSION["BasicDetails"])){
                    echo $row['Email'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' name="email" placeholder="eg: abc@mail.com">
                  <label class="w3-label">Email</label>
               </div>
               <div class="w3-row " style='float:right'> 
                  <input type='button'  onclick='$("#basicdetails").css("display", "");$("#contactdetails").css("display", "none");' value='&#10094; Previous ' class="w3-btn w3-teal w3-section"/> 
                  <input type='button'  onclick='validateContact()' value='Next &#10095;' class="w3-btn w3-teal w3-section"/>
               </div>
            </form>
         </div>
         <div class="w3-col m12 l4 w3-padding">
            <div class="w3-card-2">
               <div class="w3-card-2 w3-dark-grey" >
                  <div class="w3-container w3-center ">
                     <h4>Your Application ID</h4>
                     <div style='background-color:white' class="w3-container w3-section w3-border w3-border-bottom w3-border-green">
                        <h4 style='color:#009688'><strong id='ApplicationID'>
                        <?php
                        if(isset($_SESSION["ApplicationID"])){
                         echo $_SESSION["ApplicationID"];
                        }
                       else {
                          echo 'Error: Session Not Found';
                        }
                        ?>
                           </strong>
                        </h4>
                     </div>
                     <h5><i class="glyphicon glyphicon-info-sign"></i> Please note that you can refer your application later using this id, Please keep this id with you.</h5>
                  </div>
               </div>
            </div>
            </br>
            <div class="w3-card-2">
            <header class="w3-container w3-teal">
                 <h4>Instructions</h4>
              </header>
                     <ul type="squre">
                       
                         <li>Please fill the application carefully by giving correct details.</li> 
                          <li>You should do any changes before generate the Application Form, otherwise you will have to submit a new application form.</li> 
                           <li>You can generate PDF format of the application after filling data.  </li>
                          <li>You can apply for 3 courses. </li> 
                           
                    </ul>
                </div>
         </div>
      </div>
      <script>
         function basicDetailsNext(){
            $('#basicdetails').css('display', 'none');
            $('#contactdetails').css('display', '');
         }
         function validateContact(){
             var validationstate = 1;
              $("input").removeClass("validation");
              $("select").removeClass("validation");
              $( "span" ).remove();
         
             if ($('#addressl1').val()==""){
                 $('#addressl1').addClass("validation");
                 $('#addressl2').addClass("validation");
                 $('#addressl3').addClass("validation");
                 $('#addressl3').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
             if ($('#contactno').val()==""){
                 $('#contactno').addClass("validation");
                 $('#contactno').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
             if ($('#email').val()==""){
                 $('#email').addClass("validation");
                 $('#email').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
         
             if (validationstate != 0){
             
                 $("#contactdetails").css("display", "none");
                 $("#aldetails").css("display", "");

                 $.post("ContactDetails.php", $('#contactdetailsform').serialize() ,function(data){});
         
             }
         
         }
         
           function validateALExamDetails(){
               var validationstate = 1;
                $("input").removeClass("validation");
                $("select").removeClass("validation");
                $( "span" ).remove();
           
               if ($('#al_year').val()==""){
                   $('#al_year').addClass("validation");
                   $('#al_year').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                   var validationstate = 0;
               }
               if ($('#al_index_no').val()==""){
                   $('#al_index_no').addClass("validation");
                   $('#al_index_no').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                   var validationstate = 0;
               }
               if ($('#al_medium').val()==""){
                   $('#al_medium').addClass("validation");
                   $('#al_medium').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                   var validationstate = 0;
               }
               if ($('#zscore').val()==""){
                   $('#zscore').addClass("validation");
                   $('#zscore').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                   var validationstate = 0;
               }
               if ($('#highestenglish').val()==""){
                   $('#highestenglish').addClass("validation");
                   $('#highestenglish').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                   var validationstate = 0;
               }
               if ($('tr[id^="alsubjecttr"]').length<3){
                
                   $('#appendtext').addClass("validation");
                   $('#appendtext').after('<span id="errortext" style="color:#d60000;font-size: 11px;">Please add 3 main subject result</span>');
                   var validationstate = 0;
               }
               if (validationstate != 0){
               
                $("#aldetails").css("display", "none");
                 
                 $("#oldetails").css("display", "");
                   $.post("ALDetails.php", $('#aldetailsform').serialize() ,function(data){});
           
                  $.iaoAlert({ msg: "Successful", type: "success" });
               }
           }
      </script>
      <div  class="w3-row w3-padding " style='display: none;' id='aldetails'>
         <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >
            <header class="w3-container w3-teal">
               <h2>Educational Qualification</h2>
            </header>
            <form class="w3-container w3-form" name='aldetailsform' id='aldetailsform'>
               <div   class="w3-container w3-margin w3-border">
                  <p class="w3-text-teal" align="center"><b>GCE (A/L) Examination</b></p>
                  <br> 
                  <div class="w3-group" >      
                     <input class="w3-input" value='<?php
                  if(isset($_SESSION["ALExamDetails"])){
                    echo $row7['Year'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>'  name="al_year" id="al_year" input type="number" min="1950" max="2100"   >
                     <label class="w3-label" >Year</label>
                  </div>
                  <div class="w3-group">      
                     <input value='<?php
                  if(isset($_SESSION["ALExamDetails"])){
                    echo $row7['IndexNo'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' class="w3-input" type="text" name="al_index_no" id="al_index_no" placeholder=""  >
                     <label class="w3-label">Index Number</label>
                  </div>
                  <div class="w3-group">      
                     <input value='<?php
                  if(isset($_SESSION["ALExamDetails"])){
                    echo $row7['Medium'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' class="w3-input" type="text" name="al_medium" id="al_medium" placeholder=""  >
                     <label class="w3-label">Medium</label>
                  </div>
                  <div class="w3-group">      
                     <input value='<?php
                  if(isset($_SESSION["ALExamDetails"])){
                    echo $row7['Zscore'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' class="w3-input" type="text" name="zscore" id="zscore" placeholder=""  >
                     <label  class="w3-label">Z-Score of The Above Examination</label>
                  </div>
                  <a onclick="document.getElementById('id01').style.display='block', loadDoc()" class="w3-btn w3-teal w3-section">Add GCE (A/L) Examination Result</a>
                  <table class="w3-table w3-striped" id='appendtext' >
                    <tr id="olsubjheading">
                      <th>Subject Name</th>
                      <th>Grade</th>
                    </tr>
                    <?php 
                   
                     if(isset($_SESSION["BasicDetails"])){
                   
                    $query1      = 'SELECT S.SubjectKey,S.StudentKey,S.Grade,SM.SubjectID from studentalsubjectmap S inner join alsubjectmaster SM on S.SubjectKey = SM.SubjectKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
                    
                     $result = $connection->query($query1);
                      while ($row = $result->fetch_assoc()) {

                        echo '<tr id="alsubjecttr'.$row['SubjectKey'].'"><td>'.$row['SubjectID'].'</td>'
                            .'<td>'.$row['Grade'].'</td>'
                            .'<td>'
                            .'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletealsubject" onclick="deleteALSubject(\''.$row['SubjectKey'].'\',\''.$row['Grade'].'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                             .'</tr>';

                      }
                    }

                    ?>
                  </table>
                  <div class="w3-group">      
                     <input 
                     value='<?php
                  if(isset($_SESSION["ALExamDetails"])){
                    echo $row7['EnglishQulification'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' class="w3-input" type="text" name="highestenglish" id="highestenglish" placeholder=""  >
                     <label class="w3-label">Highest Qualification in English as a Subject</label>
                  </div>
                  <div class="w3-row" style='float:right;'>  
                  <input type='button'  onclick='$("#basicdetails").css("display", "");$("#aldetails").css("display", "none");' value='&#10094; Previous ' class="w3-btn w3-teal w3-section"/>
                  <input type='button'  onclick='validateALExamDetails()' value='Next &#10095;' class="w3-btn w3-teal w3-section"/></div>
            </div>
            </form>
            </div>
            <div class="w3-col m12 l4 w3-padding">
            <div class="w3-card-2">
               <div class="w3-card-2 w3-dark-grey" >
                  <div class="w3-container w3-center ">
                     <h4>Your Application ID</h4>
                     <div style='background-color:white' class="w3-container w3-section w3-border w3-border-bottom w3-border-green">
                        <h4 style='color:#009688'><strong id='ApplicationID'>
                        <?php
                        if(isset($_SESSION["ApplicationID"])){
                         echo $_SESSION["ApplicationID"];
                        }
                       else {
                          echo 'Error: Session Not Found';
                        }
                        ?>
                           </strong>
                        </h4>
                     </div>
                     <h5><i class="glyphicon glyphicon-info-sign"></i> Please note that you can refer your application later using this id, Please keep this id with you.</h5>
                  </div>
               </div>
            </div>
            </br>
            <div class="w3-card-2">
            <header class="w3-container w3-teal">
                 <h4>Instructions</h4>
              </header>
                     <ul type="squre">
                       
                         <li>Please fill the application carefully by giving correct details.</li> 
                          <li>You should do any changes before generate the Application Form, otherwise you will have to submit a new application form.</li> 
                           <li>You can generate PDF format of the application after filling data.  </li>
                          <li>You can apply for 3 courses. </li> 
                           
                    </ul>
                </div>
         </div>
            </div>

            <div  class="w3-row w3-padding " style='display: none;' id='oldetails'>
         <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >
            <form class="w3-container w3-form" name='oldetailsform' id='oldetailsform' >
               <div   class="w3-container w3-margin w3-border">
                  <p class="w3-text-teal" align="center"><b>GCE (O/L) Examination</b></p>
                  <br> 
                  <div class="w3-group" >      
                     <input class="w3-input"  name="ol_year" value='<?php
                  if(isset($_SESSION["OLExamDetails"])){
                    echo $row7['Year'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' id="ol_year" input type="number" min="1950" max="2100"  required >
                     <label class="w3-label" >Year</label>
                  </div>
                  <div class="w3-group">      
                     <input class="w3-input" value='<?php
                  if(isset($_SESSION["OLExamDetails"])){
                    echo $row7['IndexNo'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' type="text" name="ol_index_no" id="ol_index_no" placeholder="" required >
                     <label class="w3-label">Index Number</label>
                  </div>
                  <div class="w3-group">      
                     <input class="w3-input" value='<?php
                  if(isset($_SESSION["OLExamDetails"])){
                    echo $row7['Medium'];
                  }
                  else{
                    echo '';
                  }
                 
                  ?>' type="text" name="ol_medium" id="ol_medium" placeholder="" required >
                     <label class="w3-label">Medium</label>
                  </div>
                  <a onclick="document.getElementById('id02').style.display='block', loadDoc2()" class="w3-btn w3-teal w3-section">Add GCE (O/L) Examination Result</a>
                  <table class="w3-table w3-striped" id='appendtext2' >
                    <tr id="ol_subjheading">
                      <th>Subject Name</th>
                      <th>Grade</th>
                    </tr>
                    <?php 
                   
                     if(isset($_SESSION["BasicDetails"])){
                   
                    $query1      = 'SELECT S.SubjectKey,S.StudentKey,S.Grade,SM.SubjectID from studentolsubjectmap S inner join olsubjectmaster SM on S.SubjectKey = SM.SubjectKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
                    
                     $result = $connection->query($query1);
                      while ($row = $result->fetch_assoc()) {

                        echo '<tr id="ol_subjecttr'.$row['SubjectKey'].'"><td>'.$row['SubjectID'].'</td>'
                            .'<td>'.$row['Grade'].'</td>'
                            .'<td>'
                            .'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deleteolsubject" onclick="deleteOLSubject(\''.$row['SubjectKey'].'\',\''.$row['Grade'].'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                             .'</tr>';

                      }
                    }

                    ?>
                  </table>
                  </br>
                   <div class="w3-row" style='float:right;'>  
                  <input type='button'  onclick='$("#aldetails").css("display", "");$("#oldetailsform").css("display", "none");' value='&#10094; Previous ' class="w3-btn w3-teal w3-section"/>
                  <input type='button'  onclick='validateOLExamDetails()' value='Next &#10095;' class="w3-btn w3-teal w3-section"/>
                  </div>

               </div>
               
            </form>
            </div>
        
        
           <div class="w3-col m12 l4 w3-padding">
            <div class="w3-card-2">
               <div class="w3-card-2 w3-dark-grey" >
                  <div class="w3-container w3-center ">
                     <h4>Your Application ID</h4>
                     <div style='background-color:white' class="w3-container w3-section w3-border w3-border-bottom w3-border-green">
                        <h4 style='color:#009688'><strong id='ApplicationID'>
                        <?php
                        if(isset($_SESSION["ApplicationID"])){
                         echo $_SESSION["ApplicationID"];
                        }
                       else {
                          echo 'Error: Session Not Found';
                        }
                        ?>
                           </strong>
                        </h4>
                     </div>
                     <h5><i class="glyphicon glyphicon-info-sign"></i> Please note that you can refer your application later using this id, Please keep this id with you.</h5>
                  </div>
               </div>
            </div>
            </br>
            <div class="w3-card-2">
            <header class="w3-container w3-teal">
                 <h4>Instructions</h4>
              </header>
                     <ul type="squre">
                       
                         <li>Please fill the application carefully by giving correct details.</li> 
                          <li>You should do any changes before generate the Application Form, otherwise you will have to submit a new application form.</li> 
                           <li>You can generate PDF format of the application after filling data.  </li>
                          <li>You can apply for 3 courses. </li> 
                           
                    </ul>
                </div>
         </div>
        </div>
            <!-- ***********************model1************************* -->                   
            <div class="w3-container">
               <div id="id01" class="w3-modal">
                  <div class="w3-modal-content w3-card-8">
                     <header class="w3-container w3-teal">
                        <a onclick="document.getElementById('id01').style.display='none'"
                           class="w3-closebtn">&times;</a>
                        <h3>Add Results</h3>
                     </header>
                     <input class="w3-input w3-border" style='padding-top:10px' id='searchsubject1' onkeypress='searchtext()'  onchange ="this.onkeypress(),searchtext()" onpaste="this.onkeypress(),searchtext()" oninput = "this.onkeypress(),searchtext()"  placeholder='Search Subjects' type="text">
                     <div class="w3-container" style='overflow:auto;' id='subjectmodel1' >
                        <table class="w3-table w3-striped" id='subject'>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <script>
             function searchtext(){
               $.ajax({
               type: 'POST',    
               url:'GetSubject.php',
               data:{'q':$('#searchsubject1').val()},
               success: function(data){
               document.getElementById("subject").innerHTML = data;
               }
               });
             }
              

                function searchtext2(){
               $.ajax({
               type: 'POST',    
               url:'GetOLSubject.php',
               data:{'q':$('#searchsubject2').val()},
               success: function(data){
               document.getElementById("subject2").innerHTML = data;
               }
               });
               }
                 // Get the modal
                 var modal = document.getElementById('id01');
                 
                 // When the user clicks anywhere outside of the modal, close it
                 window.onclick = function(event) {
                     if (event.target == modal) {
                         modal.style.display = "none";
                     }
                 }

                  // Get the modal
                 var modal2 = document.getElementById('id02');
                 
                 // When the user clicks anywhere outside of the modal, close it
                 window.onclick = function(event) {
                     if (event.target == modal2) {
                         modal2.style.display = "none";
                     }
                 }

                  var height = screen.height;
                  height = (height*70)/100;
                  $( "#subjectmodel1" ).css( "height", height );

               
                 
               


              function appendText2(text,key){
                    var gradeid2 = "#ol_subject"+key+" option:selected";
                    var gradetext = $(gradeid2).text();
                 $('#errortext2'+key).remove();
                 $('#ol_subject'+key).attr('style','border: 1px solid #ccc !important');
                  if($(gradeid2).val()==0){
                      $("#errortext2").remove();
                      $('#ol_subject'+key).attr('style','border: 1px solid #d60000 !important');
                      errormsg='<span id="errortext2'+key+'" style="color:#d60000;font-size: 11px;">Please Choose Grade from dropdown list</span>'
                       $('#ol_subject'+key).after(errormsg);
                  }
                  else{
                  
                  var textheadings='<tr id="ol_subjheading">\n'
                            +'<th >Subject Name</th>\n'
                            +'<th>Grade</th>\n'
                            +'</tr>';
                  var htmltext='<tr id="ol_subjecttr'+key+'"><td>'+text+'</td>\n'
                            +'<td>'+$(gradeid2).text()+'</td>\n'
                            +'<td>'
                            +'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deleteolsubject" onclick="deleteOLSubject(\''+key+'\',\''+$(gradeid2).text()+'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                            +'</tr>\n';

                            var textbox = "<input type='text' style='width:100%'' id='ol_subject' value='"+$(gradeid2).text()+"' readonly='true' />";

                  $('#ol_subject'+key).after(textbox);
                  $('#ol_subject'+key).remove();
                           
               
                  if($('#ol_subjheading').length){
                     
                      $('#ol_subjheading').after(htmltext);

                       $.post( 'AddOLSubject.php',
                        { subject: key , gradeid:  gradetext }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });
                  }
                  else{

                      text=textheadings+text;
                      document.getElementById("appendtext2").innerHTML = htmltext;

                       $.post( 'AddOLSubject.php',
                        { subject: key , gradeid: gradetext }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });

                  }
                  $('#addsubjectbtn2'+key).after('<span id="helptext2'+key+'" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                  $('#addsubjectbtn2'+key).hide();
                 
               }
                 }
                 function removeText(id,key){
                  $('#alsubjecttr'+key).remove();
                  $('#addsubjectbtn'+key).show();
                 
                  $('#helptext'+key).remove();
                 }

                  function removeText2(id,key){
                  $('#ol_subjecttr'+key).remove();
                  $('#addsubjectbtn2'+key).show();
                 
                  $('#helptext2'+key).remove();
                 }

          function deleteALSubject(subjectkey,grade){
            
            $.post( 'RemoveAlSubject.php',
            { subject: subjectkey , gradeid: grade }, 
            function( data ){  

               $('#alsubjecttr'+subjectkey).remove();

               $.iaoAlert({ msg: "Item Removed", type: "success" });
            });

          }

            function deleteOLSubject(subjectkey,grade){
            
            $.post( 'RemoveOLSubject.php',
            { subject: subjectkey , gradeid: grade }, 
            function( data ){  

               $('#ol_subjecttr'+subjectkey).remove();

               $.iaoAlert({ msg: "Item Removed", type: "success" });
            });

          }


          
         
            </script>
            <!-- ***********************model*************************-->

            <!-- ***********************model2************************* -->                   
            <div class="w3-container">
               <div id="id02" class="w3-modal">
                  <div class="w3-modal-content w3-card-8">
                     <header class="w3-container w3-teal">
                        <a onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn">&times;</a>
                        <h3>Add Results</h3>
                     </header>
                     <input class="w3-input w3-border" style='padding-top:10px' id='searchsubject2' onkeypress='searchtext2()'  onchange ="this.onkeypress(),searchtext2()" onpaste = "this.onkeypress(),searchtext2()" oninput = "this.onkeypress(),searchtext2()"  placeholder='Search Subjects' type="text">
                     <div class="w3-container" style='overflow:auto;' id='subjectmodel2' />
                        <table class="w3-table w3-striped" id='subject2'>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <script>
               function searchtext2(){
               $.ajax({
               type: 'POST',    
               url:'GetOLSubject.php',
               data:{'q':$('#searchsubject2').val()},
               success: function(data){
               document.getElementById("subject2").innerHTML = data;
               }
               });
               }

             
                 // Get the modal
                 var modal = document.getElementById('id02');
                 
                 // When the user clicks anywhere outside of the modal, close it
                 window.onclick = function(event) {
                     if (event.target == modal) {
                         modal.style.display = "none";
                     }
                 }

                 var modal2 = document.getElementById('id01');
                 
                 // When the user clicks anywhere outside of the modal, close it
                 window.onclick = function(event) {
                     if (event.target == modal) {
                         modal2.style.display = "none";
                     }
                 }


                  var modal3 = document.getElementById('id03');
                 
                 // When the user clicks anywhere outside of the modal, close it
                 window.onclick = function(event) {
                     if (event.target == modal) {
                         modal3.style.display = "none";
                     }
                 }


                  var height = screen.height;
                  height = (height*70)/100;
                  $( "#subjectmodel2" ).css( "height", height );
               
                 
                 function appendText2(text,key){
                    var gradeid2 = "#ol_subject"+key+" option:selected";
                    var gradetext2 = $(gradeid2).text();
                 $('#errortext2'+key).remove();
                 $('#ol_subject'+key).attr('style','border: 1px solid #ccc !important');
                  if($(gradeid2).val()==0){
                      $("#errortext2").remove();
                      $('#ol_subject'+key).attr('style','border: 1px solid #d60000 !important');
                      errormsg2='<span id="errortext2'+key+'" style="color:#d60000;font-size: 11px;">Please Choose Grade from dropdown list</span>'
                       $('#ol_subject'+key).after(errormsg2);
                  }
                  else{
                  
                  var textheadings2='<tr id="ol_subjheading">\n'
                            +'<th >Subject Name</th>\n'
                            +'<th>Grade</th>\n'
                            +'</tr>';
                  var htmltext2='<tr id="ol_subjecttr'+key+'"><td>'+text+'</td>\n'
                            +'<td>'+$(gradeid2).text()+'</td>\n'
                            +'<td>'
                            +'<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletealsubject2" onclick="deleteOLSubject(\''+key+'\',\''+$(gradeid2).text()+'\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>'
                            +'</tr>\n';

                            var textbox = "<input type='text' style='width:100%'' id='ol_subject' value='"+$(gradeid2).text()+"' readonly='true' />";

                  $('#ol_subject'+key).after(textbox);
                  $('#ol_subject'+key).remove();
                           
               
                  if($('#ol_subjheading').length){
                     
                      $('#ol_subjheading').after(htmltext2);

                       $.post( 'AddOLSubject.php',
                        { subject: key , gradeid:  gradetext2 }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });
                  }
                  else{

                      text2=textheadings2+text2;
                      document.getElementById("appendtext2").innerHTML = htmltext2;

                       $.post( 'AddOLSubject.php',
                        { subject: key , gradeid: gradetext2 }, 
                        function( data ){  

                           $.iaoAlert({ msg: "Item Added", type: "success" });
                        });

                  }
                  $('#addsubjectbtn2'+key).after('<span id="helptext2'+key+'" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                  $('#addsubjectbtn2'+key).hide();
                 
               }
                 }
                 function removeText2(id,key){
                  $('#ol_subjecttr'+key).remove();
                  $('#addsubjectbtn2'+key).show();
                 
                  $('#helptext2'+key).remove();
                 }

          function deleteOLSubject(subjectkey,grade){
            
            $.post( 'RemoveOLSubject.php',
            { subject: subjectkey , gradeid: grade }, 
            function( data ){  

               $('#ol_subjecttr'+subjectkey).remove();

               $.iaoAlert({ msg: "Item Removed", type: "success" });
            });

          }


         function validateOLExamDetails(){
             var validationstate = 1;
              // $("input").removeClass("validation");
              // $("select").removeClass("validation");
              // $( "span" ).remove();
         
             if ($('#ol_year').val()==""){
                 $('#ol_year').addClass("validation");
                 $('#ol_year').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
             if ($('#ol_index_no').val()==""){
                 $('#ol_index_no').addClass("validation");
                 $('#ol_index_no').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
             if ($('#ol_medium').val()==""){
                 $('#ol_medium').addClass("validation");
                 $('#ol_medium').after('<span id="errortext" style="color:#d60000;font-size: 11px;">This is a required field</span>');
                 var validationstate = 0;
             }
             
             
             if ($('tr[id^="ol_subjecttr"]').length<6){
              
                 $('#appendtext2').addClass("validation");
                 $('#appendtext2').after('<span id="errortext" style="color:#d60000;font-size: 11px;">Please add 6 main subject result</span>');
                 var validationstate = 0;
             }
             if (validationstate != 0){
             
                 $("#oldetails").css("display", "none");
                 $("#coursedetails").css("display", "");
                 

                 $.post("OLDetails.php", $('#oldetailsform').serialize() ,function(data){});
         
             }
         
         }

         function appendCourseText(text, key) {

            var coursepriority = "#coursepriority" + key + " option:selected";
            var courseprioritytext = $(coursepriority).text();
            $('#courseerrortext' + key).remove();
            $('#coursepriority' + key).attr('style', 'border: 1px solid #ccc !important');

            if ($(coursepriority).val() == 0) {
                $("#courseerrortext" + key).remove();
                $('#coursepriority' + key).attr('style', 'border: 1px solid #d60000 !important');
                errormsg = '<span id="courseerrortext' + key + '" style="color:#d60000;font-size: 11px;">Please Choose priority from dropdown list</span>'
                $('#coursepriority' + key).after(errormsg);
                console.log('value 0');
            } else {

                if ($('.priorityclass').length > 0) {
                   console.log('length> 0');
                   var length = $('.priorityclass').length;
                    var i=0;
                    var exists=0;
                    for (i = 0; i <length; i++) {
                       console.log(length+'loop'+i);
                        if ($('.priorityclass')[i].value == $(coursepriority).val()) {
                            console.log('samevalueexists');
                            $("#courseerrortext" + key).remove();
                            $('#coursepriority' + key).attr('style', 'border: 1px solid #d60000 !important');
                            errormsg = '<span id="courseerrortext' + key + '" style="color:#d60000;font-size: 11px;">This priority has been alredy assigned to another course,</br>Please select another priority</span>'
                            $('#coursepriority' + key).after(errormsg);
                            
                            exists = 1;
                            break;
                        } 
                    }
                    if(length==3){

                        console.log('limit exceed');
                        $("#courseerrortext" + key).remove();
                        errormsg = '<span id="courseerrortext' + key + '" style="color:#d60000;font-size: 11px;">3 cources alredy added ,</br>Please remove a course before add another</span>'
                        $('#coursepriority' + key).after(errormsg);
                      }

                    else if(exists==0){
                      

                      
                      var htmltext = '<tr id="coursetr' + key + '"><td>' + text + '</td>\n' +
                         '<td>' + courseprioritytext + '</td><input type="hidden" class="priorityclass" value="' + courseprioritytext + '" />\n' +
                         '<td>' +
                         '<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletecourse" onclick="deleteCourse(\'' + key + '\',\'' + courseprioritytext + '\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>' +
                         '</tr>\n';

                         var textbox = "<input type='text' style='width:100%'' id='addedcoursepriority" + key + "' value='" + $(coursepriority).val() + "' readonly='true' />";

                         $('#coursepriority' + key).after(textbox);
                         $('#coursepriority' + key).remove();



                         $('#courseheading').after(htmltext);

                         $.post('AddCourse.php', {
                             coursekey: key,
                             priority: courseprioritytext
                         },
                         function(data) {
                             $.iaoAlert({
                                 msg: "Course Added",
                                 type: "success"
                             });
                             $('#addcoursebtn' + key).after('<span id="coursehelptext' + key + '" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                             $('#addcoursebtn' + key).hide();
                         });

                        
                    }
                }
                else{
                    var htmltext = '<tr id="coursetr' + key + '"><td>' + text + '</td>\n' +
                         '<td>' + courseprioritytext + '</td><input type="hidden" class="priorityclass" value="' + courseprioritytext + '" />\n' +
                         '<td>' +
                         '<a style="color:#ff8282; cursor: pointer; cursor: hand;" id="deletecourse" onclick="deleteCourse(\'' + key + '\',\'' + courseprioritytext + '\')" ><i class="glyphicon glyphicon-remove" style="color:#ff8282"></i>Remove</a></td>' +
                         '</tr>\n';

                         var textbox = "<input type='text' style='width:100%'' id='addedcoursepriority" + key + "' value='" + $(coursepriority).val() + "' readonly='true' />";

                         $('#coursepriority' + key).after(textbox);
                         $('#coursepriority' + key).remove();



                         $('#courseheading').after(htmltext);

                         $.post('AddCourse.php', {
                             coursekey: key,
                             priority: courseprioritytext
                         },
                         function(data) {
                             $.iaoAlert({
                                 msg: "Course Added",
                                 type: "success"
                             });
                             $('#addcoursebtn' + key).after('<span id="coursehelptext' + key + '" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                             $('#addcoursebtn' + key).hide();
                         });

                }
            }
        }

          function generateApplication(){

             if ($('.priorityclass').length < 1) {

              alert('Please Add Course');

              

             }
             else if(!document.getElementById('declarationcheckbox').checked){
               alert('Please check the declaration');
             }
             else{

              window.location="report.php";
             }

         
      }
            </script>
            <!-- ***********************model*************************-->


          <!--   **************************coursemodel************************* -->
          <div class="w3-container">
               <div id="id03" class="w3-modal">
                  <div class="w3-modal-content w3-card-8">
                     <header class="w3-container w3-teal">
                        <a onclick="document.getElementById('id03').style.display='none'"
                           class="w3-closebtn">&times;</a>
                        <h3>Add Courses</h3>
                     </header>
                     <input class="w3-input w3-border" style='padding-top:10px' id='searchcourse' onkeypress='searchcoursetext()'  onchange ="this.onkeypress(),searchcoursetext()" onpaste="this.onkeypress(),searchtext()" oninput = "this.onkeypress(),searchcoursetext()"  placeholder='Search Subjects' type="text">
                     <div class="w3-container" style='overflow:auto;' id='coursemodel' >
                        <table class="w3-table w3-striped" id='course' >
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            
  <!-- *************************************end course model ******************************************** -->

            

  
      <div class=" w3-container   w3-padding w3-card-2"  style='display:none' id='coursedetails' >
     
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
            <input id='declarationcheckbox' class="w3-check" type="checkbox" > I have read and accept the above terms.
            <div class="w3-checkmark"></div>
           
         </label>
         <div class="w3-row" style='float:right;'>  
              <input type='button'  onclick='generateApplication();' value='Generate  Application' class="w3-btn w3-teal w3-section"/>
          </div>
         
         
      </div>
  
   </body>
</html>