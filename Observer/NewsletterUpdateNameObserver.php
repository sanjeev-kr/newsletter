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
namespace Sanjeev\Newsletter\Observer;

use Magento\Framework\Event\Observer;

class NewsletterUpdateNameObserver implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Magento\Newsletter\Model\Subscriber $subscriber
     */
    private $subscriber;

    /**
     * @param \Magento\Newsletter\Model\Subscriber $subscriber
     */
     public function __construct(\Magento\Newsletter\Model\Subscriber $subscriber)
     {
         $this->subscriber = $subscriber;
     }

    /**
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $event = $observer->getEvent();
        $customer = $observer->getCustomerDataObject();
        $customerId = $customer->getId();
        $this->subscriber->loadByCustomerId($customerId);

        if($this->subscriber->getId() > 0){
           $firstname = $customer->getFirstname();
           $this->subscriber->setFirstname($firstname);
           $lastname = $customer->getLastname();
           $this->subscriber->setLastname($lastname);
           $this->subscriber->save();
        }
    }
}
