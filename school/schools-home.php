<!DOCTYPE html>
<html lang="en">
   <?php include ('head.php'); ?>
   <body class="full-width">
      <section id="container">
         <!--header start-->
         <?php include ('header.php'); ?>
         <section id="main-content">
            <section class="wrapper site-min-height">
               <!-- page start--><br>
               <div class="clearfix"></div>
               <section class="">
                  <div class="">
                     <div class="row">
                        <div class="clearfix bhoechie-tab-container">
                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bhoechie-tab-menu">
                              <div class="list-group">
                                 <a href="#" class="list-group-item active text-center">
                                    <h4 class="fa fa-magic"></h4>
                                    <br/>Teachers
                                 </a>
                                 <a href="#" class="list-group-item text-center">
                                    <h4 class="fa fa-magic"></h4>
                                    <br/>Academic Planner
                                 </a>
                                 <a href="#" class="list-group-item text-center">
                                    <h4 class="fa fa-calendar "></h4>
                                    <br/>Students
                                 </a>
                                 <a href="#" class="list-group-item  text-center">
                                    <h4 class="fa fa-file-text-o"></h4>
                                    <br/>Profile
                                 </a>
                                 <a href="#" class="list-group-item text-center">
                                    <h4 class="fa fa-magic"></h4>
                                    <br/>Valmiki
                                 </a>
                                 <a href="#" class="list-group-item text-center">
                                    <h4 class="fa fa-magic"></h4>
                                    <br/>Drona
                                 </a>
                                 <a href="#" class="list-group-item text-center">
                                    <h4 class="fa fa-magic"></h4>
                                    <br/>Reports
                                 </a>
                              </div>
                           </div>
                           <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 bhoechie-tab">
                              <div class="bhoechie-tab-content active">
                                 <div class="">
                                    <section class="panel">
                                       <header class="panel-heading">
                                          Teachers
                                       </header>
                                       <div class="clearfix">
                                          <section id="flip-scroll" style="padding:20px;">
                                             <form action="" class="form-horizontal">
                                                <div class="row">
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>First Name :</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Middle Name :</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="Middle Name" name="middlename">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Last Name :</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="Last Name" name="lastname">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>DOB :</label>
                                                            <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY" name="dob">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Gender :</label>
                                                            <select class="form-control">
                                                               <option selected="" disabled="">Select Gender</option>
                                                               <option>Male</option>
                                                               <option>Female</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label for="email">Email:</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Mobile :</label>
                                                            <input type="text" class="form-control" id="mobile" placeholder="+91 xxxxx xxxxx" name="mobile">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Alt Mobile :</label>
                                                            <input type="text" class="form-control" id="mobile" placeholder="+91 xxxxx xxxxx" name="mobile">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <div class="form-group">
                                                         <div class="col-sm-12">
                                                            <label>Address :</label>
                                                            <input type="text" class="form-control" id="mobile" placeholder="Address" name="mobile">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="">
                                                   <table class="table table-bordered" id="participantTable">
                                                      <thead>
                                                         <tr>
                                                            <th>Class</th>
                                                            <th>Sections</th>
                                                            <th>Subjects</th>
                                                            <th></th>
                                                         </tr>
                                                      </thead>
                                                      <tr class="participantRow">
                                                         <td width="20%">
                                                            <select class="form-control">
                                                               <option value="1" selected>Select Class </option>
                                                               <option value="1">8</option>
                                                               <option value="1">9</option>
                                                               <option value="1">10</option>
                                                               <option value="1">11</option>
                                                            </select>
                                                         </td>
                                                         <td width="20%">
                                                            <select class="form-control">
                                                               <option value="1" selected>Select Section </option>
                                                               <option value="1">A</option>
                                                               <option value="1">B</option>
                                                               <option value="1">C</option>
                                                               <option value="1">D</option>
                                                            </select>
                                                         </td>
                                                         <td width="49%">
                                                            <select class="form-control">
                                                               <option value="1" selected>Select Subjects </option>
                                                               <option value="1">Maths</option>
                                                               <option value="1">Physics</option>
                                                               <option value="1">Chemistry</option>
                                                               <option value="1">English</option>
                                                            </select>
                                                         </td>
                                                         <td><button class="btn btn-danger remove" type="button">Remove</button>
                                                         </td>
                                                      </tr>
                                                      <tr id="addButtonRow">
                                                         <td colspan="4"><button class="btn btn-large btn-success add pull-right" type="button">Add</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </div>
                                                <!--<div class="select_class">
                                                   <h3>Select Class</h3>
                                                   <ul>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           6
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           7
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           8
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           9
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           10
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           11
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           12
                                                       </li>
                                                   
                                                   
                                                   </ul>
                                                   </div>-->
                                                <br>
                                                <!--<div class="select_class">
                                                   <h3>Select Section</h3>
                                                   <ul>
                                                       <li>
                                                           <div class="radio-aoption"></div>
                                                           A
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           B
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           C
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           D
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           E
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           F
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           G
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           H
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           I
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           J
                                                       </li>
                                                       <li>
                                                           <div class="radio-option"></div>
                                                           K
                                                       </li>
                                                   
                                                   </ul>
                                                   </div>-->
                                                <!--<div class="selected_classes">
                                                   <table class="table table-bordered">
                                                       <thead>
                                                           <tr>
                                                               <th>Class</th>
                                                               <th>Subjects</th>
                                                               <th>Sections</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           <tr>
                                                               <td><strong>8</strong>
                                                               </td>
                                                               <td style="width: 170px;">
                                                   
                                                   
                                                   
                                                                   <ul>
                                                                       <li class="col-sm-12">Maths<span class="checkbox-option"></span>
                                                                       </li>
                                                                       <li class="col-sm-12">Science<span class="checkbox-option"></span>
                                                                       </li>
                                                                       <li class="col-sm-12">English<span class="checkbox-option"></span>
                                                                       </li>
                                                                       <li class="col-sm-12">Social<span class="checkbox-option"></span>
                                                                       </li>
                                                                   </ul>
                                                               </td>
                                                               <td>
                                                   
                                                                   <div class="select_class">
                                                   
                                                   
                                                   
                                                   
                                                                       <ul>
                                                                           <li class="col-sm-1">A<span class="checkbox-option"></span>
                                                                           </li>
                                                                           <li class="col-sm-1">B<span class="checkbox-option"></span>
                                                                           </li>
                                                                           <li class="col-sm-1">C<span class="checkbox-option"></span>
                                                                           </li>
                                                                           <li class="col-sm-1">D<span class="checkbox-option"></span>
                                                                           </li>
                                                                       </ul>
                                                   
                                                   
                                                   
                                                   
                                                                   </div>
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                               </td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                                   <div class="clearfix"></div>
                                                   <button class="btn btn-primary pull-right continue" type="button">Continued</button>
                                                   <div class="clearfix"></div>
                                                   <div class="subject_details">
                                                       <h4 style="margin-bottom:20px;">Alloted Subjects</h4>
                                                       <div class="row">
                                                           <div class="col-sm-5">
                                                               <strong>8 Maths</strong>
                                                           </div>
                                                           <div class="col-sm-7">
                                                   
                                                   
                                                               <ul class="list-inline">
                                                                   <li>Maths<span class="checkbox-option click"></span>
                                                                   </li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-sm-5">
                                                               <strong>8 Science</strong>
                                                           </div>
                                                           <div class="col-sm-7">
                                                   
                                                               <div class="select_class">
                                                                   <h3>Select Section</h3>
                                                                   <ul>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           A
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           B
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           C
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           D
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           E
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           F
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           G
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           H
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           I
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           J
                                                                       </li>
                                                                       <li>
                                                                           <div class="radio-option"></div>
                                                                           K
                                                                       </li>
                                                   
                                                                   </ul>
                                                               </div>
                                                               <ul class="list-inline">
                                                                   <li>Physics<span class="checkbox-option click"></span>
                                                                   </li>
                                                                   <li>Biology<span class="checkbox-option click"></span>
                                                                   </li>
                                                               </ul>
                                                           </div>
                                                       </div>
                                                       <div class="row save_buttons">
                                                           <center><button class="btn btn-primary">Save</button><button class="btn btn-success">Add New</button><button class="btn btn-danger">Reset</button>
                                                           </center>
                                                       </div>
                                                   </div>
                                                   </div>-->
                                             </form>
                                             <br>
                                          </section>
                                       </div>
                                    </section>
                                 </div>
                              </div>
                              <!-- flight section -->
                              <div class="bhoechie-tab-content">
                                 <section class="panel">
                                    <header class="panel-heading">
                                       Academic Planner
                                    </header>
                                    <div class="clearfix"></div>
                                    <div class="clearfix">
                                       <br>
                                       <section class="panel secound_tabs">
                                          <header class="panel-heading tab-bg-dark-navy-blue " style="padding:0px;">
                                             <ul class="nav nav-tabs">
                                                <li class="active">
                                                   <a data-toggle="tab" href="#school_schedule" aria-expanded="true">School Scheduler </a>
                                                </li>
                                                <li class="">
                                                   <a data-toggle="tab" href="#time_table" aria-expanded="false">Teacher Time Table</a>
                                                </li>
                                                <li class="">
                                                   <a data-toggle="tab" href="#calender" aria-expanded="false">School Calender</a>
                                                </li>
                                                <li class="">
                                                   <a data-toggle="tab" href="#lesson_planner" aria-expanded="false">Lesson Planner</a>
                                                </li>
                                                <li>
                                                   <a data-toggle="tab" href="#teaching_report" aria-expanded="flase">Teaching Report </a>
                                                </li>
                                             </ul>
                                          </header>
                                          <div class="panel-body" style="background: #fbfbfb;">
                                             <div class="tab-content">
                                                <div id="school_schedule" class="tab-pane active">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <th>From</th>
                                                         <th>To</th>
                                                         <th>Type</th>
                                                         <th>Period</th>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Hours </option>
                                                                     <option>4 AM </option>
                                                                     <option>5 AM </option>
                                                                     <option>6 AM </option>
                                                                     <option>7 AM </option>
                                                                     <option>8 AM </option>
                                                                     <option>9 AM </option>
                                                                     <option>10 AM </option>
                                                                     <option>11 AM </option>
                                                                     <option>12 PM </option>
                                                                     <option>1 PM </option>
                                                                     <option>2 PM </option>
                                                                     <option>3 PM </option>
                                                                     <option>4 PM </option>
                                                                     <option>5 PM </option>
                                                                     <option>6 PM </option>
                                                                     <option>7 PM </option>
                                                                     <option>8 PM </option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6 ">
                                                                  <select class=" form-control ">
                                                                     <option>Minutes </option>
                                                                     <option>00 </option>
                                                                     <option>15 </option>
                                                                     <option>30 </option>
                                                                     <option>45 </option>
                                                                  </select>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control ">
                                                                  <option>Select Type </option>
                                                                  <option>Period </option>
                                                                  <option>Break </option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               1
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <div class="clearfix"></div>
                                                   <div class="weekoff col-sm-4" style="display:flex;">
                                                      <span style="margin-right:20px;font-weight: bold;font-size: 16px;">Week Off </span>
                                                      <span>
                                                         <select class="form-control">
                                                            <option selected="">Monday</option>
                                                            <option>Tuesday</option>
                                                            <option>Wednesday</option>
                                                            <option>Thursday</option>
                                                            <option>Friday</option>
                                                            <option>Saturday</option>
                                                            <option>Sunday</option>
                                                         </select>
                                                      </span>
                                                   </div>
                                                   <div class="clearfix"></div>
                                                   <div class="col-md-12 text-center">
                                                      <button class="btn btn-success" type="submit">Save</button>
                                                   </div>
                                                </div>
                                                <div id="time_table" class="tab-pane">
                                                   <div class="top_selects">
                                                      <div class="row">
                                                         <div class="col-sm-2">
                                                            <select class="form-control">
                                                               <option selected="">Select Teacher</option>
                                                               <option>Teacher</option>
                                                               <option>Teacher 1</option>
                                                               <option>Teacher 2</option>
                                                               <option>Teacher 3</option>
                                                               <option>Teacher 4</option>
                                                               <option>Teacher 5</option>
                                                               <option>Teacher 6</option>
                                                                
                                                                <option>Add New Teacher </option>
                                                                
                                                                
                                                            </select>
                                                         </div>
                                                         <div class="col-sm-10">
                                                            <p class="pull-right">
                                                               <em><strong>Note :</strong></em> <strong>B</strong> - Board , <strong>C</strong> - Competitive, <strong>S</strong> - Studyhour
                                                            </p>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <th>Period</th>
                                                         <th>Monday</th>
                                                         <th>Tuesday</th>
                                                         <th>Wednesday</th>
                                                         <th>Thursday</th>
                                                         <th>Friday</th>
                                                         <th>Saturday</th>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>1</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>2</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>3</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>4</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>5</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>6</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>

                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>7</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>8</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on pull-left" for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     <label class="label_radio r_off pull-right" for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>9</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td>10</td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                            <td>
                                                               <select class="form-control">
                                                                  <option selected=""> Class </option>
                                                                  <option>6th</option>
                                                                  <option>7th</option>
                                                                  <option>9th</option>
                                                                  <option>11th</option>
                                                               </select>
                                                               <br>
                                                               <select class="form-control">
                                                                  <option selected=""> Subject </option>
                                                                  <option>Maths</option>
                                                                  <option>Physics</option>
                                                                  <option>Chemistry</option>
                                                                  <option>English</option>
                                                               </select>
                                                               <div class="board">
                                                                  <div class="radios">
                                                                     <label class="label_radio r_on " for="radio-01">
                                                                     <input name="sample-radio" id="radio-01" value="1" type="radio" checked=""> B
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-02" value="1" type="radio"> C
                                                                     </label>
                                                                     &nbsp; &nbsp;
                                                                     <label class="label_radio r_off " for="radio-02">
                                                                     <input name="sample-radio" id="radio-03" value="1" type="radio"> S
                                                                     </label>
                                                                  </div>
                                                               </div>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <div class="submit_buttons">
                                                      <center>
                                                         <button class="btn btn-primary">Save</button>
                                                         <button class="btn btn-danger">Reset</button>
                                                      </center>
                                                   </div>
                                                </div>
                                                <div id="calender" class="tab-pane">
                                                   <div class="top_selects">
                                                      <div class="row">
                                                         <div class="col-sm-2">
                                                            <select class="form-control">
                                                               <option selected="" disabled="">Academic Year</option>
                                                               <option>2018</option>
                                                               <option>2017</option>
                                                               <option>2016</option>
                                                               <option>2015</option>
                                                            </select>
                                                         </div>
                                                         <div class="col-sm-2">
                                                            <select class="form-control">
                                                               <option selected="" disabled="">Class & Section</option>
                                                               <option>9A</option>
                                                               <option>9B</option>
                                                               <option>9C</option>
                                                               <option>10A</option>
                                                               <option>10B</option>
                                                               <option>10C</option>
                                                               <option>10D</option>
                                                               <option>11A</option>
                                                               <option>11B</option>
                                                               <option>12A</option>
                                                               <option>12B</option>
                                                            </select>
                                                         </div>
                                                         <div class="col-sm-2">
                                                            <select class="form-control">
                                                               <option selected="" disabled="">Month</option>
                                                               <option>January</option>
                                                               <option>February</option>
                                                               <option>March</option>
                                                               <option>April</option>
                                                               <option>May</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <th>Date</th>
                                                         <th>Event</th>
                                                         <th>Description</th>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td class="col-sm-3"><input type="text" class="form-control" placeholder="11/08/2018">
                                                            </td>
                                                            <td class="col-sm-3">
                                                               <select class="form-control">
                                                                  <option>Select Event</option>
                                                                  <option>Working & Teaching</option>
                                                                  <option>Working & Non-Teaching</option>
                                                                  <option>Festival Holiday</option>
                                                                  <option>National Holiday</option>
                                                                  <option selected="">Week Off</option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               <input type="text" class="form-control">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td class="col-sm-3"><input type="text" class="form-control" placeholder="11/08/2018">
                                                            </td>
                                                            <td class="col-sm-3">
                                                               <select class="form-control">
                                                                  <option>Select Event</option>
                                                                  <option>Working & Teaching</option>
                                                                  <option>Working & Non-Teaching</option>
                                                                  <option>Festival Holiday</option>
                                                                  <option>National Holiday</option>
                                                                  <option selected="">Week Off</option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               <input type="text" class="form-control">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td class="col-sm-3"><input type="text" class="form-control" placeholder="11/08/2018">
                                                            </td>
                                                            <td class="col-sm-3">
                                                               <select class="form-control">
                                                                  <option>Select Event</option>
                                                                  <option>Working & Teaching</option>
                                                                  <option>Working & Non-Teaching</option>
                                                                  <option>Festival Holiday</option>
                                                                  <option>National Holiday</option>
                                                                  <option selected="">Week Off</option>
                                                               </select>
                                                            </td>
                                                            <td>
                                                               <input type="text" class="form-control">
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <div class="clearfix"></div>
                                                   <br/>
                                                   <div class="total_counts col-sm-7">
                                                      <table class="table table-bordered">
                                                         <thead>
                                                            <th>Total Days</th>
                                                            <th>Week Off & Holidays</th>
                                                            <th>Non-Teaching Days</th>
                                                            <th>Teaching Days</th>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>30</td>
                                                               <td>6</td>
                                                               <td>2</td>
                                                               <td>22</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                                <div id="lesson_planner" class="tab-pane">
                                                   <div class="bhoechie-tab-content active">
                                                      <section class="panel">
                                                         <div class="row">
                                                            <div class="panel-body col-md-12 ">
                                                               <center>
                                                                  <div id="tab" class="btn-group" data-toggle="buttons-radio">
                                                                     <a href="#drona2" class="btn btn-success active" data-toggle="tab">Drona</a>
                                                                     <a href="#valmiki2" class="btn btn-primary" data-toggle="tab"> Valmiki</a>
                                                                  </div>
                                                               </center>
                                                            </div>
                                                         </div>
                                                         <div class="tab-content">
                                                            <div class="tab-pane active" id="drona2">
                                                               <div class="panel">
                                                                  <div class="row">
                                                                     <div class="panel-body" style="margin-left:15px;">
                                                                        <div class="btn-group sub_tabs" data-toggle="buttons-radio">
                                                                           <a href="#planner" class="btn btn-success" data-toggle="tab">Planner</a>
                                                                           <a href="#view" class="btn btn-primary" data-toggle="tab">View</a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="tab-content" style="padding:15px;">
                                                                     <div class="tab-pane active" id="planner">
                                                                        
                                                                        <div class="row">
                                                                           <div class="col-sm-2">
                                                                              <label>Month :</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Select Month</option>
                                                                                 <option>January</option>
                                                                                 <option>February</option>
                                                                                 <option>March</option>
                                                                                 <option>April</option>
                                                                              </select>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Class :</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Select Class</option>
                                                                                 <option>IX Class</option>
                                                                                 <option>X Class</option>
                                                                                 <option>XI Class</option>
                                                                                 <option>XII Class</option>
                                                                              </select>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Subject :</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Select Subject</option>
                                                                                 <option>English</option>
                                                                                 <option>Maths</option>
                                                                                 <option>Science</option>
                                                                                 <option>Social</option>
                                                                              </select>
                                                                           </div>
                                                                        </div>
                                                                         <br><br>
                                                                         <div class="row">
                                                                           <div class="col-sm-7">
                                                                              <table class="table table-bordered">
                                                                                 <thead>
                                                                                    <th>Total Days</th>
                                                                                    <th>Week Off & Holidays</th>
                                                                                    <th>Non-Teaching Days</th>
                                                                                    <th>Teaching Days</th>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                       <td>30</td>
                                                                                       <td>6</td>
                                                                                       <td>2</td>
                                                                                       <td>22</td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </div>
                                                                        </div>
                                                                         
                                                                         
                                                                        <div class="subjects_topics col-sm-5" style="margin:30px 0px;">

                                                                           <table class="table table-bordered">
                                                                              <thead>
                                                                                 <tr cols-span="2">
                                                                                    <th>Chapter</th>
                                                                                    <th>Topics</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td class="col-sm-3">Chapter 1</td>
                                                                                    <td class="col-sm-9">
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 2<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 3<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 4<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td>Chapter 2</td>
                                                                                    <td>
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 2<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 3<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 4<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                        <div class="row">
                                                                           <div class="col-sm-12">
                                                                              <center>
                                                                                 <a href="#" class="btn btn-primary">Save</a>
                                                                                 <a href="#" class="btn btn-danger">Reset</a>
                                                                              </center>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="tab-pane" id="view">
                                                                        <div class="row">
                                                                           <div class="col-sm-7">
                                                                              <table class="table table-bordered">
                                                                                 <thead>
                                                                                    <th>Total Days</th>
                                                                                    <th>Week Off & Holidays</th>
                                                                                    <th>Non-Teaching Days</th>
                                                                                    <th>Teaching Days</th>
                                                                                 </thead>
                                                                                 <tbody>
                                                                                    <tr>
                                                                                       <td>30</td>
                                                                                       <td>6</td>
                                                                                       <td>2</td>
                                                                                       <td>22</td>
                                                                                    </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                           </div>
                                                                        </div>
                                                                        <div class="row">
                                                                           <div class="col-sm-2">
                                                                              <label>Month :</label>
                                                                              <h4>January</h4>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Class :</label>
                                                                              <h4>X Class</h4>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Subject</label>
                                                                              <h4>English</h4>
                                                                           </div>
                                                                        </div>
                                                                        <div class="subjects_topics col-sm-5" style="margin:30px 0px;">
                                                                           <table class="table table-bordered">
                                                                              <thead>
                                                                                 <tr cols-span="2">
                                                                                    <th>Chapter</th>
                                                                                    <th>Topics</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td class="col-sm-3">Chapter 1</td>
                                                                                    <td class="col-sm-9">
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1</li>
                                                                                          <li class="col-sm-12">Topic 2</li>
                                                                                          <li class="col-sm-12">Topic 3</li>
                                                                                          <li class="col-sm-12">Topic 4</li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td>Chapter 2</td>
                                                                                    <td>
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1</li>
                                                                                          <li class="col-sm-12">Topic 2</li>
                                                                                          <li class="col-sm-12">Topic 3</li>
                                                                                          <li class="col-sm-12">Topic 4</li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="tab-pane" id="valmiki2">
                                                               <div class="panel">
                                                                  <div class="row">
                                                                     <div class="panel-body" style="margin-left:15px;">
                                                                        <div class="btn-group" data-toggle="buttons-radio">
                                                                           <a href="#planner1" class="btn btn-success" data-toggle="tab">Planner</a>
                                                                           <a href="#view1" class="btn btn-primary" data-toggle="tab">View</a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="tab-content" style="padding:15px;">
                                                                     <div class="tab-pane active" id="planner1">
                                                                        <div class="row">
                                                                           <div class="col-sm-2">
                                                                              <label>Class :</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Select Class</option>
                                                                                 <option>IX Class</option>
                                                                                 <option>X Class</option>
                                                                                 <option>XI Class</option>
                                                                                 <option>XII Class</option>
                                                                              </select>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Subject</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Select Subject</option>
                                                                                 <option>English</option>
                                                                                 <option>Maths</option>
                                                                                 <option>Science</option>
                                                                                 <option>Social</option>
                                                                              </select>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Valmiki Package</label>
                                                                              <select class="form-control">
                                                                                 <option selected="" disabled="">Valmiki Package</option>
                                                                                 <option>Foundation</option>
                                                                                 <option>Engineering</option>
                                                                                 <option>Medical</option>
                                                                                 <option>CA , CPT</option>
                                                                                 <option>CLAT</option>
                                                                              </select>
                                                                           </div>
                                                                        </div>
                                                                        <div class="subjects_topics col-sm-5" style="margin:30px 0px;">
                                                                           <table class="table table-bordered">
                                                                              <thead>
                                                                                 <tr cols-span="2">
                                                                                    <th>Chapter</th>
                                                                                    <th>Topics</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td class="col-sm-3">Chapter 1</td>
                                                                                    <td class="col-sm-9">
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 2<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 3<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 4<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td>Chapter 2</td>
                                                                                    <td>
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 2<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 3<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                          <li class="col-sm-12">Topic 4<span class="checkbox-option"></span>
                                                                                          </li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                        <div class="row">
                                                                           <div class="col-sm-12">
                                                                              <center>
                                                                                 <a href="#" class="btn btn-primary">Save</a>
                                                                                 <a href="#" class="btn btn-danger">Reset</a>
                                                                              </center>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="tab-pane" id="view1">
                                                                        <div class="row">
                                                                           <div class="col-sm-2">
                                                                              <label>Class :</label>
                                                                              <h4>X Class</h4>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Subject :</label>
                                                                              <h4>English</h4>
                                                                           </div>
                                                                           <div class="col-sm-2">
                                                                              <label>Valmiki Package</label>
                                                                              <h4>CA , CPT</h4>
                                                                           </div>
                                                                        </div>
                                                                        <div class="subjects_topics col-sm-5" style="margin:30px 0px;">
                                                                           <table class="table table-bordered">
                                                                              <thead>
                                                                                 <tr cols-span="2">
                                                                                    <th>Chapter</th>
                                                                                    <th>Topics</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td class="col-sm-3">Chapter 1</td>
                                                                                    <td class="col-sm-9">
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1</li>
                                                                                          <li class="col-sm-12">Topic 2</li>
                                                                                          <li class="col-sm-12">Topic 3</li>
                                                                                          <li class="col-sm-12">Topic 4</li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td>Chapter 2</td>
                                                                                    <td>
                                                                                       <ul>
                                                                                          <li class="col-sm-12">Topic 1</li>
                                                                                          <li class="col-sm-12">Topic 2</li>
                                                                                          <li class="col-sm-12">Topic 3</li>
                                                                                          <li class="col-sm-12">Topic 4</li>
                                                                                       </ul>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </section>
                                                   </div>
                                                </div>
                                                <div class="tab-pane" id="teaching_report">
                                                   <div class="row">
                                                      <div class="col-sm-2">
                                                         <select class="form-control">
                                                            <option selected="" disabled="">Select Teacher</option>
                                                            <option>Teacher 1</option>
                                                            <option>Teacher 2</option>
                                                            <option>Teacher 3</option>
                                                         </select>
                                                      </div>
                                                      <div class="col-sm-2">
                                                         <input type="text" class="form-control" id="teacher_date" placeholder="MM/DD/YYYY">
                                                      </div>
                                                   </div>
                                                   <div class="reports_table" style="margin-top:1%;">
                                                      <table class="table table-bordered">
                                                         <thead>
                                                            <tr>
                                                               <th>Period</th>
                                                               <th>Class & Section</th>
                                                               <th>Board (Drona)</th>
                                                               <th>Chapter</th>
                                                               <th>Topic</th>
                                                               <th>Home Work</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>1</td>
                                                               <td>11A</td>
                                                               <td>Board</td>
                                                               <td>
                                                                  <select class="form-control">
                                                                     <option selected="">Chapter 1</option>
                                                                     <option>Chapter 2</option>
                                                                     <option>Chapter 3</option>
                                                                  </select>
                                                               </td>
                                                               <td>
                                                                  <select class="form-control">
                                                                     <option selected="">Topic 1</option>
                                                                     <option>Topic 2</option>
                                                                     <option>Topic 3</option>
                                                                  </select>
                                                               </td>
                                                               <td><span class="checkbox-option"></span>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td>2</td>
                                                               <td>11B</td>
                                                               <td>Competitive</td>
                                                               <td>
                                                                  <select class="form-control">
                                                                     <option selected="">Chapter 1</option>
                                                                     <option>Chapter 2</option>
                                                                     <option>Chapter 3</option>
                                                                  </select>
                                                               </td>
                                                               <td>
                                                                  <select class="form-control">
                                                                     <option selected="">Topic 1</option>
                                                                     <option>Topic 2</option>
                                                                     <option>Topic 3</option>
                                                                  </select>
                                                               </td>
                                                               <td><span class="checkbox-option"></span>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="submit_button">
                                                      <center>
                                                         <button class="btn btn-primary" type="submit">Submit</button>
                                                      </center>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </section>
                                    </div>
                                 </section>
                              </div>
                              <!-- train section -->
                              <div class="bhoechie-tab-content">
                                 <div class="">
                                    <section class="panel">
                                       <header class="panel-heading">
                                          Students
                                       </header>
                                       <br>
                                       <div class="clearfix">
                                          <section id="flip-scroll">
                                             <h4><strong>Generate Registration No</strong></h4>
                                             <div class="clearfix"></div>
                                             <div class="row">
                                                <div class="col-md-9 profile-info">
                                                   <form class="form-horizontal" role="form">
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">G.R.No</label>
                                                         <div class="col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" placeholder="STD000115" disabled>
                                                         </div>
                                                      </div>
                                                      <div class="form-group ">
                                                         <label class="col-lg-4 control-label">First Name</label>
                                                         <div class="col-lg-8">
                                                            <input type="password" class="form-control" id="f-name" placeholder="First Name ">
                                                         </div>
                                                      </div>
                                                      <div class="form-group ">
                                                         <label class="col-lg-4 control-label">Middle Name</label>
                                                         <div class="col-lg-8">
                                                            <input type="password" class="form-control" id="f-name" placeholder="Middle Name ">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Last Name</label>
                                                         <div class="col-lg-8">
                                                            <input type="password" class="form-control" id="f-name" placeholder=" Last Name">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Date of Birth </label>
                                                         <div class="col-lg-8">
                                                            <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="mm/dd/yyy">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Gender</label>
                                                         <div class="col-lg-8">
                                                            <select class="form-control">
                                                               <option>Select Gender</option>
                                                               <option>FeMale</option>
                                                               <option>Male</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Student Mobile Number</label>
                                                         <div class="col-lg-8">
                                                            <input type="password" class="form-control" id="f-name" placeholder=" +91 xxxx xxxx">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Parent Name</label>
                                                         <div class="col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" placeholder=" Parent Name ">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Parent Mobile Number</label>
                                                         <div class="col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" placeholder="+91 xxxx xxxx ">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Parent Email</label>
                                                         <div class="col-lg-8">
                                                            <input type="text" class="form-control" id="f-name" placeholder="Email ">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Class</label>
                                                         <div class="col-lg-8">
                                                            <select class="form-control">
                                                               <option>Select Class</option>
                                                               <option>1St Class</option>
                                                               <option>2nd Class</option>
                                                               <option>3rd Class</option>
                                                               <option>4th Class</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Section</label>
                                                         <div class="col-lg-8">
                                                            <select class="form-control">
                                                               <option>Select Section</option>
                                                               <option>A</option>
                                                               <option>B</option>
                                                               <option>C</option>
                                                               <option>D</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label">Valmiki Package</label>
                                                         <div class="col-lg-8">
                                                            <select class="form-control">
                                                               <option>Select Section</option>
                                                               <option>A</option>
                                                               <option>B</option>
                                                               <option>A1</option>
                                                               <option>B1</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label class="col-lg-4 control-label"> ---</label>
                                                         <div class="col-lg-8">
                                                            <select class="form-control">
                                                               <option>Select</option>
                                                               <option>Engineering</option>
                                                               <option>Medical</option>
                                                               <option>CA, CPT</option>
                                                               <option>CLAT</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-12 text-center">
                                                         <button class="btn btn-info" type="submit">Add New</button>
                                                         <button class="btn btn-success" type="submit">Save</button>
                                                         <button class="btn btn-danger " type="button">Reset</button>
                                                      </div>
                                                      <br><br>
                                                      <div class="col-md-12">
                                                         <p>
                                                            <small>*If the above class selected 10th &amp; Below then "<strong>Foundation Package by Default</strong>"</small><br>
                                                            <small>*If the above class selected 11th &amp; 12th then "<strong>Foundation Package by Default</strong>"</small>
                                                         </p>
                                                      </div>
                                                      <br><br>
                                                   </form>
                                                </div>
                                                <div class="col-md-3 profile-nav">
                                                   <div class="user-heading round" style="height: 220px;">
                                                      <div class="small-12 medium-2 large-2 columns clearfix">
                                                         <div class="circle">
                                                            <!-- User Profile Image -->
                                                            <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg"><br><br>
                                                            <small>Upload Photo -<br> width:350px, Height:350px</small>
                                                            <!-- Default Image -->
                                                            <!-- <i class="fa fa-user fa-5x"></i> -->
                                                         </div>
                                                         <div class="p-image">
                                                            <i class="fa fa-camera upload-button"></i>
                                                            <input class="file-upload2" type="file" accept="image/*">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="clearfix"></div>
                                          </section>
                                       </div>
                                    </section>
                                 </div>
                              </div>
                              <!-- hotel search -->
                              <div class="bhoechie-tab-content ">
                                 <section class="panel">
                                    <header class="panel-heading">
                                       School Profile
                                    </header>
                                    <div class="row">
                                       <div class="panel-body col-md-6 ">
                                          <div id="tab" class="btn-group" data-toggle="buttons-radio">
                                             <a href="#organisation" class="btn btn-success active" data-toggle="tab"> Organisation Info </a>
                                             <a href="#clasess" class="btn btn-primary" data-toggle="tab"> Classes &amp; Sections</a>
                                             <a href="#packages" class="btn btn-primary" data-toggle="tab"> Packages</a>
                                          </div>
                                       </div>
                                       <div class="col-md-6 panel-body">
                                       </div>
                                    </div>
                                    <div class="tab-content">
                                       <div class="tab-pane active" id="organisation">
                                          <div class="row">
                                             <aside class="profile-info col-lg-9">
                                                <section class="panel">
                                                   <div class="bio-graph-heading">
                                                      Dummy text here...
                                                   </div>
                                                   <div class="panel-body bio-graph-info">
                                                      <form class="form-horizontal" role="form">
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Name of the Organisation</label>
                                                            <div class="col-lg-8">
                                                               <input type="text" class="form-control" id="f-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Principal / Director</label>
                                                            <div class="col-lg-8">
                                                               <input type="text" class="form-control" id="l-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">School Trust / Society / Company</label>
                                                            <div class="col-lg-8">
                                                               <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Contact Person <br> (VP/ Coordinator / HM)</label>
                                                            <div class="col-lg-8">
                                                               <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Email</label>
                                                            <div class="col-lg-8">
                                                               <input type="email" class="form-control" id="l-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Mobile </label>
                                                            <div class="col-lg-8">
                                                               <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Address </label>
                                                            <div class="col-lg-8">
                                                               <textarea class="form-control" id="c-name" placeholder=" "></textarea>
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Board </label>
                                                            <div class="col-lg-8">
                                                               <select class="form-control">
                                                                  <option>Board Name</option>
                                                                  <option>Board Name</option>
                                                                  <option>Board Name</option>
                                                                  <option>Board Name</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label class="col-lg-4 control-label">Competitive </label>
                                                            <div class="col-lg-8">
                                                               <select class="form-control">
                                                                  <option>Engineering</option>
                                                                  <option>Medical</option>
                                                                  <option>CA, CPT</option>
                                                                  <option>CLAT</option>
                                                               </select>
                                                            </div>
                                                         </div>
                                                      </form>
                                                   </div>
                                                </section>
                                             </aside>
                                             <aside class="profile-nav col-lg-3">
                                                <section class="panel">
                                                   <div class="user-heading round" style="height: 220px;">
                                                      <div class="small-12 medium-2 large-2 columns clearfix">
                                                         <div class="circle">
                                                            <!-- User Profile Image -->
                                                            <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg"><br><br>
                                                            <small>Upload - width:350px, Height:350px - Logo</small>
                                                            <!-- Default Image -->
                                                            <!-- <i class="fa fa-user fa-5x"></i> -->
                                                         </div>
                                                         <div class="p-image">
                                                            <i class="fa fa-camera upload-button"></i>
                                                            <input class="file-upload2" type="file" accept="image/*"/>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </section>
                                             </aside>
                                          </div>
                                       </div>
                                       <div class="tab-pane" id="clasess">
                                          <table class="table table-bordered table-striped table-condensed cf">
                                             <thead class="cf">
                                                <tr>
                                                   <th>Class</th>
                                                   <th>No.of Sections</th>
                                                   <th class="numeric">S1</th>
                                                   <th class="numeric">S2</th>
                                                   <th class="numeric">S3</th>
                                                   <th class="numeric">S4</th>
                                                   <th class="numeric">S5</th>
                                                   <th class="numeric">S6</th>
                                                   <th class="numeric">S7</th>
                                                   <th class="numeric">S8</th>
                                                   <th class="numeric">S9</th>
                                                   <th class="numeric">S10</th>
                                                   <th class="numeric">S11</th>
                                                   <th class="numeric">S12</th>
                                                   <th class="numeric">S13</th>
                                                   <th class="numeric">S14</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>1st</td>
                                                   <td>10</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td>I</td>
                                                   <td>J</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>2nd</td>
                                                   <td>8</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>3rd</td>
                                                   <td>5</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>4th</td>
                                                   <td>7</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>5th</td>
                                                   <td>4</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>6th</td>
                                                   <td>12</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td>I</td>
                                                   <td>J</td>
                                                   <td>K</td>
                                                   <td>L</td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>7th</td>
                                                   <td>6</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>8th</td>
                                                   <td>10</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td>I</td>
                                                   <td>J</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>9th</td>
                                                   <td>9</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td>I</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>10th</td>
                                                   <td>7</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>11th</td>
                                                   <td>4</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <td>12th</td>
                                                   <td>14</td>
                                                   <td>A</td>
                                                   <td>B</td>
                                                   <td>C</td>
                                                   <td>D</td>
                                                   <td>E</td>
                                                   <td>F</td>
                                                   <td>G</td>
                                                   <td>H</td>
                                                   <td>I</td>
                                                   <td>J</td>
                                                   <td>K</td>
                                                   <td>L</td>
                                                   <td>M</td>
                                                   <td>N</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <div class="panel-body">
                                             <button type="button" class="btn btn-shadow btn-success">Save</button>
                                             <button type="button" class="btn btn-shadow btn-primary">Reset</button>
                                             <button type="button" class="btn btn-shadow btn-info">Edit</button>
                                          </div>
                                       </div>
                                       <div class="tab-pane" id="packages">
                                          Packages
                                       </div>
                                    </div>
                                 </section>
                              </div>
                              <div class="bhoechie-tab-content">
                                 <center>
                                    <h1 class="fa fa-smile-o" style="font-size:12em;color:#55518a"><br></h1>
                                    <h3 style="margin-top: 0;color:#55518a"></h3>
                                    <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                                    <h3 style="margin-top: 0;color:#55518a"></h3>
                                 </center>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- page end-->
            </section>
         </section>
         <!--main content end-->
         <!-- Right Slidebar start -->
         <!-- Right Slidebar end -->
         <?php include ('footer.php'); ?>
         <!--footer end-->
      </section>
      <?php include ('scripts.php'); ?>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.0/multiple-select.css"/>
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css"/>
      <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
      <style type="text/css">
         .bhoechie-tab-content .panel-heading {
         font-size: 24px;
         padding: 20px 0px 20px 5px;
         }
         .list-group-item {
         padding: 5px 0px 5px 0px;
         border-left: none;
         border-right: none;
         border-top: none;
         border-bottom: 1px solid #ddd;
         }
         .bhoechie-tab {
         border-left: 1px solid #dedede;
         }
         /*  bhoechie tab */
         div.bhoechie-tab-container {
         z-index: 10;
         background-color: #ffffff;
         padding: 0 !important;
         border-radius: 4px;
         -moz-border-radius: 4px;
         border: 1px solid #ddd;
         margin: 0px 20px 20px 20px;
         background-clip: padding-box;
         opacity: 0.97;
         filter: alpha(opacity=97);
         }
         div.bhoechie-tab-menu {
         padding-right: 0;
         padding-left: 0;
         padding-bottom: 0;
         }
         div.bhoechie-tab-menu div.list-group {
         margin-bottom: 0;
         }
         div.bhoechie-tab-menu div.list-group>a {
         font-size: 18px;
         margin-bottom: 0;
         }
         div.bhoechie-tab-menu div.list-group>a .glyphicon,
         div.bhoechie-tab-menu div.list-group>a .fa {
         color: #2d998f;
         }
         div.bhoechie-tab-menu div.list-group>a:first-child {
         border-top-right-radius: 0;
         -moz-border-top-right-radius: 0;
         }
         div.bhoechie-tab-menu div.list-group>a:last-child {
         border-bottom-right-radius: 0;
         -moz-border-bottom-right-radius: 0;
         }
         div.bhoechie-tab-menu div.list-group>a.active,
         div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
         div.bhoechie-tab-menu div.list-group>a.active .fa {
         background-color: #2b9890;
         background-image: #2b9890;
         color: #ffffff;
         }
         div.bhoechie-tab-menu div.list-group>a.active:after {
         content: '';
         position: absolute;
         left: 100%;
         top: 50%;
         margin-top: -13px;
         border-left: 0;
         border-bottom: 15px solid transparent;
         border-top: 15px solid transparent;
         border-left: 15px solid #319a93;
         }
         div.bhoechie-tab-content {
         background-color: #ffffff;
         /* border: 1px solid #eeeeee; */
         padding-left: 0px;
         padding-top: 0px;
         }
         div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
         display: none;
         }
         .ms-choice {
         border: none !important
         }
         .ms-drop input[type="checkbox"] {
         vertical-align: middle;
         margin: 0px 8px 0px 0px;
         /* padding-left: 10px; */
         }
         .ms-choice> span {
         position: absolute;
         top: 3px;
         left: 0;
         right: 20px;
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
         display: block;
         padding-left: 8px;
         }
      </style>
      <script type="text/javascript">
         $( document ).ready( function () {
             $( "div.bhoechie-tab-menu>div.list-group>a" ).click( function ( e ) {
                 e.preventDefault();
                 $( this ).siblings( 'a.active' ).removeClass( "active" );
                 $( this ).addClass( "active" );
                 var index = $( this ).index();
                 $( "div.bhoechie-tab>div.bhoechie-tab-content" ).removeClass( "active" );
                 $( "div.bhoechie-tab>div.bhoechie-tab-content" ).eq( index ).addClass( "active" );
             } );
         } );
      </script>
      <!-- The main application script -->
      <script src="js/advanced-form-components.js"></script>
      <script>
         $( function () {
             $( '#cls1' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script>
         $( function () {
             $( '#sec1' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script>
         $( function () {
             $( '#sub1' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script>
         $( function () {
             $( '#ms' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script>
         $( function () {
             $( '#mt' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script>
         $( function () {
             $( '#mst' ).change( function () {
                 console.log( $( this ).val() );
             } ).multipleSelect( {
                 width: '100%'
             } );
         } );
      </script>
      <script type="text/javascript">
         $( document ).ready( function () {
             var readURL = function ( input ) {
                 if ( input.files && input.files[ 0 ] ) {
                     var reader = new FileReader();
         
                     reader.onload = function ( e ) {
                         $( '.profile-pic' ).attr( 'src', e.target.result );
                     }
         
                     reader.readAsDataURL( input.files[ 0 ] );
                 }
             }
         
         
             $( ".file-upload2" ).on( 'change', function () {
                 readURL( this );
             } );
         
             $( ".upload-button" ).on( 'click', function () {
                 $( ".file-upload2" ).click();
             } );
         } );
         
         /****datepicker****/
         $( function () {
             $( "#datepicker" ).datepicker();
         } );
         
         $( function () {
             $( "#teacher_date" ).datepicker();
         } );
         
         $( function () {
             $( "#event_date1" ).datepicker();
         } );
         
         $( function () {
             $( "#event_date2" ).datepicker();
         } );
         
         $( function () {
             $( "#event_date3" ).datepicker();
         } );
         /******radio buttons*******/
         $( document ).ready( function () {
             $( '.radio-option' ).click( function () {
                 $( this ).not( this ).removeClass( 'click' );
                 $( this ).toggleClass( "click" );
             } );
         } );
         /***********checkbox****/
         /******radio buttons*******/
         $( document ).ready( function () {
             $( '.checkbox-option' ).click( function () {
                 $( this ).not( this ).removeClass( 'click' );
                 $( this ).toggleClass( "click" );
             } );
         } );
         /******continue button*********/
         $( document ).ready( function () {
             $( ".continue" ).click( function () {
                 $( ".subject_details" ).show( 1000 );
             } );
         } );
      </script>
      <style type="text/css">
         .radios label {
         display: inline;
         padding-left: 23px;
         padding-right: 30px;
         font-weight: bold;
         }
         .profile-pic {
         width: 350px;
         height: 165px;
         display: block;
         border-radius: 50%;
         position: absolute;
         }
         .file-upload2 {
         display: none !important;
         }
         .circle {
         border-radius: 50% !important;
         overflow: hidden;
         width: 180px;
         height: 180px;
         border: 8px solid rgba(255, 255, 255, 0.7);
         position: absolute;
         top: 19px;
         }
         img {
         max-width: 100%;
         height: auto;
         }
         .p-image {
         position: absolute;
         top: 160px;
         right: 130px;
         color: #666666;
         transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
         }
         .p-image:hover {
         transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
         }
         .upload-button {
         font-size: 1.2em;
         }
         .upload-button:hover {
         transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
         color: #999;
         }
         /*****radio buttons*****/
         .radio-option {
         float: left;
         cursor: pointer;
         height: 23px;
         width: 23px;
         margin: 0px 5px;
         background: url(img/checkbox/radio-off.png) no-repeat 0px 0px;
         }
         .radio-option.click {
         background: url(img/checkbox/radio-on.png) no-repeat 0px 0px;
         }
         .checkbox-option {
         float: left;
         cursor: pointer;
         height: 23px;
         width: 23px;
         margin: 0px 5px;
         background: url(img/checkbox/check-off.png) no-repeat 0px 0px;
         }
         .checkbox-option.click {
         background: url(img/checkbox/check-on.png) no-repeat 0px 0px;
         }
         .select_class ul li {
         float: left;
         border: 1px ridge #b5b5b5;
         padding: 5px;
         /* background-color: #e4e4e4; */
         /*color: #239494;*/
         font-size: 16px;
         border-right: none;
         }
         .selected_classes {
         margin: 80px 0px;
         }
         .select_class ul li:last-child {
         border-right: 1px ridge #b5b5b5;
         }
         .border-div {
         border: 1px solid #ccc;
         }
         .pd-10 {
         padding: 10px 20px;
         }
         .border-right {
         border-right: 1px solid #ccc;
         }
         .selected_classes ul li {
         padding: 5px 5px;
         }
         .subject_details {
         display: none;
         padding: 15px;
         margin: 15px 0px;
         border: 1px solid #ddd;
         }
         .save_buttons {
         padding: 15px 0px;
         }
         .save_buttons button,
         .submit_buttons button {
         margin-right: 15px;
         }
         .secound_tabs ul li.active a:before {
         content: '';
         position: absolute;
         left: 35%;
         top: 100%;
         width: 0;
         height: 0;
         border-left: 15px solid transparent;
         border-right: 15px solid transparent;
         border-top: 15px solid #48b9b4;
         clear: both;
         }
         .top_selects {
         margin: 15px 0px;
         }
         .subjects_topics ul li {
         margin: 5px 0px;
         }
         .secound_tabs .panel-body {
         padding-top: 2%;
         }
         .board .radios label {
         padding: 0px !important;
         }
         .board .radios {
         padding: 4px 0px 0px 0px !important;
         }
      </style>
      <script type="text/javascript">
         /* Variables */
         var p = $( "#participants" ).val();
         var row = $( ".participantRow" );
         
         /* Functions */
         function getP() {
             p = $( "#participants" ).val();
         }
         
         function addRow() {
             row.clone( true, true ).appendTo( "#participantTable" );
         }
         
         function removeRow( button ) {
             button.closest( "tr" ).remove();
         }
         /* Doc ready */
         $( ".add" ).on( 'click', function () {
             getP();
             if ( $( "#participantTable tr" ).length < 17 ) {
                 addRow();
                 var i = Number( p ) + 1;
                 $( "#participants" ).val( i );
             }
             $( this ).closest( "tr" ).appendTo( "#participantTable" );
             if ( $( "#participantTable tr" ).length === 3 ) {
                 $( ".remove" ).hide();
             } else {
                 $( ".remove" ).show();
             }
         } );
         $( ".remove" ).on( 'click', function () {
             getP();
             if ( $( "#participantTable tr" ).length === 3 ) {
                 //alert("Can't remove row.");
                 $( ".remove" ).hide();
             } else if ( $( "#participantTable tr" ).length - 1 == 3 ) {
                 $( ".remove" ).hide();
                 removeRow( $( this ) );
                 var i = Number( p ) - 1;
                 $( "#participants" ).val( i );
             } else {
                 removeRow( $( this ) );
                 var i = Number( p ) - 1;
                 $( "#participants" ).val( i );
             }
         } );
         $( "#participants" ).change( function () {
             var i = 0;
             p = $( "#participants" ).val();
             var rowCount = $( "#participantTable tr" ).length - 2;
             if ( p > rowCount ) {
                 for ( i = rowCount; i < p; i += 1 ) {
                     addRow();
                 }
                 $( "#participantTable #addButtonRow" ).appendTo( "#participantTable" );
             } else if ( p < rowCount ) {}
         } );
      </script>
   </body>
</html>