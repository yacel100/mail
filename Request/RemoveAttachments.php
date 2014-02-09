<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Request;

use Zimbra\Mail\Struct\MsgPartIds;

/**
 * RemoveAttachments request class
 * Remove attachments from a message body 
 * NOTE that this operation is effectively a create and a delete, and thus the message's item ID will change
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class RemoveAttachments extends Base
{
    /**
     * Constructor method for RemoveAttachments
     * @param  MsgPartIds $m
     * @return self
     */
    public function __construct(MsgPartIds $m)
    {
        parent::__construct();
        $this->child('m', $m);
    }

    /**
     * Get or set m
     * Specification of parts to remove
     *
     * @param  MsgPartIds $m
     * @return MsgPartIds|self
     */
    public function m(MsgPartIds $m = null)
    {
        if(null === $m)
        {
            return $this->child('m');
        }
        return $this->child('m', $m);
    }
}
