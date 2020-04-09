<div class="date">
	<?php if(!borderland_elated_post_has_title()) { ?>
		<a href="<?php the_permalink() ?>">
	<?php } ?>

	<?php the_time(get_option('date_format')); ?>

	<?php if(!borderland_elated_post_has_title()) { ?>
		</a>
	<?php } ?>
</div>