
$(document).ready(function(){

function setScore() {
 var score = 0;
    $.each($('radio:checked'), function (i,input) { score += Number( input.value);});
    $('#score').text(score);
	$('#score_hidden_score').val(score);
	
	var details_score = 0;
    $.each($('.details:checked'), function (i,input) { details_score += Number( input.value);});
    $('#details_score').text(details_score);
	$('#details_hidden_score').val(details_score);
	
	var useability_score = 0;
    $.each($('.useability:checked'), function (i,input) { useability_score += Number( input.value);});
    $('#useability_score').text(useability_score);
	$('#useability_hidden_score').val(useability_score);
	
	var optimisation_score = 0;
    $.each($('.optimisation:checked'), function (i,input) { optimisation_score += Number( input.value);});
    $('#optimisation_score').text(optimisation_score);
	$('#optimisation_hidden_score').val(optimisation_score);
	
		var server_score = 0;
		$.each($('.server:checked'), function (i,input) { server_score += Number( input.value);});
		$('#server_score').text(server_score);
		$('#server_hidden_score').val(server_score);
	
		var html_score = 0;
		$.each($('.html:checked'), function (i,input) { html_score += Number( input.value);});
		$('#html_score').text(html_score);
		$('#html_hidden_score').val(html_score);

		var form_score = 0;
		$.each($('.form:checked'), function (i,input) { form_score += Number( input.value);});
		$('#form_score').text(form_score);
		$('#form_hidden_score').val(form_score);

		var css_score = 0;
		$.each($('.css:checked'), function (i,input) { css_score += Number( input.value);});
		$('#css_score').text(css_score);
		$('#css_hidden_score').val(css_score);

		var js_score = 0;
		$.each($('.js:checked'), function (i,input) { js_score += Number( input.value);});
		$('#js_score').text(js_score);
		$('#js_hidden_score').val(js_score);

		var media_score = 0;
		$.each($('.media:checked'), function (i,input) { media_score += Number( input.value);});
		$('#media_score').text(media_score);
		$('#media_hidden_score').val(media_score);


	var targeting_score = 0;
    $.each($('.targeting:checked'), function (i,input) { targeting_score += Number( input.value);});
    $('#targeting_score').text(targeting_score);
	$('#targeting_hidden_score').val(targeting_score);
	
		var title_score = 0;
		$.each($('.title:checked'), function (i,input) { title_score += Number( input.value);});
		$('#title_score').text(title_score);
		$('#title_hidden_score').val(title_score);
	
		var phrase_score = 0;
		$.each($('.phrase:checked'), function (i,input) { phrase_score += Number( input.value);});
		$('#phrase_score').text(phrase_score);
		$('#phrase_hidden_score').val(phrase_score);
	
		var description_score = 0;
		$.each($('.description:checked'), function (i,input) { description_score += Number( input.value);});
		$('#description_score').text(description_score);
		$('#description_hidden_score').val(description_score);
	
		var anchor_score = 0;
		$.each($('.anchor:checked'), function (i,input) { anchor_score += Number( input.value);});
		$('#anchor_score').text(anchor_score);
		$('#anchor_hidden_score').val(anchor_score);
	
		var headings_score = 0;
		$.each($('.headings:checked'), function (i,input) { headings_score += Number( input.value);});
		$('#headings_score').text(headings_score);
		$('#headings_hidden_score').val(headings_score);
	
		var accessibility_score = 0;
		$.each($('.accessibility:checked'), function (i,input) { accessibility_score += Number( input.value);});
		$('#accessibility_score').text(accessibility_score);
		$('#accessibility_hidden_score').val(accessibility_score);
	
		var content_score = 0;
		$.each($('.content:checked'), function (i,input) { content_score += Number( input.value);});
		$('#content_score').text(content_score);
		$('#content_hidden_score').val(content_score);
	
		var targeting_media_score = 0;
		$.each($('.content_media:checked'), function (i,input) { targeting_media_score += Number( input.value);});
		$('#targeting_media_score').text(targeting_media_score);
		$('#targeting_media_hidden_score').val(targeting_media_score);
	
	var analytics_score = 0;
    $.each($('.analytics:checked'), function (i,input) { analytics_score += Number( input.value);});
    $('#analytics_score').text(analytics_score);
	$('#analytics_hidden_score').val(analytics_score);
	
		var seo_score = 0;
		$.each($('.seo:checked'), function (i,input) { seo_score += Number( input.value);});
		$('#seo_score').text(seo_score);
		$('#seo_hidden_score').val(seo_score);
	
		var blackhat_score = 0;
		$.each($('.blackhat:checked'), function (i,input) { blackhat_score += Number( input.value);});
		$('#blackhat_score').text(blackhat_score);
		$('#blackhat_hidden_score').val(blackhat_score);
	
		var search_score = 0;
		$.each($('.search:checked'), function (i,input) { search_score += Number( input.value);});
		$('#search_score').text(search_score);
		$('#search_hidden_score').val(search_score);
	
	
}

// set score on input change
$('input').change(setScore);

// set score on initialization
setScore();

});


