<?= $this->Html->css('posts.css') ?>
<main>
	<div class="innertube">
		<table>
			
			<?php foreach ($posts as $post): ?>
			<tr>
				<td>
					<strong><?= h($post->title) ?></strong>
				</td>
			</tr>
			<tr>
				<td><?= substr($post->content, 0, 297).'...' ?>  <?= $this->Html->link("Read more", ['action' => 'view', $post->id_post]) ?> </td>
			</tr>
			<td>
				<?= $this->Html->link('Edit', ['action' => 'edit', $post->id_post]) ?>
				|
				<?= $this->Form->postLink(
					'Delete',
					['action' => 'delete', $post->id_post],
					['confirm' => 'Are you sure?'])
				?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
</main>


<nav id="nav">
	<div class="innertube">
		<h2> My Test Blog </h2>
		<ul>
			<li><a href="#"><p><?= $this->Html->link("Add new post", ['action' => 'add']) ?></p></a></li>
		</ul>
	</nav>
	
	
	
	
	
	
	
	
		