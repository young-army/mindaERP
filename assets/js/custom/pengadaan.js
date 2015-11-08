var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty = document.getElementById("qty");
	var qty_p = document.getElementById("qty_p");
	var harga = document.getElementById("harga");
	var matu = document.getElementById("matu");
	var keterangan = document.getElementById("keterangan");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = harga.value + "<input type='hidden' name='hargas[]' value='"+ harga.value +"' />";
		row.cells[4].innerHTML = matu.value + "<input type='hidden' name='matus[]' value='"+ matu.value +"' />";
		row.cells[5].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var charga = row.insertCell(3);
		var cmatu = row.insertCell(4);
		var cket = row.insertCell(5);
		var ccon = row.insertCell(6);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cqty.innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		charga.innerHTML = harga.value + "<input type='hidden' name='hargas[]' value='"+ harga.value +"' />";
		cmatu.innerHTML = matu.value + "<input type='hidden' name='matus[]' value='"+ matu.value +"' />";
		cket.innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
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
	document.getElementById("qty").value = "";
	document.getElementById("qty_p").value = "";
	document.getElementById("harga").value = "";
	document.getElementById("matu").value = "";
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

function deleteRowAll() {
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	if(rowCount > 0) {
		for(i=rowCount-1;i>0;i--) {
			tbl.deleteRow(i);
		}
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
	var qty = document.getElementById("qty");
	var qty_p = document.getElementById("qty_p");
	var harga = document.getElementById("harga");
	var matu = document.getElementById("matu");
	var keterangan = document.getElementById("keterangan");

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

	qty.value = elms[1].value;
	
	qty_p.value = elms[2].value;

	harga.value = elms[3].value;

	matu.value = elms[4].value;

	keterangan.value = elms[5].value;
	
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

function getProdukPR(idpr, urlData) {
	if(idpr!='') {
		jQuery.ajax({
			type: 'POST',
			url: urlData,
			success: function(data) {
				if(data.length > 0) {
					jQuery(data).each(function(){
						if(!checkIfExistsProduct(this.id_produk)) {
							var tbl = document.getElementById("tblData");
							var rowCount = tbl.rows.length;
							
							var row = tbl.insertRow(rowCount);
		
							var cproduk = row.insertCell(0);
							var cqty = row.insertCell(1);
							var cqty_p = row.insertCell(2);
							var charga = row.insertCell(3);
							var cmatu = row.insertCell(4);
							var cket = row.insertCell(5);
							var ccon = row.insertCell(6);
							
							cproduk.innerHTML = this.nama_produk + "<input type='hidden' name='produks[]' value='"+ this.id_produk +"' />";
							cqty.innerHTML = this.qty + "<input type='hidden' name='qtys[]' value='"+ this.qty +"' />";
							cqty_p.innerHTML = '0' + "<input type='hidden' name='qty_ps[]' value='0' />";
							charga.innerHTML = '0' + "<input type='hidden' name='hargas[]' value='0' />";
							cmatu.innerHTML = '' + "<input type='hidden' name='matus[]' value='' />";
							cket.innerHTML = '' + "<input type='hidden' name='kets[]' value='' />";
							ccon.innerHTML = "<a href='#tblData' onclick='editRow(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData' onclick='deleteRow(this)' class='delete'><span>Delete</span></a>";
							
							//increment count of data
							dataCount++;
						}
					});
				}
				else {
					alert('No data available!');
				}
			},
			dataType: 'json'
		});
	}
	else {
		deleteRowAll();
	}
}

function checkIfExistsProduct(val) {
	var elms = document.getElementsByName('produks[]');
	if(elms.length > 0) {
		for(i=0;i<elms.length;i++) {
			if(elms[i].value == val)
				return true;
		}
	}
	
	return false;
}