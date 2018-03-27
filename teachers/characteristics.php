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
                          Characteristics of the Question paper going to generate 
                          </header>
                          <br/>
                          <h4>Total Marks - 600</h4>
                         <br/>
                          <div class="tab-content">
                            <div class="tab-pane active" id="upload">
                               <div class="row">
                                    <div class="col-sm-2">
                                        <h4>Syllabus :</h4>
                                    </div>
                                    <div class="col-sm-10">
                                      <form>
                                          <div class="form-group">
                                              <textarea class="form-control" rows="5"></textarea>
                                          </div>
                                      </form>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <h4>Paper Structure :</h4>
                                    </div>
                                    <div class="col-sm-10">
                                        <table class="table table-bordered table-striped table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th >Section</th>
                                                    <th >Types</th>
                                                    <th >Questions</th>
                                                    <th>Choice</th>
                                                    <th>Marks</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>A (2)</td>
                                                        <td>Fill in the Blanks</td>
                                                        <td>5</td>
                                                        <td>0</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B (3)</td>
                                                        <td>VASQ</td>
                                                        <td>4</td>
                                                        <td>0</td>
                                                        <td>12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>C (5)</td>
                                                        <td>SAQ</td>
                                                        <td>3</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr>
                                                        <td>D (5)</td>
                                                        <td>MAPPING</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2" class="text-right"><b> Total</b></th>
                                                        <th class="text-left">25</th>
                                                        <th class="text-left">0</th>
                                                        <th class="text-left">80</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <h4>Chapterwise <br/><br/> Weightage :</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <table class="table table-bordered table-striped table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th >Chapter Name</th>
                                                    <th >Questions</th>
                                                    <th >Marks</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Chapter 3</td>
                                                        <td>5</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chapter 4</td>
                                                        <td>2</td>
                                                        <td>4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chapter 6</td>
                                                        <td>3</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chapter 8</td>
                                                        <td>8</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-right"><b> Total</b></th>
                                                        <th class="text-left">18</th>
                                                        <th class="text-left">17</th>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                          
                                <br/><br/>
                    <div class="col-md-12">
                        <div class="col-md-12">
                             <a class="btn btn-danger pull-left " href="typology.php">Back to Typology</a>
                            
                            <a class="btn btn-danger pull-right">Proceed For Generate</a>
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




    </style>

  <!--custom checkbox & radio-->
  <!--<script type="text/javascript" src="js/ga.js"></script>-->

  <!--script for this page-->
  
  <script src="js/form-component.js"></script>

</body>


</html>