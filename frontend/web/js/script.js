$(function(){
	menu.init();
});

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
