<?php
$__page_title = "Laporan Inbound Shipment TPS (FIN)";

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
					<th>NO.</th>
					<th>TGL. MASUK</th>
					<th>KWITANSI</th>
					<th>/</th>
					<th>DATE</th>
					<th>JOB NO.</th>
					<th>CONSIGNEE</th>
					<th colspan="2">MAWB</th>
					<th>\</th>
					<th>HAWB</th>
					<th>AGENT</th>
					<th>VOL WEIGHT (Kgs)</th>
					<th>SW LINI I</th>
					<th>JBM</th>
					<th>TRUCKING</th>
					<th>HANDLING</th>
					<th>OPS COST</th>
					<th>NILAI INVOICE</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>3/21/2013</td>
					<td>030588TP</td>
					<td>&nbsp;</td>
					<td>3/21/2013</td>
					<td>0609/0007/UNJ/TPS/IX/2013</td>
					<td>UNIJAYA PRATAMA, PT</td>
					<td>HOD</td>
					<td>176-53570123</td>
					<td>&nbsp;</td>
					<td>BCN-08132843</td>
					<td>HEL BCN</td>
					<td>239</td>
					<td>483775,-</td>
					<td>130750,-</td>
					<td>130750,-</td>
					<td>60000,-</td>
					<td>380575,-</td>
					<td>881336</td>
				</tr>
				<tr>
					<td>2</td>
					<td>9/25/2013</td>
					<td>030593TP</td>
					<td>/</td>
					<td>9/25/2013</td>
					<td>0613/0003/PER/TPS/IX/2013</td>
					<td>PERDANA FIRSTA GARMENT, PT</td>
					<td>HOD</td>
					<td>131-47122040</td>
					<td>/</td>
					<td>MLG-8844831</td>
					<td>MOA OSA</td>
					<td>247</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>391975,-</td>
					<td>1413841</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="12">TOTAL</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</tfoot>
		</table>		
		</p>
		
		
<?php
require_once("inc/footer.php");
?>