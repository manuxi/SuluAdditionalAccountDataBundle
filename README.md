# SuluAdditionalAccountDataBundle!
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/manuxi/SuluAdditionalAccountDataBundle/LICENSE)
![GitHub Tag](https://img.shields.io/github/v/tag/manuxi/SuluAdditionalAccountDataBundle)
![Supports Sulu 2.6 or later](https://img.shields.io/badge/%20Sulu->=2.6-0088cc?color=00b2df)

I made this bundle to have the possibility to manage additional properties in the Sulu account.
Please feel comfortable submitting feature requests. 
This bundle is still in development. Use at own risk 🤞🏻

![image](https://github.com/user-attachments/assets/3b88cb37-ab25-40b0-9bef-224d6a150d97)

## 📝 Note

Abandoned in favor of the new ![SuluExtendedAccountBundle](https://github.com/manuxi/SuluExtendedAccountBundle).

## 👩🏻‍🏭 Installation
Install the package with:
```console
composer require manuxi/sulu-additional-account-data-bundle
```
If you're *not* using Symfony Flex, you'll also
need to add the bundle in your `config/bundles.php` file:

```php
return [
    //...
    Manuxi\SuluAdditionalAccountDataBundle\SuluAdditionalAccountDataBundle::class => ['all' => true],
];
```
Please add the following to your `routes_admin.yaml`:
```yaml
SuluAdditionalAccountDataBundle:
    resource: '@SuluAdditionalAccountDataBundle/Resources/config/routes_admin.yaml'
```
Last but not least the schema of the database needs to be updated.  

Some properties in co_accounts will be created.  

See the needed queries with
```
php bin/console doctrine:schema:update --dump-sql
```  
Update the schema by executing 
```
php bin/console doctrine:schema:update --force
```  

Make sure you only process the bundles schema updates!

## 🧶 Configuration
There exists no configuration yet.

## 👩‍🍳 Contributing
For the sake of simplicity this extension was kept small.
Please feel comfortable submitting issues or pull requests. As always I'd be glad to get your feedback to improve the extension :).

