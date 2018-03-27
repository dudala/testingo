<?php include 'head.php' ?>
<section id="container"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <!--header start-->
  <?php include 'header.php' ?>
  <!--header end--> 
  <!--sidebar start-->
  <?php include 'left-menu.php' ?>
  <!--sidebar end--> 
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper"> 
      <!--Inner Main Start Here--->
      
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <div class="panel-body">
              <div class="table-responsive">
                <section class="panel secound_tabs">
                  <header class="panel-heading tab-bg-dark-navy-blue ">
                    <ul class="nav nav-tabs">
                      <li > <a title="Role" href="resourse-management-role.php">Role</a> </li>
                      <li class="active"> <a title="Class Allotment" href="resourse-management-class-allotment.php">Class Allotment</a> </li>
                      <li><a title="Organization" href="resourse-management-oraganization.php">Organization</a></li>
                      <li><a title="Organization Tree" href="resourse-management-oraganization-tree.php">Organization Tree</a></li>
                    </ul>
                  </header>
                  <div class="panel-body">
                    <div class="tab-content"><br>
                      <div  class="tab-pane active">
                      <!--main content start here--->
                      	<div class="row">
                        	<div class="col-sm-9">
                            	<div class="class_buttons">
                                	<ul class="list-inline">
                                    	<li><a href="#" class="btn btn-primary pending">1</a></li>
                                        <li><a href="#" class="btn btn-primary pending">2</a></li>
                                        <li><a href="#" class="btn btn-primary pending">3</a></li>
                                        <li><a href="#" class="btn btn-primary selection">4</a></li>
                                        <li><a href="#" class="btn btn-primary alloted">5</a></li>
                                        <li><a href="#" class="btn btn-primary pending">6</a></li>
                                         <li><a href="#" >.</a></li>
                                        <li><a href="#" >.</a></li>
                                        <li><a href="#" >.</a></li>
                                        <li><a href="#" >.</a></li>
                                        <li><a href="#" class="btn btn-primary pending">11</a></li>
                                        <li><a href="#" class="btn btn-primary pending">12</a></li>
                                    </ul>
                                </div>
                                <div class="subjects_buttons">
                                	<ul class="nav nav-tabs" >
                                    	<li class="active"><a data-toggle="tab" href="#english">English</a></li>
                                        <li><a data-toggle="tab" href="#physics">Physics</a></li>
                                        <li><a data-toggle="tab" href="#computer-science">Computer Science</a></li>
                                       
                                    </ul>
                                    <div class="tab-content">
                                        <div id="english" class="tab-pane fade in active">
                                          <ul>
                                                                  <li class="col-sm-12">SME-1<span class="checkbox-option click"></span></li>
                                                                  <li class="col-sm-12" >SME-2<span class="checkbox-option"></span></li>
                                                                 
                                                               </ul>
                                        </div>
                                        <div id="physics" class="tab-pane fade">
                                         physics
                                        </div>
                                        <div id="computer-science" class="tab-pane fade">
                                          computer science
                                        </div>
                                        
                                      </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="explain_colors">
                                	<div class="red">
                                    	<span class="red-box box"></span><span class="title">Pending</span>
                                    </div>
                                    <div class="red">
                                    	<span class="gray-box box"></span><span class="title">Selection</span>
                                    </div>
                                    <div class="red">
                                    	<span class="green-box box"></span><span class="title">Alloted</span>
                                    </div>
                                </div>
                            
                            </div>
                        
                        </div>
                      <!--main end here--->
                       </div>
                    </div>
                  </div>
                </section>
              </div>
              <!--end--> 
            </div>
          </section>
        </div>
      </div>
      
      <!--Inner Main End Here---> 
    </section>
  </section>
  <!--main content end--> 
  
  <!--footer start-->
  <footer class="site-footer">
    <div class="text-center"> 2018 © Test In Go by Inovies. <a href="#" class="go-top"> <i class="fa fa-angle-up"></i> </a> </div>
  </footer>
  <!--footer end--> 
</section>

<?php include 'footer-scripts.php' ?>
<script>
/**********checkbox*************/
 $(document).ready(function () {
         $('.checkbox-option').click(function () {
         $(this).not(this).removeClass('click');
         $(this).toggleClass("click");
         });
         });

</script>
<style>
.add_row {
	background-color: #2e998e !important;
	color: #FFFFFF;
	border: none;
	padding: 5px 10px;
}
.ms-choice {
	border: none !important
}
.ms-drop input[type="checkbox"] {
	vertical-align: middle;
	margin: 0px 8px 0px 0px;
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
.pending,.selection,.alloted{
	border:none;	
}
.explain_colors .red span.red-box,.pending{
	background-color:red;
}
.explain_colors .red span.gray-box,.selection{
	background-color:#999;	
}
.explain_colors .red span.green-box,.alloted{
	background-color:#096;
}
.explain_colors .red span.box{
	padding:0px 10px;
	margin-right:5px;
	
}
.red{
	margin:5px 0px;	
}
.explain_colors .red span.title{
	font-weight:500;
	font-size:15px;	
}
.subjects_buttons{
	margin-top:40px;
		
}
.subjects_buttons .nav-tabs{
	border:none;
	margin:auto;	
}
.subjects_buttons .nav-tabs li{
	margin:0px 3px;
	border:1px solid #43b8b2;
	
}
.subjects_buttons .nav-tabs li a{
	padding:5px 15px;	
	border:none;
}
.subjects_buttons .nav-tabs li.active a{
	background-color:#43b8b2;
	color:#fff;
	border-radius:0px;
	margin:0px;
	border:none;
}
.subjects_buttons .tab-content{
	padding:20px;	
}
 .checkbox-option{
         float: left;
         cursor: pointer;
         height: 23px;
         width: 23px;
         margin:0px 5px;
         background: url(img/checkbox/check-off.png) no-repeat 0px 0px;
         }
         .checkbox-option.click {
         background: url(img/checkbox/check-on.png) no-repeat 0px 0px;
         }
</style>
