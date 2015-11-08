<?php
# set page title here
$__page_title = "Air Freight &raquo; Export Form";

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
							<label class="required">Order <span class="required">*)</span></label>
							<span class="field">
								<select name="order" id="order">
									<option value="JKT">JKT</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type&nbsp;&nbsp;&nbsp;
								<select name="order" id="order">
									<option value="GEN">GEN</option>
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
									<option value="ICC">ICC</option>
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
							<label class="required">1st Flight</label>
							<span class="field">
								<input type="text" name="fflight" size="20" maxlength="20" class="smallinput" />
							</span>
						</p>
						<p>
							<label class="required">2nd Flight</label>
							<span class="field">
								<input type="text" name="sflight" size="20" maxlength="20" class="smallinput" />
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
									<option value="MOA_SIN">MOA SIN</option>
								</select>
								<textarea style="display:none" rows="4" cols="50" class="biginput"><?="MOL LOGISTICS (SPORE)\r\n70 Alps Avenue #01-05, Airport Logistics Park\r\nSingapore 498801"?></textarea>
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
							<label class="required">From</label>
							<span class="field">
								<select name="from_country">
									<option value="ID">ID - INDONESIA</option>
								</select>&nbsp;&nbsp;
								<select name="from_city">
									<option value="JKT">JKT - JAKARTA</option>
								</select>
							</span>
						</p>						
						<p>
							<label class="required">ETD</label>
							<span class="field">								
								<input type="text" name="etd" id="etd" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required">Destination</label>
							<span class="field">
								<select name="dest_country">
									<option value="SG">SG - SINGAPORE</option>
								</select>&nbsp;&nbsp;
								<select name="dest_city">
									<option value="SIN">SIN - SINGAPORE</option>
								</select>
							</span>
						</p>						
						<p>
							<label class="required">ETA</label>
							<span class="field">
								<input type="text" name="eta" id="eta" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
			<p>
				<label class="required">Commodity</label>
				<span class="field">
					<select name="commodity">
						<option value="GCR">GCR - GENERAL CARGO</option>
					</select>
				</span>
			</p>
			<p>
				<label class="required">Description</label>
				<span class="field">
					<input type="text" name="desc" size="50" maxlength="200" class="mediuminput" />
				</span>
			</p>
			<p>
				<label class="required">Pieces</label>
				<span class="field">
					<input type="text" name="pieces" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
					<select name="unit">
						<option></option>
						<option value="pcs">Pcs</option>
						<option value="m">Metres</option>
					</select>
				</span>
			</p>
			<p>
				<label class="required">Gross Weight</label>
				<span class="field">
					<input type="text" name="gweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				</span>
			</p>
			<p>
				<label class="required">Volume Weight</label>
				<span class="field">
					<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				</span>
			</p>
			<p>
				<label class="required">Dimension</label>
				<span class="field">
					<span class="highlight">W</span>&nbsp;&nbsp;<input type="text" name="wdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;x&nbsp;&nbsp;
					<span class="highlight">H</span>&nbsp;&nbsp;<input type="text" name="hdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;x&nbsp;&nbsp;
					<span class="highlight">T</span>&nbsp;&nbsp;<input type="text" name="tdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
				</span>
			</p>
			<p class="highlight">
				<label class="required">Chargeable</label>
				<span class="field">
					<input type="text" name="chargeable" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				</span>
			</p>
			<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>Airline Net Rate</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<label class="required">Currency</label>
								<span class="field">
									<select name="curr">
										<option value="USD">USD</option>
										<option value="IDR">IDR</option>
										<option value="SGD">SGD</option>
										<option value="RM">RM</option>
									</select>
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label class="required">Gross Fare</label>
								<span class="field">
									<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
									&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;USD&nbsp;&nbsp;<input type="text" name="vweight" size="10" maxlength="10" class="v160f" />
								</span>
							</td>
						</tr>
						<tr>
							<td>
								<label class="required">Airline Net</label>
								<span class="field">
									<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
									&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;USD&nbsp;&nbsp;<input type="text" name="vweight" size="10" maxlength="10" class="v160f" />
								</span>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td style="padding-left: 305px">
								Total Other Charges&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;USD&nbsp;&nbsp;<input type="text" name="vweight" size="10" maxlength="10" class="v160f" />
							</td>
						</tr>
					</tfoot>
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
					<li><a href="#">BA-02</a></li>
					<li><a href="#">BC-01</a></li>
					<li><a href="#">OC-01</a></li>
					<li><a href="#">OC-02</a></li>
					<li><a href="#">PS-02</a></li>
					<li><a href="#">RC-01</a></li>
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
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>4-1050</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN AS PER RECEIPT</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>1070536.00</td>
				</tr>					
				<tr>
					<td>4-1090</td>
					<td>LOAD/UNLOAD</td>
					<td>LOAD/UNLOAD AS PER RECEIPT</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>154605.00</td>
				<tr>
					<td>4-1100</td>
					<td>OTHER/EXTRAS</td>
					<td>PNBP AS PER RECEIPT</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;&nbsp;</td>
					<td>60000.00</td>
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
					<li><a href="#">BA-02</a></li>
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
					<td>4-1050</td>
					<td>WAREHOUSE</td>
					<td>JASA PENITIPAN AS PER RECEIPT</td>
					<td>IDR</td>
					<td>1070536.00</td>
				</tr>					
				<tr>
					<td>4-1090</td>
					<td>LOAD/UNLOAD</td>
					<td>LOAD/UNLOAD AS PER RECEIPT</td>
					<td>IDR</td>
					<td>154605.00</td>
				<tr>
					<td>4-1100</td>
					<td>OTHER/EXTRAS</td>
					<td>PNBP AS PER RECEIPT</td>
					<td>IDR</td>
					<td>60000.00</td>
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