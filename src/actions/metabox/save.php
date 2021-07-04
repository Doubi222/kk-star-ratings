<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\actions\metabox;

use function Bhittani\StarRating\functions\explode_meta_prefix;
use function Bhittani\StarRating\functions\post_meta;
use function Bhittani\StarRating\functions\sanitize;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

function save($id, array $payload): void
{
    [$statusPrefix, $statusFieldName] = explode_meta_prefix('status_default');
    $statusField = $statusPrefix.$statusFieldName;

    if ($status = ($payload[$statusField] ?? false)) {
        post_meta($id, [
            $statusFieldName => sanitize($status),
        ]);
    }
}
