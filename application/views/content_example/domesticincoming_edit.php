<?php
# set page title here
$__page_title = "Domestic &raquo; Incoming Form";

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
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='domesticincoming.php';"/>
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
									<option value="FIM">FIM</option>
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
							<label class="required">SMU</label>
							<span class="field">
								<select name="smu">
									<option value="126">126</option>
								</select>&nbsp;&nbsp;-&nbsp;&nbsp;
								<input type="text" id="smu" name="smu" class="mediuminput" size="40" maxlength="50" />
								<input type="button" name="btnsmu" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<span class="highlight">GARUDA INDONESIA</span>
							</span>
						</p>
						<p>
							<label class="required">Flight No./Vessel/Truck</label>
							<span class="field">
								<input type="text" id="shipper" name="vessel" class="mediuminput" size="40" maxlength="50" />
							</span>
						</p>
						<p>
							<label class="required">HSMU</label>
							<span class="field">
								<input type="text" id="hsmu" name="hsmu" class="mediuminput" size="40" maxlength="50" />
								<input type="button" name="btnhsmu" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">From</label>
							<span class="field">
								<select name="from" id="from">
									<option value="JOG">JOG</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" id="from" name="from" class="mediuminput" size="40" maxlength="50" />
							</span>
						<p>
							<label class="required">ETA</label>
							<span class="field">
								<input type="text" name="eta" id="etd" size="10" maxlength="10" value="" class="vsmallinput" value="" />
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
									<option value="FIN_JOG">FIN JOG</option>
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
							<label class="required">Dom. Type</label>
							<span class="field">
								<select name="domtype">
									<option value="AIR">AIR</option>
								</select>
							&nbsp;&nbsp;&nbsp;&nbsp;Sub Section&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="subsection">
									<option value="">&nbsp;&nbsp;&nbsp;&nbsp;</option>
								</select>
							</span>
						</p>
						<p>
							<label class="required">From<span class="required">*)</span></label>
							<span class="field">
								<select name="cntryfrom" id="cntryfrom">
									<option value="ID">ID</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="cityfrom" id="cityfrom">
									<option value="SUB">SUB</option>
								</select>
							</span>
							<span class="field">
							<span class="highlight">INDONESIA</span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<span class="highlight">SURABAYA</span>
							</span>
						</p>
						<p>
							<label class="required">Destination<span class="required">*)</span></label>
							<span class="field">
								<select name="cntrydest" id="cntrydest">
									<option value="ID">ID</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;
								<select name="citydest" id="citydest">
									<option value="MLG">MLG</option>
								</select>
							</span>
							<span class="field">
							<span class="highlight">INDONESIA</span>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<span class="highlight">MALANG</span>
							</span>
						</p>
						<p>
							<label class="required">Surat Penawaran</label>
							<span class="field">
								<input type="text" name="surat" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Rute</label>
							<span class="field">
								<input type="text" name="rute" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Quantity</label>
							<span class="field">
								<input type="text" name="quantity" size="40" maxlength="50" class="v10" />&nbsp;&nbsp;&nbsp;Rit
							</span>
						</p>
						<p>
							<label class="required">Dok. Selesai Pekerjaan</label>
							<span class="field">
								<input type="text" name="selesai" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
						<p>
							<label class="required">Catatan</label>
							<span class="field">
								<input type="text" name="catatan" size="40" maxlength="50" class="mediuminput" />
							</span>
						</p>
					</td>
				</tr>
			</table>
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
				<label class="required">Commodity</label>
				<span class="field">
					<select name="commodity">
						<option value="ELC">ELC</option>&nbsp;&nbsp;&nbsp;<span class="highlight">ELECTRONIC</span>
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
						<option value="COLLY">COLLY</option>
					</select>
				</span>
			</p>
			<p>
				<label class="required">Gross Weight</label>
				<span class="field">
					<input type="text" name="gweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				&nbsp;&nbsp;&nbsp;&nbsp;
				Vol. Weight&nbsp;&nbsp;
					<input type="text" name="vweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				</span>
			</p>
			<p>
				<label class="required">Net Weight</label>
				<span class="field">
					<input type="text" name="nweight" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;Kgs
				&nbsp;&nbsp;&nbsp;&nbsp;
				Meas.&nbsp;&nbsp;
					<input type="text" name="meas" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;m3
				</span>
			</p>
			<p>
				<label class="required">Dimension</label>
				<span class="field">
					<input type="text" name="wdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
					<input type="text" name="hdim" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;
					<input type="text" name="tdim" size="10" maxlength="10" class="v10" />
				</span>
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
									<input type="text" name="twenty" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 20 FEET&nbsp;&nbsp;
									<input type="text" name="fourty" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 40 FEET&nbsp;&nbsp;
									<input type="text" name="fourtyhc" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 40 HC&nbsp;&nbsp;
									<input type="text" name="fourtyfive" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;&nbsp;X 45 FEET
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
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>					
									</tbody>
								</table>		
							</p>
							</td>
						</tr>
					</tfoot>
				</table>
		</div>
		
		<!-- tabsheet 3 -->
		<div id="tabsheet3" class="subcontent" style="margin-top: 0; display:none;">
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>AIRLINE NET RATE</th>
						<th>SEAFREIGHT NET RATE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="50%">
							<p align="right">
								<label class="required">Gross Rate</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="algrprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="algrpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="algrtotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">PPn</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="algrppn" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Adm</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="algradm" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Total</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="algrtotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
							</p>							<p align="right">
								<label class="required">Net Rate</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="alnrprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="alnrpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="alnrtotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">PPn</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="alnrppn" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Adm</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="alnradm" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Total</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="alnrtotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
							</p>
							<p align="right">
								<label class="required">&nbsp;</label>
								<span class="field">
									<span class="highlight">Other Charge</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="alothercharge" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
							</p>

						</td>
						<td>
							<p align="right">
								<label class="required">20 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="20feetprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="20feetpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="20feettotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<label class="required">40 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40feetprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40feetpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40feettotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<label class="required">40 HQ</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40hqprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40hqpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="40hqtotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<label class="required">45 Feet</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="45feetprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="45feetpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="45feettotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
							</p>
							<p align="right">
								<label class="required">LCL-CBM</label>
								<span class="field">
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="sfprice" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="sfpieces" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;
									<span class="highlight"></span>&nbsp;&nbsp;<input type="text" name="sftotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">PPn</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sfppn" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Adm</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sfadm" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
								<span class="field">
									<span class="highlight">Total</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sftotal" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
								</span>
							</p>
							<p align="right">
								<label class="required">&nbsp;</label>
								<span class="field">
									<span class="highlight">Other Charge</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sfothercharge" size="10" maxlength="10" class="vsmallinput" />&nbsp;&nbsp;
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
					<td>4-3270</td>
					<td>DELIVERY/TRANSPORT/TRUCKING</td>
					<td>DTD SUB-MLG,RP.8,500 X 21 KG</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>IDR</td>
					<td>178500.00</td>
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
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
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