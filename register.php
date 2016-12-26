<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="CSS/w3.css" type="text/css"/>
        <link rel="stylesheet" href="CSS/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="CSS/styles.css" type="text/css"/>
        <script src="JS/jquery.min.js" type="text/javascript"></script>
        <script src="JS/jquery.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <title>Register</title>
    </head>
    <body >
        <div  class="w3-row w3-padding " id='basicdetails' >
            <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >

                <header class="w3-container w3-teal">
                    <h2>Basic Information</h2>
                </header>
                <form class="w3-container w3-form" id='basicdetailform'>
                    <div >
                        <p class="w3-text-teal" ><b>Advanced Technological Institute</b></p> 
                        <select class="w3-select" id='institute' name='institute'  >
                            <option value=""  disabled="" selected="">Choose Advanced Technological Institute</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div   >
                        <p class="w3-text-teal"><b>Course</b></p> 
                        <select class="w3-select" id='course' name='course' >
                            <option value="" disabled=""  selected="">Choose a Course</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="w3-group" >      
                        <input class="w3-input" id='namewithini' type="text" name="name_with_ini" placeholder="eg: SK Gamage"  >
                        <label class="w3-label" >Name With Initials</label>
                    </div>
                    <div class="w3-group">      
                        <input class="w3-input" id='name' type="text" name="name" placeholder="eg: Saman Kumara"  >
                        <label class="w3-label">Name/Name Denoted by Initials</label>
                    </div>
                    <div   class="w3-group"> 

                        <input  type="date" id='dob'  class="w3-input" name="dob"  >
                        <label class="w3-label">Date of Birth</label>
                    </div>
                    <div class="w3-group">      
                        <input class="w3-input" id='nic' type="text"  name="nic" placeholder="eg: 932658236V"  >
                        <label class="w3-label">National Identity Card Number</label>
                    </div>
                    <p class="w3-text-teal"><b>Gender</b></p>
                   
                        <input class="w3-radio" type="radio" name="gender" id="gender" value="male" >
                        <div class="w3-checkmark"></div> <label class="w3-checkbox"> Male
                    </label><br>
                    
                        <input class="w3-radio" type="radio" name="gender" id="gender" value="female" >
                        <div class="w3-checkmark"></div><label class="w3-checkbox" id='gendersection'> Female
                    </label>

                    <p class="w3-text-teal "><b>Administrative District</b></p> 
                    <select class="w3-select" id='district' name='district'>
                        <option value="" disabled="" selected="" >Choose Administrative District</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>


                    <div class="w3-row" style='float:right'>  <input type='button' class="w3-btn w3-teal w3-section" onclick='validateBasic()' value='Next &#10095;'>
                    </div>
                </form>
            </div>
            <div class="w3-col m12 l4 w3-padding">
                <div class="w3-card-2">hvhgfgf</div>
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
                if ($('#institute :selected').text()=="Choose Advanced Technological Institute"){
                    $('#institute').addClass("validation");
                    $('#institute').after('<span id="errortext" style="color:#d60000;font-size: 11px;"></br>This is a required field</span>');
                    validationstatus = 0;
                }
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

           
        </script>





        <div  class="w3-row w3-padding " id='contactdetails' style='display: none;'>
            <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >

                <header class="w3-container w3-teal">
                    <h2>Contact Details</h2>
                </header>
                <form class="w3-container w3-form">

                    <div class="w3-group">      
                        <input class="w3-input" type="text" id='addressl1' name="address_line1" placeholder="Address line1" required="">
                        <label class="w3-label">Permanent Address</label>
                        
                        <input class="w3-input" id='addressl2' type="text" name="address_line2" placeholder="Address line2" required="">
                        <label class="w3-label"></label>
                    
                        <input  type="text"  class="w3-input" id='addressl3' name="address_line3" placeholder="Address line3" required="">
                        <label class="w3-label"></label>
                    </div>
                    <div class="w3-group">      
                        <input class="w3-input" id='contactno' type="text"  name="contact_no1" placeholder="eg: 091xxxxxxx , 07xxxxxxxx" required="">
                        <label class="w3-label">Contact Phone Number</label>
                    </div>
                    <div class="w3-group">      
                        <input class="w3-input" type="text" id='email' name="email" placeholder="eg: abc@mail.com">
                        <label class="w3-label">Email</label>
                    </div>

                    <div class="w3-row " style='float:right'> 
                    <input type='button'  onclick='$("#basicdetails").css("display", "");$("#contactdetails").css("display", "none");' value='&#10094; Previous ' class="w3-btn w3-teal w3-section"/> 
                    <input type='button'  onclick='validateContact()' value='Next &#10095;' class="w3-btn w3-teal w3-section"/></div>
                </form>
            </div>
            <div class="w3-col m12 l4 w3-padding">
                <div class="w3-card-2">hvhgfgf</div>
            </div>
        </div>

        <script>
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
                    $("#educationqulification").css("display", "");

                }

            }
            



        </script>



        <div  class="w3-row w3-padding " style='display: true;' id='educationqulification'>
            <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >

                <header class="w3-container w3-teal">
                    <h2>Educational Qualification</h2>
                </header>
                <form class="w3-container w3-form">
                    <div   class="w3-container w3-margin w3-border">
                        <p class="w3-text-teal" align="center"><b>GCE (A/L) Examination</b></p><br> 

                        <div class="w3-group" >      
                            <input class="w3-input"  name="al_year" input type="number" min="1950" max="2100"   >
                            <label class="w3-label" >Year</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="al_index_no" placeholder=""  >
                            <label class="w3-label">Index Number</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="al_medium" placeholder=""  >
                            <label class="w3-label">Medium</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="zscore" placeholder=""  >
                            <label class="w3-label">Z-Score of The Above Examination</label>
                        </div>
                         <a onclick="document.getElementById('id01').style.display='block', loadDoc()" class="w3-btn w3-teal w3-section">Add GCE (A/L) Examination Result</a>
                                <table class="w3-table w3-striped" id='appendtext' ></table>

                    <div class="w3-group">      
                        <input class="w3-input" type="text" name="zscore" placeholder=""  >
                        <label class="w3-label">Highest Qualification in English as a Subject</label>
                    </div>
                    <div class="w3-row">  <button class="w3-btn w3-teal w3-section">Register</button></div>
                </form>
                </div>

                <!-- ***********************model************************* -->                   
                    <div class="w3-container">
                       
                      
                       <div id="id01" class="w3-modal">
                          <div class="w3-modal-content w3-card-8">
                             <header class="w3-container w3-teal">
                                <span onclick="document.getElementById('id01').style.display='none'"
                                   class="w3-closebtn">&times;</span>
                                <h3>Add Results</h3>
                             </header>
                             <input class="w3-input w3-border" style='padding-top:10px' id='searchsubject1' onkeypress='searchtext()'  onchange ="this.onkeypress(),searchtext()" onpaste="this.onkeypress(),searchtext()" oninput = "this.onkeypress(),searchtext()"  placeholder='Search Subjects'type="text">
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
                       // Get the modal
                       var modal = document.getElementById('id01');
                       
                       // When the user clicks anywhere outside of the modal, close it
                       window.onclick = function(event) {
                           if (event.target == modal) {
                               modal.style.display = "none";
                           }
                       }
                        var height = screen.height;
                        height = (height*70)/100;
                        $( "#subjectmodel1" ).css( "height", height );

                       
                       function appendText(text,key){

                  //      	if(1==1){
                  //      		$( "#dialog" ).css("display", "");
                  //      		$( "#dialog" ).fadeIn(0);
          				    // $( "#dialog" ).fadeOut(1500); 		
                  //      	}
                       	var gradeid = "#alsubject"+key+" option:selected";
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
                        var text='<tr id="alsubjecttr'+key+'"><td>'+text+'</td>\n'
                                  +'<td>'+$(gradeid).text()+'</td>\n'
                                  +'<input type="hidden" id="alsubjectresult'+key+'" value="'+$(gradeid).val()+'"/></tr>\n';
                                 

                        if($('#olsubjheading').length){
                           
                            $('#olsubjheading').after(text);
                        }
                        else{
                            text=textheadings+text;
                            document.getElementById("appendtext").innerHTML = text;
                        }
                        $('#addsubjectbtn'+key).after('<span id="helptext'+key+'" style="color:#009688; font-size:11px;"><i style="color:#009688" class="glyphicon glyphicon-ok"></i> Added</span>');
                        $('#addsubjectbtn'+key).hide();
                        $('#removesubjectbtn'+key).show();
                    }
                       }
                       function removeText(id,key){
                        $('#alsubjecttr'+key).remove();
                        $('#addsubjectbtn'+key).show();
                        $('#removesubjectbtn'+key).hide();
                        $('#helptext'+key).remove();
                       }
                    </script>
                    <!-- ***********************model*************************-->

				<div class="w3-panel w3-pale-yellow" style='display:none;' id="dialog">
				    <i class="glyphicon glyphicon-exclamation-sign"></i>
				    <h3>Warning!</h3>
				    <p>This subject has been alredy added.</p>
				</div>

                <form class="w3-container w3-form" >
                    <div   class="w3-container w3-margin w3-border">
                        <p class="w3-text-teal" align="center"><b>GCE (O/L) Examination</b></p><br> 

                        <div class="w3-group" >      
                            <input class="w3-input"  name="ol_year" input type="number" min="1950" max="2100"  required >
                            <label class="w3-label" >Year</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="ol_index_no" placeholder="" required >
                            <label class="w3-label">Index Number</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="ol_medium" placeholder="" required >
                            <label class="w3-label">Medium</label>
                        </div>
                        <p class="w3-text-teal" align="center"><b>GCE (O/L) Examination Result</b></p><br>
                        <table class="w3-table w3-bordered w3-card-2">
                            <thead>
                                <tr class="w3-teal">
                                    <th>Subject</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject1" placeholder="Subject " required >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade1" placeholder="Grade" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject2" placeholder="Subject " required >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade2" placeholder="Grade" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject3" placeholder="Subject" required >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade3" placeholder="Grade" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject4" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade4" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject5" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade5" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject6" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade6" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject7" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade7" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject8" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade8" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject9" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade9" placeholder="Grade"  >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_subject10" placeholder="Subject "  >
                                    </td>
                                    <td>
                                        <input class="w3-input" type="text" name="ol_grade10" placeholder="Grade"  >
                                    </td>
                                </tr>
                            </tbody>
                        </table><br>
                    </div>

                    <div class="w3-row">  <button class="w3-btn w3-teal w3-section">Register</button></div>
                </form>
            </div>
            <div class="w3-col m12 l4 w3-padding">
                <div class="w3-card-2">hvhgfgf</div>
            </div>
        </div>



        <div  class="w3-row w3-padding " style='display: none;'>
            <div class="w3-col m12 l8 w3-container   w3-padding w3-card-2" >

                <header class="w3-container w3-teal">
                    <h2>Employment Details</h2>
                    <h4>(Only for part time courses)</h4>
                </header>
                <div   class="w3-container w3-margin w3-border">
                    <p class="w3-text-teal" align="center"><b>Details of Percent Employment</b></p><br> 
                    <form class="w3-container w3-form">
                        <div class="w3-group">      
                            <input class="w3-input" type="text"  name="post" placeholder="">
                            <label class="w3-label">Post</label>
                        </div>
                        <div   class="w3-group"> 

                            <input  type="date"  class="w3-input" name="date_of_appoinment" required >
                            <label class="w3-label">Date of Appoinment</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text"  name="epf_no" placeholder="">
                            <label class="w3-label">E.P.F Number</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="address_line1" placeholder="Place of Work" required="">
                            <label class="w3-label">Place of Work and Address</label>
                        </div>
                        <div class="w3-group">      
                            <input class="w3-input" type="text" name="address_line2" placeholder="Address line1" required="">
                            <label class="w3-label"></label>
                        </div>
                        <div   class="w3-group"> 

                            <input  type="text"  class="w3-input" name="address_line3" placeholder="Address line2" required="">
                            <label class="w3-label"></label>
                        </div>
                        <div   class="w3-group"> 

                            <input  type="text"  class="w3-input" name="address_line4" placeholder="Address line3" >
                            <label class="w3-label"></label>
                        </div>



                        <div class="w3-row ">  <button class="w3-btn w3-teal w3-section">Register</button></div>
                    </form>
                </div>
            </div>
            <div class="w3-col m12 l4 w3-padding">
                <div class="w3-card-2">hvhgfgf</div>
            </div>
        </div>
        <div style="padding: 15px">
            <div class=" w3-container   w3-padding w3-card-2" style='display: none;' >
                <header class="w3-container w3-teal">
                    <h4>Declaration</h4>

                </header>

                <p>  I do hereby declare that I am not following any other full-time course of study 
                    in any other state institution. I am aware that my registration will be canceled 
                    at any time during the period of study if it is found that, I concurrently follow 
                    a full-time course at any other state institution. I do hereby certify that the 
                    information furnished here is true and accurate to the best of my knowledge.</p>

                <label >
                    <input  class="w3-check" type="checkbox" >
                    <div class="w3-checkmark"></div> I have read and accept the above terms.
                </label>
                <div class="w3-row ">  <button class="w3-btn w3-teal w3-section">Register</button>
                </div>
            </div>

    </body>
</html>