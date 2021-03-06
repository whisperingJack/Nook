<!DOCTYPE html>
<!--
hgvuhgjhvjhvjhvjhvjhvj ADD IOS AND HHTPS TO CHECKLIST, added browsers: chrome desktop -mobile, added android. Added canonical tag.Added mobile-speed to speedtest details.  ADD FIGURE TAGS > FIGCAPTION FOR IMAGES.-->
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="checklist" />
	<meta name="keywords" content="checklist" />
	<meta name="robots" content="index, follow" />
	<!-- Keyword oppportunity -->
	<title>Optimisation and Targeted Website Checklist - Nook Digital Marketing</title>
    <!-- SEO -->
    <link rel="canonical" href="http://www.nook-digital.marketing/seo-checklist.php" />
	<!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.ico"/>
	
	<!-- Fonts -->

	<!-- Icons -->
	<!-- jQuery -->
	<script defer src="js/jquery.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/css-min.css">
</head>
<body>
<main>
    
    <section class="main-logo" id="top">
  	 <?php include_once 'includes/logo.min.php'; ?>  
    </section>  
    
      <!--<nav class="navigation">

        <!--?php include ('includes/navigation.php'); ?
         #html-include=folder/includes/navigation.php
 
   -- </nav>-->
    
    
    <section class="checklist-section services">
        <h1>An introduction into Website Optimisation &amp; Targeting</h1>
          
         <p>The goal of these recommendations is to simply get your business more referalls from your potential customers by ranking as high as possible in the Google Search Engine over time.</p>
     
        <p>Our technical approach is to conduct target market research online to create relevant targeted content and interwining it with the optimisation of all aspects of the web development.</p>
            
        <p class="content-box"><small>By optimising your website for speed and accessibility, providing a secure site and targeting the code and content of your site to a proven niche in your field you will have a competitive advantage over those that dont.</small></p>
        
        <p>The scope of this checklist is front end web development and search engine optimisation according to best practice. Subjective graphic design of the website is not covered.</p>

        <p>By implementing all the optimisation recommendations in the checklist you provide your site with increased performance which, when all other things are equal, will give your site a competitive edge in the SERP (Search Engine Ranking Page). This means more exposure to your target market, more leads (referalls), more conversions (sales).</p>

        <p>For the purpose of this list all items on the checklist have been given 1 point each and have not been weighted based on importance. The points are tallied by section and as an overall site score. We recommend implementing all the recommendations on the checklist to get a competitive edge.</p>
    </section>
    
	<form action="php/submit_test2.php" method="post" enctype="multipart/form-data">
		
    <section class="checklist-section">
		<div>
            
            <h2>Customer Details</h2>
        <ul>
			<li>
				<label class="text_label">Name </label>
                <input type="text" class="text_input" name="name" >
			</li>
			<li>
				<label class="text_label">Phone Number </label>
				<input type="tel" class="text_input" name="phone">
			</li>
			<li>
				<label  class="text_label">Email </label>
				<input type="email" class="text_input" required name="email">
			</li>
			<li>
				<label  class="text_label">Business / Company </label>
				<input type="text"  class="text_input" name="business">
			</li>
				<li>
				<label class="text_label">Location </label>
				<input type="text"  class="text_input" name="location">
			</li>
			<li>
				<label class="text_label">Target Market </label>
				<input type="text" class="text_input" name="market">
			</li>
			<li>
				<label class="text_label">Perceived key words </label>
				<input type="text" class="text_input" name="key_words">
			</li>
			<li>
				<label class="text_label">Niche </label>
				<input type="text" class="text_input" name="niche">
			</li>
		</ul> 
        
        </div>
	</section>
        
	<section class="checklist-section">
		
		<div>
            <h2>Site Details</h2>
        <ul>
			<li>
				<label class="text_label">Page Analysed:  (URL)</label>
				<input type="text"  class="text_input" name="web_address">
			</li>

			<li>
				<label class="text_label">Total No. of Site Pages</label>
				<input type="number" class="number_input" name="pages">
			</li>
			
			<li>
				<label class="text_label">Page Load Time</label>
				<input type="text" class="number_input" name="load">		
			</li>
			
			<li>
				<label class="text_label">Loading Bottlenecks</label>
				<textarea class="text_input" name="Bottlenecks"></textarea>
			</li>
			
			<li>
				<div class="text_label">Google PageSpeed Results</div>
                <label class="text_label"><small>Desktop</small></label>
                
				<input type="text"  class="number_input" name="speed">
                <label class="text_label"><small>Mobile</small></label>
                <input type="text"  class="number_input" name="mobile-speed">
			</li>
			<li>
				<label class="text_label">Framework?</label>
				<input type="text"  class="text_input" name="Framework">
			</li>
			<li>
				<label class="text_label">CMS?</label>
				<input type="text"  class="text_input" name="CMS">
			</li>
		</ul>
        </div>
	</section>
	
	<section class="checklist-section">
        <header class="services">
            <h2>Responsive Design (Useability)</h2>
            <p>Does your site display and function correctly on all sized screen and all different devices and operating systems? Some code will work perfectly on some devices and completely break on others requiring additional effort to solve a problem. </p>
            
            <p>Websites should be tested on all operating systems (Windows, Android, iOS, Apple) and devices (phone, tablet, desktop) to ensure all users have the same experience.</p>
            <p>In 2015 Google confirmed that <a href="http://searchengineland.com/its-official-google-says-more-searches-now-on-mobile-than-on-desktop-220369" target="_blank">mobile searches</a> had overtaken desktop searches.</p>
        </header>
		<div>
            <br>
            <h3>Mozilla Firefox Useability</h3> 
        <ul> 
			<li>
				<span class="radio_title">Mobile (Samsung S7 Edge)</span>
                
                
                    <label class="radio_label"><input type="radio"  class="radio useability" name="firefox_mobile" value="1">
                    Yes</label>
                
                    <label class="radio_label"><input type="radio"  class="radio useability" name="firefox_mobile" value="0">
                    No</label>
			</li>
			<li>
				<span class="radio_title">Tablet (Surface Pro)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="firefox_tablet" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="firefox_tablet" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Desktop (Windows 10)</span>
				<label class="radio_label">
                    <input type="radio"  class="radio useability" name="firefox_desktop" value="1">Yes</label>
                
				<label class="radio_label"><input type="radio"  class="radio useability" name="firefox_desktop" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Firefox Summary</label>
				<textarea  class="notes" name="firefox_notes"></textarea>
			</li>
		</ul>
        </div>
				
		
		<div>
            <h3>Apple Safari Useability</h3> 
            
            <ul>
                <li>
                    <span class="radio_title">Mobile (iphone 6)</span>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Mobile" value="1">Yes</label>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Mobile" value="0"> No</label>
                </li>
                <li>
                    <span class="radio_title">Tablet (IPad)</span>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Tablet" value="1">Yes</label>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Tablet" value="0"> No</label>
                </li>
                <li>
                    <span class="radio_title">Desktop (Mac Book Pro)</span>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Desktop" value="1">Yes</label>
                    <label class="radio_label"><input type="radio"  class="radio useability" name="Safari_Desktop" value="0"> No</label>
                </li>
                <li>
                    <label class="notes_label">Safari Summary</label>
                    <textarea  class="notes" name="Safari_notes"></textarea>
                </li>
            </ul>
        </div>	
				
		
		<div>
            <h3>Microsoft Explorer 10+ / Edge Useability</h3> 
        <ul>
            
			<li>
				<span class="radio_title">Mobile (Samsung S7 Edge)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Mobile" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Mobile" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Tablet (Surface Pro)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Tablet" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Tablet" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Desktop (Windows 10)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Desktop" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Desktop" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Edge Summary</label>
				<textarea  class="notes" name="Edge_notes"></textarea>
			</li>
		</ul>
        </div>	
			
        	<div>
            <h3>Google Chrome</h3> 
        <ul>
            
			<li>
				<span class="radio_title">Tablet (Surface Pro)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Tablet" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Tablet" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Desktop (Windows 10)</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Desktop" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Edge_Desktop" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Chrome Summary</label>
				<textarea  class="notes" name="Edge_notes"></textarea>
			</li>
		</ul>
        </div>	
        
		
		<div>
            <h3>iOS Useability (Apple Mobile)</h3> 
            <ul>
            
			<li>
				<span class="radio_title">iOS Safari</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Safari" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Safari" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">iOS Chrome</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Chrome" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Chrome" value="0"> No</label>
			</li>
                <li>
				<span class="radio_title">iOS Firefox</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Firefox" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="ios_Firefox" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">iOS Summary</label>
				<textarea  class="notes" name="ios_notes"></textarea>
			</li>
		</ul>
        </div>	
				
		
		<div>
            <h3>Chrome Useability (Android)</h3> 
            <ul>
            
			<li>
				<span class="radio_title">Mobile</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Chrome_Mobile" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Chrome_Mobile" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Tablet</span>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Chrome_Tablet" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio useability" name="Chrome_Tablet" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Android Summary</label>
				<textarea  class="notes" name="Chrome_notes"></textarea>
			</li>		
		</ul>
        </div>	
        
		<div>
            <ul>
			<li>
				<input type="hidden" name="useability_hidden_score" id="useability_hidden_score" value=""  />
				<h3 class="useability_score">Total Useability Score:&nbsp;&nbsp;<span id="useability_score"></span>&nbsp;/ 17</h3>
            </li>
            </ul>
            
            <ul>
			<li>
				<label class="notes_label">Useability Summary:</label>
				<textarea  class="notes" name="useability_notes"></textarea>
			</li>
		  </ul>
        </div>	
		</section>

		<section  class="checklist-section">
        <header class="services">
		<h2>Optimisation</h2>
	   <p>Do you have the right files on the server with your website, is your connection verified and secure. Is your configuration file set up properly and to it's full potential.</p>
            </header>
		<div>
            <h3>Server</h3> 
            <ul>
            
                <li>
				<span class="radio_title">Https Connection (TLS)</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="SSL" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="SSL" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Structured Data</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="Structured_data" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="Structured_data" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Hosted locally</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="local" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="local" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">gzip compression</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="gzip" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="gzip" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">robots.txt</span>	
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="Robots1" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="Robots1" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">sitemap</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="sitemap" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation server" name="sitemap" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="server_notes"></textarea>
			</li>
			<li>
				<h4 class="server_score">Server Score: <span id="server_score"></span>&nbsp;/&nbsp;9</h4>
				<input type="hidden"  name="server_hidden_score" id="server_hidden_score" value="" />
			</li>
		</ul> 
        </div>

		
		<div>
            <h3>Meta Tags</h3> 
            <ul>
            
			<li>
				<span class="radio_title">Favicon</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Favicon" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Favicon" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Charset</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Charset" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Charset" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Viewport</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Viewport" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Viewport" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Robots Follow</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Robots2" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Robots2" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Description Tag</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Description" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Description" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Title Tag</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Title2" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Title2" value="0"> No</label>
			</li>
                <li>
				<span class="radio_title">Canonical Tag</span>
				<label class="radio_label"><input type="radio"  class="radio details" name="Canonical" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio details" name="Canonical" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="details_notes"></textarea>
			</li>		
			<li>
				<h4 class="details_score">Meta Tags Score: <span id="details_score"></span>&nbsp;/&nbsp;7</h4>
				<input type="hidden"  name="details_hidden_score" id="details_hidden_score" value=""  />
			</li>
		</ul> 
        </div>

		
		<div>
            <h3>HTML</h3> 
        <ul>
            
			<li>
				<span class="radio_title">html5</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="html5" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="html5" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Minimal HTTP req.</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="http" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="http" value="0"> No</label>
			</li>
			<li>
				<label class="text_label">Script requests</label>
				<input type="number" class="number_input" name="script_requests">
			</li>
			<li>
				<label class="text_label">Stylesheet requests</label>
				<input type="number" class="number_input" name="stylesheet_requests">
			</li>
			<li>
				<span class="radio_title">Semantic headings</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="heading_tags" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="heading_tags" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">w3c validation</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="w3c_validation" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="w3c_validation" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">No inline CSS</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="inline_css" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="inline_css" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Minified</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="html_minified" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation html" name="html_minified" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="html_notes"></textarea>
			</li>
			<li>
				<h4 class="html_score">HTML Score: <span id="html_score"></span>&nbsp;/&nbsp;6</h4>
				<input type="hidden"  name="html_hidden_score" id="html_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
			
	
		<div>
            <h3>Forms</h3> 
        <ul>
            
			<li>
				<span class="radio_title">Validation</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation form" name="form_Validation" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation form" name="form_Validation" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Captcha</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation form" name="Captcha" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation form" name="Captcha" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="form_notes"></textarea>
			</li>	
			<li>
				<h4 class="form_score">Form Score: <span id="form_score"></span>&nbsp;/&nbsp;2</h4>
				<input type="hidden" name="form_hidden_score" id="form_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
		
		
		<div>
            <h3>CSS</h3> 
            <ul>
            
			<li>
				<label class="text_label">Total size</label>
				<input type="number" class="number_input" name="css_size">
			</li>
			<li>
				<span class="radio_title">Images to CSS</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_images" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_images" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Minified</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Minified" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Minified" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Concatenated </span>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Concatenated" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Concatenated" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Validate</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Validated" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation css" name="css_Validated" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="css_notes"></textarea>
			</li>
			<li>
				<h4 class="css_score">CSS Score: <span id="css_score"></span>&nbsp;/&nbsp;4</h4>
				<input type="hidden" name="css_hidden_score" id="css_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
		
		
		<div>
            <h3>Javascript</h3> 
            <ul>
            
			<li>
				<span class="radio_title">Utiliised</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js" value="0"> No</label>
			</li>
			<li>
				<label class="text_label">Total size</label>
				<input type="number" class="number_input" name="js_size">
			</li>
			<li>
				<span class="radio_title">JS after body</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="script_placement" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="script_placement" value="0"> No</label>
			</li>	
			<li>
				<span class="radio_title">async /  defer</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="async" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="async" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Replace js</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="css_effects" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="css_effects" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Validate</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Validated" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Validated" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Minified</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Minified" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Minified" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Concatenated</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Concatenated" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation js" name="js_Concatenated" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="js_notes"></textarea>
			</li>
			<li>
				<h4 class="js_score">Javascript Score: <span id="js_score"></span>&nbsp;/&nbsp;7</h4>
				<input type="hidden" name="js_hidden_score" id="js_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
	
	
		<div>
            <h3>Media</h3> 
            <ul>
            
			<li>
				<span class="radio_title">Targeted Video Filenames</span>
					<label class="radio_label"><input type="radio"  class="radio targeting media" name="videos_name" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting media" name="videos_name" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">Targeted Photo Filenames</span>
					<label class="radio_label"><input type="radio"  class="radio targeting media" name="photos_name" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting media" name="photos_name" value="0"> No</label>
            </li>
			<li>
				<span class="radio_title">Image Size Correct</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation media" name="images_Optimised" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation media" name="images_Optimised" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Images Compressed</span>
				<label class="radio_label"><input type="radio"  class="radio optimisation media" name="images_compressed" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio optimisation media" name="images_compressed" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="media_notes"></textarea>
			</li>
			<li>
				<h4 class="media_score">Media Optimisation Score: <span id="media_score"></span>&nbsp;/&nbsp;4</h4>
				<input type="hidden" name="media_hidden_score" id="media_hidden_score" value=""  />
			</li>	
		</ul> 
    </div>
    <div>
        <ul>
            <li>
				<h3 class="optimisation_notes">Total Optimisation Score:&nbsp;&nbsp;<span id="optimisation_score"></span>&nbsp;/ 27</h3> 
				<input type="hidden" name="optimisation_hidden_score" id="optimisation_hidden_score" value=""  />
			</li>
			<li>
				<label class="notes_label">Optimisation Summary:</label>
				<textarea class="notes" name="optimisation_notes"></textarea>
			</li>
        </ul> 
        </div>	
		</section>
		
		<section  class="checklist-section">
             <header class="services">
                 <h2>Targeting (Site Page)</h2>
                    <p>By writing content targeted to a niche in your industry you can target the customer and potentially bypass the intense competiton for the broader search terms.</p>

                 <p class="content-box"><small><b>Example:</b> A Chiropractor creates a site themed on his specialty (aged care) then focuses the site on a lucrative treatment.  The treatment is proven through market research to have a number of people searching for it on Google while the competition is focused on the broader subject.</small></p>

                    <p>You might target only a few customers searching for a highly profitable service or perhaps many customers searching for a lower profit item.</p>

                    <p>The idea is to focus your websites reach and give the user exactly the content they are searching for. This is achieved through extensive research on keywords and phrases to determine the type and number of searches conducted, as well competition on Google each month in your city.</p>
       </header>
		<div>
			<h3>Keyword Targeting</h3> 
            <ul>
			<li>
				<label class="text_label">Target Keyword:</label>
				<input type="text"  class="text_input" name="Keyword">
			</li>

			<li>
				<span class="radio_title">Targeted file name</span>
				<label class="radio_label"><input type="radio"  class="radio targeting phrase"  name="filename" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting phrase"  name="filename" value="0"> No</label>
			</li>
			
			<li>
				<label class="text_label">Keyword Googles per month (WA) :</label>
				<input type="number" class="number_input" name="keyword_searches">
			</li>

			<li>
				<label class="text_label">Target Phrase:</label>
				<input type="text"  class="text_input" name="Phrase">
			</li>
			<li>
				<label class="text_label">Phrase Googles per month (WA) :	</label>
				<input type="number" class="number_input" name="phrase_searches">
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="phrase_notes"></textarea>
			</li>
		</ul> 
        </div>
			
			
			
		
		<div>
            <h3>Title Tag</h3> 
            <ul>  
			<li>
				<span class="radio_title">60 characters or less</span>
				<label class="radio_label"><input type="radio"  class="radio targeting title" name="Title" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting title" name="Title" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Contains keyword</span>
				<label class="radio_label"><input type="radio"  class="radio targeting title" name="Title_keyword" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting title" name="Title_keyword" value="0"> No</label>
			</li>  			
			<li>
				<label class="text_label">Display in search:</label>
				<input type="text"  class="text_input" name="title_displayed">
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="title_notes"></textarea>
			</li>
			<li>
				<h4 class="title_score">Title Score: <span id="title_score"></span>&nbsp;/&nbsp;2</h4>
				<input type="hidden" name="title_hidden_score" id="title_hidden_score" value=""  />
			</li>
		</ul> 
        </div>

        <div>
			<h3>Description Tag</h3> 
            <ul>
			<li>
				<span class="radio_title">155 characters</span>
				<label class="radio_label"><input type="radio"  class="radio targeting description" name="meta_Description_Length" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting description" name="meta_Description_Length" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Contains keyword</span>
				<label class="radio_label"><input type="radio"  class="radio targeting description" name="meta_Description_keyword" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting description" name="meta_Description_keyword" value="0"> No</label>
			</li>
			<li>
				<label class="text_label">Display in search:</label>
				<input type="text"  class="text_input" name="description_displayed">
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="description_notes"></textarea>
			</li>
			<li>
				<h4 class="description_score">Description Score: <span id="description_score"></span>&nbsp;/&nbsp;2</h4>
				<input type="hidden" name="description_hidden_score" id="description_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
			
			
		
		<div>
            <h3>Anchors</h3> 
        <ul> 
			<li>
				<label class="text_label">First on page:</label>
				<input type="text"  class="text_input" name="first_anchor">
			</li>
			<li>
				<label class="text_label">Total:</label>
				<input type="text"  class="number_input" name="total_anchors">
			</li>
			<li>
				<span class="radio_title">Keyword targeted</span>
				<label class="radio_label"><input type="radio"  class="radio targeting anchor" name="anchor_targeted" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting anchor" name="anchor_targeted" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">In text anchors</span>
				<label class="radio_label"><input type="radio"  class="radio targeting anchor" name="anchor_text" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting anchor" name="anchor_text" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="anchor_notes"></textarea>
			</li>
			<li>
				<h4 class="anchor_score">Anchor Score: <span id="anchor_score"></span>&nbsp;/&nbsp;2</h4>
				<input type="hidden" name="anchor_hidden_score" id="anchor_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
			
		
		<div>
            <h3>Heading Tags</h3> 
            <ul>
			<li>
				<span class="radio_title">h1 Keyword targeted</span>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Keyword" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Keyword" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">One h1</span>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Number" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Number" value="0"> No</label>
			</li>
			<li>
				<span class="radio_title">Semantic</span>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Semantic" value="1">Yes</label>
				<label class="radio_label"><input type="radio"  class="radio targeting headings" name="h1_Semantic" value="0"> No</label>
			</li>
			<li>
				<label class="notes_label">Summary</label>
				<textarea  class="notes" name="headings_notes"></textarea>
			</li>
			<li>
				<h4 class="headings_score">Headings Score: <span id="headings_score"></span>&nbsp;/&nbsp;3</h4>
				<input type="hidden" name="headings_hidden_score" id="headings_hidden_score" value=""  />
			</li>
		</ul> 
        </div>
			
			
        <div>
            <h3>Accessibility</h3> 
            <ul>
            <li>
                <span class="radio_title">Alt Tags</span>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="alt" value="1">Yes</label>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="alt" value="0"> No</label>
            </li>
            <li>
                <span class="radio_title">alt Keyword targeted</span>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="alt_keyword" value="1">Yes</label>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="alt_keyword" value="0"> No</label>
            </li>
            <li>
                <span class="radio_title">Aria Labelled by</span>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="Aria" value="1">Yes</label>
                <label class="radio_label"><input type="radio"  class="radio targeting accessibility" name="Aria" value="0"> No</label>
            </li>
            <li>
                <label class="notes_label">Summary</label>
                <textarea  class="notes" name="accessibility_notes"></textarea>
            </li>
			<li>
				<h4 class="accessibility_score">Accessibility Score: <span id="accessibility_score"></span>&nbsp;/&nbsp;3</h4>
				<input type="hidden" name="accessibility_hidden_score" id="accessibility_hidden_score" value=""  />
			</li>
            </ul> 
            </div>
					
			
			<div>
                <h3>Content</h3> 
                <ul>
				<li>
					<label class="text_label">Word Count:</label>
					<input type="text"  class="number_input" name="word_count">
				</li>
				<li>
					<label class="text_label">Word Count (block):</label>
					<input type="text"  class="number_input" name="word_count_block">

				</li>
				<li>
					<span class="radio_title"> No Spelling Errors</span>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Spelling" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Spelling" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">No Grammar Errors</span>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Grammar" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Grammar" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">Prominent Phone No.</span>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Phone" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting content" name="Phone" value="0"> No</label>
				</li>
				<li>
					<label class="notes_label">Summary</label>
					<textarea  class="notes" name="content_notes"></textarea>
				</li>
				<li>
					<h4 class="content_score">Content Score: <span id="content_score"></span>&nbsp;/&nbsp;3</h4>
					<input type="hidden" name="content_hidden_score" id="content_hidden_score" value=""  />
				</li>
			</ul> 
            </div>

			
			<div>
                <h3>Media</h3> 
                <ul>
				<li>
					<label class="text_label">Number of photos:</label>
					<input  name="photos" class="number_input" type="number">
				</li>
				<li>
					<span class="radio_title">Appropriate Photos</span>
					<label class="radio_label"><input type="radio"  class="radio targeting content_media" name="no_photos" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting content_media" name="no_photos" value="0"> No</label>
				</li>
				<li>
					<label class="text_label">Number of videos:</label>
					<input type="number" class="number_input" name="videos" >
				</li>
				<li>
					<span class="radio_title">Appropriate videos</span>
					<label class="radio_label"><input type="radio"  class="radio targeting content_media" name="no_videos" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio targeting content_media" name="no_videos" value="0"> No</label>
				</li>
				<li>
					<label class="notes_label">Targeting Media Summary</label>
					<textarea class="notes" name="media_notes2"></textarea>
				</li>
				<li>
					<h4 class="targeting_media_score">Targeting Media Score: <span id="targeting_media_score"></span>&nbsp;/&nbsp;2</h4>
					<input type="hidden" name="targeting_media_hidden_score" id="targeting_media_hidden_score" value=""  />
				</li>
			</ul> 
            </div>	
			
			<div>
                 <h3 class="targeting_score">Total Targeting Score:&nbsp;&nbsp;<span id="targeting_score"></span>&nbsp;/ 20</h3>
            <ul>
                <li>
                    <input type="hidden" name="targeting_hidden_score" id="targeting_hidden_score" value=""  />
                </li>
                <li>
                    <label class="notes_label">Targeting Summary:</label>
                    <textarea class="notes" name="targeting_notes"></textarea>
                </li>
			</ul> 
            </div>	
		</section>

		<section  class="checklist-section">
             <header class="services">
			<h2>Analytics</h2>
                 <p>Analytics are the measurements used to determine how your  website is performing. Without this information it is impossible to professionally manage a website. This information is normally provided in a monthly report to the website owner.</p>
                 
                 <p class="content-box" >Our  <a href="http://www.nook-digital.marketing/index.php">monthly SEO service</a> includes a 1300 number diverted to your phone that tracks all the calls made from the website. We also conduct continuous testing on user interaction and the site is maintained as the internet changes to ensure it stays fully optimised over time.</p>
                 
                 <p>Your site may even be penalised by Google as the rules have changed considerably over the last few years and previous legitimate SEO tactics may now be actually causing your website harm.</p>
            </header>

			
			<div>
                <h3>SEO</h3> 
                <ul>   
				<li>
					<span class="radio_title">Backlinks:</span>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Backlinks" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Backlinks" value="0"> No</label>
				</li>
				<li>
					<label class="text_label">No. of backlinks:</label>
					<input type="number" class="number_input" name="SEO_links1" >
				</li>
				<li>
					<span class="radio_title">Offsite links:</span>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Offsite" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Offsite" value="0"> No</label>
				</li>
				<li>
					<label class="text_label">No. of offsite links:</label>
					<input type="number" class="number_input" name="SEO_links2" >
				</li>
				<li>
					<span class="radio_title">Google Places Page</span>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Places" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Places" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">Facebook link</span>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Facebook" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Facebook" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">Instagram link</span>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Instagram" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics seo" name="Instagram" value="0"> No</label>
				</li>
				<li>
					<label class="text_label">Page Ranking for Keyword</label>
					<input type="number" class="number_input" name="Ranking" >
				</li>
				<li>
					<label class="text_label">1st 5 competitors (google)</label>			
                    <input type="text"  class="text_input" name="1competitors">
				    <input type="text"  class="text_input" name="2competitors">
					<input type="text"  class="text_input" name="3competitors">
					<input type="text"  class="text_input" name="4competitors">
					<input type="text"  class="text_input" name="5competitors">
				</li>
				<li>
					<label class="notes_label">Summary</label>
					<textarea  class="notes" name="seo_notes"></textarea>
				</li>
				<li>
					<h4 class="seo_score">SEO Score: <span id="seo_score"></span>&nbsp;/&nbsp;5</h4>
					<input type="hidden" name="seo_hidden_score" id="seo_hidden_score" value=""  />
				</li>
			</ul>
            </div>
		
			
			<div>
                <h3>Blackhat</h3> 
                <ul> 
				<li>
					<span class="radio_title">No Keyword Stuffing</span>
					<label class="radio_label"><input type="radio"  class="radio analytics blackhat" name="Blackhat_Keyword" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics blackhat" name="Blackhat_Keyword" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">No Poor Quality Backlinks</span>
					<label class="radio_label"><input type="radio"  class="radio analytics blackhat" name="Blackhat_Backlinks" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics blackhat" name="Blackhat_Backlinks" value="0"> No</label>
				</li>
				<li>
					<label class="notes_label">Summary</label>
					<textarea class="notes" name="blackhat_notes"></textarea>
				</li>
				<li>
					<h4 class="blackhat_score">Blackhat Score: <span id="blackhat_score"></span>&nbsp;/&nbsp;2</h4>
					<input type="hidden" name="blackhat_hidden_score" id="blackhat_hidden_score" value=""  />
				</li>
			</ul>
            </div>
			
			
			<div>
                <h3>Search Console</h3>
                <ul>
				<li>
					<span class="radio_title">Google Tracking</span>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Tracking" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Tracking" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">Indexed</span>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Indexed" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Indexed" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">No Penalties</span>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Penalties" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="Penalties" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">No 404's</span>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="fourohfour" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="fourohfour" value="0"> No</label>
				</li>
				<li>
					<span class="radio_title">No /m /mobile 404's</span>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="fourohfour_m" value="1">Yes</label>
					<label class="radio_label"><input type="radio"  class="radio analytics search" name="fourohfour_m" value="0"> No</label>
				</li>
				<li>
					<label class="text_label">Bounce Rate:</label>			
					<input type="text"  class="number_input" name="Bounce">
				</li>
				<li>
					<label class="text_label">Unique visitors p/m:</label>
					<input type="text"  class="number_input" name="unique">
				</li>
				<li>
					<label class="notes_label">Summary</label>
					<textarea class="notes" name="search_notes"></textarea>
				</li>
				<li>
					<h4 class="search_score">Search Console Score: <span id="search_score"></span>&nbsp;/&nbsp;5</h4>
					<input type="hidden" name="search_hidden_score" id="search_hidden_score" value=""  />
				</li>	
			</ul>
            </div>
            
			<div>  
				<h3 class="analytics_score">Total Analytics Score&nbsp;<span id="analytics_score"></span>&nbsp;/ 12</h3> 
            <ul>
                <li>
					<input type="hidden" name="analytics_hidden_score" id="analytics_hidden_score" value=""  />
				</li>
				<li>
					<label class="notes_label">Analytics Summary:</label>
					<textarea  class="notes" name="analytics_notes"></textarea>
				</li>
			</ul> 
            </div>
		</section>
		
		<section  class="checklist-section">
			<div>
				<h3>Total Site Score:&nbsp;&nbsp;<span id="score"></span>&nbsp;/&nbsp;82</h3>
				<input type="hidden" name="score_hidden_score" id="score_hidden_score" value=""  />
                
            <ul>
				<li>
					<label class="notes_label">Site Summary:</label>
					<textarea  class="notes" name="score_notes"></textarea>
				</li>	
			</ul>
            </div>
		</section>
		
		<section>
			<input type="submit" name="submit" class="submit_button" />
              <div class="top-nav">
                <a class="nav" href="#top"></a>
            
                <a class="back_to_top nav" href="#top">Back to top</a> 
            </div>
		</section>
	</form>
    
    <details>
           <?php include_once 'includes/footer.min.php'; ?>
    </details>       
</main>
</body>
<script defer type="text/javascript" src="js/js.js"></script>

</html>
