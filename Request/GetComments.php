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

use Zimbra\Mail\Struct\ParentId;
use Zimbra\Soap\Request;

/**
 * GetComments request class
 * Get comments
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class GetComments extends Request
{
    /**
     * Constructor method for GetComments
     * @param  ParentId $comment
     * @return self
     */
    public function __construct(ParentId $comment)
    {
        parent::__construct();
        $this->child('comment', $comment);
    }

    /**
     * Get or set comment
     * Select parent for comments
     *
     * @param  ParentId $comment
     * @return ParentId|self
     */
    public function comment(ParentId $comment = null)
    {
        if(null === $comment)
        {
            return $this->child('comment');
        }
        return $this->child('comment', $comment);
    }
}
