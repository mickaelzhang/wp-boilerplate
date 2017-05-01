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
composer install
yarn install
```

And then, run :

```
project:setup
```

It will setup a `.env` file, it is where you put sensitive information such as database login.

## Scripts
The boilerplate contain some script that help you during the development process.

* `composer project:setup` : Use it at the initial setup of the project, it will add a .env file and remove the git linked to the boilerplate
* `composer env:regenerate` : Regerate the .env file
* `yarn run start` : Start the dev environment
* `yarn run build` : Build all assets (css, js, font, image)
* `yarn run images` : Copy image to the `dist` directory
