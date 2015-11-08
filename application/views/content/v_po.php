	<?php
# set page title here
$__page_title = "Air Freight &raquo; Export Form";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Item",
			"target" => "item"
		)/*,
		array(
			"title" => "Tabsheet 2",
			"target" => "tabsheet2"
		),
		array(
			"title" => "Sales Commitment",
			"target" => "sales_commitment"
		),
		array(
			"title" => "Invoice",
			"target" => "invoice"
		)*/
	);

# include header page

?>

	<!-- form data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" class="stdform">
	
		<!-- button nav here -->
		<div class='pos_r_button'>
			<p class="stdformbutton">
				<input type="submit" class="submit radius2 btn_save" name="btnSimpan" value="Save"/>&nbsp;
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='airfreightexport.php';"/>
			</p>
		</div>
		
		<!-- reset any float element -->
		<br class="clear" />
		
		<p>
			<table cellpadding="0" cellspacing="0" border="0" style="margin-top:-20px;margin-right:10px;float:left;" >
								
				<tr>
					<td><label class="lbl_main required">PO No. <span class="required">*)</span></label></td>
					<td><input type="text" name="nopo" id="kode" maxlength="100" value="" class="smallinput" style="width:250px;margin-top:-20px" readonly /></td>
					
				</tr>
				<tr>
					<td style="margin-top:-20px">Vendor <span class="required">*)</td>
					<td>
						<span class="margin-top:-70px">
							<input type="text" id="ven" name="ven" class="smallinput" size="40" maxlength="50" style="width:250px" />
							<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
						</span>
					</td>
				</tr>
				
			</table>
			<table cellpadding="0" cellspacing="0" border="0" style="margin-top:-20px;float:left;" >
				
				<tr>
					<td style="margin-top:-20px;margin-right:40px">Req. Number <span class="required">*)</span></td>
					<td>
						<span class="margin-top:-70px">
							<input type="text" id="ven" name="ven" class="smallinput" size="40" maxlength="50" style="width:250px;margin-left: 35px;" />
							<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
						</span>
					</td>
				</tr>
				<tr>
					<td style="margin-top:-20px;margin-right:40px">
					<label class="required" style="margin-left: -65px;">ETD <span class="required">*)</span></label>
					</td>
					<td>
					<span  class="margin-top:-70px">								
								<input type="text" name="etd" id="etd" size="10" maxlength="10" style="margin-top: -20px;margin-left: 34px;" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
					</span>
					</td>
				</tr>
			</table>
			<div style="clear:both;"></div>
			
			<table>
			<tr>
					<td style="margin-top:-20px">Description <span class="required">*)</td>
				</tr>
				<tr>
					<td colspan="2">
						<span class="margin-top:-70px">
							<textarea cols="" rows="4" style="width:810px" class="mediuminput"></textarea>
							
						</span>
					</td>
				</tr>
			</table>
			
		</p>
		
		
		<?php
		if(count($__tab_menu)>0):
		?>						
		<ul class="hornav">
		<?php
			for($i=0;$i<count($__tab_menu);$i++):
				if($i==0) $cstyle = " class=\"current\"";
				$tm = $__tab_menu[$i];
		?>
			<li<?=$cstyle?>><a href="#<?=$tm["target"]?>"><?=$tm["title"]?></a></li>
		<?php
				$cstyle = "";
			endfor;
		?>
			</ul>
		<?php
		endif;
		?>
		
		<!-- tabsheet 1 -->
		<div id="item" class="subcontent" style="margin-top: 0;">
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>Item Code</th>
						<th>Description</th>
						<th>Order</th>
						<th>Receive</th>
						<th>Unit</th>
						<th>Price</th>
						<th>Disc</th>
						<th>Total</th>
						<th>Tax</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>CXDU 1092403</td>
						<td>TSB 0647556</td>
						<td>40 FEET</td>
						<td>DRY CONTAINER</td>
						<td>DINA</td>
						<td>01/04/2013</td>
						<td>16:04:22</td>
						<td>16:04:22</td>
					</tr>					
					<tr>
						<td>2</td>
						<td>TSLU 6408088</td>
						<td>TSB 0647557</td>
						<td>40 FEET</td>
						<td>DRY CONTAINER</td>
						<td>DINA</td>
						<td>01/04/2013</td>
						<td>16:04:48</td>
					</tr>					
				</tbody>
			</table>		
						
			
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th colspan="2">SEAFREIGHT NET RATE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="50%">
							<p>
								<label class="required">FCL :</label>
								<span class="field">&nbsp;&nbsp;
								</span>
							</p>
							<p>
								<label class="required">20 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="price" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="pieces" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="total" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
								</span>
							</p>
							<p>
								<label class="required">40 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="price" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="pieces" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="total" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
								</span>
							</p>
							<p>
								<label class="required">40 HQ</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="price" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="pieces" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="total" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
								</span>
							</p>
							<p>
								<label class="required">45 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="price" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="pieces" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="total" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
								</span>
							</p>
						</td>
						<td>
							<p>
								<label class="required">LCL - CBM :</label>
								<span class="field">
									&nbsp;
								</span>
							</p>
							<p>
								<label class="required">&nbsp;</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="price" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="meas" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="total" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
								</span>
							</p>
							<p>
								<label class="required">Other Charge =</label>
								<span class="field">
									<input type="text" id="contno" name="contno" class="mediuminput" size="40" maxlength="50" />
								</span>
							</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	
	
	</form>
