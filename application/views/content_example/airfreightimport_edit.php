<?php
# set page title here
$__page_title = "Air Freight &raquo; Import Form";

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
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='airfreightimport.php';"/>
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
							<label class="required">Shippment <span class="required">*)</span></label>
							<span class="field">
								<select name="shipment" id="shipment">
									<option value="FRH">FRH</option>
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
									<option value="moa_tyo">MOA TYO</option>
								</select>
								<textarea style="display:none" rows="4" cols="50" class="biginput"><?="MOL LOGISTICS (SPORE)\r\n70 Alps Avenue #01-05, Airport Logistics Park\r\nSingapore 498801"?></textarea>
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
							<label class="required">From</label>
							<span class="field">
								<select name="from">
									<option value="jp">JP</option>
								</select>
								<select name="from2">
									<option value="nrt">NRT</option>
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
							<label class="required">Chrg. Weight</label>
							<span class="field">
								<input type="text" name="cweight" size="20" maxlength="20" class="smallinput" disabled /> KGs
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
							<th>Warehouse</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label class="required">WareHouse</label>
								<span class="field">
									<select name="warehouse">
										<option value="fedex">FEDEX</option>
									</select>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label class="required">Tgl Pecah PU</label>
							<span class="field">
								<input type="text" name="pu" id="pu" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</td>
						</tr>
						<tr>
							<td>
							<label class="required">No. PU</label>
							<span class="field">
								<input type="text" name="nopu" size="20" maxlength="20" class="smallinput" disabled />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pos&nbsp;&nbsp;&nbsp;
								<input type="text" name="pos" size="20" maxlength="20" class="smallinput" disabled />
							</span>
							</td>
						</tr>
					</tbody>
						<tr>
							<td>
							<label class="required">Remark</label>
							<span class="field">
								<textarea cols="40" rows="3" class="mediuminput"></textarea>
							</span>
							</td>
						</tr>
				</table>
			</p>
			<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label class="required">Customs Clearance</label>
								<span class="field">
									<select name="customsclearance">
										<option value="pib">PIB</option>
									</select>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label class="required">No. Pen. PIB</label>
								<span class="field">
									<input type="text" name="nopib" size="20" maxlength="20" class="smallinput" disabled />
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label class="required">No. SPBB</label>
								<span class="field">
									<input type="text" name="nospbb" size="20" maxlength="20" class="smallinput" disabled />
								</span>
							</td>
						</tr>
					</tbody>
						<tr>
							<td>
							<label class="required">Tgl. SPBB</label>
							<span class="field">
								<input type="text" name="spbb" id="spbb" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tgl. C. Clearance&nbsp;&nbsp;&nbsp;
								<input type="text" name="clearance" id="clearance" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
							</td>
						</tr>
				</table>
			</p>
		</div>
		
		<!-- sales commitment -->
		<div id="sales_commitment" class="subcontent" style="display:none;">
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
					<li><a href="#">AC-01</a></li>
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
					<th>Vendor</th>
					<th>Curr</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-1270</td>
					<td>PIB,CUSTOMS,IMPORT,DL</td>
					<td>IMPOR DUTY</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>IDR</td>
					<td>5010000.00</td>
				</tr>					
				<tr>
					<td>4-1300</td>
					<td>OTHERS/EXTRAS</td>
					<td>PNBP</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>IDR</td>
					<td>100000.00</td>
				<tr>
					<td>4-1300</td>
					<td>OTHER/EXTRAS</td>
					<td>ADM BANK</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>IDR</td>
					<td>70000.00</td>
				</tr>					
				<tr>
					<td>4-1250</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN GUDANG (AS PERRECEIPT)</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>IDR</td>
					<td>1777000.00</td>
				</tr>					
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
					<li><a href="#">AC-01</a></li>
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
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-1270</td>
					<td>PIB,CUSTOMS,IMPORT,DL</td>
					<td>IMPOR DUTY</td>
					<td>IDR</td>
					<td>5010000.00</td>
				</tr>					
				<tr>
					<td>4-1300</td>
					<td>OTHERS/EXTRAS</td>
					<td>PNBP</td>
					<td>IDR</td>
					<td>100000.00</td>
				<tr>
					<td>4-1300</td>
					<td>OTHER/EXTRAS</td>
					<td>ADM BANK</td>
					<td>IDR</td>
					<td>70000.00</td>
				</tr>					
				<tr>
					<td>4-1250</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN GUDANG (AS PERRECEIPT)</td>
					<td>IDR</td>
					<td>1777000.00</td>
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