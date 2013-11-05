		<div class="content">	
				<article class="topcontent">	
					<header>
						<h2>Contact</h2>
					</header>
					
					<content>
					
					<?= validation_errors()?>

					<form action="<?= site_url('contact/submit')?>" method="post">
					
					<input type="text" name="name" placeholder="Name" />
					<input type="text" name="phone" placeholder="Phone" />
					<input type="text" name="email" placeholder="Email" />
					<textarea cols="40" rows="5" name="message" placeholder="Message" /></textarea>
					
					<p><input type="submit" class="button" value="Submit" /></p>
					
					</form>
					
					</content>
					
				</article>

		</div>