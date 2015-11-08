<?php
$__page_title = "Air Freight &raquo; PENERIMAAN INBOUND CONSOL PER BULAN";

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
					<th>&nbsp;</th>
					<th>SMT I</th>
					<th>JULI</th>
					<th>AUG</th>
					<th>YTD AUG</th>
					<th>Q3 2012</th>
					<th>%</th>
					<th>TARGET Q3 2013</th>
					<th>%</th>
					<th>TARGET 2013</th>
					<th>%</th>									
				</tr>
			</thead>			
			<tbody>
				<tr>
					<td colspan="11" align="left">AFC</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>1,674</td>
					<td>337</td>
					<td>233</td>
					<td>2,244</td>
					<td>2,096</td>
					<td>107</td>
					<td>2,332</td>
					<td>96</td>
					<td>3,237</td>
					<td>69</td>				
				</tr>						
				<tr>
					<td>WGT (Kg)</td>
					<td>987,770</td>
					<td>251,600</td>
					<td>178,398</td>
					<td>1,408,768</td>
					<td>1,021,624</td>
					<td>138</td>
					<td>1,059,047</td>
					<td>133</td>
					<td>1,512,193</td>
					<td>93</td>				
				</tr>

			</tbody>
		</table>		
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th rowspan="2">AGENT</th>
					<th colspan="2">YDT AUG 2013</th>
					<th colspan="2">YR 2012</th>
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
					<td>1,776</td>
					<td>79.14</td>
					<td>2,252</td>
					<td>78.11</td>
					<td>78.86</td>			
				</tr>					
				<tr>
					<td>HWWL</td>
					<td>430</td>
					<td>19.16</td>
					<td>601</td>
					<td>20.85</td>
					<td>71.55</td>			
				</tr>
				<tr>
					<td>KWO</td>
					<td>15</td>
					<td>0.67</td>
					<td>-</td>
					<td>-</td>
					<td>#DIV/0!</td>		
				</tr>
				<tr>
					<td>FLY</td>
					<td>9</td>
					<td>0.40</td>
					<td>14</td>
					<td>0.49</td>
					<td>64.29</td>		
				</tr>				
				<tr>
					<td>OTHER</td>
					<td>14</td>
					<td>0.62</td>
					<td>16</td>
					<td>0.55</td>
					<td>77.84</td>		
				</tr>				
				<tr>
					<td>TOTAL</td>
					<td>2.244</td>
					<td>100.0</td>
					<td>2,883</td>
					<td>100.0</td>
					<td>77.84</td>		
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