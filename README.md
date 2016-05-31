Counter
=======
Counter module for Yii2.

Attention
---------

This is only a project for testing github/travis/yii/composer.

INSTALLATION & CONFIGURATION
----------------------------

### 1. Install with composer from vcs

Add to your composer.json:

```bash
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/jkmssoft/yii2-counter"
    }
],
"require": {
    "jkmssoft/yii2-counter": "dev-master"
},
```

### 2. Configure

Add following lines to your main configuration file (config/web.php):

```php
'modules' => [
    'counter' => [
        'class' => 'jkmssoft\counter\Module',
    ],
],
'components' => [
    'counter' => [
        'class' => 'jkmssoft\counter\components\Counter',
    ],
],
```

### 3. Update database schema

The last thing you need to do is updating your database schema by applying the
migrations. Make sure that you have properly configured `db` application component
and run the following command:

```bash
$ php yii migrate/up --migrationPath=@vendor/jkmssoft/yii2-counter/migrations
```

### 4. Completed.

Now you should be able to visit the route
```
index.php?r=counter/counter/index
```

Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?php 
\Yii::$app->counter->increase('nameofcounter');
\Yii::$app->counter->decrease('nameofcounter');

\Yii::$app->counter->getCount('nameofcounter');
\Yii::$app->counter->exists('nameofcounter');
?>
```
