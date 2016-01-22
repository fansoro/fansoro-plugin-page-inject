<?php

/**
 * Fansoro Page Inject Plugin
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Shortcode::add('page', function ($attributes) {

    // Extract
    extract($attributes);

    $page = [];
    $data = '';

    if (isset($name)) {
        $page = Pages::getPage($name);
    }

    if (isset($field)) {
        $data = isset($page[$field]) ? $page[$field] : 'Field '.$field.' not found';
    } else {
        $data = $page['content'];
    }

    return $data;
});
