$(function(){
	menu.init();
	header.init();
	timer.init();
});

var timer =
{
	init: function()
	{
		var _self = this;
		_self.setTime();
	},
	setTime: function ()
	{
		var _self = this;
		var now = new Date();
		var dateEnd = new Date(now.getFullYear(), now.getMonth(), now.getDate()+1, 0, 0, 0);
		
		var hour = (24 - now.getHours() - dateEnd.getHours())+'';
		var h1 = hour < 10 ? 0 : hour.substring(0, 1);
		var h2 = hour < 10 ? hour : hour.substring(1, 2);
		$('#hour_0').text(h1);
		$('#hour_1').text(h2);
		
		var minute = (59 - now.getMinutes() - dateEnd.getMinutes())+'';
		var m1 = minute < 10 ? 0 : minute.substring(0, 1);
		var m2 = minute < 10 ? minute : minute.substring(1, 2);
		$('#min_0').text(m1);
		$('#min_1').text(m2);
		
		var second = (59 - now.getSeconds() - dateEnd.getSeconds())+'';
		var s1 = second < 10 ? 0 : second.substring(0, 1);
		var s2 = second < 10 ? second : second.substring(1, 2);
		$('#sec_0').text(s1);
		$('#sec_1').text(s2);
		
		setTimeout(function(){_self.setTime();},1000);
	}
}


var menu = 
{
	init: function()
	{
		$("#menu-bars-opener").click(function(){
			$("#menu-main").css("marginLeft", 0)
			return false;
		})
		$("#menu-main").on( "swipeleft", function(){
			$("#menu-main").css("marginLeft", "-100%")
		});
		$("#menu-main a").on('click', function(){
			$("#menu-main").css("marginLeft", "-100%")
		})
	}
}


var header =
{
	lastScrollTop: 0, 
	init: function()
	{
		var _self = this
		$(window).scroll(function(i,j){
				
			var st = $(this).scrollTop();
			if (st > _self.lastScrollTop && st >= 50)
			{
				$(".header").css("marginTop",-50)
			}else{
				$(".header").css("marginTop",0)
			}
		   _self.lastScrollTop = st;
		})
		setTimeout(function(){
			_self.checkPos()
		},100)
	},
	checkPos: function()
	{
		var _self = this
		var st = $(this).scrollTop();
		if(st < 50)
			$(".header").css("marginTop",0)
	}
}
