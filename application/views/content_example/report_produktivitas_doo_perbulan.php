<?php
$__page_title = "Laporan Produktivitas DOO per Bulan";

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
					<th colspan="3">AGUSTUS 2013</th>
					<th colspan="3">TGT. MAY 2013</th>
					<th colspan="3">%</th>
				</tr>
				<tr>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td>311</td>
					<td>15,578</td>
					<td>496</td>
					<td>26,049</td>
					<td>63</td>
					<td>60</td>
				</tr>					
			</tbody>
		</table>		
		</p>
		
		<p>
		<table cellpadding="0" cellspacing="1" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th colspan="3">YTD. AGUSTUS 2013</th>
					<th colspan="3">TGT. SMT 1 2013</th>
					<th colspan="3">%</th>
				</tr>
				<tr>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td>2685</td>
					<td>129,311</td>
					<td>5174</td>
					<td>259,216</td>
					<td>52</td>
					<td>50</td>
				</tr>					
			</tbody>
		</table>		
		</p>
		
<?php
require_once("inc/footer.php");
?>