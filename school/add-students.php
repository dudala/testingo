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
                          <header class="panel-heading">
                            List of  Students 
                              
                                <a class="btn btn-primary pull-right" href="students.php">
                                    <i class="fa fa-reply"></i> back to Students </a>
                              
                              
                          </header>
                          <div class="panel-body ">
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
                                                   <div class="user-heading round" style="height: 230px;">
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