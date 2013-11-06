var player;

function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
    });
}
$('a.videocard').click(function() {
	$('.card1').fadeOut('fast');
	$('.card2').fadeIn('fast');
	player.playVideo();
});

$("#kyleStory").click(function () {
	$("#danielStoryContent").fadeOut(300);
	$("#kyleStoryContent").fadeIn(1000)
	$("#seanStoryContent").fadeOut(300);
	$(".stories_mod").removeClass('active');
	$(".right-space").removeClass('arrow');
	$("#kyleStory").parent().addClass('active');
	$("#kyleStory").parent().parent().addClass('arrow');
});

$("#seanStory").click(function () {
	$("#danielStoryContent").fadeOut(300);
	$("#kyleStoryContent").fadeOut(300);
	$("#seanStoryContent").fadeIn(1000);
	$(".stories_mod").removeClass('active');
	$(".right-space").removeClass('arrow');
	$("#seanStory").parent().addClass('active');
	$("#seanStory").parent().parent().addClass('arrow');
});

$("#danielStory").click(function () {
	$("#danielStoryContent").fadeIn(1000);
	$("#kyleStoryContent").fadeOut(300);
	$("#seanStoryContent").fadeOut(300);
	$(".stories_mod").removeClass('active');
	$(".right-space").removeClass('arrow');
	$("#danielStory").parent().addClass('active');
	$("#danielStory").parent().parent().addClass('arrow');
});