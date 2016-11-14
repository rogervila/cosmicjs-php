# CosmicJS PHP kit

[![Code Climate](https://codeclimate.com/github/rogervila/cosmicjs-php/badges/gpa.svg)](https://codeclimate.com/github/rogervila/cosmicjs-php)
[![Issue Count](https://codeclimate.com/github/rogervila/cosmicjs-php/badges/issue_count.svg)](https://codeclimate.com/github/rogervila/cosmicjs-php)
[![Test Coverage](https://codeclimate.com/github/rogervila/cosmicjs-php/badges/coverage.svg)](https://codeclimate.com/github/rogervila/cosmicjs-php/coverage)
[![TravisCI Build Status](https://travis-ci.org/rogervila/cosmicjs-php.svg?branch=master)](https://travis-ci.org/rogervila/cosmicjs-php)
[![StyleCI](https://styleci.io/repos/69678246/shield)](https://styleci.io/repos/69678246)
[![Latest Stable Version](https://poser.pugx.org/rogervila/cosmicjs-php/v/stable)](https://packagist.org/packages/rogervila/cosmicjs-php)
[![Total Downloads](https://poser.pugx.org/rogervila/cosmicjs-php/downloads)](https://packagist.org/packages/rogervila/cosmicjs-php)
[![Appveyor Build status](https://ci.appveyor.com/api/projects/status/3kshwokkhmhx5gh4?svg=true)](https://ci.appveyor.com/project/roger-vila/cosmicjs-php)

Based on https://github.com/cosmicjs/cosmicjs-php but with composer and OOP.

## Install

```shell
$ composer require rogervila/cosmicjs-php
```

## Basic setup

```php
// Set the configuration
$config = new \Rogervila\CosmicJS\Config();

$config
    ->setBucketSlug('YOUR_BUCKET_SLUG')
    ->setWriteKey('YOUR_WRITE_KEY')
    ->setReadKey('YOUR_READ_KEY');

// Create an instance
$cosmic = new \Rogervila\CosmicJS\CosmicJS($config);

// Bucket information
$cosmic->getBucket();

// Read objects
$cosmic->getObjects();

// Read object by slug
$cosmic->getObject('OBJECT_SLUG');

// Read media
$cosmic->getMedia();

// Create an object

// object parameters
$parameters = new \Rogervila\CosmicJS\Parameters($config);
$parameters->typeSlug = 'my-object';
$parameters->title = 'My Object';

// add metafields
$meta = new \Rogervila\CosmicJS\Metafield();

$meta->key = 'field-name';
$meta->type = 'textarea';
$meta->value = 'lorem ipsum';

$parameters->metafields = [
    $meta,
];

$cosmic->addObject($parameters);

// Edit an object

// create object parameters...

$cosmic->editObject($parameters);


// Delete an object

// create object parameters...

$cosmic->editObject($parameters);

```

## TODOS
 - More tests
 - Move from Curl to Guzzle