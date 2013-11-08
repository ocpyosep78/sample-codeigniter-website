	<div class="content">	
	
				<article class="topcontent">	
					<header>
						<h2>Messages</h2>
					</header>
					
					<content>
					
					<?= validation_errors()?>

					<form action="<?= site_url('messages/update')?>" method="post">
					<input type="hidden" name="id" value="<?= $id?>" />
					<input type="text" name="name" placeholder="Name" value="<?= $name?>" />
					<input type="text" name="phone" placeholder="Phone" value="<?= $phone?>" />
					<input type="text" name="email" placeholder="Email" value="<?= $email?>" />
					<textarea cols="40" rows="5" name="message" placeholder="Message" /><?= $message?></textarea>
					
					<p><input type="submit" class="button" value="update" /></p>
					
					</form>

										
					</content>
					
				</article>

		</div>