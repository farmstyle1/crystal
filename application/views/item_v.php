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
                      <a  href="<? echo site_url("welcome"); ?>">
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
                      <a href="<? echo site_url("report"); ?>">
                          <i class="fa fa-book"></i>
                          <span>Report</span>
                      </a>
                  </li>
				  
				  <li class="sub-menu">
                      <a class="active" href="<? echo site_url("item"); ?>">
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
		
          
			
          
          	<!-- BASIC FORM ELELEMNTS -->
          	
          	
          	<!-- INLINE FORM ELELEMNTS -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
          	
          	<!-- INPUT MESSAGES -->
          	
			<div class="row mt">		
          		<div class="col-md-12">
						
						
						
					
						<div class="form-panel" id="mainlist">
						
							
						<!-- JUSTIFIED BUTTONS -->	
							<div class="btn-group btn-group-justified">
							  <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('c');">กาแฟ</button>
							  </div>
							  <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('h');">คาราเมล-น้ำผึ้ง</button>
							  </div>
							 <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('t');">ชา</button>
							  </div>
							  <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('mc');">นม - โกโก้</button>
							  </div>
							   <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('s');">Smoothie</button>
							  </div>
							   <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('so');">Soda</button>
							  </div>
							   <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('ca');">Cake</button>
							  </div>
							    <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('f');">Food</button>
							  </div>
							   <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('a');">Alcohol</button>
							  </div>
							  <div class="btn-group">
								<button type="button" class="btn btn-theme" OnClick="JavaScript:select('ot');">Other</button>
							  </div>
							</div>      				
						<!--/showback -->
						
						<br>
						<table>
						<tr><td>
						
						</td><td>
						
						</td><tr>
						</table>
          			</div><!-- /form-panel -->
					
          		</div><!-- /col-lg-12 -->
          	</div>
			
			<div class="row mt">
                  <div class="col-md-6">
                      <div class="form-panel" id="itemlist">
					 
                          <table class="table table-striped table-advance table-hover" style="text-align:center;" id="myTable">
	                  	  	 <thead>
                              <tr>
                                 
                                <th> <center> Item </center></th>
								<th><center> price </center></th>	
								
                              </tr>
							
                             </thead>
							
	                  	  
						
                              <tbody id="myBody">
                          
								
                              </tbody>
							
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
				  
				  
				  
				   <div class="col-md-6">
                      <div class="form-panel" id="additem">
					 
                          <table class="table table-striped table-advance table-hover" style="text-align:center;" id="myTable1">
	                  	  	 <thead>
                              <tr>
                                 
                                <th> <center> Add Item </center></th>
								<th></th>	
								
                              </tr>
							
                             </thead>
							<tr>
								<td>
								<label class="col-sm-3 col-sm-3 control-label">Item : </label>
								
								<div class="col-sm-7">
									  <input id="itemname" type="text" class="form-control">
								  </div>
								</td>
							</tr>
							<tr>
								<td>
								<label class="col-sm-3 col-sm-3 control-label">Price : </label>
								
								<div class="col-sm-7">
									  <input id="itemprice" type="text" class="form-control">
								  </div>
								</td>
							</tr>
							<tr>
								<td>
								<span id="addbutton">
								<button type="button" class="btn btn-primary" OnClick="JavaScript:addItem();">เพิ่มรายการ</button>
								</span>
								</td>
							</tr>
	                  	  
						
                              <tbody id="myBody1">
                          
								
                              </tbody>
							
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
            </div><!-- /row -->
			
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
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
  
	var typeitem;
	
	$(document).ready(function () {
	
	first();
	$("#itemlist").hide();
	$("#additem").hide();
	
 });
 
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
	
  
  
  
  
  
 
/////////////////////////////////////////////////////////////  Add Item  //////////////////////////////////////////////////
	function addItem(){
		itemname = $('#itemname').val();
		itemprice = $('#itemprice').val();
		$.ajax({ 
			url: "<?php echo base_url()."index.php/item/additem";?>",
			type: "POST",
			data: 'item=' +itemname+'&price='+itemprice+'&type='+typeitem
		})
		.success(function(result) { 
			$("#itemname").val("");
			$("#itemprice").val("");			
			alert("เพิ่มเรียบร้อยแล้วครัชชชชช");		
			select(typeitem);
		});
		
	}


//////////////////////////////////////////////////////////// Query Item ///////////////////////////////////
	
//////////////////////////////////////////////////////////////// Get Item //////////////////////////////////////////////

		
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		function select(type) {
		$("#itemlist").show();
		$("#additem").show();
		typeitem = type;
			$("#myBody").empty();
			$.ajax({ 
					url: "<?php echo base_url()."index.php/item/gettype";?>",
					type: "POST",
					data: 'type='+type
				})
			.success(function(result) { 
					
					var obj = jQuery.parseJSON(result);
						if(obj != '')
						{
						
							
							  
							  $.each(obj, function(key, val) {
							
							var tr = "<tr>";
							tr = tr + "<td>" + val["name"]; + "</td>";
							tr = tr + "<td>" + val["price"]; + "</td>";
							tr = tr + "<td><button class='btn btn-warning' OnClick='JavaScript:deleteItem("+val["item"]+");'><i class='fa fa-trash-o ' ></i></button></td>";
							tr = tr + "</tr>";
							$('#myTable > tbody:last').append(tr);
							
							
							  });
						}
				
				});
			
			$("#"+type+"").show();
			
			
		}
		
//////////////////////////////////////////////////////////////////////////////// Delete Item /////////////////////////////
	function deleteItem(id)
		{
			
		
			$.ajax({ 
						url: "<?php echo base_url()."index.php/item/deleteitem";?>",
						type: "POST",
						data: 'id='+id
					})
			.success(function(result) { 
			
			
			select(typeitem);
			
				});
			

		}
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
      $(function(){
          $('select.styled').customSelect();
      });
	
  </script>

  </body>
</html>
