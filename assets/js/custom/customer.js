// google maps
var geocoder;
var map;
var marker;

function initialize() {
	var lat = document.getElementById('latitude').value;
	var lng = document.getElementById('longitude').value;

	geocoder = new google.maps.Geocoder();
	var latLng = new google.maps.LatLng(lat, lng);
	var myMapParams = { zoom: 16, center: latLng, mapTypeId: google.maps.MapTypeId.ROADMAP };
	map = new google.maps.Map(document.getElementById('mapCanvas'), myMapParams);
	var myMarkerParams = { position: latLng, map: map, draggable: true };
	marker = new google.maps.Marker(myMarkerParams);

	updateMarkerPosition(latLng);
	geocodePosition(latLng);

	google.maps.event.addListener(marker, 'dragstart', 
	function() {
		updateMarkerAddress('Dragging...,Dragging...');
	});

	google.maps.event.addListener(marker, 'drag', 
	function() {              
		updateMarkerPosition(marker.getPosition());
	});

	google.maps.event.addListener(marker, 'dragend', 
	function() {                
		geocodePosition(marker.getPosition());
	});
}

function codeAddress() {
	var sAddress = document.getElementById('alamat_koresponden').value;
	var sCity = document.getElementById('ktkota').value;
	var sAddressComplete = sAddress.concat(',', sCity, ',', 'ID');
	geocoder.geocode({ 'address': sAddressComplete },
	function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			marker.setMap(null);
			map.setCenter(results[0].geometry.location);
			var myMarkerParams = { position: results[0].geometry.location, map: map, draggable: true };
			marker = new google.maps.Marker(myMarkerParams);
			
			updateMarkerPosition(results[0].geometry.location);
			geocodePosition(results[0].geometry.location);
			
			google.maps.event.addListener(marker, 'dragstart',
			function() {
				updateMarkerAddress('Dragging...,Dragging...');
			});

			google.maps.event.addListener(marker, 'drag',
			function() {
				updateMarkerPosition(marker.getPosition());
			});

			google.maps.event.addListener(marker, 'dragend',
			function() {
				geocodePosition(marker.getPosition());
			});
		} else {
			alert('error ' + status);
		}
	});
}

function geocodePosition(pos) {
	geocoder.geocode({ latLng: pos },
	function(results) {
		if (results && results.length > 0) {
			updateMarkerAddress(results[0].formatted_address);
		} else {
			updateMarkerAddress('-,-');
		}
	});
}        

function updateMarkerPosition(latLng) {
	document.getElementById('latitude').value = latLng.lat();
	document.getElementById('longitude').value = latLng.lng();
}

function updateMarkerAddress(str) {
	var arrStr = str.split(',');
	document.getElementById('alamat_koresponden').value = arrStr[0];
	document.getElementById('ktkota').value = arrStr[1];
}

// Onload handler to fire off the app.
try {
	//google.maps.event.addDomListener(window, 'load', initialize);
}
catch(e) {}

// custom scripts for customer form
jQuery(function() {
                
	jQuery("form").validity(function() {
	
		jQuery("#kode").require();
		jQuery("#nama").require();
		jQuery("#kodepos")
			.require()
			.match("number");
			
		// $("#nama").require()
			// .match("date")
			// .lessThanOrEqualTo(new Date());
			
	});
	
});

