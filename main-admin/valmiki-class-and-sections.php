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
                             Class &amp; Sections
                          </header>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="mytable">
                                      <thead>
                                      <tr>
                                          <th>Classes</th>
                                          <th>No.of Sections</th>
                                          <th>Names Of Sections</th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">6</th>
                                          <td>26</td>
                                          <td>A , B , C</td>
                                          
                                      </tr>
                                      <tr>
                                          <th scope="row">7</th>
                                          <td>26</td>
                                          <td>A , B , C , D</td>
                                      </tr>
                                      </tbody>
                                  </table>
                                 
                              </div>
                              <form>
                              <div class="row">
                              <header class="panel-heading" style="border-bottom:none;">
                                 Add New Class And Sections
                              </header><br/>
                              	<div class="col-sm-2">
                                	<div class="form-group">
                                    	<label>Class</label>
                                        <input type="text" class="form-control" placeholder="class"/>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                	<div class="form-group">
                                    	<label>No.of Sections</label>
                                        <input type="text" class="form-control" placeholder="Sections"/>
                                    </div>
                                </div>
                              <div class="col-sm-3">
                                	<div class="form-group">
                                    	<label>Section Names</label>
                                        <select class="ms form-control" multiple="multiple">
                                        	<option value="section Name1" selected>section Name1</option>
                                            <option value="section Name12">section Name2</option>
                                            <option value="section Name3">section Name3</option>
                                            <option value="section Name4">section Name4</option>
                                            <option value="section Name5">section Name5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                	<div class="form-group">
                                    <br/>
                                    	 <button class="add_row btn-primary" type="submit" style="margin-top:7px;">Add Class &amp; Section <i class="fa fa-plus-circle"></i></button>
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