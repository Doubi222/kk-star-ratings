<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use function Bhittani\StarRating\core\functions\hook;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

foreach (kksr('wp.actions') as $tag => $fn) {
    hook('action', $tag, $fn);
}

foreach (kksr('wp.filters') as $tag => $fn) {
    hook('filter', $tag, $fn);
}

foreach (kksr('wp.shortcodes') as $tag => $fn) {
    add_shortcode($tag, $fn);
}
