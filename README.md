# Magento 2 Disable Place Order
This is a sample extension to show you how to prevent a customer to Place an Order.
You can add your custom logic before performing this restriction.

## Installation

NOTE:  This extension uses an Observer on the Place Order Before event and throws an exception informing that the operation is not allowed.

1. Clone this repository
2. Copy the Codealist directory into your app/code directory
3. Execute: php bin/magento setup:upgrade

Now when you try to place an order, you'll receive an error message telling you that the operation cannot be performed.

## Compatibility
- Magento 2.0
- Magento 2.1
- Magento 2.2