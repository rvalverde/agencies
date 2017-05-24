<?php include("includes/functions.php"); get_header(); ?>

	<div id="wrapper">
		<div class="width">
			<h1><?php the_title(); ?></h1>
			<div class="form form__group">
				<form action="">
					<div class="item form__group__item">
						<input type="text" placeholder="Usuario" />
					</div>
					<div class="item form__group__item">
						<input type="password" placeholder="******">
					</div>
				</form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>