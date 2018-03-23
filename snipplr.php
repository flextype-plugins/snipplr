<?php

/**
 *
 * Flextype Snipplr Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

//
// Shortcode: [snipplr id="327689"]
//
Shortcodes::driver()->addHandler('snipplr', function(ShortcodeInterface $s) {
      return snipplr($s->getParameter('id'));
});

/**
 * Return Snipplr snippet
 *
 * @param  int    $id Snipplr ID
 * @return string
 */
function snipplr(int $id) : string
{
    return (isset($id)) ? "<div id=\"snipplr_embed_{$id}\" class=\"snipplr_embed\"><script type=\"text/javascript\" src=\"http://snipplr.com/js/embed.js\"></script><script type=\"text/javascript\" src=\"http://snipplr.com/json/{$id}\"></script>" : '';
}
