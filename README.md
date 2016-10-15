# tejasext
Sample extenstion for Yii2
Hello World
===========
Just A Hello World Yii2 Extension  

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

For linux
```
sudo composer require --prefer-dist tejasext/hello-world "*"
OR
sudo composer.phar require --prefer-dist tejasext/hello-world "*"
```
For Windows
```
php composer.phar require --prefer-dist tejasext/hello-world "*"
```
or add
```
"tejasext/hello-world": "*"
Run Command
sudo composer.phar update
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php 

<?= HelloWorld\SayHello::world();  ?>
```
