<?php
$__page_title = "Air Freight &raquo; PRODUKTIVITAS AUG 2013 AFCC";

require_once("inc/header.php");
?>
		<script language="javascript">
		function removeData(kode) {
			if(confirm('Are you sure?')) {
				location.href = 'airfreightsumkerjaperbulan.php';
			}
		}
		</script>

		<!-- filter list table -->
		<div id='pos_l'>
			<form action="" method="get" id="fFilter" name="fFilter">
				<p>
					<div id="box-filter"><!--Search By&nbsp;
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
						<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='airfreightsumkerjaperbulan.php';">-->
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
					<th  colspan="2">Aug-13</th>
					<th colspan="2">TGT AUG 2013</th>
					<th colspan="2">%</th>	
				</tr>
				<tr>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>	
					<th>JO</th>
					<th>WT.</th>	
				</tr>
			</thead>			
			<tbody>				
				<tr>
					<td>266</td>
					<td>209,547.00</td>
					<td>203</td>
					<td>82,353.00</td>
					<td>131.03</td>
					<td>254.45</td>			
				</tr>					
			</tbody>
			<thead>
				<tr>
					<th  colspan="2">YTD AUG 2013</th>
					<th colspan="2">TGT. Yr. 2013</th>
					<th colspan="2">%</th>	
				</tr>
				<tr>
					<th>JO</th>
					<th>WT.(Kgs)</th>
					<th>JO</th>
					<th>WT.(Kgs)</th>	
					<th>JO</th>
					<th>WT.</th>	
				</tr>
			</thead>			
			<tbody>				
				<tr>
					<td>3,017</td>
					<td>1,964,284.00</td>
					<td>4,480</td>
					<td>2,167,552.00</td>
					<td>67.34</td>
					<td>90.62</td>			
				</tr>					
			</tbody>
		</table>		
		
		<!-- paging -->
		<!--<ul class="pagination">
			<li class="first"><a>&laquo; First</a></li>
			<li><a class="current">1</a></li>
			<li class="next">
			<li class="last"><a>Last &raquo;</a></li>
		</ul>	-->
		
<?php
require_once("inc/footer.php");
?>