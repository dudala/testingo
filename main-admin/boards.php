<?php include 'head.php' ?>
  <section id="container">
  
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
                              School Board Names
                          </header>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>School Board Names</th>
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>CBSC</td>
                                          
                                      </tr>
                                      <tr>
                                          <th scope="row">2</th>
                                          <td>ISC</td>
                                         
                                      </tr>
                                      
                                      </tbody>
                                  </table>
                                 
                              </div>
                               <!--auto input-->
                                  	<div class="input_fields_wrap">
                                        <button class="add_field_button btn-primary">Add New <i class="fa fa-plus-circle"></i></button>
                                        <br/>
                                        <div class="new_inputs"></div>
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
          <div class="text-center">
              2018 © Test In Go by Inovies.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
<?php include 'footer-scripts.php' ?>
<style>
.add_field_button{
	background-color: #2e998e !important;
    color: #FFFFFF;
    border: none;
    padding: 5px 10px;	
}
.new_inputs{
	margin:10px 0px;	
}
.new_fields input{
	margin-bottom:5px;	
}
a.remove_field{
	margin-left: 10px;
    font-size: 15px;
    color: red;
	
	
}

</style>