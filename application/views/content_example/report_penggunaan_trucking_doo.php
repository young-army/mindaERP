<?php
$__page_title = "Laporan Penggunaan Trucking DOO";

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
					<th rowspan="2">BULAN</th>
					<th colspan="2">MOBIL FIN</th>
					<th colspan="2">MOBIL LUAR</th>
				</tr>
				<tr>
					<th>RIT</th>
					<th>BIAYA (IDR)</th>
					<th>RIT</th>
					<th>BIAYA (IDR)</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>JAN</td>
					<td>2</td>
					<td>650000,-</td>
					<td>9</td>
					<td>14110000,-</td>
				</tr>					
				<tr>
					<td>FEB</td>
					<td>18</td>
					<td>7175000,-</td>
					<td>9</td>
					<td>13400000,-</td>
				</tr>					
				<tr>
					<td>MAR</td>
					<td>26</td>
					<td>9752000,-</td>
					<td>24</td>
					<td>185900000,-</td>
				</tr>					
				<tr>
					<td>APR</td>
					<td>30</td>
					<td>22940970,-</td>
					<td>4</td>
					<td>12300000,-</td>
				</tr>					
				<tr>
					<td>MEI</td>
					<td>23</td>
					<td>10378000,-</td>
					<td>6</td>
					<td>35800000,-</td>
				</tr>					
				<tr>
					<td>JUN</td>
					<td>18</td>
					<td>6745000,-</td>
					<td>8</td>
					<td>14294000,-</td>
				</tr>					
				<tr>
					<td>JUL</td>
					<td>17</td>
					<td>12782855,-</td>
					<td>3</td>
					<td>62900000,-</td>
				</tr>					
				<tr>
					<td>AUG</td>
					<td>14</td>
					<td>11170500,-</td>
					<td>2</td>
					<td>300000,-</td>
				</tr>					
				<tr>
					<td>SEP</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>OCT</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>NOP</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>DES</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
			</tbody>
			<tfoot>
				<tr>
					<td>TOTAL</td>
					<td>148</td>
					<td>81594325,-</td>
					<td>65</td>
					<td>339004000,-</td>
				</tr>					
			</tfoot>
		</table>		
		
		
<?php
require_once("inc/footer.php");
?>