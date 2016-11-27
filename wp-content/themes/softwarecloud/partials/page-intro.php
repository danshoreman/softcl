<?php if (is_page('home')) : ?>

<section class="introduction home-intro">
	<div class="row">
		<div class="small-12 columns">
			<div class="intro-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php elseif (is_page('culture')) : ?>

<section class="introduction culture-intro">
	<div class="row">
		<div class="small-12 columns">
			<div class="intro-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php elseif (is_page('advisory')) : ?>

<section class="introduction advisory-intro">
	<div class="row">
		<div class="small-12 columns">
			<div class="intro-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php elseif (is_page('cloud-software')) : ?>

<section class="introduction cloud-intro">
	<div class="row">
		<div class="small-12 columns">
			<div class="intro-content">
				<h2>Forget your office desktops. Forget managing (or replacing) hardware. Forget worrying about updates. Forget scheduling backups.</h2>
		
				<p>When you roll out CloudDesk virtual desktops, you’re not just migrating your workforce to the cloud – you’re saying goodbye to a ton of headaches. And costs.</p>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>