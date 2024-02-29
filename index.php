<?php
	/* Template Name: Template Modulable */
	get_header();
?>
	<div class="cbo-page">
		<?php
			global $flexible_count;
			if( have_rows('flexible_layout') ):
				while ( have_rows('flexible_layout') ) : the_row();
				++$flexible_count;

					///////////////////
					// HERO
					if( get_row_layout() == 'hero' ):
						get_template_part( 'templates/blocks/hero');

					///////////////////
					// SECTION CONTACT
					elseif( get_row_layout() == 'contact' ):
						get_template_part( 'templates/blocks/contact');

					///////////////////
					// SECTION TEXT PICTURE
					elseif( get_row_layout() == 'textpicture' ):
						get_template_part( 'templates/blocks/textpicture');

					///////////////////
					// SECTION TEXT
					elseif( get_row_layout() == 'text' ):
						get_template_part( 'templates/blocks/text');

					///////////////////
					// SECTION GALERIE
					elseif( get_row_layout() == 'galerie' ):
						get_template_part( 'templates/blocks/galerie');

					///////////////////
					// SECTION PARTNERS
					elseif( get_row_layout() == 'partners' ):
						get_template_part( 'templates/blocks/partners');

					///////////////////
					// SECTION PICTURE
					elseif( get_row_layout() == 'picture' ):
						get_template_part( 'templates/blocks/picture');

					///////////////////
					// SECTION BLOCS PICTURE
					elseif( get_row_layout() == 'blocspicture' ):
						get_template_part( 'templates/blocks/blocspicture');

					///////////////////
					// SECTION TESTIMONIALS LIST
					elseif( get_row_layout() == 'testimonialslist' ):
						get_template_part( 'templates/blocks/testimonialslist');

					///////////////////
					// SECTION KEYNUMBER
					elseif( get_row_layout() == 'keynumber' ):
						get_template_part( 'templates/blocks/keynumber');

					///////////////////
					// SECTION KEYNUMBER
					elseif( get_row_layout() == 'video' ):
						get_template_part( 'templates/blocks/video');

					///////////////////
					// SECTION COLONNES + PICTURES
					elseif( get_row_layout() == 'colpictures' ):
						get_template_part( 'templates/blocks/colpictures');

					///////////////////
					// SECTION TABLEAU
					elseif( get_row_layout() == 'tableau' ):
						get_template_part( 'templates/blocks/tableau');
	
					endif;
				endwhile;
			endif;
		?>
	</div>
<?php
	get_footer();
?>