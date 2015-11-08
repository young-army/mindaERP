<?php
$__page_title = "Laporan Resume Seafreight";

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
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th>&nbsp;</th>
					<th>Q1 2013</th>
					<th>APR</th>
					<th>MAY</th>
					<th>YTD. MAY 2013</th>
					<th>SMT I/2012</th>
					<th>% (Ytd. MAY '13/SMT I '12)</th>
					<th>TARGET SMT I '13</th>
					<th>% (Ytd. MAY '13/SMT I '13)</th>
					<th>TARGET 2013</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>FREQ</td>
					<td>2201</td>
					<td>713</td>
					<td>780</td>
					<td>3694</td>
					<td>3263</td>
					<td>113</td>
					<td>3581</td>
					<td>103</td>
					<td>7428</td>
				</tr>					
				<tr>
					<td>CBM</td>
					<td>4400</td>
					<td>1259</td>
					<td>1894</td>
					<td>7552</td>
					<td>9071</td>
					<td>83</td>
					<td>10067</td>
					<td>75</td>
					<td>20798</td>
				</tr>					
				<tr>
					<td>TEUS</td>
					<td>2994</td>
					<td>1062</td>
					<td>1125</td>
					<td>5181</td>
					<td>3267</td>
					<td>159</td>
					<td>3613</td>
					<td>143</td>
					<td>8090</td>
				</tr>					
			</tbody>
		</table>		
		
<?php
require_once("inc/footer.php");
?>