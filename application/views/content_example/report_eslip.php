<?php
$__page_title = "Laporan ESLIP";

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
						<input type="text" name="tgl" id="tgl" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
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
					<th>ID REQUEST</th>
					<th>TANGGAL</th>
					<th>DEPARTEMEN</th>
					<th>BARANG</th>
					<th>PIECES</th>
					<th>WEIGHT</th>
					<th>CUSTOMER</th>
					<th>CUSTOMER DETAIL</th>
					<th>CATATAN</th>
					<th>KENDARAAN</th>
					<th>DRIVERCODE</th>
					<th>DATE CREATED</th>
					<th>USER CREATED</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>					
			</tbody>
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