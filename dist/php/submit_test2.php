<?php

$from = "jamie@nook-digital.marketing";
$subject = 'Webpage Analysis - Nook Digital Marketing';

date_default_timezone_set('Australia/Perth');
$time = date ('h:i A'); 
$date = date ('l, F jS, Y');
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$business = $_POST['business'];
$location = $_POST['location'];
$market = $_POST['market'];
$key_words = $_POST['key_words'];
$niche = $_POST['niche'];


$web_address= $_POST['web_address'];
$pages= $_POST['pages'];
$load= $_POST['load'];
$Bottlenecks = $_POST['Bottlenecks'];
$speed = $_POST['speed'];
$framework = $_POST['Framework'];
$cms = $_POST['CMS'];
	
$firefox_mobile_answer = $_POST['firefox_mobile']=='0'?'NO':'YES';	
$firefox_tablet_answer = $_POST['firefox_tablet']=='0'?'NO':'YES';
$firefox_desktop_answer = $_POST['firefox_desktop']=='0'?'NO':'YES';
$firefox_notes = $_POST['firefox_notes'];

$Safari_mobile_answer = $_POST['Safari_Mobile']=='0'?'NO':'YES';
$Safari_tablet_answer = $_POST['Safari_Tablet']=='0'?'NO':'YES';
$Safari_desktop_answer = $_POST['Safari_Desktop']=='0'?'NO':'YES';
$Safari_notes = $_POST['Safari_notes'];

$Edge_mobile_answer = $_POST['Edge_Mobile']=='0'?'NO':'YES';	
$Edge_tablet_answer = $_POST['Edge_Tablet']=='0'?'NO':'YES';
$Edge_desktop_answer = $_POST['Edge_Desktop']=='0'?'NO':'YES';
$Edge_notes = $_POST['Edge_notes'];

	
$ios_mobile_answer = $_POST['ios_Mobile']=='0'?'NO':'YES';	
$ios_tablet_answer = $_POST['ios_Tablet']=='0'?'NO':'YES';
$ios_notes = $_POST['ios_notes'];
	
$Chrome_mobile_answer = $_POST['Chrome_Mobile']=='0'?'NO':'YES';
$Chrome_tablet_answer = $_POST['Chrome_Tablet']=='0'?'NO':'YES';
$Chrome_desktop_answer = $_POST['Chrome_Desktop']=='0'?'NO':'YES';
$Chrome_notes = $_POST['Chrome_notes'];

$useability_score = $_POST['useability_hidden_score'];
$useability_notes = $_POST['useability_notes'];



$Structured_data_answer = $_POST['Structured_data']=='0'?'NO':'YES';	
$local_answer = $_POST['local']=='0'?'NO':'YES';	
$gzip_answer = $_POST['gzip']=='0'?'NO':'YES';
$Robots1_answer = $_POST['Robots1']=='0'?'NO':'YES';
$sitemap_answer = $_POST['sitemap']=='0'?'NO':'YES';
$server_answer = $_POST['server']=='0'?'NO':'YES';
$server_notes = $_POST['server_notes'];
$server_score = $_POST['server_hidden_score'];
	
$Favicon_answer = $_POST['Favicon']=='0'?'NO':'YES';
$Charset_answer = $_POST['Charset']=='0'?'NO':'YES';	
$Viewport_answer = $_POST['Viewport']=='0'?'NO':'YES';	
$Robots2_answer = $_POST['Robots2']=='0'?'NO':'YES';
$Description_answer = $_POST['Description']=='0'?'NO':'YES';
$Title2_answer = $_POST['Title2']=='0'?'NO':'YES';
$details_notes = $_POST['details_notes'];
$details_score = $_POST['details_hidden_score'];
	
