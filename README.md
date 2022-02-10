# Sanjeev_Newsletter

Sanjeev_Newsletter is a module for Magento 2. This module helps to add first name and last name for Magento 2 newsletter subscribers. Specially for guest subscriber through cms page.

## Install with Composer
```
composer require sanjeev-kr/newsletter
php bin/magento module:enable Sanjeev_Newsletter
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```

## Install Manually
- Download zip and extract
- Create a new directory Sanjeev/Newsletter in app/code directory and copy and paste files in Sanjeev/Newsletter directory.
- And run below commands

```
php bin/magento module:enable Sanjeev_Newsletter
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
```
## How to show on page
- Create a cms page say subscribe
- Add below code in cms page and save
```
{{block class="Magento\Newsletter\Block\Subscribe" name="newsletter.form" template="Sanjeev_Newsletter::subscribe.phtml"}}
```
Now you should see form with first name and last name on your store cms page

