<?php


function DislaySocial($social_array){
	?>
	<div class="sidebar-social">
		<span class="sr-only">Social:</span>
		<ul>
			<?php


				for ($row=0;$row<sizeof($social_array);$row++){
					?>
					<li>
						<a href="<?= $social_array[$row][1] ?>" title="<?= $social_array[$row][0] ?>" class="no-mark-external" <?php if (sizeof($social_array[$row])==4){ if ($social_array[$row][3]==True){echo 'target="_blank"';}} ?>>
							<span class="<?= $social_array[$row][2] ?>"></span>
							<span class="sr-only"><?= $social_array[$row][0] ?></span>
						</a>
					</li>
					<?php
				}

			?>
		</ul>
	</div>
	<?php
}

