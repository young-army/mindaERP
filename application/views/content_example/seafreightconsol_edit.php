<?php
# set page title here
$__page_title = "Sea Freight &raquo; Consol Form";

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
			"title" => "Official Receipt",
			"target" => "official_receipt"
		),
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
							<label class="required">Status <span class="required">*)</span></label>
							<span class="field">
								<select name="status" id="status">
									<option value="REG">REG.</option>
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
									<option value="moahan">MOA HAN</option>
								</select>&nbsp;&nbsp;&nbsp;
								<span class="highlight">MOL LOGISTIC VIETNAM INC</span>
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
							<label class="required"><input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Handle by FIN</label>
							<span class="field">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sales ID&nbsp;&nbsp;&nbsp;
								<select name="salesid" id="salesid">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required"><select name="" id=""><option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option></select>
								</label>
							<span class="field">
								<input type="text" id="" name="" class="mediuminput" size="40" maxlength="50" />
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<textarea cols="40" rows="3" class="mediuminput"></textarea>
							</span>
						</p>
						<p>
							<label class="required">Commodity</label>
							<span class="field">
								<select name="commodity">
									<option value="GCR">GCR</option>
								</select>&nbsp;&nbsp;&nbsp;
								<span class="highlight">GENERAL CARGO</span>
							</span>
						</p>
						<p>
							<label class="required">Description</label>
							<span class="field">
								<input type="text" name="description" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Pieces</label>
							<span class="field">
								<input type="text" name="pieces" size="20" maxlength="20" class="smallinput" />
								<select name="pieces">
									<option value="PACKAGES">PACKAGES</option>
								</select>
							</span>
						</p>						
						<p>
							<label class="required">Gross Weight</label>
							<span class="field">
								<input type="text" name="gweight" size="10" maxlength="10" class="v10" /> KGs
							</span>
						</p>
						<p>
							<label class="required">Net Weight</label>
							<span class="field">
								<input type="text" name="nweight" size="10" maxlength="10" class="v10" /> KGs
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
							<th>KPBC</th>
							<th>DOCUMENT</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="50%">
						<p>
							<label class="required">No. Dok.</label>
							<span class="field">
								<input type="text" name="nodok" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">Tgl. Dok</label>
							<span class="field">
								<input type="text" name="tgldok" id="tgldok" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
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
							<label class="required">KPBC</label>
							<span class="field">
								<select name="kpu">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan&nbsp;&nbsp;&nbsp;
								<select name="keterangan">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
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
								<p>
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
							<label class="required">Full/ Less</label>
							<span class="field">
								<select name="full">
									<option value="FCL">FCL</option>
								</select>
							</span>
						</p>	
						<p>
							<label class="required">LCL Cont. No.</label>
							<span class="field">
								<input type="text" name="lcl" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">Dimension</label>
							<span class="field">
								<input type="text" name="20feet" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;X 20 FEET&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="40feet" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;X 40 FEET&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="40hc" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;X 40 HC&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" name="45feet" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;X 45 FEET
							</span>
						</p>
						<p>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th>No.</th>
					<th width="80px">Container No</th>
					<th width="80px">Seal No</th>
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
					<td>KMTU8036369</td>
					<td>KD321066</td>
					<td>40 FEET</td>
					<td>DRY CONTAINER</td>
					<td>YAKUB</td>
					<td>01/02/2013</td>
					<td>10:51:17</td>
				</tr>					
			</tbody>
		</table>		
						</p>
							</td>
						</tr>
					</tbody>
				</table>
			</p>
		</div>
		
		<!-- official receipt -->
		<div id="official_receipt" class="subcontent" style="display:none;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="10%">
					<ul>
					<li><a href="#">BA-02</a></li>
					<li><a href="#">BC-01</a></li>
					<li><a href="#">OC-01</a></li>
					</ul>
					</td>
					<td>
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="50%">
						<p>
							<label class="required">&nbsp;&nbsp;&nbsp;</label>
							<span class="field">
								<select name="billtocust">
									<option value="BC-02">BC-02</option>
								</select>
								<span class="highlight">BILLING TO CUST. (USD)</span>
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
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p>
							<label class="required">No</label>
							<span class="field">
								<input type="text" name="no" size="40" maxlength="50" class="v10" />
								<input type="button" name="btn_no" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USD Rate&nbsp;&nbsp;&nbsp;
								<input type="text" name="usd_rate" id="usd_rate" size="10" maxlength="10" value="" class="v10" value="" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment&nbsp;&nbsp;&nbsp;
								<select name="payment">
									<option value="USD">USD</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR Printed&nbsp;&nbsp;&nbsp;
								<input type="button" name="view" value="Preview" onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p>
							<label class="required">O/R No</label>
							<span class="field">
								<input type="text" name="or_no" size="40" maxlength="50" class="v10" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date&nbsp;&nbsp;&nbsp;
								<input type="text" name="tgl2" id="tgl2" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid in IDR&nbsp;&nbsp;&nbsp;
								<input type="text" name="pay_idr" size="40" maxlength="50" class="v10" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid in USD&nbsp;&nbsp;&nbsp;
								<input type="text" name="pay_usd" size="40" maxlength="50" class="v10" />
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th width="70px">Code</th>
					<th width="200px">Account Description</th>
					<th>Description</th>
					<th>Curr</th>
					<th>Amount</th>
					<th>Rate</th>
					<th>Total (IDR)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-2410</td>
					<td>CONSOL FEE</td>
					<td>CONSOL FEE</td>
					<td>USD</td>
					<td>65.00</td>
					<td>10170.00</td>
					<td>661050.00</td>
				</tr>					
				<tr>
					<td>4-2450</td>
					<td>OTHER/EXTRAS</td>
					<td>VAT</td>
					<td>USD</td>
					<td>6.50</td>
					<td>10170.00</td>
					<td>66105.00</td>
				</tr>					
			</tbody>
		</table>		
					</td>
				</tr>
				<tr>
					<td>
						<p>
							<label class="required">GP IDR</label>
							<span class="field">
								<input type="text" name="gp_idr" size="40" maxlength="50" class="v10" />
							</span>
						</p>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>
						<p>
							<label class="required">GP USD</label>
							<span class="field">
								<input type="text" name="gp_usd" size="40" maxlength="50" class="v10" />
							</span>
						</p>
					</td>
					<td>
						<p>
							<label class="required">Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="highlight">USD</span></label>
							<span class="field">
								<input type="text" name="gp_usd" size="40" maxlength="50" class="v10" />
							</span>
						</p>
					</td>
				</tr>
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