<div class="contact">
    <ul class="contact-data">
        <?php if($global_contact['anschrift']) { $anschrift = $global_contact['anschrift']; ?>
            <?php if($anschrift['strasse'] || $anschrift['plz'] || $anschrift['ort']) { ?>
                <li>
                    <svg style="max-height: 25px;" xmlns="http://www.w3.org/2000/svg" width="16.793" height="27.479" viewBox="0 0 16.793 27.479">
                        <path id="pin" d="M14.633,19.759a8.4,8.4,0,1,1,1.527,0v9.957a.763.763,0,1,1-1.527,0V19.759Zm.763-1.492a6.87,6.87,0,1,0-6.87-6.87A6.87,6.87,0,0,0,15.4,18.266Z" transform="translate(-7 -3)" fill="#bc8110"/>
                    </svg>
                    <!--<b><?= $global_contact['firmenname'] ?></b><br>-->
                    <?= $anschrift['strasse'] ?>, <?= $anschrift['plz'] ?> <?= $anschrift['ort'] ?>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if($global_contact['email_adresse']) { ?>
            <li>
                <a aria-label="<?= __('Jetzt E-Mail schreiben', 'baw') ?>"href="mailto:<?= $global_contact['email_adresse'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.793" height="15.266" viewBox="0 0 21.793 15.266">
                        <path id="mail" d="M4.012,19.013a1.628,1.628,0,0,0,.712.163H21.069a1.628,1.628,0,0,0,.712-.163l-6.438-6.06-2.1,1.729a.545.545,0,0,1-.693,0l-2.1-1.729-6.438,6.06Zm-.767-.774.016-.015L9.6,12.255l-6.315-5.2q-.021-.017-.039-.036a1.628,1.628,0,0,0-.159.7v9.817a1.628,1.628,0,0,0,.156.7Zm19.3,0a1.628,1.628,0,0,0,.156-.7V7.724a1.628,1.628,0,0,0-.159-.7q-.019.019-.039.036l-6.315,5.2,6.342,5.969.015.015ZM21.771,6.248a1.628,1.628,0,0,0-.7-.158H4.724a1.628,1.628,0,0,0-.7.158L12.9,13.556l8.875-7.308ZM4.724,5H21.069a2.724,2.724,0,0,1,2.724,2.724v9.817a2.724,2.724,0,0,1-2.724,2.724H4.724A2.724,2.724,0,0,1,2,17.541V7.724A2.724,2.724,0,0,1,4.724,5Z" transform="translate(-2 -5)" fill="#bc8110"/>
                    </svg>
                    <?= $global_contact['email_adresse'] ?>
                </a>
            </li>
        <?php } ?>

        <?php if($global_contact['telefonnummer']) { ?>
            <li>
                <a aria-label="<?= __('Jetzt anrufen', 'baw') ?>" href="tel:<?= $global_contact['telefonnummer'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.793" height="21.8" viewBox="0 0 21.793 21.8">
                        <path id="call-out" d="M3.09,4.724V6.911a15.8,15.8,0,0,0,15.8,15.8h2.179A1.634,1.634,0,0,0,22.7,21.076v-2.8a1.634,1.634,0,0,0-1.118-1.551l-3.469-1.156a1.634,1.634,0,0,0-1.877.644l-.794,1.191a1.634,1.634,0,0,1-1.877.644L11.907,17.5a5.374,5.374,0,0,1-3.485-3.684L7.739,11.31A1.634,1.634,0,0,1,8.8,9.33l.657-.219a1.471,1.471,0,0,0,.986-1.638l-.5-3.017A1.634,1.634,0,0,0,8.326,3.09h-3.6A1.634,1.634,0,0,0,3.09,4.724Zm17.754-.545H17.8a.545.545,0,1,1,0-1.09h4.359a.545.545,0,0,1,.545.545V7.993a.545.545,0,1,1-1.09,0V4.95l-5.608,5.608a.545.545,0,0,1-.77-.77ZM2,4.724A2.724,2.724,0,0,1,4.724,2h3.6a2.724,2.724,0,0,1,2.687,2.276l.5,3.017A2.561,2.561,0,0,1,9.8,10.144l-.657.219a.545.545,0,0,0-.353.66l.683,2.505a4.284,4.284,0,0,0,2.778,2.937l1.662.554a.545.545,0,0,0,.626-.215l.794-1.191a2.724,2.724,0,0,1,3.128-1.073L21.93,15.7a2.724,2.724,0,0,1,1.863,2.584v2.8A2.724,2.724,0,0,1,21.069,23.8H18.89A16.89,16.89,0,0,1,2,6.911Z" transform="translate(-2 -2)" fill="#bc8110"/>
                    </svg>
                    <?= $global_contact['telefonnummer'] ?>
                </a>
            </li>
        <?php } ?>

    </ul>

    <?php if($global_contact['show_contactlink'] && $global_contact['contactlink']) { ?>
        <?php
        $cLink = $global_contact['contactlink'];
        $cURL = $cLink['url'] ?: false;
        $cTitle = $cLink['title'] ?: __('Kontakt aufnehmen', 'baw');
        $cTarget = $cLink['target'] ?: '';
        $cIcon = baw_svg($global_contact['contactlink_icon']) ?: '';

        if($cURL) {
        ?>
            <p>
                <a aria-label="<?= $cTitle ?>" target="<?= $cTarget ?>" href="<?= $cURL ?>" class="w-btn w-btn--xs">
                    <?= $cIcon ?><?= $cTitle ?>
                </a>
            </p>
        <?php } ?>
    <?php } ?>
</div>
