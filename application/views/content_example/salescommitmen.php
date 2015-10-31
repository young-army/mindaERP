<?php
# set page title here
$__page_title = "Sales Commitmen";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Airfreight",
			"target" => "airfreight"
		),
		array(
			"title" => "Seafreight",
			"target" => "seafreight"
		),
		array(
			"title" => "Domestic",
			"target" => "domestic"
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
		
		<div id="airfreight" class="subcontent" style="margin-top: 0;">
			<table width="95%" cellpadding="0" cellspacing="0" border="0">
				<tr>
				<td colspan="2">
					<p align="right">
						<input type="button" value="Print" onClick="window.print()" />
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
		
		<div id="seafreight" class="subcontent" style="margin-top: 0; display:none;">
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
		
		<div id="domestic" class="subcontent" style="margin-top: 0; display:none;">
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
					</td>
				</tr>
			</table>
		</div>
	
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>