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
            $this->setProperty('type', $type);
        }
        if(null !== $id)
        {
            $this->setProperty('id', trim($id));
        }
        if(null !== $name)
        {
            $this->setProperty('name', trim($name));
        }
        if(null !== $lifetime)
        {
            $this->setProperty('lifetime', trim($lifetime));
        }
    }

    /**
     * Gets retention policy type
     *
     * @return Type
     */
    public function getType()
    {
        return $this->getProperty('type');
    }

    /**
     * Sets retention policy type
     *
     * @param  Type $type
     * @return self
     */
    public function setType(Type $type)
    {
        return $this->setProperty('type', $type);
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->getProperty('id');
    }

    /**
     * Sets id
     *
     * @param  string $id
     * @return self
     */
    public function setId($id)
    {
        return $this->setProperty('id', trim($id));
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->getProperty('name');
    }

    /**
     * Sets name
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        return $this->setProperty('name', trim($name));
    }

    /**
     * Gets policy duration
     *
     * @return string
     */
    public function getLifetime()
    {
        return $this->getProperty('lifetime');
    }

    /**
     * Sets policy duration
     *
     * @param  string $lifetime
     * @return self
     */
    public function setLifetime($lifetime)
    {
        return $this->setProperty('lifetime', trim($lifetime));
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
