<?php
# set page title here
$__page_title = "Accounting &raquo; Faktur Pajak (PPN)";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Faktur Pajak",
			"target" => "tabsheet1"
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
							<label class="required">Section <span class="required">*)</span></label>
							<span class="field">
								<select name="section" id="section">
									<option value="TPS" disabled>TPS</option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;&nbsp;
								<input type="button" name="invoice" value="Invoice" onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">Document</label>
							<span class="field">
								<select name="document" id="document">
									<option value="1" disabled>1</option>
								</select>
								<span class="highlight">Faktur Pajak Standar</span>
							</span>
						</p>
						<p>
							<label class="required">Revision No.</label>
							<span class="field">
								<input type="text" id="revision" name="revision" class="v10" size="10" maxlength="10" />
								&nbsp;&nbsp;&nbsp;(0, 1, 2, atau 3)
							</span>
						</p>
						<p>
							<label class="required">Other Note</label>
							<span class="field">
								<input type="text" id="note" name="note" class="v10" size="10" maxlength="10" />
							</span>
						</p>
						<p>
							<label class="required">Masa Pajak</label>
							<span class="field">
								<input type="text" name="bulan_pajak" size="10" maxlength="10" class="v10" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
								<input type="text" name="tahun_pajak" size="10" maxlength="10" class="v10" />
							</span>
						</p>
						<p>
							<label class="required">Tanggal Faktur</label>
							<span class="field">
								<input type="text" name="tgl_faktur" id="tgl_faktur" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							</span>
						</p>
						<p>
							<label class="required"><input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Void <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="voidt" id="voidt" size="40" maxlength="50" value="" class="mediuminput" value="" />
							</span>
						</p>
						<p>
							<label class="required">Company</label>
							<span class="field">
								<select name="company" id="company">
									<option value="YAN">YAN</option>
								</select>
							<span class="highlight">PT. YANMAR DIESEL INDONESIA</span>	
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								JL. RAYA JAKARTA BOGOR KM.34,8
							</span>
							<span class="field">
								SUKMAJAYA-KOTA DEPOK
							</span>
						</p>
						<p>
							<label class="required">No. Job Order</label>
							<span class="field">
								<input type="text" id="nojob" name="nojob" class="mediuminput" size="40" maxlength="40" />
							</span>
						</p>
						<p>
							<label class="required">Jasa Kena Pajak</label>
							<span class="field">
								<input type="text" id="jkp" name="jkp" class="mediuminput" size="40" maxlength="50" />
							</span>
						</p>
					</td>
					<td>
						<p>
							<label class="required">Type</label>
							<span class="field">
								<select name="type" id="type">
									<option value="2">2</option>
								</select>&nbsp;&nbsp;&nbsp;Penyerahan DLM Negeri Dgn FP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="button" name="btn_type" value="Edit" onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">Status</label>
							<span class="field">
								<select name="status" id="status">
									<option value="0">0</option>
								</select>&nbsp;&nbsp;&nbsp;Pengisian Faktur Baru Atas Transaksi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="button" name="btn_type" value="Preview" onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
							</span>
						</p>
						<p>
							<label class="required">&nbsp;</label>
							<span class="field">
								<table width="55%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td>
										<p>
											Faktur Pajak Pengganti
										</p>
											<label class="required">Description</label>
											<span class="field">
												<input type="text" id="desc" name="desc" class="mediuminput" size="40" maxlength="50" />
											</span>
											<label class="required">FP Terganti</label>
											<span class="field">
												<select name="subsection">
													<option value=""></option>
												</select>
											</span>
										</td>
									</tr>
								</table>
							</span>
						</p>
						<p>
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<p align="right">
								<label class="required">No. NPWP</label>
								<span class="field">
									<input type="text" name="npwp" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">No. Invoice</label>
								<span class="field">
									<input type="text" name="invoice" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">SC Code</label>
								<span class="field">
									<input type="text" name="invoice" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">Tgl. Invoice</label>
								<span class="field">
									<input type="text" name="tgl_invoice" id="tgl_invoice" size="10" maxlength="10" value="" class="mediuminput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
								</span>
								<label class="required">Total Amount</label>
								<span class="field">
									<input type="text" name="total_amount" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">Adv. Payment</label>
								<span class="field">
									<input type="text" name="adv_payment" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">Amount</label>
								<span class="field">
									<input type="text" name="amount" size="10" maxlength="20" class="mediuminput" />
								</span>
							</p>
							<p align="right">
								<label class="required">Harga Jual Kena Pajak</label>
								<span class="field">
									<input type="text" name="hjkp" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">PPN</label>
								<span class="field">
									<input type="text" name="ppn" size="10" maxlength="20" class="mediuminput" />
								</span>
								<label class="required">Kurs</label>
								<span class="field">
									<input type="text" name="kurs" size="10" maxlength="10" class="mediuminput" />
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
			
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>