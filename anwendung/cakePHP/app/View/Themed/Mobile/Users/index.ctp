<div data-role="header">
	<h1>Overview of users</h1>
</div>
<div data-role="content">
	<article>
		<p>
			<?php 
				echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'), array('data-role' => 'button', 'data-icon' => 'plus'));
			?><br/>
			<br/>
			<table>
			    <tr>
			        <th>Username</th>
			        <th>Role</th>
			        <th>Details</th>
			    </tr>
			    <!-- Here is where we loop through our $users array, printing out user info -->
				<?php foreach ($users as $user): ?> 
				<tr>
					<td>
						<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
					</td>
					<td>
						<?php echo $user['User']['role']; ?>
					</td>
					<td>
						<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));?>
						<?php echo $this->Form->postLink(	# userLink uses javascript to do a user request
							'Delete',
							array('action' => 'delete', $user['User']['id']),
							array('confirm' => 'Are you sure?')); 
						?>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php unset($user); ?> 
			</table>
		</p>
	</article>
</div>