$html5_answer = $_POST['html5']=='0'?'NO':'YES';	
$http_answer = $_POST['http']=='0'?'NO':'YES';	
$script_requests = $_POST['script_requests'];	
$stylesheet_requests = $_POST['stylesheet_requests'];	
$heading_tags_answer = $_POST['heading_tags']=='0'?'NO':'YES';
$w3c_validation_answer = $_POST['w3c_validation']=='0'?'NO':'YES';	
$inline_css_answer = $_POST['inline_css']=='0'?'NO':'YES';		
$html_minified_answer = $_POST['html_minified']=='0'?'NO':'YES';
$html_notes = $_POST['html_notes'];
$html_score = $_POST['html_hidden_score'];

	
$form_Validation_answer = $_POST['form_Validation']=='0'?'NO':'YES';	
$Captcha_answer = $_POST['Captcha']=='0'?'NO':'YES';	
$form_notes = $_POST['form_notes'];
$form_score = $_POST['form_hidden_score'];
		

$css_size= $_POST['css_size'];
$css_images_answer = $_POST['css_images']=='0'?'NO':'YES';
$css_Minified_answer = $_POST['css_Minified']=='0'?'NO':'YES';	
$css_Concatenated_answer = $_POST['css_Concatenated']=='0'?'NO':'YES';	
$css_Validated_answer = $_POST['css_Validated']=='0'?'NO':'YES';
$css_notes = $_POST['css_notes'];
$css_notes = $_POST['css_notes'];
$css_score = $_POST['css_hidden_score'];


$js_answer = $_POST['js']=='0'?'NO':'YES';	
$js_size = $_POST['js_size'];	
$script_placement_answer = $_POST['script_placement']=='0'?'NO':'YES';	
$async_answer = $_POST['async']=='0'?'NO':'YES';	
$css_effects_answer = $_POST['css_effects']=='0'?'NO':'YES';	
$js_Validated_answer = $_POST['js_Validated']=='0'?'NO':'YES';	
$js_Minified_answer = $_POST['js_Minified']=='0'?'NO':'YES';	
$js_Concatenated_answer = $_POST['js_Concatenated']=='0'?'NO':'YES';
$js_notes = $_POST['js_notes'];
$js_score = $_POST['js_hidden_score'];

$images_Optimised_answer = $_POST['images_Optimised']=='0'?'NO':'YES';	
$images_compressed_answer = $_POST['images_compressed']=='0'?'NO':'YES';
$media_notes = $_POST['media_notes'];
$media_score = $_POST['media_hidden_score'];	

$optimisation_notes = $_POST['optimisation_notes'];
$optimisation_score = $_POST['optimisation_hidden_score'];

$Keyword = $_POST['Keyword'];
$keyword_searches = $_POST['keyword_searches'];
	
$Phrase = $_POST['Phrase'];	
$phrase_searches = $_POST['phrase_searches'];
$phrase_notes = $_POST['phrase_notes'];
$filename_answer = $_POST['filename']=='0'?'NO':'YES';

$title = $_POST['title']=='0'?'NO':'YES';
$Title_answer = $_POST['Title']=='0'?'NO':'YES';
$Title_keyword_answer = $_POST['Title_keyword']=='0'?'NO':'YES';
$title_displayed = $_POST['title_displayed'];
$title_notes = $_POST['title_notes'];
$title_score = $_POST['title_hidden_score'];

$meta_Description_Length_answer = $_POST['meta_Description_Length']=='0'?'NO':'YES';
$meta_Description_keyword_answer = $_POST['meta_Description_keyword']=='0'?'NO':'YES';
$description_displayed = $_POST['description_displayed'];
$description_notes = $_POST['description_notes'];
$description_score = $_POST['description_hidden_score'];

$first_anchor = $_POST['first_anchor'];
$total_anchors = $_POST['total_anchors'];
$anchor_targeted_answer = $_POST['anchor_targeted']=='0'?'NO':'YES';
$anchor_text_answer = $_POST['anchor_text']=='0'?'NO':'YES';
$anchor_notes = $_POST['anchor_notes'];
$anchor_score = $_POST['anchor_hidden_score'];
	
$h1_Keyword_answer = $_POST['h1_Keyword']=='0'?'NO':'YES';
$h1_Number_answer = $_POST['h1_Number']=='0'?'NO':'YES';
$h1_Semantic_answer = $_POST['h1_Semantic']=='0'?'NO':'YES';
$headings_notes = $_POST['headings_notes'];
$headings_score = $_POST['headings_hidden_score'];
	
