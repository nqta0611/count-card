console.log('Ready.....');

    $(".card").click(function(){
    	$count = $(this).attr("count");
        if ($count-- >= 0) (
            console.log($count),
            $(this).attr("count", $count),
            $("#count_" + $(this).attr('id')).html($count)
        );
        if ($count == 0) {
            $(this).attr("disabled", true)
        }
    });

    $("#reset").click(function(){
    	console.log('Clicked Reset');
    	$(".card").removeAttr("disabled");
        $(".card").attr("count",4);
        $(".count").html(4);
    });

    $(".card").hover(function () {
		$(this).addClass('hover');
	}, function () {
		$(this).removeClass('hover');
	});
	$("#reset").hover(function () {
		$(this).addClass('hover');
	}, function () {
		$(this).removeClass('hover');
	});