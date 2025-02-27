<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\core\wp\actions;

use function Bhittani\StarRating\core\functions\action;
use function Bhittani\StarRating\core\functions\option;
use function Bhittani\StarRating\core\wp\functions\activate;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

function plugins_loaded()
{
    if (version_compare(kksr('version'), option('ver'), '!=')) {
        activate();
    }

    action('init', kksr());
}