$alt_answer = $_POST['alt']=='0'?'NO':'YES';
$alt_keyword_answer = $_POST['alt_keyword']=='0'?'NO':'YES';
$Aria_answer = $_POST['Aria']=='0'?'NO':'YES';
$accessibility_notes = $_POST['accessibility_notes'];
$accessibility_score = $_POST['accessibility_hidden_score'];

$word_count = $_POST['word_count'];
$word_count_block = $_POST['word_count_block'];
$Spelling_answer = $_POST['Spelling']=='0'?'NO':'YES';
$Grammar_answer = $_POST['Grammar']=='0'?'NO':'YES';
$Phone_answer = $_POST['Phone']=='0'?'NO':'YES';
$content_notes = $_POST['content_notes'];
$content_score = $_POST['content_hidden_score'];

$photos = $_POST['photos'];
$photos_name = $_POST['photos_name']=='0'?'NO':'YES';
$no_photos_answer = $_POST['no_photos']=='0'?'NO':'YES';
$videos = $_POST['videos'];
$videos_name = $_POST['videos_name']=='0'?'NO':'YES';
$no_videos_answer = $_POST['no_videos']=='0'?'NO':'YES';
$media_notes2 = $_POST['media_notes2'];
$targeting_media_score = $_POST['targeting_media_hidden_score'];

$targeting_score = $_POST['targeting_hidden_score'];
$targeting_notes = $_POST['targeting_notes'];

$Backlinks_answer = $_POST['Backlinks']=='0'?'NO':'YES';
$SEO_links1 = $_POST['SEO_links1'];
$Offsite_answer = $_POST['Offsite']=='0'?'NO':'YES';
$SEO_links2 = $_POST['SEO_links2'];
$Places_answer = $_POST['Places']=='0'?'NO':'YES';
$Facebook_answer = $_POST['Facebook']=='0'?'NO':'YES';
$Instagram_answer = $_POST['Instagram']=='0'?'NO':'YES';
$Ranking = $_POST['Ranking'];
$one = $_POST['1competitors'];
$two = $_POST['2competitors'];
$three = $_POST['3competitors'];
$four = $_POST['4competitors'];
$five = $_POST['5competitors'];
$seo_notes = $_POST['seo_notes'];
$seo_score = $_POST['seo_hidden_score'];

$Blackhat_Keyword_answer = $_POST['Blackhat_Keyword']=='0'?'NO':'YES';
$Blackhat_Backlinks_answer = $_POST['Blackhat_Backlinks']=='0'?'NO':'YES';
$blackhat_notes = $_POST['blackhat_notes'];
$blackhat_score = $_POST['blackhat_hidden_score'];

$Tracking_answer = $_POST['Tracking']=='0'?'NO':'YES';
$Indexed_answer = $_POST['Indexed']=='0'?'NO':'YES';
$Penalties_answer = $_POST['Penalties']=='0'?'NO':'YES';
$fourohfour_answer = $_POST['fourohfour']=='0'?'NO':'YES';
$fourohfour_m_answer = $_POST['fourohfour_m']=='0'?'NO':'YES';

$Bounce = $_POST['Bounce'];
$unique = $_POST['unique'];
$search_notes = $_POST['search_notes'];
$search_score = $_POST['search_hidden_score'];

$analytics_notes = $_POST['analytics_notes'];
$analytics_score = $_POST['analytics_hidden_score'];

$score= $_POST['score_hidden_score'];
$score_notes = $_POST['score_notes'];

