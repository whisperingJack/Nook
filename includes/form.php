<form class="checkout_form" id="ajax-contact" method="post">
    <h3>Contact Nook Digital Marketing Today</h3>
	<p class="form-text">Would you like to know more? Call <a class="tel" href="tel:1300923927" title="Call Today" rel="nofollow"><span class="white ">1300&nbsp;923&nbsp;927</span></a> or get in touch by email.</p>
	
<!-- form inputs  -->
	<div class="details">

		
		<input type="text" placeholder="Name" name="name" class="input" id="name" required/>	
		<input type="tel" placeholder="Phone" name="phone" class="input" id="phone" required/>	
	
		<input type="email" placeholder="Email" name="email" class="input" id="email" required/>
			
		<textarea rows="5" style="overflow-y:hidden" class="textbox"  id="textbox" name="textbox" placeholder="Message"></textarea>
			

        <input type="checkbox" name="one" id="widget_checkbox"/>
		<label class="widget_btn" for="widget_checkbox" onclick>Send</label>

			<!-- captcha - submit - success -->
		<div class="send_widgets" >
	
			<!-- captcha -->
			
			<div class="g-recaptcha" id="captcha" data-sitekey="6LfEFRAUAAAAAN4ivFV21UEo8UOxKSW3JsbFfg7F" data-size="compact"></div><!--test key -->
			<!--<div class="g-recaptcha" data-sitekey="6LdZpQcUAAAAABja2fSPC4UkkjQPHIYqhFGgHlf1" data-size="compact"></div>--><!-- The real key -->

			<!-- submit -->
			<div class="formMessages submit_field"></div>

			<div id="spinner" class="hidden success submit_field"><i class="loader2"></i></div>

			<input id="submit" type="submit" name="Submit" value="Send Email" class="submit success" style="cursor:pointer"/>
		</div>	
		</div>	
</form>