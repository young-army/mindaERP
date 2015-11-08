jQuery.noConflict();
jQuery(document).ready(function() {
	jQuery('#brand').change(function(){
		var $b = jQuery('#brand');
		var $p = jQuery('#product_name');
		var $c = jQuery('#produk');
		$c.find('option:not([value=""])').remove(); //Remove previous items
		
		jQuery.ajax({
			type: 'POST',
			url: urlProduk + '/?brand=' + jQuery(this).val() + '&product_name=' + $p.val(),
			success: function(data) {
				if(data.length > 0) {
					jQuery(data).each(function(){
						$c.append('<option value="'+this.id+'">'+this.nama+'</option>');
					});
				}
				else {
					alert('No data available!');
				}
			},
			dataType: 'json'
		});
	});

	jQuery('#product_name').change(function(){
		var $b = jQuery('#brand');
		var $p = jQuery('#product_name');
		var $c = jQuery('#produk');
		$c.find('option:not([value=""])').remove(); //Remove previous items
		
		jQuery.ajax({
			type: 'POST',
			url: urlProduk + '/?brand=' + $b.val() + '&product_name=' + jQuery(this).val(),
			success: function(data) {
				if(data.length > 0) {
					jQuery(data).each(function(){
						$c.append('<option value="'+this.id+'">'+this.nama+'</option>');
					});
				}
				else {
					alert('No data available!');
				}
			},
			dataType: 'json'
		});
	});
});

function getProduct() {
	var $b = jQuery('#brand');
	var $p = jQuery('#product_name');
	var $c = jQuery('#produk');
	$c.find('option:not([value=""])').remove(); //Remove previous items
	jQuery.ajax({
		type: 'POST',
		url: urlProduk + '/?brand=' + $b.val() + '&product_name=' + $p.val(),
		success: function(data) {
			if(data.length > 0) {
				jQuery(data).each(function(){
					$c.append('<option value="'+this.id+'">'+this.nama+'</option>');
				});
			}
			else {
				alert('No data available!');
			}
		},
		dataType: 'json'
	});
}

function getProductByVal(brand, pname, produk) {
	var $c = jQuery('#produk');
	$c.find('option:not([value=""])').remove(); //Remove previous items
	jQuery.ajax({
		type: 'POST',
		url: urlProduk + '/?brand=' + brand + '&product_name=' + pname,
		success: function(data) {
			if(data.length > 0) {
				jQuery(data).each(function(){
					$c.append('<option value="'+this.id+'"'+ (produk==this.id?' selected="selected"':'') +'>'+this.nama+'</option>');
				});
			}
			else {
				alert('No data available!');
			}
		},
		dataType: 'json'
	});
}
