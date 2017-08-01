var order =
{
	PRICE_UA_1: 0,
    PRICE_UA_2: 0,
    PRICE_UA_3: 0,
    
    DISCOUNT_PRICE_UA_1: 0,
    DISCOUNT_PRICE_UA_2: 0,
    DISCOUNT_PRICE_UA_3: 0,
    
	init: function(prices, discount_prices)
	{
		var _self = this;
		
		_self.PRICE_UA_1 = prices[0];
		_self.PRICE_UA_2 = prices[1];
		_self.PRICE_UA_3 = prices[2];
		
		_self.DISCOUNT_PRICE_UA_1 = discount_prices[0];
		_self.DISCOUNT_PRICE_UA_2 = discount_prices[1];
		_self.DISCOUNT_PRICE_UA_3 = discount_prices[2];
		
		$('#orderform-count').change(function(){
			var i = $(this).find('option:selected').val();
			
			var price = _self['PRICE_UA_'+i];
			var priceDiscaunt = _self['DISCOUNT_PRICE_UA_'+i];
			var discaunt = 100 - Math.round(priceDiscaunt/price*100);
			
			$('.js-price').text(price + ' грн');
			$('.js-price-discaunt').text(priceDiscaunt + ' грн');
			$('.js-percent-discaunt').text(discaunt);
		});
		
		$('.js-order-count').click(function(){
			var count = $(this).data('count');
			$('#orderform-count').val(count);
			$('#orderform-count').trigger('change') ;
		})
	}
}
