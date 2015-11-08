<?php
$__page_title = "Air Freight &raquo; PRODUKTIVITAS AUG 2013 TPS";

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
					<td>49</td>
					<td>71,075</td>
					<td>100</td>
					<td>41,991</td>
					<td>49.00</td>
					<td>169.26</td>			
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
					<td>575</td>
					<td>449,077.50</td>
					<td>988</td>
					<td>580,591.00</td>
					<td>58.20</td>
					<td>77.35</td>			
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