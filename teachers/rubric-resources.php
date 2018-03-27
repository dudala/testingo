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
            <li ><a title="Academic Planner" href="rubrics-academic-planner.php"><i class="fa fa-building-o "></i> Academic Planner</a></li>
            <li class="active"><a title="Resources" href="rubric-resources.php"><i class="fa fa-briefcase"></i> Resources</a></li>
            <li><a title="Generations" href="rubric-generations.php"><i class="fa fa-magic"></i> Generations</a></li>
          </ul>
        </header>
        <div class="panel-body">
          <div class="tab-content"><br/>
            <div id="" class="tab-pane active">
            <section id="flip-scroll">
              <div class="row">
                <div class="panel-body col-md-4 ">
                  <div class="btn-group btn-group-justified"> <a class="btn btn-primary active" href="rubric-resources.php"><i class="fa fa-upload"></i> Upload</a> <a class="btn btn-primary" href="rubric-resources-view.php"><i class="fa fa-eye"></i> View</a> </div>
                  <h3>Upload</h3>
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
             <section id="flip-scroll">
                          <div style="border: 1px solid #dedede; background: #fbfbfb;" class="panel-body">
                            <form class="form-inline " role="form">
                              <div class="form-group col-md-6">
                                <select class="form-control ">
                                  <option>Select Class </option>
                                  <option>10 </option>
                                  <option>11 </option>
                                  <option>12 </option>
                                </select>
                                <select class="form-control ">
                                  <option>Select Subject </option>
                                  <option>Subject 1 </option>
                                  <option>Subject 2 </option>
                                  <option>Subject 3 </option>
                                  <option>Subject 4 </option>
                                </select>
                                <select class="form-control ">
                                  <option>Select Chapter </option>
                                  <option>Chapter 1 </option>
                                  <option>Chapter 2 </option>
                                  <option>Chapter 3 </option>
                                  <option>Chapter 4 </option>
                                </select>
                              </div>
                              <div class="form-group col-md-6"> </div>
                            </form>
                          </div>
                        </section>
                        <br>
                        <section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue " style="padding:0px;">
                            <ul class="nav nav-tabs">
                              <li class="active"> <a data-toggle="tab" href="#home" aria-expanded="true">Text </a> </li>
                              <li class=""> <a data-toggle="tab" href="#about" aria-expanded="false">Animation</a> </li>
                              <li class=""> <a data-toggle="tab" href="#profile" aria-expanded="false">Video</a> </li>
                              <li class=""> <a data-toggle="tab" href="#contact" aria-expanded="false">Web</a> </li>
                            </ul>
                          </header>
                          <div class="panel-body" style="border: 1px solid #dedede; background: #fbfbfb;">
                            <div class="tab-content">
                              <div id="home" class="tab-pane active">
                                <form action="#" class="form-horizontal tasi-form">
                                  <div class="form-group">
                                    <textarea class="wysihtml5 form-control" rows="10"></textarea>
                                  </div>
                                </form>
                              </div>
                              <div id="about" class="tab-pane">
                                <div class="form-group last">
                                  <label class="control-label col-md-3">Image Upload</label>
                                  <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"> <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                      <div> <span class="btn btn-white btn-file"> <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span> <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default">
                                        </span> <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a> </div>
                                    </div>
                                    <span class="label label-danger">NOTE!</span> <span> Attached image thumbnail is
                                    supported in Latest Firefox, Chrome, Opera,
                                    Safari and Internet Explorer 10 only </span> </div>
                                </div>
                              </div>
                              <div id="profile" class="tab-pane">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Upload Youtube Video Url</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="https://www.youtube.com/watch?v=f4o0FC52dCw">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                              <div id="contact" class="tab-pane">
                                <form id="fileupload" action="http://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                                  <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                  <noscript>
                                  <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                                  </noscript>
                                  <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                  <div class="row fileupload-buttonbar">
                                    <div class="col-lg-7"> 
                                      <!-- The fileinput-button span is used to style the file input field as button --> 
                                      <span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Add files...</span>
                                      <input type="file" name="files[]" multiple>
                                      </span>
                                      <button type="submit" class="btn btn-primary start"> <i class="glyphicon glyphicon-upload"></i> <span>Start upload</span> </button>
                                      <button type="reset" class="btn btn-warning cancel"> <i class="glyphicon glyphicon-ban-circle"></i> <span>Cancel upload</span> </button>
                                      <button type="button" class="btn btn-danger delete"> <i class="glyphicon glyphicon-trash"></i> <span>Delete</span> </button>
                                      <input type="checkbox" class="toggle">
                                      <!-- The global file processing state --> 
                                      <span class="fileupload-process"></span> </div>
                                    <!-- The global progress state -->
                                    <div class="col-lg-5 fileupload-progress fade"> 
                                      <!-- The global progress bar -->
                                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar progress-bar-success" style="width:0%;"> </div>
                                      </div>
                                      <!-- The extended global progress state -->
                                      <div class="progress-extended"> &nbsp; </div>
                                    </div>
                                  </div>
                                  <!-- The table listing the files available for upload/download -->
                                  <table role="presentation" class="table table-striped">
                                    <tbody class="files">
                                    </tbody>
                                  </table>
                                </form>
                              </div>
                            </div>
                          </div>
                        </section>
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