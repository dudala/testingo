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
                         <div class="col-md-12 ">
                         <div class="panel panel-default boder">
                              <header class="panel-heading">
                                          Add New Teachers
                                  
                                  <a class="btn btn-primary pull-right" href="teachers.php"><i class="fa fa-reply"></i> Back to Teachers </a>
                                  
                                       </header>
                              <div class="panel-collapse collapse in" id="collapseOne">
                                  <div class="panel-body">
                                      <div class="clearfix">
                                          <section id="flip-scroll" >
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
                                  </div>
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
          .boder{ border:1px solid #dedede;}
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