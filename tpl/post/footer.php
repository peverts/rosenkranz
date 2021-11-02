<?php
if(! $hide_links) {
    $post_type = get_post_type_object(get_post_type());
    $post_type_labels = $post_type->labels;
    ?>

    <a class="ghostkit-button ghostkit-button-md is-style-button-plain ghostkit-custom-Vy5Qa" href="<?= esc_url( get_permalink() ) ?>">
        <span class="ghostkit-button-icon ghostkit-button-icon-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13.5" viewBox="0 0 18 13.5"><path id="arrow-right_1_" data-name="arrow-right (1)" d="M22.439,15.5H7.75a.75.75,0,1,1,0-1.5H22.439L17.72,9.28A.75.75,0,0,1,18.78,8.22l6,6a.75.75,0,0,1,0,1.061l-6,6A.75.75,0,0,1,17.72,20.22Z" transform="translate(-7 -8)" fill="#bc8110"/></svg>
        </span>
        Mehr erfahren
    </a>
<?php } ?>
