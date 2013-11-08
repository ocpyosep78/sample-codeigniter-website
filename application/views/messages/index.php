	<div class="content">	
	
				<article class="topcontent">	
					<header>
						<h2>Messages</h2>
					</header>
					
					<content>
					
					<? if($messages):?>
					
						
							<table border="0">
								<tr>
									<th>ID#</th>
									<th>Name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Message</th>
									<th>Action</th>
								</tr>
								
								<? foreach($messages as $message):?>
									<tr>
										<td><?= $message['id']?></td>
										<td><?= $message['name']?></td>	
										<td><?= $message['phone']?></td>
										<td><?= $message['email']?></td>
										<td><?= $message['message']?></td>
										<td><a href="<?= site_url('messages/edit/' . $message['id'])?>">Edit</a> | <a href="<?= site_url('messages/delete_confirm/' . $message['id'])?>">Delete</a></td>
									</tr>
								<? endforeach?>
								
							</table>
							
						<? else:?>
							<h3>There are no messages at this time</h3>
						<? endif?>
					
					</content>
					
				</article>

		</div>