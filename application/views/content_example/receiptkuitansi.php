<?php
# set page title here
$__page_title = "Accounting &raquo; Receipt Kuitansi";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Tabsheet 1",
			"target" => "tabsheet1"
		),
		array(
			"title" => "Tabsheet 2",
			"target" => "tabsheet2"
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
								<select id="company">
								<option value=""></option>
								</select>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select id="tipe">
								<option value=""></option>
								</select>
						</p>
					</td>
					<td>
						<p>
							<label class="required"><input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Void <span class="required">*)</span></label>
							<span class="field">
								<input type="text" name="voidt" id="voidt" size="40" maxlength="50" value="" class="mediuminput" value="" />
							</span>
						</p>
						<br>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th width="150px">Order No</th>
					<th width="80px">Master No</th>
					<th>House No</th>
					<th>FCL Type</th>
					<th>Currency</th>
					<th>Count</th>
					<th>FCL Rate</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
					<td>&nbsp;&nbsp;</td>
				</tr>					
			</tbody>
		</table>		
						
					</td>
				</tr>
				<tr>
				<td><br>
							<label class="required">Total Invoice</label>
							<span class="field">
								<input type="text" name="total_invoice" id="amount_invoice" size="40" maxlength="50" value="" class="v10" />
							</span>
				</td>
				<td><br>
							<label class="required">Amount</label>
							<span class="field">
								<input type="text" name="amount_rupiah" id="amount_invoice" size="40" maxlength="50" value="" class="mediuminput" />
							</span>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<p align="center">
					<span class="highlight">## NOMINAL RUPIAH ##</span>
				</p>
				</td>
				</tr>
				<tr>
				<td>
				&nbsp;
				</td>
				<td>
							<label class="required">Amount</label>
							<span class="field">
								<input type="text" name="amount_usd" id="amount_invoice" size="40" maxlength="50" value="" class="mediuminput" />
							</span>
				</td>
				</tr>
				<tr>
				<td colspan="2">
				<p align="center">
					<span class="highlight">## NOMINAL USD ##</span>
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
							<th></th>
						</tr>
					</thead>
						<tr>
							<td>
							<label class="required">Remark</label>
							</td>
						</tr>
						<tr>
						<td>
							<span class="field">
								<textarea cols="100" rows="10" class="mediuminput"></textarea>
							</span>
						</td>
						</tr>
				</table>
			</p>
		</div>
	
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>