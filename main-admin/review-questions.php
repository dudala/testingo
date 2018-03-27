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
        <section class="panel" style="margin:15px;">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-2">
                <label>Board</label>
                <select class="form-control">
                  <option selected>CBSE</option>
                  <option>Board Name</option>
                </select>
              </div>
              <div class="col-sm-2">
                <label>Subject</label>
                <select class="form-control">
                  <option selected>English</option>
                  <option>Physics</option>
                </select>
              </div>
              <div class="col-sm-2">
                <label>Class</label>
                <select class="form-control">
                  <option selected>6</option>
                  <option>7</option>
                </select>
              </div>
            </div>
            <br/>
            <div class="row">
              <div class="col-sm-2">
                <label>SME</label>
                <select class="form-control">
                  <option selected>SME-1</option>
                  <option selected>SME-2</option>
                </select>
              </div>
            </div>
            <br/>
            <div class="table-responsive col-sm-10" style="margin-left:-15px;margin-bottom:15px;">
              <table class="table table-bordered" id="mytable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>Questions Approved</th>
                    <th>Question Rejected</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>13-2-2018</td>
                    <td>35</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>13-2-2018</td>
                    <td>35</td>
                    <td>35</td>
                  </tr>
                </tbody>
              </table>
            </div>
           
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
              </div>
              <div class="col-sm-3">
                <div class="explain_colors">
                  <div class="red"> <span class="red-box box">1</span><span class="title">Not Reviewed</span> </div>
                  <div class="red"> <span class="gray-box box">4</span><span class="title">Reviewed Rejected</span> </div>
                  <div class="red"> <span class="green-box box">6</span><span class="title">Reviewed Approved</span> </div>
                </div>
              </div>
            </div>
            <div class="explination_box">
            	<div class="row">
                	<div class="col-sm-12">
                    	<div class="question">
                        	<h4>Question</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div class="question">
                        	<h4>Scheme of Evaluation</h4>
                        </div>
                    </div>
                </div>
            	<div class="row">
                	<div class="col-md-12">
                      	<div class="solution">
                        <h4>Solution</h4>
                        	<div class="summernote">Hello Summernote</div>
                        </div>
                  </div>
                </div>
            	<div class="row">
                	<div class="col-sm-4">
                    	<ul class="list-inline">
                        	<li><a href="#" class="btn btn-success">Approve</a></li>
                            <li><a href="#" class="btn btn-danger">Reject</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                    	<div class="row">
                        	<div class="col-sm-6">
                            	<div class="reason-for-reject">
                                <div class="row">
                                	<div class="col-sm-6">
                                    	<h5>Reasons for rejection </h5>
                                    </div>
                                    <div class="col-sm-6">
                                    	<select class="form-control">
                                    	<option selected>Question</option>
                                        <option>Question</option>
                                    </select>
                                    </div>
                                </div>
                                	
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="remark-query">
                                	<textarea  placeholder="Remark" style="width:100%;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
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
<?php include 'footer-scripts.php' ;?>
<script>

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
.pending, .selection, .alloted {
	border: none;
}
.explain_colors .red span.red-box, .pending {
	background-color: red;
}
.explain_colors .red span.gray-box, .selection {
	background-color: #999;
}
.explain_colors .red span.green-box, .alloted {
	background-color: #096;
}
.explain_colors .red span.box {
	padding: 2px 10px;
	margin-right: 5px;
	color:#fff;
}
.red {
	margin: 5px 0px;
}
.explain_colors .red span.title {
	font-weight: 500;
	font-size: 15px;
}
.explination_box{
	border:1px solid #ccc;
	padding:15px;
	margin:15px 0px;	
}
</style>