//Send the email
$message = "<body><main style='font-family: Arial;margin: 20px 40px 20px 40px;background-color:white;'>
  <img src="images/Nook-Logo-Landscape-V4-01.jpg" alt="seo checklist">
    <div style='border: 2px solid #d1d3d4;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;width:90%;font-family: Arial;'>
		<h1>Checklist: Is Your Website Competitive?</h1>
		
		<p>This checklist covers objective best practice for optimising your website for speed and accessibility as well as targeting content. The goal of these recommendations is to simply connect your potential customers to your website. It does not cover the subjective design and site useability (look / feel / user experience on page).</p>
		
		<p>By implementing the optimisation recommendations you will ensure your site has the best possible performance which, when all other things are equal, will give your site a competitive edge on the SERP (Search Engine Ranking Page).</p>
		
		<p>By writing content targeted to a niche in your industry you can effectively connect your site to your target market and potentially bypass the intense competiton for the broader search terms. </p>
		
		<p>The idea is to narrow down your reach and give the user exactly the content they are searching for. This is acheived through extensive research on the number of searches conducted on Google per month for specific keywords in your target area.</p>
		
		<p>For the purpose of this list all items on the checklist have been given 1 point each and have not been weighted based on their importance. The points are tallied by item, section and as an overall score. We recommend implementing all the recommendations on the checklist to get a competitive edge.</p>
        <br>
	</div>


	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
		<h2>Customer Details</h2>
		<p><b>Name:</b> $name</p>
		<p><b>Email Address:</b> $email</p>
		<p><b>Phone Number:</b> $phone</p>
		<p><b>Business / Company :</b> $business</p>
	<br>
		<p><b>Location :</b> $location</p>
		<p><b>Target Market :</b> $market</p>
		<p><b>Percieved Key Words :</b> $key_words</p>
		<p><b>Niche Targeted :</b> $niche</p>
	<br>
	</div> 
	
	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;padding:20px;'>
		<h2>Site Details</h2>
		<p><b>Website Address (URL) :</b> $web_address</p>
		<p><b>Number of pages in Site:</b> $pages</p>
		<p><b>Page Load Time:</b> $load</p>
		<p><b>Loading Bottlenecks:</b> $Bottlenecks</p>
		<p><b>Page Speed Score:</b> $speed</p>
		<p><b>Framework :</b> $framework</p>
		<p><b>CMS :</b> $cms</p>
	<br>
	</div> 
	
	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
		<h2>Useability (responsive?)</h2>
		<br>
		<h3>Firefox Useability</h3>
			<p><b>Mobile:</b> $firefox_mobile_answer</p>
			<p><b>Tablet:</b> $firefox_tablet_answer</p>
			<p><b>Desktop:</b> $firefox_desktop_answer</p>
        <br>
			<p><b>Firefox Notes:</b></p> 
            <p style='border-bottom: 1px dotted black;padding-bottom: 20px;'>$firefox_notes</p>
		<br>		
		<h3>Safari Useability</h3>
			<p><b>Mobile:</b> $Safari_mobile_answer</p>
			<p><b>Tablet:</b> $Safari_tablet_answer</p>
			<p><b>Desktop:</b> $Safari_desktop_answer</p>
        <br>
			<p><b>Safari Notes:</b></p> 
            <p style='border-bottom: 1px dotted black;padding-bottom: 20px;'>$Safari_notes</p>	
		<br>			
		<h3>Explore / Edge Useability</h3>
			<p><b>Mobile:</b> $Edge_mobile_answer</p>
			<p><b>Tablet:</b> $Edge_tablet_answer</p>
			<p><b>Desktop:</b> $Edge_desktop_answer</p>
        <br>
			<p><b>Explore / Edge Notes:</b></p> 
            <p style='border-bottom: 1px dotted black;padding-bottom: 20px;'>$Edge_notes</p>	
		<br>		
		<h3>ios Useability</h3>
			<p><b>Mobile:</b> $ios_mobile_answer</p>
			<p><b>Tablet:</b> $ios_tablet_answer</p>
        <br>  
			<p><b>ios Notes:</b></p> 
            <p style='border-bottom: 1px dotted black;padding-bottom: 20px;'>$ios_notes</p>	
		<br>				
		<h3>Chrome Useability</h3>
			<p><b>Mobile:</b> $Chrome_mobile_answer</p>
			<p><b>Tablet:</b> $Chrome_tablet_answer</p>
			<p><b>Desktop:</b> $Chrome_desktop_answer</p>
        <br>
			<p><b>Chrome Notes:</b></p> 
            <p style='border-bottom: 1px dotted black;padding-bottom: 20px;'>$Chrome_notes</p>	
		<br>
		<br>
			<h3>Total Useability Score:  $useability_score / 14</h3>
			<p><b>Useability Summary:</b></p> 
            <p>$useability_notes</p>
		<br>		
	</div>
	
	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
		<h2>Optimisation</h2>
		<br>
		<h3>Server Optimisation</h3>
			<p><b>Structured Data :</b> $Structured_data_answer</p>
			<p><b>WebsiteHosted Locally :</b> $local_answer</p>
			<p><b>Gzip Compression Enabled :</b> $gzip_answer</p>
			<p><b>Robots.txt file:</b> $Robots1_answer</p>
			<p><b>Sitemap.html / xml file:</b> $sitemap_answer</p>
        <br>
			<p><b>Server Notes:</b></p> 
            <p>$server_notes</p>
		<br>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Server Optimisation Score: $server_score / 5</h4>
		<br>
		<h3>Meta Tag Optimisation</h3>
			<p><b>Favicon :</b> $Favicon_answer</p>
			<p><b>Charset Tag :</b> $Charset_answer</p>
			<p><b>Viewport Tag :</b> $Viewport_answer</p>
			<p><b>Robots Follow Tag :</b> $Robots2_answer</p>
			<p><b>Description Tag :</b> $Description_answer</p>
			<p><b>Title Tag? :</b> $Title2_answer</p>
        <br>
			<p><b>Meta Tag Notes:</b></p> 
            <p>$details_notes</p>	
		<br>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Meta Tag Optimisation Score: $details_score / 6</h4>
		<br>
		<h3>HTML Optimisation</h3>
			<p><b>Html5 Site:</b> $html5_answer</p>
			<p><b>Minimal HTTP Requests :</b> $http_answer</p>
			<p><b>Number of Script Requests :</b> $script_requests</p>
			<p><b>Number of Stylesheet Requests :</b> $stylesheet_requests</p>
			<p><b>Semantic use of Heading Tags :</b> $heading_tags_answer</p>
			<p><b>HTML Validated :</b> $w3c_validation_answer</p>
			<p><b>No Inline CSS :</b> $inline_css_answer</p>
			<p><b>HTML Minified :</b> $html_minified_answer</p>
		<br>
			<p><b>HTML Notes:</b></p> 
            <p>$html_notes</p>
        <br>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>HTML Optimisation Score: $html_score / 6</h4>
		<br>
		<h3>Form Optimisation</h3>
			<p><b>Form Validation :</b> $form_Validation_answer</p>
			<p><b>Captcha :</b> $Captcha_answer</p>
		<br>
			<p><b>Form Notes:</b></p> 
            <p>$form_notes</p>
       
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Form Optimisation Score: $form_score / 2</h4>
		<br>
		<h3>CSS Optimisation</h3>
			<p><b>Total CSS Size :</b> $css_size</p>
			<p><b>CSS used in lieu of images (where appropriate) :</b> $css_images_answer</p>
			<p><b>CSS Minified :</b> $css_Minified_answer</p>
			<p><b>CSS Files Concatenated :</b> $css_Concatenated_answer</p>
			<p><b>CSS Validated? :</b> $css_Validated_answer</p>
		<br>
			<p><b>CSS Notes:</b></p> 
            <p>$css_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>CSS Optimisation Score: $css_score / 4</h4>
		<br>	
		<h3>Javascript Optimisation</h3>
			<p><b>Javascript Utiliised :</b> $js_answer</p>
			<p><b>Total Javascript Size :</b> $js_size</p>
			<p><b>Javascript After body Tag :</b> $script_placement_answer</p>	
			<p><b>Async used where Appropriate :</b> $async_answer</p>
			<p><b>Appropriate use of js (replace with CSS) :</b> $css_effects_answer</p>
			<p><b>Javascript Validated? :</b> $js_Validated_answer</p>
			<p><b>Javascript Minified :</b> $js_Minified_answer</p>
			<p><b>Javascript Concatenated :</b> $js_Concatenated_answer</p>
		<br>
			<p><b>Javascript Notes:</b></p> 
            <p>$js_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Javascript Optimisation Score: $js_score / 7</h4>
		<br>
		<h3>Media Optimisation</h3>
			<p><b>Number of Photos:</b> $photos</p>
			<p><b>Appropriate Number of Photos Used :</b> $no_photos_answer</p>
			<p><b>Image Dimensions Optimised :</b> $images_Optimised_answer</p>
			<p><b>Images Compressed :</b> $images_compressed_answer</p>
		<br>
			<p><b>Number of Videos:</b> $videos</p>
			<p><b>Appropriate Number of Videos used :</b> $no_videos_answer</p>
		<br>
			<p><b>Media Optimisation Notes:</b></p> 
            <p>$media_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Media Optimisation Score: $media_score / 4</h4>
		<br>
		<br>
			<h3>Total Optimisation Score:  $optimisation_score / 26</h3>
			<p><b>Optimisation Summary:</b></p> 
            <p>$optimisation_notes</p>
		<br>	
	</div>
		
	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
		<h2>Targeting (Site Page)</h2>
		<br>
		<h3>Filename Targeting</h3>
		<p><b>Targeted File Name :</b> $filename_answer</p>
		<br>	
		<h3>Keyword Targeting</h3>
			<p><b>Target Keyword:</b> $Keyword</p>
			<p><b>Number of Keyword Googles per Month (local area) :</b> $keyword_searches</p>
		<br>
		<h3>Phrase Targeting</h3>
			<p><b>Target Phrase:</b> $Phrase</p>
			<p><b>Number of Phrase Googles per Month (local area) :</b> $phrase_searches</p>
		<br>
			<p><b>Phrase Notes:</b></p> 
            <p>$phrase_notes</p>	
		<br>
		<h3>Title Tag Targeting</h3>  
			<p><b>60 Characters or Less :</b> $Title_answer</p>
			<p><b>Contains Keyword :</b> $Title_keyword_answer</p>  			
			<p><b>Display in Search :</b> $title_displayed</p>
		<br>
			<p><b>Title Tag Notes:</b></p> 
            <p>$title_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Title Score: $title_score / 2</h4>
		<br>
		<h3>Description Tag Targeting</h3>
			<p><b>155 Characters or Less :</b> $meta_Description_Length_answer</p>
			<p><b>Contains Keyword :</b> $meta_Description_keyword_answer</p>
			<p><b>Display in Search :</b> $description_displayed</p>
		<br>
			<p><b>Description Tag Notes :</b></p> 
            <p>$description_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Description Targeting Score : $description_score / 2</h4>
		<br>
		<h3>Anchor Targeting</h3>
			<p><b>First Link on Page :</b> $first_anchor</p>
			<p><b>Total Links on Page:</b> $total_anchors</p>
			<p><b>Anchors Keyword Targeted :</b> $anchor_targeted_answer</p>
			<p><b>In Text Anchors :</b> $anchor_text_answer</p>
		<br>
			<p><b>Anchor Targeting Notes :</b></p> 
            <p>$anchor_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Anchor Targeting Score : $anchor_score / 2</h4>
		<br>
		<h3>Heading Tag Targeting</h3>
			<p><b>h1 Keyword Targeted :</b> $h1_Keyword_answer</p>
			<p><b>Single use of h1 Tag :</b> $h1_Number_answer</p>
			<p><b>Semantic use of Heading Tags :</b> $h1_Semantic_answer</p>
		<br>
			<p><b>Heading Tag Notes :</b></p> 
            <p>$headings_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Headings Targeting Score : $headings_score / 3</h4>
		<br>
		<h3>Accessibility Targeting</h3>
			<p><b>Alt Tags Used:</b> $alt_answer</p>
			<p><b>Alt tags Keyword Targeted :</b> $alt_keyword_answer</p>
			<p><b>Aria Labelled By used:</b> $Aria_answer</p>
		<br>
			<p><b>Accessibility Notes :</b></p> 
            <p>$accessibility_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Accessibility Targeting Score : $accessibility_score / 3</h4>
		<br>
		<h3>Content Targeting</h3>
			<p><b>Word Count :</b> $word_count</p>
			<p><b>Word Count (largest block) :</b> $word_count_block</p>
			<p><b>No Spelling Errors :</b> $Spelling_answer</p>
			<p><b>No Grammar Errors :</b> $Grammar_answer</p>
			<p><b>Prominently Displayed Phone Number :</b> $Phone_answer</p>
		<br>
			<p><b>Content Notes:</b></p> 
            <p>$content_notes</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Content Targeting Score: $content_score / 3</h4>
		<br>
		<h3>Media Targeting</h3>
			<p><b>Targeted Image Filenames :</b> $photos_name</p>
			<p><b>Targeted Video filenames :</b> $videos_name</p>
		<br>
			<p><b>Targeted Media Notes:</b></p> 
            <p>$media_notes2</p>
			<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Media Targeting Score: $targeting_media_score / 2</h4>
		<br>	
		<br>
			<h3>Total Targeting Score: $targeting_score / 20</h3>
			<p><b>Targeting Summary:</b></p> 
            <p>$targeting_notes</p>
		<br>	
	</div>
	
	<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
		<h2>Analytics</h2>
		<br>
			<h3>SEO Analytics</h3>
				<p><b>Backlinks to Site:</b> $Backlinks_answer</p>
				<p><b>Number of Backlinks:</b> $SEO_links1</p>
				<p><b>Offsite Links Used:</b> $Offsite_answer</p>
				<p><b>Number of Offsite Links:</b> $SEO_links2</p>
				<p><b>Google Places Page :</b> $Places_answer</p>
				<p><b>Facebook Link on Site:</b> $Facebook_answer</p>
				<p><b>Instagram link :</b> $Instagram_answer</p>
				<p><b>SERP Ranking for Keyword :</b> $Ranking</p>
				<p><b>1st 5 Competitors (Google) in SERP for Targeted Keyword.</b></p>
				<ol>
					<li> $one</li>
					<li> $two</li>
					<li> $three</li>
					<li> $four</li>
					<li> $five</li>
				</ol>
			<br>
				<p><b>SEO Notes:</b></p> 
                <p>$seo_notes</p>
				<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>SEO Analytics Score: $seo_score / 5</h4>
			<br>
			<h3>Blackhat Analytics</h3>
				<p><b>No Keyword Stuffing :</b> $Blackhat_Keyword_answer</p>
				<p><b>No Poor Quality Backlinks :</b> $Blackhat_Backlinks_answer</p>
			<br>
				<p><b>Blackhat Notes :</b></p> 
                <p>$blackhat_notes</p>
				<h4 style='border-bottom: 1px dotted black;padding-bottom: 20px;'>Blackhat Analytics Score: $blackhat_score / 2</h4>
			<br>
			<h3>Search Console Analytics</h3>
				<p><b>Google Tracking used:</b> $Tracking_answer</p>
				<p><b>Site Indexed by Google:</b> $Indexed_answer</p>
				<p><b>No Penalties from Google:</b> $Penalties_answer</p>
				<p><b>No 404's? from Site :</b> $fourohfour_answer</p>
				<p><b>No /m /mobile 404's from Site :</b> $fourohfour_m_answer</p>
				<p><b>Bounce Rate:</b> $Bounce</p>
				<p><b>Unique Visitors per Month :</b> $unique</p>
			<br>
				<p><b>Notes:</b></p> 
                <p>$search_notes</p>
				<h4 style='border-bottom: 1px dotted black;'padding-bottom: 20px;>Search Console Analytics Score : $search_score / 5</h4>	
			<br>
			<br>
				<h3>Total Analytics Score $analytics_score / 12</h3>
				<p><b>Analytics Summary:</b></p> 
                <p>$analytics_notes</p>
			<br>
		</div>
		<div style='border: 2px solid #5bcbf5;margin: 60px 0 60px 0;border-radius: 5px;padding:20px;font-family: Arial;'>
			<br>
			<h2>Total Site Score: $score / 78</h2>
			<p><b>Site Summary:</b></p> 
            <p>$score_notes</p>	
			<br>
		</div>
</main>
</body>
";

$me = "jamie@nook-digital.marketing";
$to = $me;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . '\r\n';
$headers .= "Reply-To: jamie@nook-digital.marketing". '\r\n';
$headers .= 'From: Nook Digital Marketing' . '\r\n' . 'Reply-To: jamie@nook-digital.marketing' . '\r\n' . 'X-Mailer: PHP/' . phpversion();


mail($to, $subject, $message, $headers);

header('Location: index.html');


?>