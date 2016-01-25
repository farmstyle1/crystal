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
		var billnumber;
		var queuenumber;
		var pay;
		function creBill() {
			$("#myBody").empty();
			$("#total").empty();
			$("#pay").empty();
			getQueue();
			var d = new Date();
			var day = d.getDate()+"-"+(d.getMonth()+1)+"-"+d.getFullYear();
			var queue = document.getElementById("queue");
			var queueval = queue.options[queue.selectedIndex].value;
		
			if(queueval==0){
				alert("เลือกคิวด้วยครัชชชชชชชช");
			}else{
				$.ajax({ 
					url: "<?php echo base_url()."index.php/order/crebill";?>",
					type: "POST",
					data: 'date=' +day+'&queue='+queueval
				})
				.success(function(result) { 
					
					var obj = jQuery.parseJSON(result);
					if(obj != ''){
						
						$.each(obj, function(key, inval) {
						var b = inval["billid"];
						billnumber = inval["billid"];
						queuenumber = inval["queue"];
						 $("#billid").html(" <font >Bill No."+b+"<br>คิวที่  "+ queuenumber +"</font>");
						$("#pay").html("<input type='submit' name='pay' id='pay' value='ชำระรายการ'  OnClick='JavaScript:payBill();'>");
						});					
					}
				
				});
			}
		}
		
		function addItem() {
			
			var drink = document.getElementById("drink");
			var drinkval = drink.options[drink.selectedIndex].value;
			var option = document.getElementById("option");
			var optionval = option.options[option.selectedIndex].value;
			var option1 = document.getElementById("option1");
			var optionval1 = option1.options[option1.selectedIndex].value;
			var itemprice = drinkval+optionval;
			if(drinkval == 0 && optionval == 0  ){ 
				var food = document.getElementById("food");
				var drinkval = food.options[food.selectedIndex].value;
				var itemprice = drinkval;
				addItem1(drinkval,optionval,itemprice,optionval1);
			}
			else{
			
				if(drinkval.substr ( 0,1 )!=0 &&optionval==0 ){
					alert("เลือกประเภทด้วย");
				}if(drinkval.substr ( 0,1 )==0 &&optionval!=0){
					alert("Error");
				}else{
					
					addItem1(drinkval,optionval,itemprice,optionval1);
				
				
				}
			}

		}
		
		function addItem1(drinkval,optionval,itemprice,optionval1){
			
			
			$.ajax({ 
			

			url: "<?php echo base_url()."index.php/order/additem";?>",
					type: "POST",
					data: 'itemid='+drinkval+'&option='+optionval+'&billnum='+billnumber+'&itemprice='+itemprice+'&option1='+optionval1
				})
			.success(function(result) { 
				getItem();
			});
		
		}
		
		function getQueue()
			{
				
				$("#myBody1").empty();
				$.ajax({ 
					url: "<?php echo base_url()."index.php/order/getqueue";?>",
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
										tr = tr + "<td>" + val["name"] + "</td>";
										tr = tr + "<td>" + val["option"] + "</td>";
										tr = tr + "<td><font size='10' color='red' >"  + val["queue"] + " </font></td>";
										tr = tr + "<td><input type='submit' name='clearitem' id='clearitem' value='เสริพ' OnClick='JavaScript:clearQueue("+val["id"]+");'></td>";
										tr = tr + "</tr>";
										$('#myTable1 > tbody:last').append(tr);
							  });
						}

				});

			}
		
		function clearQueue(id)
		{
		
			$.ajax({ 
					url: "<?php echo base_url()."index.php/order/clearqueue";?>",
					type: "POST",
					data: 'itemid='+id
				})
				.success(function(result) { 
					getQueue();
				});
				

		}
		function payBill()
		{
			
			$.ajax({ 
						url: "<?php echo base_url()."index.php/order/paybill";?>",
						type: "POST",
						data: 'billnum='+billnumber+'&total=' +pay
					})
				.success(function(result) { 
					getQueue();
				});
			alert("เรียบร้อยครัช");
			$("#myBody").empty();
			$("#total").empty();
			$("#pay").empty();

		}
		
		function cancelItem(id)
		{
			
		
			$.ajax({ 
						url: "<?php echo base_url()."index.php/order/cancelitem";?>",
						type: "POST",
						data: 'id='+id
					})
			.success(function(result) { 
			$("#myBody").empty();
			$("#myBody1").empty();
			$("#total").empty();
			$("#pay").empty();
			getItem();
			
				});
			

		}
		
		function getItem()
		{
			var total=0;
			$.ajax({ 
					url: "<?php echo base_url()."index.php/order/getitem";?>",
					type: "POST",
					data: 'billid='+billnumber
				})
				.success(function(result) { 
					var obj = jQuery.parseJSON(result);
				if(obj != ''){
					
					$("#myBody").empty();
					$("#drink").val('0');
					$("#option").val('0');
					$("#option1").val('0');
					$("#food").val('0');
					$.each(obj, function(key, inval) {
						var item = inval["name"];
						var option = inval["option"];
						var price = inval["price"];
					
						
					//$("#item").html(" <font >"+item+" - "+option+" ราคา "+price+"</font>"); 
						var tr = "<tr>";
									tr = tr + "<td>" + item + "</td>";
									tr = tr + "<td>" + option + "</td>";
									tr = tr + "<td>" + price + "</td>";
									tr = tr + "<td><input type='submit' name='cancelitem' id='cancelitem' value='ลบ' OnClick='JavaScript:cancelItem("+inval["id"]+");'></td>";
									tr = tr + "</tr>";
									$('#myTable > tbody:last').append(tr);
						total = parseInt(total)+parseInt(price);
						pay = parseInt(total);
					});				
				}
				 $("#total").html(" <font size='60' color='red' >รวม "+total+" บาท</font>");
				 $("#pay").html("<input type='submit' name='pay' id='pay' value='ชำระรายการ'  OnClick='JavaScript:payBill();'>");
				 getQueue();
				});
				

		}
		</script>
	</head>
	
	
	<body>
	<select id="queue" name="queue">
