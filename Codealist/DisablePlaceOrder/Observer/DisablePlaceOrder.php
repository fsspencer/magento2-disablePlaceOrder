<?php

namespace Codealist\DisablePlaceOrder\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class DisablePlaceOrder implements ObserverInterface
{

    /**
     * @param Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Sales\Model\Order $order */
        $order = $observer->getEvent()->getOrder();

        // TODO: Do your logic with the order and then throw an exception

        throw new \Magento\Framework\Exception\LocalizedException(
            __('You are not allowed to place an order.')
        );
    }
}