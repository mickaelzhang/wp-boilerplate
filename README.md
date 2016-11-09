# wp-boilerplate

This boilerplate is for WordPress project, it was built for myself for my own project and also to learn more about WordPress. That's why it's probably very opiniated, feel free to use and change it for your own project !

## What does the boilerplate contain
* WordPress Plugins are composer dependencies ([WordPress Packagist](https://wpackagist.org))
* WordPress itself is a composer dependencies
* Gulp is included
* [Timber](https://upstatement.com/timber/)

## Requirement
To run this boilerplate, you need :
* At least `PHP 5.5`
* `composer` installed
* `npm` installed

## Installation
First, install all the dependencies by running :

```
$ composer install
```

And then, set a `.env` file by running :

```
$ composer setenv
```

Open the file '.env', this is where you put your configuration.

## Development
The boilerplate use gulp as a task manager, install npm packages :

```
$ npm install
```

If you just want to build your asset, run :

```
$ gulp build
```

If you're working on the front-end, watch your asset by running :

```
$ gulp
```

And if you want to export only your theme for production, you can run :

```
$ gulp dist
```
