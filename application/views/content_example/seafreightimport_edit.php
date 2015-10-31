<?php
# set page title here
$__page_title = "Sea Freight &raquo; Import Form";

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
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='seafreightimport.php';"/>
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
							<label class="required">Status <span class="required">*)</span></label>
							<span class="field">
								<select name="status" id="status">
									<option value="REG">REG.</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;
								<select name="type" id="type">
									<option value="GEN">GEN</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge&nbsp;&nbsp;&nbsp;
								<select name="charge" id="charge">
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
									<option value="NIP">NIP</option>
								</select>&nbsp;&nbsp;&nbsp;
								<span class="highlight">DENSO INDONESIA, PT</span>
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
							<label class="required">Shipper</label>
							<span class="field">
								<input type="text" id="shipper" name="shipper" class="mediuminput" size="40" maxlength="50" />
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
							<label class="required">Shipping Line</label>
							<span class="field">
								<select name="shipline">
									<option value="NWW">NWW</option>
								</select>&nbsp;&nbsp;&nbsp;
								<span class="highlight">NEW WAVE WAREHOUSE</span>
							</span>
						</p>
						<p>
							<label class="required">MBL No</label>
							<span class="field">
								<input type="text" name="mbl_no" size="40" maxlength="50" class="mediuminput" />
								<input type="button" name="btn_mbl" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">Vessel</label>
							<span class="field">
								<input type="text" name="flight" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">ETA</label>
							<span class="field">
								<input type="text" name="eta" id="eta" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">HBL No</label>
							<span class="field">
								<input type="text" name="hbl_no" size="40" maxlength="50" class="mediuminput" />
								<input type="button" name="btn_hbl" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
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
									<option value="FRH">FRH</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sales ID&nbsp;&nbsp;&nbsp;
								<span class="highlight">KEY ACC</span>
							</span>
						</p>
						<p>
							<label class="required">Order</label>
							<span class="field">
								<select name="order">
									<option value="jkt">JKT</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Section&nbsp;&nbsp;&nbsp;
								<select name="subsection" id="subsection">
									<option value=""> </option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">Order Consol</label>
							<span class="field">
								<input type="text" name="orderconsol" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Commodity</label>
							<span class="field">
								<select name="commodity">
									<option value="SPT">SPT</option>
								</select>&nbsp;&nbsp;&nbsp;
								<span class="highlight">SPARE PART</span>
							</span>
						</p>
						<p>
							<label class="required">Description</label>
							<span class="field">
								<input type="text" name="description" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">From</label>
							<span class="field">
								<select name="from">
									<option value="TH">TH</option>
								</select>
								<select name="from2">
									<option value="BKK">BKK</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dest.&nbsp;&nbsp;&nbsp;
								<select name="dest" id="dest" disabled>
									<option value="id">ID</option>
								</select>
								<select name="dest2" id="dest2">
									<option value="jkt">JKT</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">Pieces</label>
							<span class="field">
								<input type="text" name="pieces" size="20" maxlength="20" class="smallinput" />
								<select name="pieces">
									<option value="PALLETS">PALLETS</option>
								</select>
							</span>
						</p>						
						<p>
							<label class="required">Gross Weight</label>
							<span class="field">
								<input type="text" name="gweight" size="10" maxlength="10" class="v10" /> KGs
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net Weight&nbsp;&nbsp;&nbsp;
								<input type="text" name="nweight" size="10" maxlength="10" class="v10" /> KGs
							</span>
						</p>
						<p>
							<label class="required">Vol. Weight</label>
							<span class="field">
								<input type="text" name="vweight" size="10" maxlength="10" class="v10" /> KGs
							</span>
						</p>
						<p>
							<label class="required">Chrg. Weight</label>
							<span class="field">
								<input type="text" name="cweight" size="10" maxlength="10" class="v10" disabled /> KGs
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
								<input type="text" name="meas" size="20" maxlength="20" class="smallinput" /> m3
							</span>
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
								<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>KPU</th>
							<th>WAREHOUSE</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="50%">
						<p>
							<label class="required">No. Aju</label>
							<span class="field">
								<input type="text" name="noaju" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">Tgl. Aju</label>
							<span class="field">
								<input type="text" name="tglaju" id="tglaju" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">Jenis Dok.</label>
							<span class="field">
								<select name="jdok">
									<option value="PIB">PIB</option>
								</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Bea Rp&nbsp;&nbsp;&nbsp;
								<input type="text" name="total" size="14" maxlength="20" class="v10" />
							</span>
						</p>	
						<p>
							<label class="required">KPU</label>
							<span class="field">
								<select name="kpu">
									<option value="KPBCIII">KPBC III</option>
								</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan&nbsp;&nbsp;&nbsp;
								<select name="keterangan">
									<option value="BUKAN">BUKAN</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">No. SPPB</label>
							<span class="field">
								<input type="text" name="nosppb" size="10" maxlength="10" class="v10" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No. Pen. PIB&nbsp;&nbsp;&nbsp;
								<input type="text" name="nopib" size="10" maxlength="10" class="v10" />
							</span>
						</p>
						<p>
							<label class="required">Tgl. SPPB</label>
							<span class="field">
								<input type="text" name="tglsppb" id="tglaju" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tgl. C. Clearance&nbsp;&nbsp;&nbsp;
								<input type="text" name="tglcclrnce" id="tglcclrnce" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
							</td>
							<td>
						<p>
							<label class="required">Warehouse</label>
							<span class="field">
								<select name="warehouse">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>	
						<p>
							<label class="required">Tgl. Pecah PU</label>
							<span class="field">
								<input type="text" name="tglsppb" id="tglaju" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>	
						<p>
							<label class="required">No. PU</label>
							<span class="field">
								<input type="text" name="nopu" size="10" maxlength="10" class="v10" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POS&nbsp;&nbsp;&nbsp;
								<input type="text" name="pos" size="10" maxlength="10" class="v10" />
							</span>
						</p>
						<p>
							<label class="required">Remark</label>
							<span class="field">
								<textarea cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
						<p>
							<label class="required">Customs Clearance</label>
							<span class="field">
								<select name="cc">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>
							</td>
						</tr>
					</tbody>
				</table>
			</p>
		</div>
		
		<!-- sales commitment -->
		<div id="sales_commitment" class="subcontent" style="display:none;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="10%">
					<ul>
					<li><a href="#">BC-01</a></li>
					<li><a href="#">OC-01</a></li>
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
					<td>4-2240</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN (AS PER RECEIPT)</td>
					<td>0</td>
					<td>0</td>
					<td>IDR</td>
					<td>1281500.00</td>
				</tr>					
				<tr>
					<td>4-2220</td>
					<td>HANDLING</td>
					<td>HANDLING</td>
					<td>0</td>
					<td>0</td>
					<td>IDR</td>
					<td>125000.00</td>
				</tr>					
				<tr>
					<td>4-2360</td>
					<td>VAT 10%</td>
					<td>VAT 10%</td>
					<td>0</td>
					<td>0</td>
					<td>IDR</td>
					<td>12500.00</td>
				</tr>					
				<tr>
					<td>4-2270</td>
					<td>DELIVERY/TRANSPORT</td>
					<td>DELIVERY TO CIBITUNG</td>
					<td>0</td>
					<td>0</td>
					<td>IDR</td>
					<td>450000.00</td>
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
					<li><a href="#">BC-01</a></li>
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
					<td>4-2240</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN (AS PER RECEIPT)</td>
					<td>IDR</td>
					<td>1281500.00</td>
				</tr>					
				<tr>
					<td>4-2220</td>
					<td>HANDLING</td>
					<td>HANDLING</td>
					<td>IDR</td>
					<td>125000.00</td>
				</tr>					
				<tr>
					<td>4-2360</td>
					<td>VAT 10%</td>
					<td>VAT 10%</td>
					<td>IDR</td>
					<td>12500.00</td>
				</tr>					
				<tr>
					<td>4-2270</td>
					<td>DELIVERY/TRANSPORT/TRUCKING</td>
					<td>DELIVERY TO CIBITUNG</td>
					<td>IDR</td>
					<td>450000.00</td>
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