<?php
$__page_title = "Laporan Inbound Consol Seafreight";

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
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th rowspan="2">&nbsp;</th>
					<th colspan="5">PRODUKTIFITAS</th>
					<th rowspan="2">Yr. 2012</th>
					<th rowspan="2">%</th>
					<th rowspan="2">TARGET 2013</th>
					<th rowspan="2">%</th>
				</tr>
				<tr>
					<th>Q1 - 2013</th>
					<th>APR</th>
					<th>MAY</th>
					<th>JUN</th>
					<th>YTD. MAY</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td colspan="10">SFC</td>
			</tr>
				<tr>
					<td>FREQ</td>
					<td>415</td>
					<td>155</td>
					<td>146</td>
					<td>&nbsp;</td>
					<td>716</td>
					<td>1529</td>
					<td>27</td>
					<td>1699</td>
					<td>24</td>
				</tr>					
				<tr>
					<td>CBM</td>
					<td>607</td>
					<td>218</td>
					<td>160</td>
					<td>&nbsp;</td>
					<td>1077</td>
					<td>3021</td>
					<td>20</td>
					<td>3356</td>
					<td>1804</td>
				</tr>					
				<tr>
					<td>TEUS</td>
					<td>439</td>
					<td>184</td>
					<td>160</td>
					<td>&nbsp;</td>
					<td>783</td>
					<td>1625</td>
					<td>27</td>
					<td>1804</td>
					<td>24</td>
				</tr>					
			</tbody>
		</table>		
		</p>
		<p>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<td rowspan="2" valign="middle">716 HBL</td>
					<td>Handled by FIN</td>
					<td>263 JO</td>
					<td>36,73%</td>
				</tr>
				<tr>
					<td>Admin. (Only)</td>
					<td>453 JO</td>
					<td>63,26%</td>
				</tr>
			</thead>
		</table>
		</p>
		<p>
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th rowspan="2">AGENT</th>
					<th colspan="2">Ytd. MAY 2013</th>
					<th colspan="2">YR. 2012</th>
					<th rowspan="2">% 2013/2012</th>
				</tr>
				<tr>
					<th>FREQ</th>
					<th>CONT.(%)</th>
					<th>FREQ</th>
					<th>CONT.(%)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>MOL</td>
					<td>482</td>
					<td>67,32</td>
					<td>1053</td>
					<td>69,37</td>
					<td>45,77</td>
				</tr>
				<tr>
					<td>HWWL</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>WOOSUNG</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>MIQ</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>OTHERS</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
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