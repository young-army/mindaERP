var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var ket = document.getElementById("ket");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs[]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = ket.value + "<input type='hidden' name='kets[]' value='"+ ket.value +"' />";
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
		cket.innerHTML = ket.value + "<input type='hidden' name='kets[]' value='"+ ket.value +"' />";
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
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty_kg").value = "";
	document.getElementById("qty_p").value = "";
	document.getElementById("ket").value = "";
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
	var produk = document.getElementById("produk");
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var ket = document.getElementById("ket");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}

	qty_kg.value = elms[1].value;
	
	qty_p.value = elms[2].value;

	ket.value = elms[3].value;
	
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

// tblData2
var dataCount2 = 0;
var currRowIndex2 = -1;
function addData2() {
	var produk = document.getElementById("produk2");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty_kg = document.getElementById("qty_kg2");
	var qty_p = document.getElementById("qty_p2");
	var ket = document.getElementById("ket2");
	
	var tbl = document.getElementById("tblData2");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produk2s[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kg2s[]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_p2s[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = ket.value + "<input type='hidden' name='ket2s[]' value='"+ ket.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty_kg = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var cket = row.insertCell(3);
		var ccon = row.insertCell(4);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produk2s[]' value='"+ produkValue +"' />";
		cqty_kg.innerHTML = qty_kg.value + "<input type='hidden' name='qty_kg2s[]' value='"+ qty_kg.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_p2s[]' value='"+ qty_p.value +"' />";
		cket.innerHTML = ket.value + "<input type='hidden' name='ket2s[]' value='"+ ket.value +"' />";
		ccon.innerHTML = "<a href='#tblData2' onclick='editRow2(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData2' onclick='deleteRow2(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCount2++;
	}	
	//reset form value
	resetForm2();
	
	//reset current rowIndex
	currRowIndex2 = -1;
	
	//closing edit form
	closeForm2();
}

function resetForm2() {
	document.getElementById("produk2").selectedIndex = 0;
	document.getElementById("qty_kg2").value = "";
	document.getElementById("qty_p2").value = "";
	document.getElementById("ket2").value = "";
}

function deleteRow2(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblData2");
		tbl.deleteRow(row.rowIndex);
	
		dataCount2--;	
		currRowIndex2 = -1;
	}
}

function deleteRowByRowIndex2(rowIndex) {
	var tbl = document.getElementById("tblData2");
	tbl.deleteRow(rowIndex);
	
	dataCount2--;
	currRowIndex2 = -1;
}

function editRow2(elm) {	
	var produk = document.getElementById("produk2");
	var qty_kg = document.getElementById("qty_kg2");
	var qty_p = document.getElementById("qty_p2");
	var ket = document.getElementById("ket2");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}

	qty_kg.value = elms[1].value;
	
	qty_p.value = elms[2].value;

	ket.value = elms[3].value;
	
	if(document.getElementById('wForm2').style.display == 'none') {
		//open form edit
		openForm2();
	}
}

function openForm2() {
	jQuery('#wForm2').slideToggle('slow');
}

function closeForm2() {
	//reset form value
	resetForm2();

	currRowIndex2 = -1;
	jQuery('#wForm2').slideToggle('slow');
}

// tblData3
var dataCount3 = 0;
var currRowIndex3 = -1;
function addData3() {
	var produk = document.getElementById("produk3");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty_kg = document.getElementById("qty_kg3");
	var qty_p = document.getElementById("qty_p3");
	var ket = document.getElementById("ket3");
	
	var tbl = document.getElementById("tblData3");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produk3s[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kg3s[]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_p3s[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = ket.value + "<input type='hidden' name='ket3s[]' value='"+ ket.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty_kg = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var cket = row.insertCell(3);
		var ccon = row.insertCell(4);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produk3s[]' value='"+ produkValue +"' />";
		cqty_kg.innerHTML = qty_kg.value + "<input type='hidden' name='qty_kg3s[]' value='"+ qty_kg.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_p3s[]' value='"+ qty_p.value +"' />";
		cket.innerHTML = ket.value + "<input type='hidden' name='ket3s[]' value='"+ ket.value +"' />";
		ccon.innerHTML = "<a href='#tblData3' onclick='editRow3(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData3' onclick='deleteRow3(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCount3++;
	}	
	//reset form value
	resetForm3();
	
	//reset current rowIndex
	currRowIndex3 = -1;
	
	//closing edit form
	closeForm3();
}

function resetForm3() {
	document.getElementById("produk3").selectedIndex = 0;
	document.getElementById("qty_kg3").value = "";
	document.getElementById("qty_p3").value = "";
	document.getElementById("ket3").value = "";
}

function deleteRow3(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblData3");
		tbl.deleteRow(row.rowIndex);
	
		dataCount3--;	
		currRowIndex3 = -1;
	}
}

function deleteRowByRowIndex3(rowIndex) {
	var tbl = document.getElementById("tblData3");
	tbl.deleteRow(rowIndex);
	
	dataCount3--;
	currRowIndex3 = -1;
}

function editRow3(elm) {	
	var produk = document.getElementById("produk3");
	var qty_kg = document.getElementById("qty_kg3");
	var qty_p = document.getElementById("qty_p3");
	var ket = document.getElementById("ket3");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}

	qty_kg.value = elms[1].value;
	
	qty_p.value = elms[2].value;

	ket.value = elms[3].value;
	
	if(document.getElementById('wForm3').style.display == 'none') {
		//open form edit
		openForm3();
	}
}

function openForm3() {
	jQuery('#wForm3').slideToggle('slow');
}

function closeForm3() {
	//reset form value
	resetForm3();

	currRowIndex3 = -1;
	jQuery('#wForm3').slideToggle('slow');
}