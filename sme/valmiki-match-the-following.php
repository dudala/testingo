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
                <header class="panel-heading"> Valmiki - Match the followings <span class=" pull-right"> </span> </header>
                <div class="panel-body">
                  <div class="col-md-12">
                    <table class="table table-bordered">
                      <tr>
                        <td><select class="form-control">
                            <option>Drona</option>
                            <option selected>Valmiki</option>
                          </select></td>
                        <td><select class="form-control">
                            <option>Class</option>
                            <option>Select</option>
                          </select></td>
                        <td><select class="form-control">
                            <option>Subject</option>
                            <option>Select</option>
                          </select></td>
                        <td><select class="form-control">
                            <option>Chapter</option>
                            <option>Select</option>
                          </select></td>
                        <td><select class="form-control">
                            <option>Topic</option>
                            <option>Select</option>
                          </select></td>
                        <td><select class="form-control">
                            <option>Book Title</option>
                            <option>Select</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td><select class="form-control">
                            <option>Level</option>
                            <option>Select</option>
                          </select></td>
                        <td><input type="text" placeholder="Question ID - UI6587P" class="form-control" disabled></td>
                      </tr>
                    </table>
                  </div>
                  <div class="clearfix"></div>
                  <br>
                  <br>
                  <div class="col-md-8">
                    <div class="summernote">Hello Summernote</div>
                    <div class="row">
                      <div class="col-sm-10">
                        <input type="text" class="form-control col-sm-10" placeholder="Question">
                      </div>
                      <div class="col-sm-2">
                        <select class="form-control">
                          <option>list</option>
                          <option>list</option>
                          <option>list</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>List 1</th>
                          <th></th>
                          <th>List 2</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>P</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                          <td>1</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                        </tr>
                        <tr>
                          <td>Q</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                          <td>2</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                        </tr>
                        <tr>
                          <td>R</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                          <td>3</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                        </tr>
                        <tr>
                          <td>S</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                          <td>4</td>
                          <td><input type="text" class="form-control" name="p"  value="" /></td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <div class="row">
                      <div class="col-sm-10">
                        <table class="table table-hover table-bordered">
                          <thead>
                            <tr>
                              <th>Codes</th>
                              <th>P</th>
                              <th>Q</th>
                              <th>R</th>
                              <th>S</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>A</td>
                              <td><label class="label_radio" for="radio-02">
                                  <input name="sample-radio" id="radio-02" value="1" type="radio"  />
                                  P</label></td>
                              <td><label class="label_radio" for="radio-03">
                                  <input name="sample-radio" id="radio-03" value="1" type="radio"  />
                                  Q </label></td>
                              <td><label class="label_radio" for="radio-04">
                                  <input name="sample-radio" id="radio-04" value="1" type="radio" checked />
                                  R</label></td>
                              <td><label class="label_radio" for="radio-05">
                                  <input name="sample-radio" id="radio-05" value="1" type="radio"  />
                                  S</label></td>
                            </tr>
                            <tr>
                              <td>B</td>
                              <td><label class="label_radio" for="radio-06">
                                  <input name="sample-radio" id="radio-06" value="1" type="radio"  />
                                  P</label></td>
                              <td><label class="label_radio" for="radio-07">
                                  <input name="sample-radio" id="radio-07" value="1" type="radio" checked  />
                                  Q </label></td>
                              <td><label class="label_radio" for="radio-08">
                                  <input name="sample-radio" id="radio-08" value="1" type="radio"  />
                                  R</label></td>
                              <td><label class="label_radio" for="radio-09">
                                  <input name="sample-radio" id="radio-09" value="1" type="radio" checked />
                                  S</label></td>
                            </tr>
                            <tr>
                              <td>C</td>
                              <td><label class="label_radio" for="radio-10">
                                  <input name="sample-radio" id="radio-10" value="1" type="radio"  />
                                  P</label></td>
                              <td><label class="label_radio" for="radio-11">
                                  <input name="sample-radio" id="radio-11" value="1" type="radio" checked />
                                  Q </label></td>
                              <td><label class="label_radio" for="radio-12">
                                  <input name="sample-radio" id="radio-12" value="1" type="radio"  />
                                  R</label></td>
                              <td><label class="label_radio" for="radio-13">
                                  <input name="sample-radio" id="radio-13" value="1" type="radio"  />
                                  S</label></td>
                            </tr>
                            <tr>
                              <td>D</td>
                              <td><label class="label_radio" for="radio-14">
                                  <input name="sample-radio" id="radio-14" value="1" type="radio" checked />
                                  P</label></td>
                              <td><label class="label_radio" for="radio-15">
                                  <input name="sample-radio" id="radio-15" value="1" type="radio"  />
                                  Q </label></td>
                              <td><label class="label_radio" for="radio-16">
                                  <input name="sample-radio" id="radio-16" value="1" type="radio"  />
                                  R</label></td>
                              <td><label class="label_radio" for="radio-17">
                                  <input name="sample-radio" id="radio-17" value="1" type="radio"  />
                                  S</label></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" value="B"  disabled />
                      </div>
                    </div>
                    <br>
                    <p><strong>Solution Detail</strong></p>
                    <div class="summernote">Hello Summernote</div>
                    <br>
                    <div class="col-md-12 text-center">
                      <button class="btn btn-success" type="submit">Save &amp; Proceed to next Question Same topic</button>
                      <button class="btn btn-danger" type="submit">Clear</button>
                      <button class="btn btn-info " type="button">Next</button>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Type of Questions</th>
                        </tr>
                      </thead>
                      <tbody class="radios">
                        <tr>
                          <td><label class="label_radio" for="radio-01">
                              <input name="sample-radio" id="radio-01" value="1" type="radio"  />
                              M.C.Q. Single </label>
                            <label class="label_radio" for="radio-02">
                              <input name="sample-radio" id="radio-02" value="1" type="radio" checked/>
                              M.C.Q. Multiple </label>
                            <label class="label_radio" for="radio-03">
                              <input name="sample-radio" id="radio-03" value="1" type="radio" />
                              Matching </label>
                            <label class="label_radio" for="radio-04">
                              <input name="sample-radio" id="radio-04" value="1" type="radio" />
                              Intiger </label>
                            <label class="label_radio" for="radio-05">
                              <input name="sample-radio" id="radio-05" value="1" type="radio" />
                              Assertion & Reasoning </label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <!--          <div class="col-md-4">sdf</div>--> 
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
		table td label{
			font-weight:400;	
		}
      </style>

<!--script for this page--> 
<script src="js/form-component.js"></script> 
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
          
   /*checkbox & radio style*/


.checkboxes label, .radios label {
    display: block;
    cursor: pointer;
    line-height: 20px;
    padding-bottom: 7px;
    font-weight: 300;
}
        
      </style>
<script type="text/javascript">
 
        $(document).ready(function(){
 
            $("#main-style").change(function(){
                $("#main-style option:selected").each(function(){
                    var colour_data = $(this).metadata();
                    if(colour_data.color){
                        var color = colour_data.color;
                        var selectObj = $("<select></select>");
                        var colorArray = color.split(",");
                        for(var i = 0; i < colorArray.length; i++){
                            selectObj.append("<option value='" + colorArray[i] + "'>" + colorArray[i] + "</option>");
                        }
                        $("#result-box").html(selectObj);
                        $("#result-box").show("slow");
                    }else{
                        $("#result-box").hide("slow", function(){
                            $("#result-box").html("");
                        });
                    }
                });             
            });
        });
 
    </script>
</body>
</html>