var dataCount = 0;
var currRowIndex = -1;
function addKoresponden() {
	var kat = document.getElementById("kategori_alamat");
	var katTeks = kat.options[kat.selectedIndex].text;
	var katValue = kat.options[kat.selectedIndex].value;
	
	var alamat = document.getElementById("alamat_koresponden");
	var ket = document.getElementById("ktketerangan");
	var kota = document.getElementById("ktkota");
	var lang = document.getElementById("longitude");
	var lot = document.getElementById("latitude");

	var tbl = document.getElementById("tblKoresponden");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = katTeks + "<input type='hidden' name='kats[]' value='"+ katValue +"' />";
		row.cells[1].innerHTML = alamat.value + "<input type='hidden' name='alamats[]' value='"+ alamat.value +"' />";
		row.cells[2].innerHTML = kota.value + "<input type='hidden' name='kotas[]' value='"+ kota.value +"' />";
		row.cells[3].innerHTML = ket.value + "<input type='hidden' name='kets[]' value='"+ ket.value +"' />";
		row.cells[4].innerHTML = lot.value + "<input type='hidden' name='lats[]' value='"+ lot.value +"' />";
		row.cells[5].innerHTML = lang.value + "<input type='hidden' name='longs[]' value='"+ lang.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var ckat = row.insertCell(0);
		var calamat = row.insertCell(1);
		var ckota = row.insertCell(2);
		var cket = row.insertCell(3);
		var clot = row.insertCell(4);
		var clang = row.insertCell(5);
		var ccon = row.insertCell(6);
		
		ckat.innerHTML = katTeks + "<input type='hidden' name='kats[]' value='"+ katValue +"' />";
		calamat.innerHTML = alamat.value + "<input type='hidden' name='alamats[]' value='"+ alamat.value +"' />";
		ckota.innerHTML = kota.value + "<input type='hidden' name='kotas[]' value='"+ kota.value +"' />";
		cket.innerHTML = ket.value + "<input type='hidden' name='kets[]' value='"+ ket.value +"' />";
		clot.innerHTML = lot.value + "<input type='hidden' name='lats[]' value='"+ lot.value +"' />";
		clang.innerHTML = lang.value + "<input type='hidden' name='longs[]' value='"+ lang.value +"' />";
		ccon.innerHTML = "<a href='#tblKoresponden' onclick='editRow(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblKoresponden' onclick='deleteRow(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCount++;
	}	
	//reset form value
	resetForm();
	
	//reset current rowIndex
	currRowIndex = -1;
	
	//reset maps location after edit
	// initialize();
	// codeAddress();
	
	//closing edit form
	closeFormKor();
}

function resetForm() {
	var kat = document.getElementById("kategori_alamat");
	var alamat = document.getElementById("alamat_koresponden");
	var ket = document.getElementById("ktketerangan");
	var kota = document.getElementById("ktkota");
	var lang = document.getElementById("longitude");
	var lot = document.getElementById("latitude");

	kat.selectedIndex = 0;
	alamat.value = "";
	kota.value = "";
	lang.value = "106.766342";
	lot.value = "-6.264563";
	ket.value = "";
}

function deleteRow(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblKoresponden");
		tbl.deleteRow(row.rowIndex);
	
		dataCount--;	
		currRowIndex = -1;
	}
}

function deleteRowByRowIndex(rowIndex) {
	var tbl = document.getElementById("tblKoresponden");
	tbl.deleteRow(rowIndex);
	
	dataCount--;
	currRowIndex = -1;
}

function editRow(elm) {	
	var kat = document.getElementById("kategori_alamat");
	var alamat = document.getElementById("alamat_koresponden");
	var ket = document.getElementById("ktketerangan");
	var kota = document.getElementById("ktkota");
	var clong = document.getElementById("longitude");
	var clat = document.getElementById("latitude");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	// var elms = row.getElementsByTagName('input');
	// for(var x=0; elms.length; x++) {
		// var attrName = elms[x].getAttribute("name");
		// switch(attrName) {
			// case "kats[]":
				// for(var j=0; j<kat.options.length; j++) {
					// if(kat.options[j].value == elms[x].value) {
					   // kat.selectedIndex = j;
					   // break;
					// }
				// }
				// break;
			// case "alamats[]":
				// alamat.value = elms[x].value;
				// break;
			// case "kets[]":
				// ket.value = elms[x].value;
				// break;
			// case "kotas[]":
				// kota.value = elms[x].value;
				// break;
			// case "longs[]":
				// clong.value = elms[x].value;
				// break;
			// case "lats[]":
				// clat.value = elms[x].value;
				// break;
		// }
	// }	
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<kat.options.length; j++) {
		if(kat.options[j].value == elms[0].value) {
		   kat.selectedIndex = j;
		   break;
		}
	}

	alamat.value = elms[1].value;

	ket.value = elms[3].value;

	kota.value = elms[2].value;

	clong.value = elms[5].value;

	clat.value = elms[4].value;
	
	if(document.getElementById('wKor').style.display == 'none') {
		//open form edit
		openFormKor();
	}	
}

function openFormKor() {
	jQuery('#wKor').slideToggle('slow');	
	
	var kota = document.getElementById("ktkota");
	var clong = document.getElementById("longitude");
	var clat = document.getElementById("latitude");

	if(kota.value=="") {
		kota.value  = 'Jakarta';
		clong.value = "106.766342";
		clat.value  = "-6.264563";
	}
	
	//init maps
	initialize();
	codeAddress();
}

