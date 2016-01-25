<?php

ob_start();
$check="";
?>
<style type="text/css">

</style>

	<page style="font-family:freeserif;  margin-top: 200px;" backtop="20mm" backbottom="14mm" backleft="10mm" backright="5mm"  >
	
		<page_header>
			<table cellspacing="0" style="width: 100%;">
				<tr>
					<td style="width: 10%;">	
					</td>
					<td style="width: 80%; text-align: center;  font-weight: bold; font-size: 30pt; padding-top: 20px;">
						<span style="font-size: 10pt">Crystal Box</span>
						
					</td>
					<td style="width: 10%;">
						<?php echo  $date; ?>
					</td>
				</tr>
			</table>
			
		</page_header>
					
					<br> ยอดขาย : <?php echo  $total; ?> บาท
					
					<table cellspacing="0" style="width: 100%; border: solid 1px #000000;">
						<tr>
							<th style="width: 10%; border: solid 1px #000000; text-align: center;"> No.</th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;">Bill No.</th>
							<th style="width: 30%; border: solid 1px #000000; text-align: center;">Name</th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;">Option</th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;">Price</th>
						
						</tr>
			
					</table>
				<? 		
					for( $count=1; $count<$rowtable; $count++ ){ 
				?>
					<table cellspacing="0" style="width: 100%;">
						<tr>
							<th style="width: 10%; border: solid 1px #000000; text-align: center;"><?php echo  $count; ?></th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $item_report['billid'][$count]; ?></th>
							<th style="width: 30%; border: solid 1px #000000; text-align: center;"><?php echo  $item_report['name'][$count]; ?></th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $item_report['option'][$count]; ?></th>
							<th style="width: 20%; border: solid 1px #000000; text-align: center;"><?php echo  $item_report['price'][$count]; ?></th>
							
						</tr>
					
					</table>
			
			
		<?
				
			} 
		?>		
	</page>
	
<?php
    $content = ob_get_clean();

    
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output($date.'.pdf','D');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

