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
      <!-----resources--->
      <section class="panel secound_tabs">
        <header class="panel-heading tab-bg-dark-navy-blue " style="padding:0px;">
          <ul class="nav nav-tabs">
            <li > <a title="Time Table" href="rubrics.php"><i class="fa fa-calendar"></i> Time Table</a> </li>
            <li > <a title="Teaching Reports" href="rubrics-teaching-reports.php"><i class="fa fa-file-text-o" ></i> Teaching Reports</a> </li>
            <li class="active"><a title="Academic Planner" href="rubrics-academic-planner.php"><i class="fa fa-building-o "></i> Academic Planner</a></li>
            <li><a title="Resources" href="rubric-resources.php"><i class="fa fa-briefcase"></i> Resources</a></li>
            <li><a title="Generations" href="rubric-generations.php"><i class="fa fa-magic"></i> Generations</a></li>
          </ul>
        </header>
        <div class="panel-body">
          <div class="tab-content"><br/>
            <div id="" class="tab-pane active">
            <section id="flip-scroll">
              <div class="row">
                <div class="panel-body col-md-4 ">
                  <div class="btn-group btn-group-justified"> <a class="btn btn-primary active" href="rubrics-academic-planner.php"><i class="fa fa-calendar"></i> Planner</a> <a class="btn btn-primary" href="rubrics-academic-planner-view.php"><i class="fa fa-eye"></i> View</a> </div>
                  <h3>Planner</h3>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 panel-body">
                  <div class="form-group">
                    <label class="col-sm-5 col-sm-5 control-label" style="padding-top: 10px;">Select Month :</label>
                    <div class="col-sm-7">
                      <select class="form-control col-md-7">
                        <option>Jan</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div style="border: 1px solid #dedede; background: #fbfbfb;">
                <ul class="summary-list">
                  <li>
                    <h4> Total Days<br>
                      <br>
                      <strong class="text-primary"> 30 </strong> </h4>
                  </li>
                  <li>
                    <h4> Weekly Holidays<br>
                      <br>
                      <strong class="text-primary"> 6 </strong> </h4>
                  </li>
                  <li>
                    <h4> Non - Teaching Days<br>
                      <br>
                      <strong class="text-primary"> 2 </strong> </h4>
                  </li>
                  <li>
                    <h4> Teaching Days <br>
                      <br>
                      <strong class="text-primary"> 22 </strong> </h4>
                  </li>
                  <li>
                    <h4> Others <br>
                      <br>
                    </h4>
                  </li>
                </ul>
              </div>
              <br>
              <div >
              <form class="form-inline " role="form">
              <br>
              <br>
              <div style="border: 1px solid #dedede; background: #fbfbfb;" class="panel-body">
              <form class="form-inline " role="form">
                <div class="form-group col-md-12" style="overflow-x: scroll;min-height:200px;">
                  <table>
                    <tr>
                      <td><input class="form-control" disabled placeholder="11A">
                        <select id="ms0" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="11B">
                        <select id="ms1" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="12A">
                        <select id="ms2" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="12B">
                        <select id="ms3" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="13A">
                        <select id="ms4" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="13B">
                        <select id="ms5" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                      <td><input class="form-control" disabled placeholder="14A">
                        <select id="ms6" multiple="multiple" class="form-control">
                          <option value="1" selected>Select Subject </option>
                          <option value="1">Select Subject 1</option>
                          <option value="1">Select Subject 2</option>
                          <option value="1">Select Subject 3</option>
                          <option value="1">Select Subject 4</option>
                        </select></td>
                    </tr>
                  </table>
                  <br/>
                </div>
                </div>
              </form>
              </div>
            </section>
            <br/>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Chapters</th>
                  <th>Topics</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Chapter 1 </td>
                  <td><div class="checkboxes">
                      <label class="label_check c_on" for="checkbox-01">
                        <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked="">
                        <strong>Topic 1</strong> </label>
                      <label class="label_check c_off" for="checkbox-02">
                        <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox">
                        <strong>Topic 2</strong> </label>
                      <label class="label_check c_off" for="checkbox-03">
                        <input name="sample-checkbox-03" id="checkbox-03" value="1" type="checkbox">
                        <strong>Topic 3</strong></label>
                    </div></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Chapter 2</td>
                  <td><div class="checkboxes">
                      <label class="label_check c_on" for="checkbox-04">
                        <input name="sample-checkbox-01" id="checkbox-04" value="1" type="checkbox" checked="">
                        <strong>Topic 1</strong> </label>
                      <label class="label_check c_off" for="checkbox-05">
                        <input name="sample-checkbox-02" id="checkbox-05" value="1" type="checkbox">
                        <strong>Topic 2</strong> </label>
                      <label class="label_check c_off" for="checkbox-06">
                        <input name="sample-checkbox-03" id="checkbox-06" value="1" type="checkbox">
                        <strong>Topic 3</strong></label>
                    </div></td>
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
      </section>
      
      <!---end---> 
      
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
<script>
    $(function() {
        $('#ms0').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
           
           
               $(function() {
        $('#ms1').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
           
           
           
               $(function() {
        $('#ms2').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
           
           
           
               $(function() {
        $('#ms3').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
                       $(function() {
        $('#ms4').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
           
            $(function() {
        $('#ms5').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
           
           
            $(function() {
        $('#ms6').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.0/multiple-select.css" />
<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
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
<link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload.css">
<link rel="stylesheet" href="assets/file-uploader/css/jquery.fileupload-ui.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script> 
<script src="assets/file-uploader/js/jquery.iframe-transport.js"></script> 
<!-- The basic File Upload plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload.js"></script> 
<!-- The File Upload processing plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-process.js"></script> 
<!-- The File Upload image preview & resize plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-image.js"></script> 
<!-- The File Upload audio preview plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-audio.js"></script> 
<!-- The File Upload video preview plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-video.js"></script> 
<!-- The File Upload validation plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-validate.js"></script> 
<!-- The File Upload user interface plugin --> 
<script src="assets/file-uploader/js/jquery.fileupload-ui.js"></script> 

<!-- The main application script --> 
<script src="assets/file-uploader/js/main.js"></script> 
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script> 
<script src="js/advanced-form-components.js"></script>
</body>
</html>