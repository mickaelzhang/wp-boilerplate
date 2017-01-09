# wp-boilerplate

This boilerplate was built for my own WordPress project, feel free to use it and change it as your own convenience. The structure is heavily inspired by [Bedrock](https://github.com/roots/bedrock).

## What does the boilerplate contain
* [WordPress Packagist](https://wpackagist.org)
* Gulp tasks
* [Timber](https://upstatement.com/timber/)

## Requirement
To run this boilerplate, you need :
* At least `PHP 5.6`
* `composer` installed
* `yarn` or `npm` installed

## Installation
First, install all the dependencies by running :

```
$ composer install
```

And then, set a `.env` file by running :

```
$ composer setenv
$ composer generate-salt
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
