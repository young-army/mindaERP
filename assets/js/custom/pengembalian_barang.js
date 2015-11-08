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
	
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var keterangan = document.getElementById("keterangan");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs[]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty_kg = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var cket = row.insertCell(3);
		var ccon = row.insertCell(4);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cqty_kg.innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs[]' value='"+ qty_kg.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		cket.innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' />";
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
	document.getElementById("qty_kg").value = "";
	document.getElementById("qty_p").value = "";
	document.getElementById("keterangan").value = "";
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
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var keterangan = document.getElementById("keterangan");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');

	qty_kg.value = elms[1].value;

	qty_p.value = elms[2].value;

	keterangan.value = elms[3].value;
	
	for(var j=0; j<brand.options.length; j++) {
		if(brand.options[j].value == elms[4].value) {
		   brand.selectedIndex = j;
		   break;
		}
	}
	for(var j=0; j<product_name.options.length; j++) {
		if(product_name.options[j].value == elms[5].value) {
		   product_name.selectedIndex = j;
		   break;
		}
	}
	
	getProductByVal(elms[4].value, elms[5].value, elms[0].value);	
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