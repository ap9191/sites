jQuery(document).ready(function($) {
	$('button#trigger').click(function(){
		$val1 = $('#first-date').val();
		$('#first-date1').val($val1);
		$val2 = $('#second-date').val();
		$('#second-date1').val($val2);
		$val3 = $('#humans').val();
		$('#humans1').val($val3);
		$val4 = $('#children').val();
		$('#children1').val($val4);
	});
	$('select#numbers').change(function(){
		$num = $('#numbers').val();
		if ($num == 'Люкс') {
			$('button#payment').attr('onclick', "ipayCheckout({amount:3000,currency:'RUB',order_number:'',description: ''},function(order) { showSuccessfulPurchase(order) },function(order) { showFailurefulPurchase(order) })");
		}
		if ($num == 'Супер-Люкс') {
			$('button#payment').attr('onclick', "ipayCheckout({amount:10000,currency:'RUB',order_number:'',description: ''},function(order) { showSuccessfulPurchase(order) },function(order) { showFailurefulPurchase(order) })");
		}
	});
});
  

