<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<script src="<?php echo base_url(); ?>js/jquery1.11.0.min.js"></script>
		<style>
		
		select {
			font-size: 20px;
			font-family: 'Averia Libre', cursive;
		}​
		</style>
		<script>
		
		function loadBill() {
			$("#myBody").empty();
				$.ajax({ 
					url: "<?php echo base_url()."index.php/bill/getbillitem";?>",
					type: "POST",
					data: ''
				})
				.success(function(result) { 
					var obj = jQuery.parseJSON(result);
						if(obj != '')
						{
							  //$("#myTable tbody tr:not(:first-child)").remove();
							  
							  $.each(obj, function(key, val) {
										var tr = "<tr>";
										tr = tr + "<td><a href='<? echo site_url('bill/item'); ?>'>" + val["billid"] + "</a></td>";
										
										tr = tr + "<td><font size='10' color='red' >"  + val["queue"] + " </font></td>";
										
										tr = tr + "</tr>";
										$('#myTable> tbody:last').append(tr);
							  });
						}

				});
		}
				
		</script>
		
	</head>
	
	
	<body onload="loadBill()">
	<a href="<? echo site_url("welcome"); ?>">Order</a>
	<h2> คิว </h2>
	<table width="600" border="" id="myTable" style="text-align:center;" >
			<!-- head table -->
			<thead>
			  <tr>
				<td width="40%"> <div align="center">Bill ID </div></td>
				<td width="30%"> <div align="center">คิว </div></td>
				
				
				
			  </tr>
			</thead>
			<!-- body dynamic rows -->
			<tbody id="myBody"></tbody>
		</table>
	
</body>
</html>