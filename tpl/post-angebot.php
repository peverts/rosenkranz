<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */

include 'post/load-vars.php';

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
			<?php include 'post/thumbnail.php'; ?>
		<?php } ?>

		<div class="post-content">
            <header class="post-header">
                <?php if(! $hide_links) { ?>
                    <a href="<?= esc_url( get_permalink() ) ?>">
                        <?php } ?>
                        <h3 class="post-title">
                            <?= get_the_title(); ?>
                        </h3>
                        <?php if(! $hide_links) { ?>
                    </a>
                <?php } ?>
                <p class="price">
                    <?= get_field('preis', get_the_ID()); ?>
                </p>
            </header>
			<?php if(! $hide_descr) { ?>
				<?= get_field('beschreibung', get_the_ID()); ?>
			<?php } ?>
			<?php include 'post/footer.php'; ?>
		</div>

	</div>

</article>
