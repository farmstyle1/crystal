<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Crystal Box Management</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo"><b>Crystal Box Coffee</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
					
					
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme"><span id="arrears"></span></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">มี <span id="arrears1"></span> Bill ที่ค้างชำระ</p>
                            </li>
                            <li>
                                <a href="<? echo site_url("bill"); ?>">
                                
                                    <span class="subject">
                                    <span class="from">ดู Bill ค้างชำระ</span>
                                
                                    </span>
                                   
                                </a>
                            </li>
                        
                           
                            
                            
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
         
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>assets/img/logo_box.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Crystal Box Coffee</h5>
              	  	
                  <li class="mt">
                      <a href="<? echo site_url("welcome"); ?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Order</span>
                      </a>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="<? echo site_url("queue"); ?>">
                          <i class="fa fa-desktop"></i>
                          <span>Queue</span>
                      </a>
                  </li>
				  
				  <li class="sub-menu">
                      <a class="active" href="<? echo site_url("report"); ?>">
                          <i class="fa fa-book"></i>
                          <span>Report</span>
                      </a>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="<? echo site_url("item"); ?>">
                          <i class="fa fa-book"></i>
                          <span>Item</span>
                      </a>
                  </li>

                 <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a  href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>  -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
  <!-- **********************************************************************************************************************************************************
  MAIN CONTENT
  *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  
		  
			<div class="row mt">
          		<div class="col-md-12">
          			<div class="white-panel pn">
	                	<div class="panel-heading">
	                        <div class="pull-left"><h4><i class="fa fa-tasks"></i> Report</h4></div>
	                        <br>
	                 	</div>
				  		<br>
						<form  method="post" action="<? echo site_url("report/pdf"); ?>"> 
				             <table  style="text-align:center;" >
				              <tbody >
								<tr><td>
								<span><input id="datepicker"  name="datepicker"  class="form-control" /></span>
								</td><td>
								
								<button type="button" class="btn btn-primary" OnClick='JavaScript:search();'>ค้นหา</button>
								<!-- <button type="button" id="reportbutton" class="btn btn-primary" OnClick='JavaScript:report();'>Report</button> -->
								<button type="submit" id="reportbutton" class="btn btn-primary" >Report</button>
								</td></tr>	         
				              </tbody>
				          </table>
						</form>
					
					</div><!--/ White-panel -->
          		</div><!--/col-md-12 -->
          	</div><!-- row -->
		
			<div class="row mt">
                  <div class="col-md-6">
                      <div class="form-panel" id="billlist">
					 
                          <table class="table table-striped table-advance table-hover" style="text-align:center;" id="myTable">
	                  	  <thead>
                              <tr>
                                  <th><center><i class="fa fa-bullhorn"></i> Bill No.</center></th>
                                  <th ><center><i class="fa fa-question-circle"></i> Queue</center></th>
                                  <th></th>
                              </tr>
                             </thead>
							
							
						
                              <tbody id="myBody">
                          
								
                              </tbody>
							
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
				  
				   <div class="col-md-6">
                      <div class="form-panel" id="itemlist">
							
                          <table class="table table-striped table-advance table-hover" style="text-align:center;" id="myTable1">
	                  	  	  <thead>
                              <tr>
                                  <th><center> รายการ </center></th>
								  <th ><center>Option </center></th>
                                  <th ><center>ราคา </center></th>
                                
                              </tr>
                             </thead>
							
                              <tbody id="myBody1">
                          
								
                              </tbody>
							
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
				  
				  
			</div>
			
			
		
		 
			
          
          	<!-- BASIC FORM ELELEMNTS -->
          	
          	
          	<!-- INLINE FORM ELELEMNTS -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
			
          	<!-- CUSTOM TOGGLES -->
          		
      
			
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="<?php echo base_url(); ?>assets/js/jquery.tagsinput.js"></script>
	
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="<?php echo base_url(); ?>assets/js/form-component.js"></script>    
  
 <script>
 $('#datepicker').datepicker({  format: 'yyyy-mm-dd'})
 $(document).ready(function () {
	first();
	$("#itemlist").hide();
	$("#billlist").hide();
	$("#reportbutton").hide();
	
 });
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 function first(){
		$.ajax({ 
			url: "<?php echo base_url()."index.php/order/first";?>",
			type: "POST",
			data: ''
		})
		.success(function(result) { 
			 var arrears = result;    
			 $("#arrears").html(arrears);
			 $("#arrears1").html(arrears);
		});
		
	}
	//////////////////////////////////////// search ////////////////////////////////////////////////////////////
	
	function search(){
		$("#billlist").show();
		$("#reportbutton").show();
		$("#itemlist").hide();
		$("#myBody").empty();
		datep = $('#datepicker').val();
		
		
		$.ajax({ 
					url: "<?php echo base_url()."index.php/report/getbilldate";?>",
					type: "POST",
					data: 'datepicker='+datep
				})
				.success(function(result) { 
				
					var obj = jQuery.parseJSON(result);
						if(obj != '')
						{
								
							  //$("#myTable tbody tr:not(:first-child)").remove();
							  
							  $.each(obj, function(key, val) {
										
										var tr = "<tr>";
										tr = tr + "<td>" + val["billid"] + "</td>";
										tr = tr + "<td><button type='button' class='btn btn-round btn-info'><font>"  + val["queue"] + " </font></button></td>";
										tr = tr + "<td><button type='button' class='btn btn-success' OnClick='JavaScript:listBill("+val["billid"]+");'><i class='fa fa-cog'></i> ดูรายการ </button></td>";
										tr = tr + "</tr>";
										$('#myTable> tbody:last').append(tr);
							  });
						}else{
							var tr = "<tr>";
										tr = tr + "<td colspan='3'>ไม่มีข้อมูล</td>";
									
										tr = tr + "</tr>";
										$('#myTable> tbody:last').append(tr);
						}

				});
	}
	
	
