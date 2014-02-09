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

/**
 * SendVerificationCode request class
 * SendVerificationCodeRequest results in a random verification code being generated and sent to a device.
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Request
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class SendVerificationCode extends Base
{
    /**
     * Constructor method for SendVerificationCode
     * @param  string $a
     * @return self
     */
    public function __construct($a = null)
    {
        parent::__construct();
        if(null !== $a)
        {
            $this->property('a', trim($a));
        }
    }

    /**
     * Get or set a
     *
     * @param  string $a
     * @return string|self
     */
    public function a($a = null)
    {
        if(null === $a)
        {
            return $this->property('a');
        }
        return $this->property('a', trim($a));
    }
}
