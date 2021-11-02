<?php

add_filter( 'gkt_icons_list', 'my_gkt_icons' );
function my_gkt_icons( $icons ) {
    $icons['my-icons-pack'] = array(
        'name' => 'Rosenkranz Icons',
        'icons' => array(
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="13.5" viewBox="0 0 18 13.5"><path id="arrow-right_1_" data-name="arrow-right (1)" d="M22.439,15.5H7.75a.75.75,0,1,1,0-1.5H22.439L17.72,9.28A.75.75,0,0,1,18.78,8.22l6,6a.75.75,0,0,1,0,1.061l-6,6A.75.75,0,0,1,17.72,20.22Z" transform="translate(-7 -8)" fill="#bc8110"/></svg>',
            )
        ),
    );

    return $icons;
}
