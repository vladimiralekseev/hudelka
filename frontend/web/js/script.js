var formaOrder =
{
	init: function()
	{
		var _self = this
		
		$("#order_main").find("#count").change(function(){
			var price1 = $(this).find(":selected").attr("price1");
			var price2 = $(this).find(":selected").attr("price2");
			$(".js_new_price_curs").text(price1+" грн")
			$(".js_old_price_curs").text(price2+" грн")
			$(".js_old_percent_curs").text(100-Math.floor(price1/price2*100))
		})
		
		$(".btn-order-count").click(function(){
			var count = $(this).attr("data-count")
			$("#order_main").find("#count").val(count)
			$("#order_main").find("#count").trigger("change")
		})
		
		/*
		$("#order_main").find("input").change(function(){
			$(this).removeClass("error")
		})
		
		$("#order_main").submit(function(ob){
			
			var send = true;
			
			if(!_self.validateEmail($("#emailOrder").val()))
			{
				
				$.getJSON( "http://ip-api.com/json", function( data ) {
					 if(data && data.country == "Ukraine")
					 {
						 
					 }else{
						 $("#emailOrder").addClass("error")
						 send = false;
					 }
				});
				
				
				
			}
			
			return send;
		})*/
	},
	validateEmail: function(email)
	{
	    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
	}
}


$(function(){
	formaOrder.init()
	timer.init()
	initScrollTo();
	phoneOrder.init();
	guaranty.init();
})

var timer = 
{
	
	init: function()
	{
		var _self = this;
		_self.set()
	},
	set: function()
	{
		var _self = this;
		var date = new Date();
		var dateTo = new Date(date.getFullYear(), date.getMonth(), date.getDate()+1, 3,0,0,0);
		
		var delta = (dateTo.getTime() - date.getTime())/1000;
		var hour = Math.floor(delta/3600)
		var minute = Math.floor((delta - hour*3600)/60)
		var second = Math.floor(delta) - hour*3600 - minute*60;
		
		hour = hour < 10 ? "0"+hour : hour+"";
		minute = minute < 10 ? "0"+minute : minute+"";
		second = second < 10 ? "0"+second : second+"";
		
		$("#hour_0").text(hour.substr(0,1))
		$("#hour_1").text(hour.substr(1,2))
		$("#min_0").text(minute.substr(0,1))
		$("#min_1").text(minute.substr(1,2))
		$("#sec_0").text(second.substr(0,1))
		$("#sec_1").text(second.substr(1,2))
		
		setTimeout(function(){_self.set()},1000)
	}
}

var guaranty =
{
	init: function()
	{
		$("#guaranty-open").click(function(){
			popup.open($("#guaranty-popup"))
			
			return false;
		})
		
	}
}
var phoneOrder =
{
	init: function()
	{
		$("#zakazat-zvonok").click(function(){
			popup.open($("#order-phone-popup"))
			
			return false;
		})
	}

}
var popup =
{
	ob: null,
	init: function(ob)
	{
		//var _self.ob = ob
		//$("")
	},
	open: function(ob)
	{
		var _self = this;
		_self.ob = ob;
		_self.ob.show();
		_self.ob.find(".popup-close").click(function(){
			_self.close();
			return false;
		})
		return false;
	},
	close: function()
	{
		var _self = this;
		_self.ob.hide();
		return false;
	}
	
}

function initScrollTo()
{
	$(".link-to-up a").click(function(){
		jQuery('html, body').animate({
	        scrollTop: 0
	    }, 500);
		return false;
	})
	$(window).scroll(function(){
		//if($(window).scrollTop() < $(window).height()/2){
		if($(window).scrollTop() <= 0){
			$(".link-to-up a").hide();
		}else{
			$(".link-to-up a").show();
		}
	})
	$(".link-to-up a").hide();
}
