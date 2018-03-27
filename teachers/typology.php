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
              
              
              <section class="container">
 <div class="">
    <div class="row">
        <div class="clearfix bhoechie-tab-container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
              
                      <section class="panel">
                          <header class="panel-heading">
                          Typology
                          </header>
                          
                          <div class="tab-content">
              <div class="tab-pane active" id="upload">
                              
                   <table class="table table-bordered table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th colspan="3"></th>
                                 
                                  <th >35% <br/>Chap 3</th>
                                  <th >10% <br/>Chap 4</th>
                                  <th >25% <br/>Chap 6 </th>
                                  <th>40% <br/> CHap 8</th>
                                  <th>Input <br/> %</th>
                              </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td></td>
                                      <td>Knowledge<br/>Understanding</td>
                                      <td>Easy</td>
                                      <td colspan="4"></td>
                                      <td><input type="text" class="form-control"></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td>Application<br/>Analyse</td>
                                      <td>Medium</td>
                                      <td colspan="4"></td>
                                      <td><input type="text" class="form-control"></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td>Evaluate<br/>Create</td>
                                      <td>Hard</td>
                                      <td colspan="4"></td>
                                      <td><input type="text" class="form-control"></td>
                                  </tr>
                                  <tr>
                                      <td colspan="7" align="right"><b>Total :</b></td>
                                      <td><b>100%</b></td>
                                  </tr>
                              </tbody>
                          </table>  
                  
                  
                  
                  
                  
                  
                  <br><br>
                  <div class="clearfix"></div>
                  <div class="col-md-12 text-center">
                      
                      <img src="img/lots-vs-hots.jpg" alt="" width="500">
                      
                
                      

                  
                  </div>
                  
                  <div class="clearfix"></div>
                  
                   <br><br>
                  
                  
                  
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <a class="btn btn-success pull-left" href="weightage.php">Back to Weightage</a>

                            <a class="btn btn-danger pull-right" href="characteristics.php">Proceed to Preview of Characteristics</a>
                        </div>
                    </div>                              
                              
                              <br/><br/>
                              
                              </div>
                              
                     
        
            </div>
                          
                          
                    
                      </section>
               
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



table th{
    text-align: center;
}
    </style>

  <!--custom checkbox & radio-->
  <!--<script type="text/javascript" src="js/ga.js"></script>-->

  <!--script for this page-->
  
  <script src="js/form-component.js"></script>

</body>


</html>