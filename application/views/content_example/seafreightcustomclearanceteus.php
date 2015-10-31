<?php
$__page_title = "Air Freight &raquo; IMPORT PERFORMANCE CUSTOM CLEARANCE 2011 - MAY 2013 (TEUS)";

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
					<td>84</td>
					<td>127</td>
					<td>236</td>
					<td>141</td>
					<td>167</td>			
				</tr>					
				<tr>
					<td>FEB</td>
					<td>211</td>
					<td>239</td>
					<td>322</td>
					<td>263</td>
					<td>122</td>			
				</tr>					
				<tr>
					<td>MAR</td>
					<td>243</td>
					<td>230</td>
					<td>306</td>
					<td>253</td>
					<td>121</td>			
				</tr>					
				<tr>
					<td>APR</td>
					<td>207</td>
					<td>208</td>
					<td>338</td>
					<td>229</td>
					<td>148</td>			
				</tr>					
				<tr>
					<td>MAY</td>
					<td>312</td>
					<td>192</td>
					<td>399</td>
					<td>211</td>
					<td>189</td>			
				</tr>					
				<tr>
					<td>JUN</td>
					<td>273</td>
					<td>221</td>
					<td>286</td>
					<td>243</td>
					<td>118</td>			
				</tr>					
				<tr>
					<td>JUL</td>
					<td>304</td>
					<td>268</td>
					<td>-</td>
					<td>289</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>AUG</td>
					<td>334</td>
					<td>346</td>
					<td>-</td>
					<td>381</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>SEP</td>
					<td>296</td>
					<td>305</td>
					<td>-</td>
					<td>336</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>OCT</td>
					<td>300</td>
					<td>362</td>
					<td>-</td>
					<td>398</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>NOV</td>
					<td>226</td>
					<td>343</td>
					<td>-</td>
					<td>377</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>DEC</td>
					<td>229</td>
					<td>288</td>
					<td>-</td>
					<td>317</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>TOTAL</td>
					<td>3,228</td>
					<td>3,196</td>
					<td>1,951</td>
					<td>3,510</td>
					<td>56</td>			
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