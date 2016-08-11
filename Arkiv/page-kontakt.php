<?php get_header(); ?>
	<div class="contact-hero">

	</div>
	<div class="overlay"> </div>
	<div class="contact-overlaytext">
		<h1>Kontakt</h1>
		<span></span>
		<p>
			Är du intresserad av en förändring?  Fyll i formuläret, ring 073-6291749 eller mejla celina.burman.pt@gmail.com så återkommer 
			jag så snart som möjligt. 

		</p>
	</div>
	<section class="contact-first-bg">
		<div class="contact-first center-text">
			<section class="contact">
				<h3>Kontaktuppgifter</h3>
				        <form id="contact" name="contact" method="post" novalidate="novalidate" autocomplete="off">
						    <fieldset id="myform">
						    	<div class="contact-1">
							        <input type="text" name="name" id="name" required size="30" value="" required="" placeholder="Namn">
							        <input type="text" name="email" id="email" class="contact-1-2" required size="30" value="" required="" placeholder="Mail">
						        </div>
						        <div class="contact-2">
						        	<textarea name="message" id="message" required placeholder="Meddelande"></textarea>
						        </div>
						        <input id="submit" type="submit" class="send" name="submit" value="Skicka">
						    </fieldset>
						</form>

						<div id="success">
							<img src="<?php bloginfo('template_url');?>/img/icons/check.png">
						    <p>Tack för ditt meddelande!</p>
						</div>
						<div id="error">
						    <p>Något blev fel, försök igen.</p>
						</div>
							<script src="//code.jquery.com/jquery-latest.min.js"></script>
							<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
							<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
							<script type="text/javascript">

							// validate contact form
							$(function() {
							    $('#contact').validate({
							        rules: {
							            name: {
							                required: true,
							                minlength: 2
							            },
							            email: {
							                required: true,
							                email: true
							            },
							            message: {
							                required: true
							            }
							        },
							        messages: {
							            name: {
							                required: " ",
							                minlength: " "
							            },
							            email: {
							                required: ""
							            },
							            message: {
							                required: " ",
							                minlength: " "
							            }

							        },
							        submitHandler: function(form) {
							            $(form).ajaxSubmit({
							                type:"POST",
							                data: $(form).serialize(),
							                url:"<?php bloginfo('template_url');?>/process.php",
							                success: function() {
							                    $('#contact').fadeTo( "slow", 0.0, function() {
							                        $('#success').fadeIn();
							                    });
							                },
							                error: function() {
							                    $('#contact').fadeTo( "slow", 0.0, function() {
							                        $('#error').fadeIn();
							                    });
							                }
							            });
							        }
							    });
							});
							</script>
						    </div>  
						</div>
						</section>
		</div>
	</section>
<?php get_footer(); ?>