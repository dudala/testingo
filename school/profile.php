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
                             
                             
                             <section class="panel">
              <header class="panel-heading">
                  School Profile
             <span class=" pull-right">
             
             </span>
              </header>
              <div class="panel-body">
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
                                                   <div class="user-heading round" style="height: 230px;">
                                                      <div class="small-12 medium-2 large-2 columns clearfix">
                                                         <div class="circle">
                                                            <!-- User Profile Image -->
                                                            <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg"><br><br>
                                                            <small>Upload - width:350px, <br>Height:350px - Logo</small>
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
            <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
       
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.0/multiple-select.css"/>
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css"/>
      <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
       
       
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
       
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