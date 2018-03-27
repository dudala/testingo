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
           <li > <a title="Syllabus Upload" href="drona.php"><i class="fa fa-upload"></i> Syllabus Upload </a> </li>
            <li class=""> <a title="Assignments / Worksheets" href="drona-assignments-worksheets.php"><i class="fa fa-calendar "></i> Assignments / Worksheets</a> </li>
            <li><a title="Exam Generation" href="drona-exam-generation.php"><i class="fa fa-magic"></i> Exam Generation</a></li>
            <li class="active"><a title="Archives" href="drona-archives.php"><i class="fa fa-magic"></i> Archives</a></li>
          </ul>
        </header>
        <div class="panel-body">
          <div class="tab-content">
            <div id="syllabus-upload" class="tab-pane active">
              <div class="row">
                <div class="col-md-8"> <br/>
                  <div id="tab" class="btn-group"> <a href="drona-archives.php" class="btn btn-primary "><i class="fa fa-group"></i> 10th Class</a> <a href="drona-11thclass-archives.php" class="btn btn-primary "><i class="fa fa-group"></i> 11th Class</a> <a href="drona-12thclass-archives.php" class="btn btn-primary active" ><i class="fa fa-group"></i> 12th Class</a> </div>
                  <br/>
                  <h3>12<sup>th</sup> Class</h3>
                </div>
                <div class="col-md-4 panel-body"> </div>
              </div>
              <div class="tab-pane">
                <select class="form-control">
                  <option selected>Scheduled Tests / Assessments</option>
                  <option >Scheduled Tests / Assessments</option>
                  <option >Scheduled Tests / Assessments</option>
                </select>
                <br>
                <div class="">
                  <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                    <input type="text" class="form-control dpd1" name="from" placeholder="From Date">
                    <span class="input-group-addon">To</span>
                    <input type="text" class="form-control dpd2" name="to" placeholder="End Date">
                  </div>
                  <span class="help-block">Select date range</span> </div>
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name of the Examination</th>
                      <th>Dates</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Periodic 4 </td>
                      <td> 15-01-2018 </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Periodic 5 </td>
                      <td> 1-02-2018 </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Periodic 6 </td>
                      <td> 15-02-2018 </td>
                    </tr>
                  </tbody>
                </table>
                <div class="col-lg-12"><br>
                  <div class="form-group">
                    <div class="col-lg-offset-4 col-lg-3">
                      <button class="btn btn-md btn-block btn-success" type="submit">Submit</button>
                    </div>
                  </div>
                  <br>
                  <br>
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