///////////////////////////////////////////////////// Report ////////////////////////////////////////////////////////////

		function report(){
			$("#billlist").hide();
			$("#itemlist").hide();
			$("#reportbutton").hide();
			$("#myBody").empty();
			datep = $('#datepicker').val();
			$.ajax({ 
				url: "<?php echo base_url()."index.php/report/pdf";?>",
				type: "POST",
				data: 'datepicker='+datep
			})
		
		
		}
	
	
//////////////////////////////////////////////////// ListBill ///////////////////////////////////////////////////////////

function listBill(billid){
			var total=0;
		
			$("#myBody1").empty();
			$("#itemlist").show();
				$.ajax({ 
					url: "<?php echo base_url()."index.php/bill/getbillitem";?>",
					type: "POST",
					data: 'bill='+billid
				})
				.success(function(result) { 
					var obj = jQuery.parseJSON(result);
						if(obj != '')
						{
							  //$("#myTable tbody tr:not(:first-child)").remove();
							  
							  $.each(obj, function(key, val) {
										var tr = "<tr>";
										tr = tr + "<td width='50%'>" + val["item"] +"</td>";
										if(val["option"]!="0"){tr = tr + "<td>" + val["option"] + "</td>";}else{tr = tr + "<td></td>";}
										tr = tr + "<td width='50%'>"  + val["itemprice"] + "</td>";
										tr = tr + "</tr>";
										$('#myTable1 > tbody:last').append(tr);
										total = parseInt(total)+parseInt(val["itemprice"]);
							  });
							  
						}
							pay = parseInt(total);
							var tr = "<tr>";
							tr = tr + "<td></td>";
							tr = tr + "<td></td>";
							tr = tr + "<td><h4>   <font  color='#428bca' >"+total+" บาท</font></h4></td>";
							
							tr = tr + "</tr>";
							$('#myTable1 > tbody:last').append(tr);
				});
			
		}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
      $(function(){
          $('select.styled').customSelect();
		   
			
      });
	
	
  </script>

  </body>
</html>
