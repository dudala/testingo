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
      <section class="panel secound_tabs">
        <header class="panel-heading tab-bg-dark-navy-blue " style="padding:0px;">
          <ul class="nav nav-tabs">
            <li > <a title="Syllabus Upload" href="valmiki.php">Syllabus Upload </a> </li>
            <li class="active"> <a title="Assignments / Worksheets" href="valmiki-assignments-worksheets.php">Assignments / Worksheets</a> </li>
            <li><a title="Archives" href="valmiki-archives.php">Archives</a></li>
          </ul>
        </header>
        <div class="panel-body">
          <div class="tab-content">
            <div id="syllabus-upload" class="tab-pane active"> 
              <div class="row">
                <div class="col-md-8">
                <br/>
                	<div id="tab" class="btn-group"> <a href="valmiki-assignments-worksheets.php" class="btn btn-primary active"><i class="fa fa-group"></i> 10th Class</a> <a href="valmiki-11thclass-assignments-worksheets.php" class="btn btn-primary"><i class="fa fa-group"></i> 11th Class</a> <a href="valmiki-12thclass-assignments-worksheets.php" class="btn btn-primary" ><i class="fa fa-group"></i> 12th Class</a> </div>
                    <br/>
                    <h3>10<sup>th</sup> Class</h3>
                   
                </div>
                <div class="col-md-4 panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label" style="padding-top: 10px;">Select Exam :</label>
                    <div class="col-sm-8">
                      <select class="form-control col-md-8">
                        <option>Sample Exam Here</option>
                        <option>Sample Exam Here</option>
                        <option>Sample Exam Here</option>
                        <option>Sample Exam Here</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane">
                
                
                <div class="row">
                  <div class="col-md-4">
                    <input type="text"  class="form-control" placeholder="Enter Name of the Examination">
                  </div>
                  <div class="col-md-8"></div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group col-md-3">
                    <select class="form-control">
                      <option value="1" selected>Select Subject </option>
                      <option value="1">Select Subject 1</option>
                      <option value="1">Select Subject 2</option>
                      <option value="1">Select Subject 3</option>
                      <option value="1">Select Subject 4</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select id="ms" multiple="multiple" class="form-control">
                      <option value="1" selected>Select Chapter </option>
                      <option value="1">Select Chapter 1</option>
                      <option value="1">Select Chapter 2</option>
                      <option value="1">Select Chapter 3</option>
                      <option value="1">Select Chapter 4</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select id="mt" multiple="multiple" class="form-control">
                      <option value="1" selected>Select Topic </option>
                      <option value="1">Chapter-1 (Topic 1)</option>
                      <option value="1">Chapter-1 (Topic 2)</option>
                      <option value="1">Chapter-2 (Topic 1)</option>
                      <option value="1">Chapter-2 (Topic 2)</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control">
                      <option value="1" selected>Number of Sections </option>
                      <option value="1"> 1</option>
                      <option value="1"> 2</option>
                      <option value="1"> 3</option>
                      <option value="1"> 4</option>
                      <option value="1"> 5</option>
                      <option value="1"> 6</option>
                    </select>
                  </div>
                </div>
                <table class="table table-bordered table-striped table-condensed cf">
                  <thead class="cf">
                    <tr>
                      <th>Sections</th>
                      <th>Type of Questions</th>
                      <th>No.of Questions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>A</td>
                      <td><select class="form-control">
                          <option>Type of Questions </option>
                          <option>Fill in the Blank</option>
                          <option>Matching Questions</option>
                          <option>Multiple Choice</option>
                          <option>True/False</option>
                        </select></td>
                      <td><select class="form-control">
                          <option>15 </option>
                          <option>25 </option>
                          <option>35</option>
                          <option>45</option>
                        </select></td>
                    </tr>
                    <tr>
                      <td>B</td>
                      <td><select class="form-control">
                          <option>Type of Questions </option>
                          <option>Fill in the Blank</option>
                          <option>Matching Questions</option>
                          <option>Multiple Choice</option>
                          <option>True/False</option>
                        </select></td>
                      <td><select class="form-control">
                          <option>15 </option>
                          <option>25 </option>
                          <option>35</option>
                          <option>45</option>
                        </select></td>
                    </tr>
                  </tbody>
                </table>
                <form action="#" method="get" accept-charset="utf-8">
                  <div class="radios">
                    <label class="label_radio r_on" for="radio-01" style="font-size: 17px">
                      <input name="sample-radio" id="radio-01" value="1" type="radio" class="" checked="">
                      Easy </label>
                    <label class="label_radio r_off" for="radio-02" style="font-size: 17px">
                      <input name="sample-radio" id="radio-02" value="1" type="radio">
                      Medium </label>
                    <label class="label_radio r_off" for="radio-03" style="font-size: 17px">
                      <input name="sample-radio" id="radio-03" value="1" type="radio">
                      Hard </label>
                    <label class="label_radio r_off" for="radio-04" style="font-size: 17px">
                      <input name="sample-radio" id="radio-04" value="1" type="radio">
                      Max </label>
                  </div>
                </form>
                <hr>
                <h4><strong>Print Options</strong></h4>
                <div class="well clearfix">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label>
                          <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
                          Two Columns Per Page</label>
                        &nbsp; &nbsp;
                        <label>
                          <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
                          Single  Columns Per Page</label>
                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12 clearfix">
                      <h4> Paper Size :</h4>
                      <label>
                        <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_0">
                        A4</label>
                      &nbsp; &nbsp;
                      <label>
                        <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_1">
                        Letter</label>
                      &nbsp; &nbsp;
                      <label>
                        <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_2">
                        Legal</label>
                    </div>
                    <hr>
                    <div class="col-md-12 clearfix">
                      <h4> Instructions :</h4>
                      <textarea class="form-control " id="ccomment" name="comment" required aria-required="true"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-6 col-md-offset-5">
                    <button class="btn btn-success">Generate &amp; Save</button>
                    <button class="btn btn-danger">Reset</button>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.0/multiple-select.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<style type="text/css">
        
        .bhoechie-tab-content .panel-heading{ font-size:24px;padding:20px 0px 20px 5px;}
        .list-group-item{
            padding:5px 0px 5px 0px;  
            border-left:none;
            border-right:none;
            border-top:none;
            border-bottom:1px solid #ddd;}
        
.bhoechie-tab{ border-left:1px solid #dedede;}  
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
    margin: 0px 20px 20px 20px;
   

 
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{ 
    font-size:18px;
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #2d998f;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #2b9890;
  background-image: #2b9890;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #7bbd67;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 0px;
  padding-top: 0px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
        
        .ms-choice{border:none !important}
        
        .ms-drop input[type="checkbox"] {
    vertical-align: middle;
    margin: 0px 8px 0px 0px;
    /* padding-left: 10px; */
}
        .ms-choice > span {
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
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
    
    </script> 

<!-- The main application script --> 

<script src="js/advanced-form-components.js"></script> 
<script>
    $(function() {
        $('#ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script> 
<script>
    $(function() {
        $('#mt').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script> 
<script>
    $(function() {
        $('#mst').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
         
         
          $(function() {
        $('#mst22').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
         
         
</script>
<style type="text/css">
        .radios label{display:inline;
        padding-left: 23px;
    padding-right: 30px; font-weight: bold;
        }
        
    </style>
</body>
</html>