<option value="0"> เลือกคิว </option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  <option >6</option>
  <option >7</option>
  <option >8</option>
  <option >9</option>
  <option >10</option>

</select>
<input type="submit" name="crebill" id="crebill" value="สร้าง Bill" OnClick="JavaScript:creBill();">
<a href="<? echo site_url("bill"); ?>">ดู Bill</a>

	<table width="100%">
	<tr><td width="50%" bgcolor="#DECD95">
<h2> เครื่องดื่ม </h2>
<select id="drink" name="drink" >
  <option value="0"> เลือกเมนู </option>
  <option value="green">ชาเขียว</option>
  <option value="thai">ชานม</option>
  <option value="0"> --------------- </option>
  <option value="es">เอสเปสโซ่</option>
  <option value="latte">ลาเต้</option>
  <option value="capu">คาปูชิโน่</option>
  <option value="moc">ม็อคค่า</option>
  <option value="ame">อเมริกาโน่</option>
  <option value="0"> --------------- </option>
  <option value="milk">นมสด</option>
  <option value="milkc">คาราเมลนมสด</option>
  <option value="cofm">คาราเมลคอฟฟี่</option>
  <option value="cofh">ฮันนี่คอฟฟี่</option>

  <option value="0"> --------------- </option>
  <option value="0straw">Strawberry Smoothie</option>
  <option value="0kiwi">Kiwi Smoothie</option>
  <option value="0bu">Buberry Smoothie</option>
  <option value="0ora">Orange Smoothie</option>
  <option value="0"> --------------- </option>
  <option value="0hoe">Hoegarden</option>
  <option value="0stel">Stella</option>
  <option value="0lefbl">Leffe Blond</option>
  <option value="0lefbr">Leffe Brown</option>
  <option value="0lefra">Leffe Radieuse</option>
  <option value="0bud">Budweiser</option>
  <option value="0sing">Singha</option>
  <option value="0leo">Leo</option>
  <option value="0pop">Cider Pop</option>
  <option value="0jazz">Cider Jazz</option>
  <option value="0reg">Cider Reggea</option>
  <option value="0"> --------------- </option>
  <option value="0blue">Blue Hawaii</option>
  <option value="0bluel">Blue Hawaii + Shot</option>
  <option value="0mix">Mix Berry Soda</option>
  <option value="0mixl">Mix Berry Soda + Shot</option>

  
