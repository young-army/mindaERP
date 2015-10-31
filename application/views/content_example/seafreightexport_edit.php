<?php
# set page title here
$__page_title = "Sea Freight &raquo; Export Form";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Tabsheet 1",
			"target" => "tabsheet1"
		),
		array(
			"title" => "Tabsheet 2",
			"target" => "tabsheet2"
		),
		array(
			"title" => "Tabsheet 3",
			"target" => "tabsheet3"
		),
		array(
			"title" => "Sales Commitment",
			"target" => "sales_commitment"
		),
		array(
			"title" => "Invoice",
			"target" => "invoice"
		)
	);

# include header page
require_once("inc/header.php");
?>

	<!-- form data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" class="stdform">
	
		<!-- button nav here -->
		<div class='pos_r_button'>
			<p class="stdformbutton">
				<input type="submit" class="submit radius2 btn_save" name="btnSimpan" value="Save"/>&nbsp;
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='seafreightexport.php';"/>
			</p>
		</div>
		
		<!-- reset any float element -->
		<br class="clear" />
		
		<p>
			<label class="lbl_main required">Order No <span class="required">*)</span></label>
			<span class="field field_main">
				<input type="text" name="kode" id="kode" size="40" maxlength="100" value="" class="mediuminput" />
			</span>
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
		<div id="tabsheet1" class="subcontent" style="margin-top: 0;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="50%">
						<p>
							<label class="required">Date <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="tgl" id="tgl" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reff&nbsp;&nbsp;&nbsp;
								<input type="text" name="reff" id="reff" size="10" maxlength="10" value="" class="vsmallinput" value="" />
							</span>
						</p>
						<p>
							<label class="required">Order <span class="required">*)</span></label>
							<span class="field">
								<select name="order" id="order">
									<option value="JKT">JKT</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;
								<select name="order" id="order">
									<option value="NOM">NOM</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge&nbsp;&nbsp;&nbsp;
								<select name="order" id="order">
									<option value="C">C</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">
								Company From <span class="required">*)</span>
							</label>
							<span class="field">
								<select name="fromc" id="fromc">
									<option value="JSA">JSA</option>
								</select>
								<textarea style="display: none" rows="4" cols="50" class="mediuminput"><?="INDONESIA CHEMI-CON, PT\r\nEJIP INDUSTRIAL PARK PLOT 4C\r\nLEMAH ABANG\r\nBEKASI 17550"?></textarea>
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								&nbsp;
							</span>
						</p>
						<p>
							<label class="required">Consignee</label>
							<span class="field">
								<input type="text" id="consignee" name="consignee" class="mediuminput" size="40" maxlength="50" />
								<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<textarea cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
						<p>
							<label class="required">Destination</label>
							<span class="field">
								<select name="from_country">
									<option value="ID">ID - Indonesia</option>
								</select>&nbsp;&nbsp;
								<select name="from_city">
									<option value="JKT">JKT - Jakarta</option>
								</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To
							</span>
						</p>						
						<p>
							<label class="required">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<span class="field">
								<select name="dest_country">
									<option value="CN">CN - China</option>
								</select>&nbsp;&nbsp;
								<select name="dest_city">
									<option value="SHA">SHA - Shanghai</option>
								</select>
							</span>
						</p>						
					</td>
					<td>
						<p>
							<label class="required"><input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Void <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="voidt" id="voidt" size="40" maxlength="50" value="" class="mediuminput" value="" />
							</span>
						</p>
						<p>
							<label class="required">Shippment <span class="required">*)</span></label>
							<span class="field">
								<select name="shipment" id="shipment">
									<option value="GLB">GLB</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sales ID&nbsp;&nbsp;&nbsp;
								<span class="highlight">GLB ACC</span>
							</span>
						</p>
						<p>
							<label class="required">
								Company To <span class="required">*)</span>
							</label>
							<span class="field">
								<select name="toc" id="toc">
									<option value="MOA_SHA">MOA SHA</option>
								</select>
								<textarea style="display:none" rows="4" cols="50" class="biginput"><?="MOL LOGISTICS (SPORE)\r\n70 Alps Avenue #01-05, Seaport Logistics Park\r\nSingapore 498801"?></textarea>
							</span>
						</p>
						<p>
							<label class="required">Sub Section</label>
							<span class="field">
								<select name="subsection">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">Notify</label>
							<span class="field">
								<input type="text" name="notify" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<textarea name="notify_desc" cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
						<p>
							<label class="required">House <span class="required">*)</span></label>
							<span class="field">
								<select name="house" id="house">
									<option value="FIN">FIN</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<span class="highlight">FIN LOGISTIC</span>
							</span>
						</p>
						<p>
							<label class="required">HBL No.</label>
							<span class="field">
								<input type="text" id="hbl" name="hbl" class="mediuminput" size="40" maxlength="50" />
								<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">HBL Cust. Code <span class="required">*)</span></label>
							<span class="field">
								<select name="hblcustcode" id="hblcustcode">
									<option value="JSA">JSA</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<span class="highlight">J. S. T. INDONESIA PT.</span>
							</span>
						</p>
						<p>
							<label class="required">Shippingline<span class="required">*)</span></label>
							<span class="field">
								<select name="shipline" id="shipline">
									<option value="FREX">FREX</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<span class="highlight">FREIGHT EXPRESS</span>
							</span>
						</p>
						<p>
							<label class="required">MBL No.</label>
							<span class="field">
								<input type="text" id="mbl" name="mbl" class="mediuminput" size="40" maxlength="50" />
								<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">Pre-Carriage by</label>
							<span class="field">
								<input type="text" name="precarriage" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Vessel</label>
							<span class="field">
								<input type="text" name="vessel" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="50%">
						<p>
							<label class="required">Receipt</label>
							<span class="field">
								<input type="text" name="receipt" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">ETD <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="rcptetd" id="rcptetd" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">Loading</label>
							<span class="field">
								<input type="text" name="loading" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">ETD <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="loadetd" id="loadetd" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">Discharge</label>
							<span class="field">
								<input type="text" name="discharge" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">ETA <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="dschrgeta" id="dschrgeta" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">For Trans To</label>
							<span class="field">
								<input type="text" name="trans" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">ETA <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="transeta" id="transeta" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
					</td>
					<td>
						<p>
							<label class="required">Commodity<span class="required">*)</span></label>
							<span class="field">
								<select name="commodity" id="commodity">
									<option value="GCR">GCR</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<span class="highlight">GENERAL CARGO</span>
							</span>
						</p>
						<p>
							<label class="required">Pieces</label>
							<span class="field">
							<input type="text" name="piece" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="pieces" id="pieces">
									<option value="PALLETS">PALLETS</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">Description</label>
							<span class="field">
								<input type="text" id="mbl" name="mbl" class="mediuminput" size="40" maxlength="50" />
							</span>
						</p>
						<p>
							<label class="required">Net Weight</label>
							<span class="field">
							<input type="text" name="netw" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KGs
							</span>
						</p>
						<p>
							<label class="required">Gross Weight</label>
							<span class="field">
							<input type="text" name="grossw" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KGs
							</span>
						</p>
						<p>
							<label class="required">Dimension</label>
							<span class="field">
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="wdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="hdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="tdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
							</span>
						</p>
						<p>
							<label class="required">Meas.</label>
							<span class="field">
								<input type="text" id="meas" name="meas" class="mediuminput" size="40" maxlength="50" />&nbsp;&nbsp;m3
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td width="50%">
								<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<textarea name="notify_desc" cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
							</td>
						</tr>
					</tbody>
				</table>
			</p>
					</td>
					<td>
			<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>Marks &amp; Number</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<textarea name="notify_desc" cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
							</td>
						</tr>
					</tbody>
				</table>
			</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 3 -->
		<div id="tabsheet3" class="subcontent" style="margin-top: 0; display:none;">
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>CONTAINER</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<p>
								<label class="required">Full / Less</label>
								<span class="field">
									<select name="full" id="full">
										<option value="FCL">FCL</option>
									</select>
								</span>
							</p>
							<p>
								<label class="required">LCL Cont. No.</label>
								<span class="field">
									<input type="text" id="contno" name="contno" class="mediuminput" size="40" maxlength="50" />
								</span>
							</p>
							<p>
								<label class="required">FCL Cont. Qty.</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="twenty" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 20 FEET&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="fourty" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 40 FEET&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="fourtyhc" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 40 HC&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="fourtyfive" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 45 FEET
								</span>
							</p>
							<p>
								<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
									<thead>
										<tr>
											<th>No</th>
											<th>Container No</th>
											<th>Seal No</th>
											<th>Size</th>
											<th>Type</th>
											<th>User ID</th>
											<th>Entry Date</th>
											<th>Entry Time</th>
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
							</p>
						</td>
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
		
		<!-- sales commitment -->
		<div id="sales_commitment" class="subcontent" style="display:none;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="10%">
					<ul>
					<li><a href="#">BA-02</a></li>
					<li><a href="#">BC-01</a></li>
					<li><a href="#">BC-02</a></li>
					<li><a href="#">OC-01</a></li>
					<li><a href="#">OC-02</a></li>
					<li><a href="#">PS-02</a></li>
					</ul>
					</td>
					<td>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th width="70px">Code</th>
					<th width="200px">Account Description</th>
					<th>Description</th>
					<th>Rate</th>
					<th>Vol Weight</th>
					<th>Curr</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-2090</td>
					<td>PORT CHARGES</td>
					<td>OCEAN FREIGHT 2X40</td>
					<td>0</td>
					<td>0</td>
					<td>USD</td>
					<td>930.00</td>
				</tr>					
			</tbody>
		</table>		
					</td>
				</tr>
			</table>
			
		</div>
		
		<!-- invoice -->
		<div id="invoice" class="subcontent" style="display:none;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="10%">
					<ul>
					<li><a href="#">BA-02</a></li>
					<li><a href="#">BC-01</a></li>
					<li><a href="#">BC-02</a></li>
					</ul>
					</td>
					<td>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th width="70px">Code</th>
					<th width="200px">Account Description</th>
					<th>Description</th>
					<th>Curr</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-2090</td>
					<td>PORT CHARGES</td>
					<td>OCEAN FREIGHT 2X40</td>
					<td>USD</td>
					<td>930.00</td>
				</tr>					
			</tbody>
		</table>		
					</td>
				</tr>
			</table>
		</div>
	
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>