function closeFormKor() {
	//reset form value
	resetForm();

	currRowIndex = -1;
	jQuery('#wKor').slideToggle('slow');
}

// kontak
var dataCountKontak = 0;
var currRowIndexKontak = -1;
function addKontak() {
	var tipe = document.getElementById("kttipe");
	var tipeTeks = tipe.options[tipe.selectedIndex].text;
	var tipeValue = tipe.options[tipe.selectedIndex].value;
	
	var nama = document.getElementById("ktnama");
	var jabatan = document.getElementById("ktjabatan");
	var email = document.getElementById("ktemail");
	var hp = document.getElementById("kthp");
	var telp = document.getElementById("kttelp");
	var kete = document.getElementById("kteketerangan");

	var tbl = document.getElementById("tblKontak");
	var rowCount = tbl.rows.length;
	
	if(currRowIndexKontak > -1) {
		var row = tbl.rows[currRowIndexKontak];
		
		row.cells[0].innerHTML = nama.value + "<input type='hidden' name='namas[]' value='"+ nama.value +"' />";
		row.cells[1].innerHTML = jabatan.value + "<input type='hidden' name='jabatans[]' value='"+ jabatan.value +"' />";
		row.cells[2].innerHTML = email.value + "<input type='hidden' name='emails[]' value='"+ email.value +"' />";
		row.cells[3].innerHTML = tipeTeks + "<input type='hidden' name='tipes[]' value='"+ tipeValue +"' />";
		row.cells[4].innerHTML = hp.value + "<input type='hidden' name='hps[]' value='"+ hp.value +"' />";
		row.cells[5].innerHTML = telp.value + "<input type='hidden' name='telps[]' value='"+ telp.value +"' />";
		row.cells[6].innerHTML = kete.value + "<input type='hidden' name='ketes[]' value='"+ kete.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cnama = row.insertCell(0);
		var cjabatan = row.insertCell(1);
		var cemail = row.insertCell(2);
		var ctipe = row.insertCell(3);
		var chp = row.insertCell(4);
		var ctelp = row.insertCell(5);
		var ckete = row.insertCell(6);
		var ccon = row.insertCell(7);
		
		cnama.innerHTML = nama.value + "<input type='hidden' name='namas[]' value='"+ nama.value +"' />";
		cjabatan.innerHTML = jabatan.value + "<input type='hidden' name='jabatans[]' value='"+ jabatan.value +"' />";
		cemail.innerHTML = email.value + "<input type='hidden' name='emails[]' value='"+ email.value +"' />";
		ctipe.innerHTML = tipeTeks + "<input type='hidden' name='tipes[]' value='"+ tipeValue +"' />";
		chp.innerHTML = hp.value + "<input type='hidden' name='hps[]' value='"+ hp.value +"' />";
		ctelp.innerHTML = telp.value + "<input type='hidden' name='telps[]' value='"+ telp.value +"' />";
		ckete.innerHTML = kete.value + "<input type='hidden' name='ketes[]' value='"+ kete.value +"' />";
		ccon.innerHTML = "<a href='#tblKontak' onclick='editRowKontak(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblKontak' onclick='deleteRowKontak(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCountKontak++;
	}	
	//reset form value
	resetFormKontak();
	
	//reset current rowIndex
	currRowIndexKontak = -1;
	
	//closing edit form
	closeFormKontak();
}

function deleteRowKontak(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblKontak");
		tbl.deleteRow(row.rowIndex);
	
		dataCountKontak--;	
		currRowIndexKontak = -1;
	}
}

function deleteRowByRowIndexKontak(rowIndex) {
	var tbl = document.getElementById("tblKontak");
	tbl.deleteRow(rowIndex);
	
	dataCountKontak--;
	currRowIndexKontak = -1;
}

