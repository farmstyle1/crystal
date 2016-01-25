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
			$("#myTable1").hide();
				$.ajax({ 
					url: "<?php echo base_url()."index.php/bill/getbill";?>",
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
										tr = tr + "<td>" + val["billid"] + "</td>";
										tr = tr + "<td><font size='10' color='red' >"  + val["queue"] + " </font></td>";
										tr = tr + "<td><input type='submit' name='billitem' id='billitem' value='ดูรายการ' OnClick='JavaScript:billItem("+val["billid"]+");'></td>";
										tr = tr + "</tr>";
										$('#myTable> tbody:last').append(tr);
							  });
						}

				});
		}
		
		function billItem(billid){
			var total=0;
			$("#myBody1").empty();
			$("#myTable1").show();
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
										tr = tr + "<td>" + val["name"] + "</td>";
										tr = tr + "<td><font size='10' color='red' >"  + val["price"] + " </font></td>";
										tr = tr + "</tr>";
										$('#myTable1> tbody:last').append(tr);
										total = parseInt(total)+parseInt(val["price"]);
										pay = parseInt(total);
							  });
							  
						}
					$("#total").html(" <font size='60' color='red' >รวม "+total+" บาท</font>");	
					$("#pay").html("<input type='submit' name='pay' id='pay' value='ชำระรายการ'  OnClick='JavaScript:payBill("+billid+","+pay+");'>");
				});
			
		}
		function payBill(billid,pay)
		{
			
			$.ajax({ 
						url: "<?php echo base_url()."index.php/order/paybill";?>",
						type: "POST",
						data: 'billnum='+billid+'&total=' +pay
					})
				.success(function(result) { 
					
				});
			alert("เรียบร้อยครัช");
			$("#myBody").empty();
			$("#myBody1").empty();
			$("#total").empty();
			$("#pay").empty();
			loadBill();

		}
				
		</script>
		
	</head>
	
	
	<body onload="loadBill()">
	<a href="<? echo site_url("welcome"); ?>">Order</a>
	<table>
		<tr><td width="50%">
			<h2> Bill ค้างชำระ </h2>
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
		</td><td width="50%">
			<table width="600" border="" id="myTable1" style="text-align:center;" >
				<!-- head table -->
				<thead>
				  <tr>
					<td width="40%"> <div align="center">item </div></td>
					<td width="30%"> <div align="center">ราคา </div></td>
					
					
					
				  </tr>
				</thead>
				<!-- body dynamic rows -->
				<tbody id="myBody1"></tbody>
			</table>
			<span id="total"></span>
			<span id="pay"></span>
		
		</td>
		</tr>
	</table>
	
</body>
</html>