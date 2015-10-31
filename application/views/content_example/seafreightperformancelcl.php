<?php
$__page_title = "Air Freight &raquo; EXPORT PERFORMANCE Yr.2011 - YTD JUNE 2013 (LCL)";

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
					<th  rowspan="2">MONTH</th>
					<th colspan="5">FREQUENCY</th>					
				</tr>
				<tr>
					<th>2011</th>
					<th>2012</th>
					<th>2013</th>
					<th>TGT</th>	
					<th>%</th>					
				</tr>
			</thead>			
			<tbody>				
				<tr>
					<td>JAN</td>
					<td>735.88</td>
					<td>1,104.89</td>
					<td>696.70</td>
					<td>1,215.00</td>
					<td>57</td>			
				</tr>					
				<tr>
					<td>FEB</td>
					<td>733.07</td>
					<td>1,106.69</td>
					<td>661.51</td>
					<td>1,228.00</td>
					<td>54</td>			
				</tr>					
				<tr>
					<td>MAR</td>
					<td>854.74</td>
					<td>998.18</td>
					<td>720.17</td>
					<td>1,108.00</td>
					<td>65</td>			
				</tr>					
				<tr>
					<td>APR</td>
					<td>751.92</td>
					<td>628.74</td>
					<td>663.96</td>
					<td>698.00</td>
					<td>95</td>			
				</tr>					
				<tr>
					<td>MAY</td>
					<td>1,040.54</td>
					<td>1,028.73</td>
					<td>942.65</td>
					<td>1,142.00</td>
					<td>83</td>			
				</tr>					
				<tr>
					<td>JUN</td>
					<td>1,920.55</td>
					<td>1,369.85</td>
					<td>-</td>
					<td>1,493.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>JUL</td>
					<td>1,920.00</td>
					<td>1,369.85</td>
					<td>-</td>
					<td>1,493.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>AUG</td>
					<td>1,800.36</td>
					<td>1,589.23</td>
					<td>-</td>
					<td>1,764.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>SEP</td>
					<td>1,067.55</td>
					<td>910.85</td>
					<td>-</td>
					<td>1,011.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>OCT</td>
					<td>1,127.46</td>
					<td>636.08</td>
					<td>-</td>
					<td>706.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>NOV</td>
					<td>882.92</td>
					<td>503.11</td>
					<td>-</td>
					<td>558.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>DEC</td>
					<td>1,077.54</td>
					<td>712.43</td>
					<td>-</td>
					<td>791.00</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>TOTAL</td>
					<td>13,512</td>
					<td>11,890.55</td>
					<td>4,612.71</td>
					<td>13,159.00</td>
					<td>418.08</td>			
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