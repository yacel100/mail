<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Struct;

use Zimbra\Enum\ItemActionOp;

/**
 * ItemActionSelector struct class
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class ItemActionSelector extends ActionSelector
{
    /**
     * Constructor method for ItemActionSelector
     * @param ItemActionOp $op
     * @param string $id
     * @param string $tcon
     * @param int    $tag
     * @param string $l
     * @param string $rgb
     * @param int    $color
     * @param string $name
     * @param string $f
     * @param string $t
     * @param string $tn
     * @return self
     */
    public function __construct(
        ItemActionOp $op,
        $id = null,
        $tcon = null,
        $tag = null,
        $l = null,
        $rgb = null,
        $color = null,
        $name = null,
        $f = null,
        $t = null,
        $tn = null
    )
    {
        parent::__construct(
            $op,
            $id,
            $tcon,
            $tag,
            $l,
            $rgb,
            $color,
            $name,
            $f,
            $t,
            $tn
        );
    }

    /**
     * Gets operation
     *
     * @return ItemActionOp
     */
    public function getOperation()
    {
        return $this->getProperty('op');
    }

    /**
     * Sets operation
     *
     * @param  ItemActionOp $op
     * @return self
     */
    public function setOperation(ItemActionOp $op)
    {
        return $this->setProperty('op', $op);
    }
}
