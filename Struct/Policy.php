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

use Zimbra\Enum\Type;
use Zimbra\Struct\Base;

/**
 * Policy struct class
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013 by Nguyen Van Nguyen.
 */
class Policy extends Base
{
    /**
     * Constructor method for policy
     * @param string $type Retention policy type
     * @param string $id The id
     * @param string $name The name
     * @param string $lifetime The duration
     * @return self
     */
    public function __construct(Type $type = null, $id = null, $name = null, $lifetime = null)
    {
        parent::__construct();
        if($type instanceof Type)
        {
            $this->property('type', $type);
        }
        if(null !== $id)
        {
            $this->property('id', trim($id));
        }
        if(null !== $name)
        {
            $this->property('name', trim($name));
        }
        if(null !== $lifetime)
        {
            $this->property('lifetime', trim($lifetime));
        }
    }

    /**
     * Gets or sets type
     *
     * @param  Type $type
     * @return Type|self
     */
    public function type(Type $type = null)
    {
        if(null === $type)
        {
            return $this->property('type');
        }
        return $this->property('type', $type);
    }

    /**
     * Gets or sets id
     *
     * @param  string $id
     * @return string|self
     */
    public function id($id = null)
    {
        if(null === $id)
        {
            return $this->property('id');
        }
        return $this->property('id', trim($id));
    }

    /**
     * Gets or sets name
     *
     * @param  string $name
     * @return string|self
     */
    public function name($name = null)
    {
        if(null === $name)
        {
            return $this->property('name');
        }
        return $this->property('name', trim($name));
    }

    /**
     * Gets or sets lifetime
     *
     * @param  string $lifetime
     * @return string|self
     */
    public function lifetime($lifetime = null)
    {
        if(null === $lifetime)
        {
            return $this->property('lifetime');
        }
        return $this->property('lifetime', trim($lifetime));
    }

    /**
     * Returns the array representation of this class 
     *
     * @param  string $name
     * @return array
     */
    public function toArray($name = 'policy')
    {
        return parent::toArray($name);
    }

    /**
     * Method returning the xml representation of this class
     *
     * @param  string $name
     * @return SimpleXML
     */
    public function toXml($name = 'policy')
    {
        return parent::toXml($name);
    }
}
