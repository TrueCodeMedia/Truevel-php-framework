<ul>
	<?php foreach ($posts as $post): ?>
		<li><?=$post->title?></li>
	<?php endforeach;?>
</ul>

<form action="/posts" method="post">
	<input type="text" name="title">
	<input type="text" name="description">
	<button type="submit">Submit</button>
</form>