<?php
# set page title here
$__page_title = "Air Freight &raquo; Consol Form";

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
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='airfreightexport.php';"/>
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
									<option value="new">NEW</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;
								<select name="type" id="type">
									<option value="GEN">GEN</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charge&nbsp;&nbsp;&nbsp;
								<select name="charge" id="charge">
									<option value="p">P</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">
								Company From <span class="required">*)</span>
							</label>
							<span class="field">
								<select name="fromc" id="fromc">
									<option value="iyy">IYY</option>
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
							<label class="required">MAWB No</label>
							<span class="field">
								<select name="mawb_no">
									<option value="618-6993 6661">SINGAPORE AIRLINES (618-6993 6661)</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">HAWB No</label>
							<span class="field">
								<input type="text" name="hawb_no" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Flight</label>
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
									<option value="glbacc">GLB ACC</option>
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
							<label class="required">Comodity</label>
							<span class="field">
								<select name="comodity">
									<option value="cgr">CGR - General Cargo</option>
								</select>&nbsp;&nbsp;
							</span>
						</p>						
						<p>
							<label class="required">Description</label>
							<span class="field">
								<input type="text" name="description" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">Pieces</label>
							<span class="field">
								<input type="text" name="pieces" size="20" maxlength="20" class="smallinput" />
								<select name="pieces">
									<option value="colly">Colly</option>
								</select>&nbsp;&nbsp;
							</span>
						</p>						
						<p>
							<label class="required">Gross Weight</label>
							<span class="field">
								<input type="text" name="gweight" size="20" maxlength="20" class="smallinput" /> KGs
							</span>
						</p>
						<p>
							<label class="required">Vol. Weight</label>
							<span class="field">
								<input type="text" name="vweight" size="20" maxlength="20" class="smallinput" /> KGs
							</span>
						</p>
						<p>
							<label class="required">Dimension</label>
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="wdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="hdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="tdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
			<table width="100%" cellpadding="2" cellspacing="10" border="0">
				<tr>
					<td width="50%">
			<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick" width="80%">
					<thead>
						<tr>
							<th>WAREHOUSE</th>
							<TH>DOCUMENT</TH>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="50%">
							<p>
								<label class="required">WareHouse</label>
								<span class="field">
									<select name="warehouse">
										<option value="fedex">FEDEX</option>
									</select>
								</span>
							</p>
							<p>
								<label class="required">Tgl Pecah PU</label>
							<span class="field">
								<input type="text" name="pu" id="pu" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</p>
							<p>
							<label class="required">No. PU</label>
							<span class="field">
								<input type="text" name="nopu" size="10" maxlength="20" class="v10" disabled />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pos&nbsp;&nbsp;&nbsp;
								<input type="text" name="pos" size="10" maxlength="20" class="v10" disabled />
							</span>
							</p>
							<p>
							<label class="required">Remark</label>
							<span class="field">
								<textarea cols="40" rows="3" class="mediuminput"></textarea>
							</span>
							</td>
							<td>
							<p>
							<label class="required">Doc. Receipt</label>
							<span class="field">
								<input type="text" name="docrcpt" id="docrcpt" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</p>
							<p>
							<label class="required">Arrival Notice 1</label>
							<span class="field">
								<input type="text" name="arrvntc1" id="arrvntc1" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</p>
							<p>
							<label class="required">Arrival Notice 2</label>
							<span class="field">
								<input type="text" name="arrvntc2" id="arrvntc2" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</p>
							<p>
							<label class="required">Arrival Notice 3</label>
							<span class="field">
								<input type="text" name="arrvntc3" id="arrvntc3" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</p>
							<p>
							<label class="required">Doc. Release</label>
							<span class="field">
								<input type="text" name="docrls" id="docrls" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</td>
						</tr>
						<tr>
						<td>
						<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick" width="80%">
					<thead>
						<tr>
							<th></th>
						</tr>
					</thead>
						<tr>
							<td>
							<label class="required">Customs Clearance</label>
							<span class="field">
								<select name="cstmclrnc">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>
							</td>
						</tr>
				</table>
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
		
		<!-- official receipt -->
		<div id="official_receipt" class="subcontent" style="display:none;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="2">
					<p align="right">
						<div id='pos_r'>
							<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
							<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
							<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
							<a href="#" class="btn btn1 btn_link"><span>Print</span></a>
						</div>
					</p>
					</td>
				</tr>
				<tr>
					<td width="10%">
					<ul>
					<li><a href="#">BA-02</a></li>
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
					<th>Curr</th>
					<th>Amount</th>
					<th>Rate</th>
					<th>Total (IDR)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-1440</td>
					<td>BREAK BULK FEE</td>
					<td>BREAK BULK FEE</td>
					<td>USD</td>
					<td>10.00</td>
					<td>9775.00</td>
					<td>97750.00</td>
				</tr>					
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