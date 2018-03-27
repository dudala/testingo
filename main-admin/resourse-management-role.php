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
                      <li class="active"> <a title="Role" href="resourse-management-role.php">Role</a> </li>
                      <li> <a title="Class Allotment" href="resourse-management-class-allotment.php">Class Allotment</a> </li>
                      <li><a title="Organization" href="resourse-management-oraganization.php">Organization</a></li>
                      <li><a title="Organization Tree" href="resourse-management-oraganization-tree.php">Organization Tree</a></li>
                    </ul>
                  </header>
                  <div class="panel-body">
                    <div class="tab-content"><br>
                      <div  class="tab-pane active">
                      <!--main content start here--->
                      	<div class="table-responsive col-sm-10">
                                  <table class="table table-bordered" id="mytable">
                                      <thead>
                                      <tr>
                                          <th>S.No</th>
                                          <th>Employee Names</th>
                                          <th>Design</th>
                                          <th>Question for Day</th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>ABC</td>
                                          <td><select class="form-control">
                                          		<option selected>SME</option>
                                                <option >SME</option>
                                          </select></td>
                                          <td><input class="form-control" type="text" /></td>
                                          
                                      </tr>
                                      <tr>
                                          <th scope="row">2</th>
                                          <td>DEF</td>
                                          <td><select class="form-control">
                                          		<option selected>SME</option>
                                                <option >SME</option>
                                          </select></td>
                                          <td><input class="form-control" type="text" /></td>
                                          
                                      </tr>
                                      </tbody>
                                  </table>
                                 
                              </div>
                              	<div class="action_buttons text-center col-sm-10">
                                    	<a href="#" class="btn btn-primary">Save</a>
                                        <a href="#" class="btn btn-warning">Edit</a>
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
<script type="text/javascript">
  //Try to get tbody first with jquery children. works faster!
//var tbody = $('#mytable').children('tbody');

//Then if no tbody just select your table 
//var table = tbody.length ? tbody : $('#mytable');


//$('button.add_row').click(function(){
    //Add row
   // table.append('<tr><td><input class="form-control input-sm" value="5" /></td><td><input class="form-control input-sm" value="26" /></td><td> </td></tr>');
//})
</script>
<?php include 'footer-scripts.php' ?>
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
</style>
