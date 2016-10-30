# wp-boilerplate

A WordPress boilerplate, it use composer to manage normal dependencies but also WordPress itself and plugins. The project has a gulp config already installed.

## Requirement
To run this boilerplate, you need :
* At least `PHP 5.5`
* `composer` installed
* `npm` installed

## Installation
First, install all the dependencies by running :

```
$ composer update
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
