<?php
$__page_title = "Laporan Data Penerimaan Consol Seafreight per Bulan";

require_once("inc/header.php");
?>
		<!-- filter list table -->
		<div id='pos_l'>
			<form action="" method="get" id="fFilter" name="fFilter">
				<p>
					<div id="box-filter">
						<select name="bulan" id="bulan">
							<option value="Januari">Januari</option>
							<option value="Februari">Februari</option>
							<option value="Maret">Maret</option>
							<option value="April">April</option>
							<option value="Mei">Mei</option>
							<option value="Juni">Juni</option>
							<option value="Juli">Juli</option>
							<option value="Agustus">Agustus</option>
							<option value="September">September</option>
							<option value="Oktober">Oktober</option>
							<option value="Nopember">Nopember</option>
							<option value="Desember">Desember</option>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="tahun" id="tahun">
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>
							<option value="2010">2010</option>
						</select>
						<input type="button" value="Show" class="t-button-orange t-button-medium" onclick="location.href='#';">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='#';">
</div>
				</p>
			</form>	
		</div>
				
		<!-- module nav button -->
		<div id='pos_r'>
			<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
			<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
			<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
		</div>
		
		<!-- table list data -->
		<p>
		<table cellpadding="0" cellspacing="1" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th rowspan="2">NO.</th>
					<th rowspan="2">FREIGHT</th>
					<th colspan="2">OFFICIAL RECEIPT</th>
					<th>INVOICE</th>
				</tr>
				<tr>
					<th>USD</th>
					<th>IDR</th>
					<th>USD</th>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td>1</td>
					<td>PPD</td>
					<td>4353,00</td>
					<td>1139800,-</td>
					<td>702,00</td>
				</tr>					
				<tr align="center">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td colspan="2">(64 HBL)</td>
					<td>(10 HBL)</td>
				</tr>					
				<tr align="center">
					<td>2</td>
					<td>CCX</td>
					<td>5099,00</td>
					<td>103300,-</td>
					<td>24907,06</td>
				</tr>					
				<tr align="center">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td colspan="2">(10 HBL)</td>
					<td>(42 HBL)</td>
				</tr>					
				<tr align="center">
					<td>&nbsp;</td>
					<td>TOTAL</td>
					<td>9452,00</td>
					<td>1243100,-</td>
					<td>25609,06</td>
				</tr>					
			</tbody>
		</table>		
		</p>
		
		<p>
		<b>Untuk pembayaran melalui transfer ada 23 HBL sebesar USD. 18040,50 ke Rekening BCA</b>
		</p>
		
<?php
require_once("inc/footer.php");
?>