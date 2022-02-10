<?php
/**
 * Sanjeev_Newsletter extension
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category  Sanjeev
 * @package   Sanjeev_Newsletter
 * @copyright Copyright (c) 2022
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 */

namespace Sanjeev\Newsletter\Model;

class Subscriber extends \Magento\Newsletter\Model\Subscriber
{
    /**
     * Alias for getSubscriberFirstname()
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->getSubscriberFirstname();
    }

    /**
     * Alias for setSubscriberFirstname()
     *
     * @param string $value
     * @return $this
     */
    public function setFirstname($value)
    {
        return $this->setSubscriberFirstname($value);
    }

    /**
     * Alias for getSubscriberLastname()
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->getSubscriberLastname();
    }

    /**
     * Alias for setSubscriberLastname()
     *
     * @param string $value
     * @return $this
     */
    public function setLastname($value)
    {
        return $this->setSubscriberLastname($value);
    }

     /**
     * @return boolean
     */
    public function hasFirstname()
    {
        $firstname = $this->getSubscriberFirstname();
        return !empty($firstname);
    }

     /**
     * @return boolean
     */
    public function hasLastname()
    {
        $lastname = $this->getSubscriberLastname();
        return !empty($lastname);
    }

}
