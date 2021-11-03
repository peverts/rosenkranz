<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<footer class="footer">
	<div class="footer-inner">
		<div class="uk-grid uk-grid-large uk-flex-between">
			<div class="uk-width-1-4@l uk-flex uk-flex-column uk-flex-between uk-flex-last uk-flex-first@l">
                <div class="logo-social-wrapper uk-flex uk-flex-between uk-flex-middle footer-item">
                    <div class="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="162" height="35" viewBox="0 0 162 35">
                            <g id="Gruppe_47" data-name="Gruppe 47" transform="translate(-236.936 -2066.566)">
                                <text id="rosenkranz" transform="translate(317.936 2094.567)" fill="#bc8110" font-size="28" font-family="DepotNew-Bold, Depot New" font-weight="700" letter-spacing="-0.01em"><tspan x="-80.794" y="0">ROSENKRANZ</tspan></text>
                            </g>
                        </svg>
                    </div>
                    <div class="socials">
                        <?php if($page_footer['show_socialmedia'] && $global_social) { ?>
                            <?php $social_profiles = $global_social;
                            include 'tpl/partials/social.php'; ?>
                        <?php } ?>
                    </div>
                </div>
				<?php if(has_nav_menu('footer')) { ?>
					<div><div class="footer-menu">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'fallback_cb' => false)); ?>
					</div></div>
				<?php } ?>
			</div>

            <div class="uk-width-1-2@m uk-width-auto@l">
                <div class="footer-item footer-opening uk-flex">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21.793" height="21.793" viewBox="0 0 21.793 21.793">
                            <path id="clock" d="M12.9,23.793a10.9,10.9,0,1,1,10.9-10.9A10.9,10.9,0,0,1,12.9,23.793Zm0-1.09A9.807,9.807,0,1,0,3.09,12.9,9.807,9.807,0,0,0,12.9,22.7Zm4.13-7.526a.545.545,0,0,1-.633.887L12.58,13.34a.545.545,0,0,1-.209-.3L10.736,7.047a.545.545,0,0,1,1.051-.287l1.583,5.806Z" transform="translate(-2 -2)" fill="#bc8110"/>
                        </svg>
                    </div>
                    <div class="content">
                        <?= $global_contact['offnungszeiten']; ?>
                    </div>
                </div>
            </div>

            <?php if($page_footer['show_contact'] && $global_contact) { ?>
                <div class="uk-width-1-2@m uk-width-auto@l">
                    <div class="footer-item footer-contact">
                        <?php include 'tpl/partials/contact.php'; ?>
                    </div>
                </div>
            <?php } ?>
		</div>
	</div>
</footer>

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
