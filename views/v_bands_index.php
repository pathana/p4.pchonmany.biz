<div id="content">
	<h1>Bands</h1>

	<div id="usersContent"> 
		<?php foreach($users as $user): ?>

	        <!-- Print this user's name -->
	        <i><?=$user['first_name']?> <?=$user['last_name']?></i> &nbsp;&raquo;&nbsp;

	        <!-- If there exists a connection with this user, show a unfollow link -->
	        <?php if(isset($connections[$user['user_id']])): ?>
	            <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

	        <!-- Otherwise, show the follow link -->
	        <?php else: ?>
	            <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
	        <?php endif; ?>

        <br><br>

    	<?php endforeach; ?>
	</div>


			<a href="/bands/linkinpark">
				<img src="../images/logo_linkin.png" class="bandLogo" alt="Linkin Park"></a>
			<a href="/bands/nodoubt">
				<img src="../images/logo_nodoubt.png" class="bandLogo" alt="No Doubt"></a>
		<p>
			<a href="/bands/onerepublic">
				<img src="../images/logo_onerepub.png" class="bandLogo" alt="OneRepublic"></a>
			<a href="/bands/paramore">
				<img src="../images/logo_paramore.png" class="bandLogo" alt="Paramore"></a>
		<p>
			<a href="/bands/phoenix">
				<img src="../images/logo_phoenix.png" class="bandLogo" alt="Phoenix"></a>
			<a href="/bands/thepolice">
				<img src="../images/logo_thepolice.png" class="bandLogo" alt="The Police"></a>
		<p>
			<a href="/bands/stevemillerband">
				<img src="../images/logo_steve.png" class="bandLogo" alt="Steve Miller Band"></a>
			<a href="/bands/yeahyeahyeahs">
				<img src="../images/logo_yeahs.png" class="bandLogo" alt="Yeah Yeah Yeahs"></a>
</div>