function editRowKontak(elm) {	
	var nama = document.getElementById("ktnama");
	var jabatan = document.getElementById("ktjabatan");
	var email = document.getElementById("ktemail");
	var tipe = document.getElementById("kttipe");
	var hp = document.getElementById("kthp");
	var telp = document.getElementById("kttelp");
	var kete = document.getElementById("kteketerangan");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndexKontak = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<tipe.options.length; j++) {
		if(tipe.options[j].value == elms[3].value) {
		   tipe.selectedIndex = j;
		   break;
		}
	}

	nama.value = elms[0].value;
	jabatan.value = elms[1].value;
	email.value = elms[2].value;
	hp.value = elms[4].value;
	telp.value = elms[5].value;
	kete.value = elms[6].value;
	
	if(document.getElementById('wKontak').style.display == 'none') {
		//open form edit
		openFormKontak();
	}
}

function resetFormKontak() {
	var nama = document.getElementById("ktnama");
	var jabatan = document.getElementById("ktjabatan");
	var email = document.getElementById("ktemail");
	var tipe = document.getElementById("kttipe");
	var hp = document.getElementById("kthp");
	var telp = document.getElementById("kttelp");
	var kete = document.getElementById("kteketerangan");

	tipe.selectedIndex = 0;
	nama.value = "";
	jabatan.value = "";
	email.value = "";
	hp.value = "";
	telp.value = "";
	kete.value = "";
}

function openFormKontak() {
	jQuery('#wKontak').slideToggle('slow');
}

function closeFormKontak() {
	//reset form value
	resetFormKontak();

	currRowIndexKontak = -1;
	jQuery('#wKontak').slideToggle('slow');
}

// rekening
var dataCountRek = 0;
var currRowIndexRek = -1;
function addRek() {
	var accnorek = document.getElementById("accnorek");
	var accbank = document.getElementById("accbank");
	var accpemilik = document.getElementById("accpemilik");
	
	var tbl = document.getElementById("tblRek");
	var rowCount = tbl.rows.length;
	
	if(currRowIndexRek > -1) {
		var row = tbl.rows[currRowIndexRek];
		
		row.cells[0].innerHTML = accnorek.value + "<input type='hidden' name='accnoreks[]' value='"+ accnorek.value +"' />";
		row.cells[1].innerHTML = accbank.value + "<input type='hidden' name='accbanks[]' value='"+ accbank.value +"' />";
		row.cells[2].innerHTML = accpemilik.value + "<input type='hidden' name='accpemiliks[]' value='"+ accpemilik.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var crek = row.insertCell(0);
		var cbank = row.insertCell(1);
		var cpemilik = row.insertCell(2);
		var ccon = row.insertCell(3);
		
		crek.innerHTML = accnorek.value + "<input type='hidden' name='accnoreks[]' value='"+ accnorek.value +"' />";
		cbank.innerHTML = accbank.value + "<input type='hidden' name='accbanks[]' value='"+ accbank.value +"' />";
		cpemilik.innerHTML = accpemilik.value + "<input type='hidden' name='accpemiliks[]' value='"+ accpemilik.value +"' />";
		ccon.innerHTML = "<a href='#tblRek' onclick='editRowRek(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblRek' onclick='deleteRowRek(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCountRek++;
	}	
	//reset form value
	resetFormRek();
	
	//reset current rowIndex
	currRowIndexRek = -1;
	
	//closing edit form
	closeFormRek();
}

function deleteRowRek(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblRek");
		tbl.deleteRow(row.rowIndex);
	
		dataCountRek--;	
		currRowIndexRek = -1;
	}
}

function deleteRowByRowIndexRek(rowIndex) {
	var tbl = document.getElementById("tblRek");
	tbl.deleteRow(rowIndex);
	
	dataCountRek--;
	currRowIndexRek = -1;
}

function editRowRek(elm) {	
	var accnorek = document.getElementById("accnorek");
	var accbank = document.getElementById("accbank");
	var accpemilik = document.getElementById("accpemilik");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndexRek = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	
	accnorek.value = elms[0].value;
	accbank.value = elms[1].value;
	accpemilik.value = elms[2].value;
	
	if(document.getElementById('wRek').style.display == 'none') {
		//open form edit
		openFormRek();
	}
}

function resetFormRek() {
	var accnorek = document.getElementById("accnorek");
	var accbank = document.getElementById("accbank");
	var accpemilik = document.getElementById("accpemilik");

	accnorek.value = "";
	accbank.value = "";
	accpemilik.value = "";
}

function openFormRek() {
	jQuery('#wRek').slideToggle('slow');
}

function closeFormRek() {
	//reset form value
	resetFormRek();

	currRowIndexRek = -1;
	jQuery('#wRek').slideToggle('slow');
}