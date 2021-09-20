
<!-- <h1>
	<a href="<?php the_permalink(); ?>">
	Check out <?php the_title(); ?>
	</a>
</h1> -->

<!-- here we used a inline style attribute to attach our hero image as a css background directly onto the element -->
	<a class=" db link hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image');?>" href="<?php the_permalink(); ?>">
		<div class="hero-content white tc ph3 ph4-l">

			<!-- our location title -->
			<h1 class="hero-heading f2 f1-l b mt0 mb3 ttu archivo lh-title">
				<?php the_title(); ?>
			</h1>

			<!-- our subheading (custom fields) -->
			<?php if( get_field('subhead') ): ?>
			<p class="hero-subhead f2 f1-l mb5 mb6-l mt0 white ttu tenor lh-title">
				<?php the_field('subhead'); ?>
			</p>
			<!-- mb6: margin bottom 6, margin top 0 -->
			<?php endif; ?>

			<!-- our formatted date -->
			<?php if( get_field('date') ): ?>

			<p class="f6 date b white ttu ma0 tracked tenor">
				<?php 
				nice_date(get_field('date'))?>
			</p>
			<?php endif; ?>


		</div>

	</a>