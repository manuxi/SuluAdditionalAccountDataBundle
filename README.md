# SuluAdditionalAccountDataBundle!
<a href="https://github.com/manuxi/SuluAdditionalAccountDataBundle/blob/main/LICENSE" target="_blank">
<img src="https://img.shields.io/github/license/manuxi/SuluAdditionalAccountDataBundle" alt="GitHub license">
</a>
<a href="https://github.com/manuxi/SuluAdditionalAccountDataBundle/tags" target="_blank">
<img src="https://img.shields.io/github/v/tag/manuxi/SuluAdditionalAccountDataBundle" alt="GitHub license">
</a>

I made this bundle to have the possibility to manage additional properties in the Sulu account.
Please feel comfortable submitting feature requests. 
This bundle is still in development. Use at own risk 🤞🏻


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
    resource: '@SuluAdditionalAccountDataBundle/Resources/config/routes_admin.yml'
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
