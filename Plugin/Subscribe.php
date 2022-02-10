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

namespace Sanjeev\Newsletter\Plugin;


class Subscribe
{
    /**
     * @var \Magento\Framework\App\RequestInterface $request
     */
     protected $request;

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     */
     public function __construct(\Magento\Framework\App\RequestInterface $request)
     {
         $this->request = $request;
     }

    /**
     * @param \Magento\Newsletter\Model\Subscriber $subscribe
     * @param string $email
     * @return string $email
     */
     public function beforeSubscribe($subscriber, $email)
     {
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');

        if(!empty($firstname)){
            $subscriber->setFirstname($firstname);
        }

        if(!empty($lastname)){
            $subscriber->setLastname($lastname);
        }

        return $email;
     }
}
