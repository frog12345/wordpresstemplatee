<aside class="sidebar">
	
		<h3>Sidebar</h3>
	
	<div id="sidebar">
	
	<?php
		if (!function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('MYWidget1')) : ?>

	<?php endif; ?>

	</div>

	<div id="sidebar">
		<?php
			if (!function_exists('dynamic_sidebar')
				|| !dynamic_sidebar('MYWidget2')) : ?>

		<?php endif; ?>
	</div>

</aside>