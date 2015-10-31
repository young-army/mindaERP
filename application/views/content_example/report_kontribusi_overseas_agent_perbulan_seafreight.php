<?php
$__page_title = "Laporan Kontribusi Overseas Agent per Bulan";

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
		<b>Kontribusi overseas agent May 2013, dari segi frekwensi adalah:</b>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th>AGENT</th>
					<th>JOB</th>
					<th>KONTRIBUSI</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
			</tbody>
			<tfoot>
				<tr>
					<td>TOTAL</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</tfoot>
		</table>		
		</p>
		<p>
		<b>Kontribusi overseas agent Ytd. May 2013:</b>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th>AGENT</th>
					<th>JOB</th>
					<th>KONTRIBUSI</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
			</tbody>
			<tfoot>
				<tr>
					<td>TOTAL</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</tfoot>
		</table>		
		</p>
<?php
require_once("inc/footer.php");
?>