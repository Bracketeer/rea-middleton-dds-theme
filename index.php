<?php get_header(); ?>
<section id="home">
	<?php
		if( have_posts() ):

			while( have_posts() ): the_post(); ?>
				<img src="<?php the_post_thumbnail(); ?>" />
				<h1><?php the_title(); ?></h1>

			</h4><?php the_content(); ?></h4>

				<?php endwhile;

		endif;
	?>
</section>
<section>
	<form class="contact-form" action="index.html" method="post">
		<div class="contact-details">
			<div class="contact-name">
				<label>Name</label>
				<input type="text" name="Name" required>
			</div>
			<div class="contact-email">
				<label>Email</label>
				<input type="email" name="Email" required>
			</div>
			<div class="contact-phone">
				<label>Phone</label>
				<input type="tel" name="Phone" required>
			</div>
			<div class="contact-date">
				<label>Requested Date</label>
				<input type="date" name="Requested Date" value="<?php echo date("Y-m-d");?>" placeholder="requested date">
			</div>
		</div>
		<div class="contact-details">
			<label>Services Desired</label>
		<div class="contact-services">
				<span><input type="checkbox" name="cleaning">Cleaning</span>
				<span><input type="checkbox" name="cosmetic">Cosmentic</span>
				<span><input type="checkbox" name="repair">Repair</span>
			</div>
			<div class="contact-textbox">
			<label>Additional Details</label>
			<textarea name="Additional Info"></textarea>
		</div>
	</div>
	<span>Returning Client? <input type="checkbox" name="returning client">
	</span>
	<input type="submit" name="" value="Submit">
	</form>
</section>
<?php get_footer(); ?>
