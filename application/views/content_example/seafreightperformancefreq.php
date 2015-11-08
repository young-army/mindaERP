<?php
$__page_title = "Air Freight &raquo; EXPORT PERFORMANCE Yr.2011 - YTD JUNE 2013 (FREQ)";

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
					<td>266</td>
					<td>278</td>
					<td>296</td>
					<td>303</td>
					<td>98</td>			
				</tr>					
				<tr>
					<td>FEB</td>
					<td>227</td>
					<td>312</td>
					<td>321</td>
					<td>340</td>
					<td>94</td>			
				</tr>					
				<tr>
					<td>MAR</td>
					<td>308</td>
					<td>293</td>
					<td>310</td>
					<td>319</td>
					<td>97</td>			
				</tr>					
				<tr>
					<td>APR</td>
					<td>231</td>
					<td>260</td>
					<td>287</td>
					<td>283</td>
					<td>101</td>			
				</tr>					
				<tr>
					<td>MAY</td>
					<td>292</td>
					<td>264</td>
					<td>339</td>
					<td>288</td>
					<td>118</td>			
				</tr>					
				<tr>
					<td>JUN</td>
					<td>352</td>
					<td>306</td>
					<td>308</td>
					<td>334</td>
					<td>92</td>			
				</tr>					
				<tr>
					<td>JUL</td>
					<td>342</td>
					<td>329</td>
					<td>-</td>
					<td>355</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>AUG</td>
					<td>383</td>
					<td>330</td>
					<td>-</td>
					<td>360</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>SEP</td>
					<td>318</td>
					<td>293</td>
					<td>-</td>
					<td>328</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>OCT</td>
					<td>328</td>
					<td>310</td>
					<td>-</td>
					<td>347</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>NOV</td>
					<td>270</td>
					<td>292</td>
					<td>-</td>
					<td>327</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>DEC</td>
					<td>297</td>
					<td>264</td>
					<td>-</td>
					<td>296</td>
					<td>-</td>			
				</tr>					
				<tr>
					<td>TOTAL</td>
					<td>3,614</td>
					<td>3,531</td>
					<td>1,861</td>
					<td>3,880</td>
					<td>48</td>			
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