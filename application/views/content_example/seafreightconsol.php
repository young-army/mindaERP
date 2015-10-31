<?php
$__page_title = "Sea Freight &raquo; Consol";

require_once("inc/header.php");
?>
		<script language="javascript">
		function removeData(kode) {
			if(confirm('Are you sure?')) {
				location.href = 'seafreightconsol.php';
			}
		}
		</script>

		<!-- filter list table -->
		<div id='pos_l'>
			<form action="" method="get" id="fFilter" name="fFilter">
				<p>
					<div id="box-filter">Search By&nbsp;
						<script>
							function resetValue() {
								document.getElementById('fText').value = '';
							}
						</script>
						<select name="fv" onchange="resetValue()">
							<option value="reff" >Reff</option>
							<option value="consignee" >Consignee</option>
						</select>&nbsp;
						<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;
						<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;
						<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='seafreightconsol.php';">
					</div>
				</p>
			</form>			
		</div>
				
		<!-- module nav button -->
		<div id='pos_r'>
			<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
			<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
			<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
			<a href="seafreightconsol_edit.php" class="btn btn1 btn_link new"><span>Add New</span></a>
		</div>
		
		<!-- table list data -->
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th>No.</th>
					<th width="80px">Reff</th>
					<th width="200px">Consignee</th>
					<th>From</th>
					<th>Destination</th>
					<th>Date</th>
					<th>MAWB No</th>
					<th class="cell-control">Control</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>00-23888998/17</td>
					<td>THAI GLOBAL CARGO (PTE)</td>
					<td>INDONESIA - JKT</td>
					<td>THAILAND - THA</td>
					<td>13 July 2013</td>
					<td>277-2678 7731</td>
					<td align="center">
						<a href="seafreightconsol_edit.php" title="Edit item" class="edit"><span>Edit</span></a>
						<a href="#Delete" onclick="removeData('004')" title="Remove item" class="delete"><span>Delete</span></a>
					</td>
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