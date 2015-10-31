<?php
$__page_title = "Rev House";

require_once("inc/header.php");
?>
		<script language="javascript">
		function removeData(kode) {
			if(confirm('Are you sure?')) {
				location.href = 'tpsrevhouse.php';
			}
		}
		</script>
		

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
								<option value="code" >Code</option>
								<option value="name" >Name</option>
							</select>&nbsp;
							<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;
							<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;
							<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='tpsrevhouse.php';">
						</div>
					</p>
				</form>			
			</div>
					
			<div id='pos_r'>
				<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link"><span>Print</span></a>
			</div>
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>No. Job</th>
						<th>Customer</th>
						<th>MAWB</th>
						<th>HAWB</th>
						<th>Colly</th>
						<th>Merk</th>
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
					</tr>					
				</tbody>
			</table>		
			
			<ul class="pagination">
				<li class="first"><a>&laquo; First</a></li>
				<li><a class="current">1</a></li>
				<li class="next">
				<li class="last"><a>Last &raquo;</a></li>
			</ul>	

		
<?php
require_once("inc/footer.php");
?>