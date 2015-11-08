<?php
$__page_title = "Air Freight &raquo; Summary Kinerja Air Freight Ytd Aug 2013";

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
					<div id="box-filter">
					<!--Search By&nbsp;
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
					<td colspan="11" align="left">AFE</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>2,337</td>
					<td>496</td>
					<td>347</td>
					<td>3,180</td>
					<td>3,127</td>
					<td>102</td>
					<td>3,385</td>
					<td>94</td>
					<td>4,648</td>
					<td>68</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>1,121,037</td>
					<td>193,325</td>
					<td>172,708</td>
					<td>1,487,070</td>
					<td>1,883,077</td>
					<td>79</td>
					<td>2,118,539</td>
					<td>70</td>
					<td>2,756,352</td>
					<td>54</td>					
				</tr>
<tr>
					<td colspan="11" align="left">CUSTOMS CLEARANCE</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>2,369</td>
					<td>482</td>
					<td>266</td>
					<td>3,017</td>
					<td>2,934</td>
					<td>103</td>
					<td>3,228</td>
					<td>93</td>
					<td>4,480</td>
					<td>67</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>1,450,971</td>
					<td>303,767</td>
					<td>209,547</td>
					<td>1,964,285</td>
					<td>1,731,511</td>
					<td>113</td>
					<td>1,600,822</td>
					<td>123</td>
					<td>2,167,552</td>
					<td>91</td>					
				</tr>
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
					<td>978,770</td>
					<td>251,600</td>
					<td>178,198</td>
					<td>1,408,768</td>
					<td>1,021,624</td>
					<td>138</td>
					<td>1,059,047</td>
					<td>133</td>
					<td>1,512,193</td>
					<td>93</td>					
				</tr>
<tr>
					<td colspan="11" align="left">TPS</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>459</td>
					<td>67</td>
					<td>49</td>
					<td>575</td>
					<td>628</td>
					<td>92</td>
					<td>703</td>
					<td>82</td>
					<td>988</td>
					<td>58</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>312,676</td>
					<td>65,327</td>
					<td>71,075</td>
					<td>449,077</td>
					<td>396,382</td>
					<td>113</td>
					<td>410,178</td>
					<td>109</td>
					<td>580,591</td>
					<td>77</td>					
				</tr>
<tr>
					<td colspan="11" align="left">DOO</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>2,022</td>
					<td>352</td>
					<td>311</td>
					<td>2,685</td>
					<td>3,442</td>
					<td>78</td>
					<td>3,822</td>
					<td>70</td>
					<td>51,174</td>
					<td>52</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>99,839</td>
					<td>13,894</td>
					<td>15,578</td>
					<td>129,311</td>
					<td>176,165</td>
					<td>73</td>
					<td>190,259</td>
					<td>68</td>
					<td>259,216</td>
					<td>50</td>					
				</tr>
<tr>
					<td colspan="11" align="left">DOI</td>					
				</tr>
				<tr>
					<td>FREQ</td>
					<td>649</td>
					<td>142</td>
					<td>78</td>
					<td>869</td>
					<td>1,244</td>
					<td>70</td>
					<td>1,369</td>
					<td>63</td>
					<td>1,826td>
					<td>48</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>80,413</td>
					<td>36,669</td>
					<td>6,547</td>
					<td>123,629</td>
					<td>120,932</td>
					<td>102</td>
					<td>130,608</td>
					<td>95</td>
					<td>158,288</td>
					<td>78</td>					
				</tr>				
				<tr>
					<td colspan="11" align="left">RESUME</td>				
				</tr>
				<tr>
					<td>FREQ</td>
					<td>9,410</td>
					<td>1,876</td>
					<td>1,284</td>
					<td>12,570</td>
					<td>13,471</td>
					<td>93</td>
					<td>14,839</td>
					<td>85</td>
					<td>20,353</td>
					<td>62</td>					
				</tr>							
				<tr>
					<td>WGT (Kg)</td>
					<td>4,043,705</td>
					<td>864,582</td>
					<td>653,852</td>
					<td>5,562,139</td>
					<td>5,329,691</td>
					<td>104</td>
					<td>5,509,453</td>
					<td>101</td>
					<td>7,434,192</td>
					<td>75</td>					
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