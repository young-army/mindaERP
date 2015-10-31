var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var brand = document.getElementById("brand");
	var brandTeks = brand.options[brand.selectedIndex].text;
	var brandValue = brand.options[brand.selectedIndex].value;
	
	var product_name = document.getElementById("product_name");
	var product_nameTeks = product_name.options[product_name.selectedIndex].text;
	var product_nameValue = product_name.options[product_name.selectedIndex].value;
	
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty = document.getElementById("qty");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty = row.insertCell(1);
		var ccon = row.insertCell(2);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cqty.innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' />";
		ccon.innerHTML = "<a href='#tblData' onclick='editRow(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData' onclick='deleteRow(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCount++;
	}	
	//reset form value
	resetForm();
	
	//reset current rowIndex
	currRowIndex = -1;
	
	//closing edit form
	closeForm();
}

function resetForm() {
	document.getElementById("brand").selectedIndex = 0;
	document.getElementById("product_name").selectedIndex = 0;
	
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty").value = "";
}

function deleteRow(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblData");
		tbl.deleteRow(row.rowIndex);
	
		dataCount--;	
		currRowIndex = -1;
	}
}

function deleteRowByRowIndex(rowIndex) {
	var tbl = document.getElementById("tblData");
	tbl.deleteRow(rowIndex);
	
	dataCount--;
	currRowIndex = -1;
}

function editRow(elm) {	
	var brand = document.getElementById("brand");
	var product_name = document.getElementById("product_name");
	
	var produk = document.getElementById("produk");
	var qty = document.getElementById("qty");
	
	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	
	qty.value = elms[1].value;
	
	for(var j=0; j<brand.options.length; j++) {
		if(brand.options[j].value == elms[2].value) {
		   brand.selectedIndex = j;
		   break;
		}
	}
	for(var j=0; j<product_name.options.length; j++) {
		if(product_name.options[j].value == elms[3].value) {
		   product_name.selectedIndex = j;
		   break;
		}
	}
	
	getProductByVal(elms[2].value, elms[3].value, elms[0].value);	
	// alert(document.getElementById('hTally_'+elms[0].value).value);
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}
	
	if(document.getElementById('wForm').style.display == 'none') {
		//open form edit
		openForm();
	}
}

function openForm() {
	jQuery('#wForm').slideToggle('slow');
}

function closeForm() {
	//reset form value
	resetForm();

	currRowIndex = -1;
	jQuery('#wForm').slideToggle('slow');
}