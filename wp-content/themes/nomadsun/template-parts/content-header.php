<div class="flex-l">
	<!-- our header  background image -->
	<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image');?>">
	</div>

	<!-- our header content -->
	<div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
		<div class="tc">

			<p class="date f6 archivo ttu mt0 mb5 mb0-l tracked absolute-l top-0-l left-0-l w-100-l pt5">
				<?php nice_date(get_field('date')) ?>
				<span class="line mt4"></span>
			</p>
			<h1 class="f2 f1-l archivo mto mb2 ttu lh-title">
				<?php the_title(); ?>
			</h1>	
			<p class="f2 f1-l tenor mt0 mb3 mb5-l ttu lh-title">
				<?php the_field('subhead'); ?>
			</p>	    
			<p class="f4 cardo i measure center mv0">
				<?php the_sub_field('header_intro'); ?>
			</p>
		</div>
	</div>
</div>