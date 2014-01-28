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

use Zimbra\Mail\Struct\ConvActionSelector;
use Zimbra\Soap\Request;

/**
 * ConvAction request class
 * Conv Action
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class ConvAction extends Request
{
    /**
     * Constructor method for ConvAction
     * @param  ConvActionSelector $action
     * @return self
     */
    public function __construct(ConvActionSelector $action)
    {
        parent::__construct();
        $this->child('action', $action);
    }

    /**
     * Get or set action
     *
     * @param  ConvActionSelector $action
     * @return ConvActionSelector|self
     */
    public function action(ConvActionSelector $action = null)
    {
        if(null === $action)
        {
            return $this->child('action');
        }
        return $this->child('action', $action);
    }
}
