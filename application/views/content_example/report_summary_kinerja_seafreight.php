<?php
$__page_title = "Laporan Summary Kinerja Seafreight";

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
					<td colspan="10">SFE</td>
				</tr>
				<tr>
					<td>FREQ</td>
					<td>927</td>
					<td>287</td>
					<td>339</td>
					<td>1553</td>
					<td>1713</td>
					<td>91</td>
					<td>1867</td>
					<td>83</td>
					<td>3880</td>
				</tr>					
				<tr>
					<td>CBM</td>
					<td>2078</td>
					<td>664</td>
					<td>943</td>
					<td>3685</td>
					<td>6169</td>
					<td>60</td>
					<td>6837</td>
					<td>54</td>
					<td>13160</td>
				</tr>					
				<tr>
					<td>TEUS</td>
					<td>928</td>
					<td>338</td>
					<td>399</td>
					<td>1665</td>
					<td>1284</td>
					<td>130</td>
					<td>1412</td>
					<td>118</td>
					<td>3510</td>
				</tr>					
				<tr>
					<td colspan="10">CUSTOMS CLEARANCE</td>
				</tr>
				<tr>
					<td>FREQ</td>
					<td>859</td>
					<td>271</td>
					<td>295</td>
					<td>1425</td>
					<td>786</td>
					<td>181</td>
					<td>866</td>
					<td>165</td>
					<td>1848</td>
				</tr>					
				<tr>
					<td>CBM</td>
					<td>1715</td>
					<td>377</td>
					<td>699</td>
					<td>2791</td>
					<td>1852</td>
					<td>151</td>
					<td>2064</td>
					<td>135</td>
					<td>4282</td>
				</tr>					
				<tr>
					<td>TEUS</td>
					<td>1627</td>
					<td>540</td>
					<td>566</td>
					<td>2733</td>
					<td>1249</td>
					<td>219</td>
					<td>1386</td>
					<td>197</td>
					<td>2776</td>
				<tr>
					<td colspan="10">SFC</td>
				</tr>
				<tr>
					<td>FREQ</td>
					<td>415</td>
					<td>155</td>
					<td>146</td>
					<td>716</td>
					<td>764</td>
					<td>94</td>
					<td>848</td>
					<td>84</td>
					<td>1699</td>
				</tr>					
				<tr>
					<td>CBM</td>
					<td>607</td>
					<td>218</td>
					<td>252</td>
					<td>1077</td>
					<td>1050</td>
					<td>103</td>
					<td>1166</td>
					<td>92</td>
					<td>3356</td>
				</tr>					
				<tr>
					<td>TEUS</td>
					<td>439</td>
					<td>184</td>
					<td>160</td>
					<td>783</td>
					<td>734</td>
					<td>107</td>
					<td>815</td>
					<td>96</td>
					<td>1804</td>
				</tr>					
				</tr>					
			</tbody>
		</table>		
		
		
<?php
require_once("inc/footer.php");
?>