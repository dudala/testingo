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
                        <div class="col-lg-12">
                           <section class="panel boder">
                              <div class="panel-body ">
                                 <div class="clearfix">
                                    <section class="panel secound_tabs">
                                       <header class="panel-heading tab-bg-dark-navy-blue " style="padding:0px;">
                                          <ul class="nav nav-tabs">
                                             <li class="active">
                                                <a href="valmiki.php">Create &amp; Scheduler </a>
                                             </li>
                                             <li class="">
                                                <a href="valmiki-syllabus-approvals.php">Syllabus Approvals</a>
                                             </li>
                                             <li class="">
                                                <a href="#">Paper Generation and Printing </a>
                                             </li>
                                             <li class="">
                                                <a href="valmiki-archives.php">Archives</a>
                                             </li>
                                          </ul>
                                       </header>
                                       <div class="panel-body" style="background: #fbfbfb;">
                                          <div class="tab-content">
                                             <div id="school_schedule" class="tab-pane active">
                                                <section class="panel">
                                                   <header class="panel-heading">
                                                     Create & Schedule New Exam
                                                      <span class=" pull-right">
                                                      <a class="btn btn-primary pull-right" href="valmiki.php">
                                                      <i class="fa fa-reply"></i> Back to Valmiki Exam List  </a>
                                                      </span>
                                                   </header>
                                                   <div class="panel-body">
                                                      <div class="adv-table">
                                                         
                                                          <div class="row">
                                                          
                                                              <div class="col-md-6">
                                                            <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group">
                                      <label class="col-sm-5 col-sm-5 control-label">Name Of The Examination</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                                                
                                                                
                                                                   <div class="form-group">
                                      <label class="col-sm-5 col-sm-5 control-label">Unique Code</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control" placeholder="MH00057" disabled>
                                      </div>
                                  </div>
                                                                
                                                                
                                  
                         <div class="form-group">
                                      <label class="col-sm-5 col-sm-5 control-label">Valmiki Package</label>
                                      <div class="col-sm-7">
                                          <select class="form-control">
                                          
                                              <option>Engineering</option>
                                              <option>Medical</option>
                                        
                                          
                                          
                                          </select>
                                      </div>
                                  </div>
                                                                
                                                                
                                                                <div class="form-group">
                                      <label class="col-sm-5 col-sm-5 control-label">Type of Examination</label>
                                      <div class="col-sm-7">
                                          <select class="form-control">
                                          
                                              <option>NEET</option>
                                              <option>JEE Mains</option>
                                        
                                          
                                          
                                          </select>
                                      </div>
                                  </div>
                                                                
                                                                
                                                                
                                                                <div class="form-group">
                                      <label class="col-sm-5 col-sm-5 control-label">Mode of Examination</label>
                                      <div class="col-sm-7">
                                         <div class="radios">
                                             <label class="label_radio" for="radio-01">
                                                  <input name="Online"  id="online" value="Online" type="radio"  onClick="return show_type('Online')" /> Online
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="Online" id="offline" value="Offline" type="radio" checked onClick="return show_type('Offline')"/> Offline
                                              </label>
                                           
                                          </div>
                                          
                                      </div>
                                  </div>
                                                                
                                                                
                                                                
                           
                              
                              </form>
                                                                  
                                                                  
                                                                  
                                                                  <div class="clearfix"></div>
                                                                  <br>
      <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Class</th>
                                          <th>Sections</th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>11</td>
                                          <td>
                                          <div class="checkboxes">
                                             
                                              
                                              <label class="label_check" for="checkbox-01">
                                                  <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked /> A
                                              </label>
                                              
                                              
                                              <label class="label_check" for="checkbox-02">
                                              <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" /> B </label>
                                              
                                              
                                              <label class="label_check" for="checkbox-03">
                                              <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" />C</label>

                                          </div>
                                          
                                          
                                          </td>
                                          
                                      </tr>
                                          
                                          
                                          <tr>
                                          <th scope="row">2</th>
                                          <td>12</td>
                                          <td>
                                          <div class="checkboxes">
                                             
                                              
                                              <label class="label_check" for="checkbox-011">
                                                  <input name="sample-checkbox-01" id="checkbox-011" value="1" type="checkbox" checked /> A
                                              </label>
                                              
                                              
                                              <label class="label_check" for="checkbox-022">
                                              <input name="sample-checkbox-02" id="checkbox-022" value="1" type="checkbox" /> B </label>
                                              
                                              
                                              <label class="label_check" for="checkbox-033">
                                              <input name="sample-checkbox-02" id="checkbox-033" value="1" type="checkbox" />C</label>

                                          </div>
                                          
                                          
                                          </td>
                                          
                                      </tr>
                                      
                                      </tbody>
                                  </table>
                              </div>                                                         
                                                                  
                                                                  
                                                                  
                                                                  
                                                                  
        
                                                              </div>
                                                              
                                                                <div class="col-md-6">
                                                           <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Subjects</th>
                                          <th>No.of Sections in Paper</th>
                                          <th>Questions</th>
                                          <th>Attempt Correct</th>
                                          <th>Attempt Worng</th>
                                          <th>UnAttempt</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>Maths</td>
                                          <td>A</td>
                                          <td>30</td>
                                          <td>+4</td>
                                          <td>-1</td>
                                          <td>0</td>
                                      </tr>
                                          
                                          <tr>
                                          <th scope="row">2</th>
                                          <td>Physics</td>
                                          <td>B</td>
                                          <td>30</td>
                                          <td>+8</td>
                                          <td>-1</td>
                                          <td>0</td>
                                      </tr>
                                          
                                          
                                          <tr>
                                          <th scope="row">3</th>
                                          <td>Chemistry</td>
                                          <td>A</td>
                                          <td>30</td>
                                          <td>+25</td>
                                          <td>-1</td>
                                          <td>0</td>
                                      </tr>
                                      
                                      
                                      </tbody>
                                  </table>
                              </div>
                                                              </div>
                                                          
                                                          
                                                          </div>
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          <br>
                                                          
                                                          
                                                          
                                                          <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;" id="online1">
                         
                    
                         
                         
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Class</th>
                                          <th>Exam Name (Code)</th>
                                          <th>Subject Paper Code</th>
                                          <th>From Date</th>
                                          <th>To Date</th>
                                          <th>Assign to</th>
                                          <th>Dead line for Syllobus Upload</th>
                                          
                                          <th>Question Paper Genaretion Approvel</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row" rowspan="8">1</th>
                                          <td rowspan="8">6/A,B,C</td>
                                          <td rowspan="8">Qrtly - ABC0001</td>
                                          <td>English <br> XYZ0001</td>
                                         <td>
                                              <div class="col-md-6">
                                               <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY">
                                              </div>
                                              <div class="col-md-6">
                                                <div class="input-group bootstrap-timepicker">
                                              <input type="text" class="form-control timepicker-default">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                          </div>
                                              
                                              </div>
                                             </td>
                                          
                                          <td>
                                              <div class="col-md-6">
                                               <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY">
                                              </div>
                                              <div class="col-md-6">
                                                <div class="input-group bootstrap-timepicker">
                                              <input type="text" class="form-control timepicker-default">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                          </div>
                                              
                                              </div>
                                             </td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                           <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                        
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                          
                                          
                                           
                                      
                                          
                                          
                                          
                                      
                                          
                                          
                                          
                                          
                                           
                                          
                                          
                                          
                                      
                                      
                                    
                                      </tbody>
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                  </table>
                         <div class="clearfix"></div>
                         
                         <div class="col-md-12 text-center">
                                                      <button class="btn btn-success" type="submit">Save</button>
                                                       
                                                       
                                                       <button class="btn btn-info" type="submit">Reset</button>
                                                   </div>
                         
                              </div>
                                                          
                                                          <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none; display: none;" id="offline1">
                         
                    
                         
                         
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>#dfg dfgdfgf</th>
                                          <th>Class</th>
                                          <th>Exam Name (Code)</th>
                                          <th>Subject Paper Code</th>
                                          <th>Date of Exam</th>
                                          <th>Assign to</th>
                                          <th>Dead line for Syllobus Upload</th>
                                          
                                          <th>Question Paper Genaretion Approvel</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row" rowspan="8">1</th>
                                          <td rowspan="8">6/A,B,C</td>
                                          <td rowspan="8">Qrtly - ABC0001</td>
                                          <td>English <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                        
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                        
                                           <td><select class="form-control">

                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                           <tr>
                                          
                                         
                                          <td>Physics <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                     
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Chemistry <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                     
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      
                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                           <tr>
                                          
                                         
                                          <td>Biolozy <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                    
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                   
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      
                                      
                                    
                                      </tbody>
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      
                                      <tbody>
                                      <tr>
                                          <th scope="row" rowspan="8">2</th>
                                          <td rowspan="8">7/A,B,C</td>

                                          <td rowspan="8">Qrtly - ABC0001</td>
                                          <td>English <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                   
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                       
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                           <tr>
                                          
                                         
                                          <td>Physics <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                     
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Chemistry <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                      
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      

                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                           <tr>
                                          
                                         
                                          <td>Biolozy <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                 
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                          
                                          
                                          <tr>
                                          
                                         
                                          <td>Maths <br> XYZ0001</td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                          <td><select class="form-control">
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                          <td><input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" placeholder="MM/DD/YYYY"></td>
                                 
                                           <td><select class="form-control">
                                              <option>Teacher 1</option>
                                              <option>Teacher 2</option>
                                              <option>Teacher 3</option>
                                              <option>First Name Last Name</option>
                                              </select></td>
                                      </tr>
                                      
                                      
                                    
                                      </tbody>
                                  </table>
                         <div class="clearfix"></div>
                         
                         <div class="col-md-12 text-center">
                                                      <button class="btn btn-success" type="submit">Save</button>
                                                       
                                                       
                                                       <button class="btn btn-info" type="submit">Reset</button>
                                                   </div>
                         
                              </div>
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                          
                                                      </div>
                                                   </div>
                                                </section>
                                             </div>
                                          </div>
                                       </div>
                                    </section>
                                 </div>
                              </div>
                           </section>
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
       
       <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
       <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
      <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet"/>
      <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet"/>
      <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.0/multiple-select.css"/>
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css"/>
      <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
       
        <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
         <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
      <!--dynamic table initialization -->
      <script src="js/dynamic_table_init.js"></script>
      <!--common script for all pages-->
      <script src="js/common-scripts.js"></script>
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
         height: 205px;
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
         width: 220px;
         height: 220px;
         border: 8px solid rgba(255, 255, 255, 0.7);
         position: absolute;
         top: 6px;
         }
         img {
         max-width: 100%;
         height: auto;
         }
         .p-image {
         position: absolute;
         top: 190px;
         right: 157px;
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
         .boder {
         border: 1px solid #dedede;
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
      <script src="js/form-component.js"></script>
       
       
       <script>
  function show_type(val){
      
      
      
        if (val =='Online') {         
            //change to "show update"
               $("#online1").show();
               $("#offline1").hide();

        } else  {
             $("#offline1").show();
             $("#online1").hide();
        }

       }
       </script>
      <style type="text/css">
         .checkboxes label {
         display: inline !important;
         }
          .has-js .label_check, .has-js .label_radio {
    padding-left: 27px;
}
          
         .has-js .label_check {
         padding-right: 20px !important;
         padding-left: 25px !important;
         padding-top: 2px !important;
         }
      </style>
   </body>
</html>