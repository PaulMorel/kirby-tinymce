<?php
/**
 * Kirby TinyMCE
 *
 * Adds the familiar rich-text editor TinyMCE to the Kirby 3 CMS administration
 * panel. Requires Kirby 3.0.0 or later.
 *
 * @version    0.1.0
 * @author     Paul Morel <paul.morel@gmail.com>
 * @copyright  Paul Morel <paul.morel@gmail.com>
 * @link       https://github.com/PaulMorel/kirby-tinymce
 * @license    GNU LGPL-2.1 <https://opensource.org/licenses/LGPL-2.1>
 */


/**
 * Require Composer packages
 */
@include_once __DIR__ . DS . 'vendor' . DS . 'autoload.php';

/**
 * Register extensions
 */

Kirby::plugin('PaulMorel/tinymce', [
    'fields' => [
        'tinymce' => [
        ]
    ]
]);
