<?php
$__page_title = "Laporan Waktu Timbun";

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
					<th>BULAN</th>
					<th>LAMA TIMBUN (HARI)</th>
					<th>SHIPMENT</th>
					<th>RATA-RATA</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<td>JAN</td>
					<td>914</td>
					<td>107</td>
					<td>8,54</td>
				</tr>					
				<tr>
					<td>FEB</td>
					<td>927</td>
					<td>98</td>
					<td>9,46</td>
				</tr>					
				<tr>
					<td>MAR</td>
					<td>825</td>
					<td>78</td>
					<td>10,58</td>
				</tr>					
				<tr>
					<td>APR</td>
					<td>938</td>
					<td>59</td>
					<td>15,90</td>
				</tr>					
				<tr>
					<td>MEI</td>
					<td>855</td>
					<td>66</td>
					<td>12,95</td>
				</tr>					
				<tr>
					<td>JUN</td>
					<td>730</td>
					<td>51</td>
					<td>14,31</td>
				</tr>					
				<tr>
					<td>JUL</td>
					<td>750</td>
					<td>67</td>
					<td>11,19</td>
				</tr>					
				<tr>
					<td>AUG</td>
					<td>748</td>
					<td>49</td>
					<td>15,27</td>
				</tr>					
				<tr>
					<td>SEP</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>OCT</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>NOP</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
				<tr>
					<td>DES</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
			</tbody>
			<tfoot>
				<tr>
					<td>TOTAL</td>
					<td>6687</td>
					<td>575</td>
					<td>11,49</td>
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