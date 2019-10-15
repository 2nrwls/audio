<?php

/*
 * This file is part of Flarum.
 *
 * The creator of this extension is Billy Wilcosky. https://wilcosky.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addCustom(
               '[audio mp3="{URL1?}" ogg="{URL2?}"]',
               '<p><audio class="bbaudio inline-exclude" style="width:100%;height:auto;" controls>
                        <source src="{URL1}" type="audio/mpeg">
                        <source src="{URL2}" type="audio/ogg">
                </audio></p>'
            );
        })
];
