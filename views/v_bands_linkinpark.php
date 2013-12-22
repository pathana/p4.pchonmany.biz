<div id="content">
	<h1>Linkin Park</h1>
		<img src="../images/linkin.png" class="bandPic" alt="Linkin Park">
			
			<?php foreach($users as $user): ?>

		        <!-- Print this user's name -->
		        <?=$user['first_name']?> <?=$user['last_name']?> &nbsp;&raquo;&nbsp;

		        <!-- If there exists a connection with this user, show a unfollow link -->
		        <?php if(isset($connections[$user['user_id']])): ?>
		            <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

		        <!-- Otherwise, show the follow link -->
		        <?php else: ?>
		            <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
		        <?php endif; ?>

		        <br><br>

	    	<?php endforeach; ?>
	<p>
		Hello world
</div>