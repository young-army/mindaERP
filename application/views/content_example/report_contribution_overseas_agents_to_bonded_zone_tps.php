<?php
$__page_title = "Laporan Contribution Overseas Agents  To Bonded Zone";

require_once("inc/header.php");
?>
		<script language="javascript">
		function removeData(kode) {
			if(confirm('Are you sure?')) {
				location.href = 'eslip.php';
			}
		}
		</script>

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
		<table cellpadding="0" cellspacing="1" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th rowspan="3">NO</th>
					<th rowspan="3">AGENTS</th>
					<th colspan="3">YEAR 2013</th>
					<th colspan="3">YEAR 2012</th>
				</tr>
				<tr>
					<th colspan="2">FREQ</th>
					<th rowspan="2">CHG (Kgs)</th>
					<th colspan="2">FREQ</th>
					<th rowspan="2">WEIGHT (Kgs)</th>
				</tr>
				<tr>
					<th>MAWB</th>
					<th>HAWB</th>
					<th>MAWB</th>
					<th>HAWB</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>MOL LOGISTIC</td>
					<td>275</td>
					<td>332</td>
					<td>206,206</td>
					<td>291</td>
					<td>470</td>
					<td>310,046</td>
				</tr>					
				<tr>
					<td>2</td>
					<td>HELLMANN WWL</td>
					<td>170</td>
					<td>217</td>
					<td>214,231</td>
					<td>298</td>
					<td>400</td>
					<td>244,886</td>
				</tr>					
				<tr>
					<td>3</td>
					<td>MFT BJS</td>
					<td>1</td>
					<td>2</td>
					<td>2,359</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>					
				<tr>
					<td>4</td>
					<td>ROT SEL</td>
					<td>2</td>
					<td>2</td>
					<td>1,312</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>					
				<tr>
					<td>5</td>
					<td>FRY BOM</td>
					<td>1</td>
					<td>4</td>
					<td>355</td>
					<td>1</td>
					<td>1</td>
					<td>126</td>
				</tr>					
				<tr>
					<td>6</td>
					<td>MFT HKG</td>
					<td>1</td>
					<td>1</td>
					<td>142</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>					
				<tr>
					<td>7</td>
					<td>MPG BCN</td>
					<td>1</td>
					<td>1</td>
					<td>449</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>					
				<tr>
					<td>8</td>
					<td>MIQ IAD</td>
					<td>1</td>
					<td>1</td>
					<td>57</td>
					<td>81</td>
					<td>9</td>
					<td>4,308</td>
				</tr>					
				<tr>
					<td>9</td>
					<td>KWO HKG</td>
					<td>14</td>
					<td>15</td>
					<td>23,966</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>					
			</tbody>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>YTD AGUSTUS 2013</td>
					<td>466</td>
					<td>575</td>
					<td>449,077</td>
					<td>671</td>
					<td>880</td>
					<td>559,365</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>% 2012/2013</td>
					<td>69,45</td>
					<td>65,34</td>
					<td>80,28</td>
				</tr>
			</tfoot>
		</table>		
		
		<!-- paging -->
		<ul class="pagination">
			<li class="first"><a>&laquo; First</a></li>
			<li><a class="current">1</a></li>
			<li class="next">
			<li class="last"><a>Last &raquo;</a></li>
		</ul>	
		
<?php
require_once("inc/footer.php");
?>