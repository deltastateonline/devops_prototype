# Dev Ops Prototype

```
php vendor\bin\phpunit
composer run-script test
```
Run all the test based on the php unit xml file

## Notes

Class names used for namespacing in Php are case sensitive.
Although on windows,
Models\Product maps to Models\product.php ,

On linux it does not. 
Models\Product must be mapped onto Models\Product.php