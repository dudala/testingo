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
                          <header class="panel-heading">
                           Chapters
                          </header>
                          <div class="panel-body">
                          <form>
                              <div class="row">
                                	<div class="col-sm-2">
                                    <label>Board</label>
                                    	<select class="form-control">
                                        	<option selected disabled>Select Board</option>
                                            <option>CBSC</option>
                                            <option>Board Name</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                    <label>Class</label>
                                    	<select class="form-control">
                                            <option selected>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                     <div class="col-sm-2">
                                    <label>Subject</label>
                                    	<select class="form-control">
                                        	<option selected disabled>Select Subject</option>
                                            <option>Maths</option>
                                            <option>Physics</option>
                                        </select>
                                    </div>
                                     <div class="col-sm-2">
                                    <br/>
                                    	<button class="btn btn-primary" style="margin-top:4px;">Search</button>
                                    </div>
                              
                              </div>
                              </form>
                              <br/>
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="mytable">
                                      <thead>
                                      <tr>
                                          <th>Board</th>
                                          <th>Class</th>
                                          <th>Subjects</th>
                                          <th>Chapters</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">CBSC</th>
                                          <td>11</td>
                                          <td>Physics</td>
                                          <td>Motion</td>
                                          
                                      </tr>
                                     <tr>
                                          <th scope="row">CBSC</th>
                                          <td>11</td>
                                          <td>Physics</td>
                                          <td>Surface Tension</td>
                                          
                                      </tr>
                                      </tbody>
                                  </table>
                                 
                              </div>
                              <form>
                              <div class="row">
                              <header class="panel-heading" style="border-bottom:none;">
                                 Add New Chapters
                              </header><br/>
                              	<div class="col-sm-2">
                                	<div class="form-group">
                                    	<label>Board</label>
                                        <select class="form-control">
                                        	<option selected>CBSC</option>
                                            <option>Board Name</option>
                                            <option>Board Name</option>
                                            <option>Board Name</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                	<div class="form-group">
                                    	<label>Class</label>
                                       <select class="form-control">
                                        	<option selected>12</option>
                                            <option>Class Name</option>
                                            <option>Class Name</option>
                                            <option>Class Name</option>
                                        </select>
                                    </div>
                                </div>
                              <div class="col-sm-3">
                                	<div class="form-group">
                                    	<label>Subjects</label>
                                        <select class="ms form-control" multiple="multiple">
                                        	<option value="Maths" selected>Maths</option>
                                            <option value="Phisics">Phisics</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Psychology">Psychology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                	<div class="form-group">
                                    <br/>
                                    	 <button class="add_row btn-primary" type="submit" style="margin-top:7px;">Add Chapter <i class="fa fa-plus-circle"></i></button>
                                    </div>
                                </div>
                                
                              </div>
                              </form>
                               <!--auto input-->
                                  	
                                       
                                       
                                  
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
          <div class="text-center">
              2018 © Test In Go by Inovies.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
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
.add_row{
	background-color: #2e998e !important;
    color: #FFFFFF;
    border: none;
    padding: 5px 10px;	
}

.ms-choice{border:none !important}
        
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