</select>
<select id="option" name="option" >
	<option value="0">เลือกประเภท</option>
  <option value="h">Hot</option>
  <option value="i">Ice</option>
  <option value="f">Frappe</option>
</select>
<select id="option1" name="option1" >
	<option value="0">เลือก option</option>
  <option >หวานน้อย</option>
  <option >หวานมาก</option>
 
</select>


<br>
<h2>อาหาร</h2>
<select id="food" name="food" >
	<option value="0"> เลือกเมนู </option>
	<option value="cacare">เอแคร์</option>
	<option value="ctart">ทาร์ตไข่</option>
	<option value="ccook">คุกกี้</option>
	<option value="ccup">CupCake</option>
	<option value="cbrown">Brownie</option>
	<option value="ctoast">Honey Toast</option>
	<option value="cbread">ขนมปังปิ้ง</option>
	<option value="0"> --------------- </option>
	<option value="cbu">บลูเบอรี่ CAKE</option>
	<option value="cgreen">ชาเขียว CAKE</option>
	<option value="cchoc">ช็อกโกแลต CAKE</option>
	<option value="ccocon">มะพร้าว CAKE</option>
	<option value="ctan">ลูกตาล CAKE</option>
	<option value="ctea">ชาไทย CAKE</option>
	<option value="0"> --------------- </option>
	<option value="fgapow">กระเพราะหมู</option>
	<option value="fgapowkai">กระเพราะหมู+ไข่ดาว</option>
	<option value="fpad">ข้าวผัดไข่</option>
	<option value="fpanang">ข้าวพะแนง</option>
	<option value="fkapi">ข้าวคลุกกระปิ</option>
	<option value="fpiggang">ผัดพริกแกงหมู</option>
	<option value="fyum">ยำหมูยอ</option>
	<option value="fff">เฟรนฟราย</option>
  
	
</select>


<br>

<br>
<br>
<input type="submit" name="additem" id="additem" value="add" OnClick="JavaScript:addItem();">

</td><td width="50%" bgcolor="#D5DFEB" rowspan="2">
<h2> คิว </h2>
	<table width="600" border="" id="myTable1" style="text-align:center;" >
			<!-- head table -->
			<thead>
			  <tr>
				<td width="40%"> <div align="center">Item </div></td>
				<td width="30%"> <div align="center">Option </div></td>
				<td width="30%"> <div align="center">คิว </div></td>
				<td width="30%"> <div align="center">  </div></td>
				
				
			  </tr>
			</thead>
			<!-- body dynamic rows -->
			<tbody id="myBody1"></tbody>
		</table>


</td></tr>
<tr><td>
<span id="billid"></span>
		<table width="600" border="1" id="myTable" style="text-align:center;" >
			<!-- head table -->
			<thead>
			  <tr>
				<td width="40%"> <div align="center"><h2>Item </h2></div></td>
				<td width="30%"> <div align="center">Option </div></td>
				<td width="30%"> <div align="center">Price </div></td>
				<td width="30%"> <div align="center"> </div></td>
				
			  </tr>
			</thead>
			<!-- body dynamic rows -->
			<tbody id="myBody"></tbody>
		</table>
<span id="total"></span>
<span id="pay"></span>
</td></tr>




</table>
</body>
</html>