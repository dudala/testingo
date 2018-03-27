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
            <li class="active"> <a title="Syllabus Upload" href="drona.php"><i class="fa fa-upload"></i> Syllabus Upload </a> </li>
            <li class=""> <a title="Assignments / Worksheets" href="drona-assignments-worksheets.php"><i class="fa fa-calendar "></i> Assignments / Worksheets</a> </li>
            <li><a title="Exam Generation" href="drona-exam-generation.php"><i class="fa fa-magic"></i> Exam Generation</a></li>
            <li><a title="Archives" href="drona-archives.php"><i class="fa fa-magic"></i> Archives</a></li>
          </ul>
        </header>
        <div class="panel-body">
          <div class="tab-content">
            <div id="syllabus-upload" class="tab-pane active"> <br/>
              <div class="row">
                <div class="col-md-8">
                  <div id="tab" class="btn-group"> <a href="drona.php" class="btn btn-primary " ><i class="fa fa-upload"></i> Upload</a> <a href="drona-syllabus-status.php" class="btn btn-primary active" ><i class="fa fa-bar-chart-o"></i> Status</a> </div>
                  <h3>Syllabus Status</h3>
                  <br/>
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
                <table class="table  table-bordered table-striped table-advance table-hover">
                  <thead>
                    <tr>
                      <th> Class</th>
                      <th>Exam Name</th>
                      <th>Paper Code</th>
                      <th>Deadline</th>
                      <th colspan="2" class="text-center">Syllabus</th>
                      <th>ReMarks</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="form-control" placeholder="ex: 11" disabled></td>
                      <td><input type="text" class="form-control" placeholder="ex: FA 1" disabled></td>
                      <td><input type="text" class="form-control" placeholder="ex: ABC123" disabled></td>
                      <td><input class="form-control form-control-inline input-medium " placeholder="11-02-2018" disabled  size="16" type="text" value="" /></td>
                      <td><strong class="text-center">Old</strong>
                        <select class="form-control">
                          <option>Select Syllabus </option>
                          <option>Syllabus 1 </option>
                          <option>Syllabus 2 </option>
                          <option>Syllabus 3 </option>
                        </select></td>
                      <td><strong class="text-center">New</strong>
                        <select class="form-control">
                          <option>Select Syllabus </option>
                          <option>Syllabus 1 </option>
                          <option>Syllabus 2 </option>
                          <option>Syllabus 3 </option>
                        </select></td>
                      <td><input type="text" class="form-control" placeholder="ex: "></td>
                      <td><button class="btn btn-sm btn-danger">Rejected</button></td>
                      <td><button class="btn btn-md btn-success">ReSumbit</button></td>
                    </tr>
                    <tr>
                      <td><input type="text" class="form-control" placeholder="ex: 11" disabled></td>
                      <td><input type="text" class="form-control" placeholder="ex: FA 1" disabled></td>
                      <td><input type="text" class="form-control" placeholder="ex: ABC123" disabled></td>
                      <td><input class="form-control form-control-inline input-medium default-date-picker" placeholder="select date"  size="16" type="text" value="" disabled /></td>
                      <td><select class="form-control" disabled>
                          <option selected>Select Syllabus </option>
                          <option>Syllabus 1 </option>
                          <option>Syllabus 2 </option>
                          <option>Syllabus 3 </option>
                        </select></td>
                      <td><select class="form-control" disabled>
                          <option>Select Syllabus </option>
                          <option selected>Syllabus 1 </option>
                          <option>Syllabus 2 </option>
                          <option>Syllabus 3 </option>
                        </select></td>
                      <td><input type="text" class="form-control" placeholder="ex: "></td>
                      <td><button class="btn btn-sm btn-success" disabled>Approved</button></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
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