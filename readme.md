## CubosAdmin 0.1 (AdminLTE v2.3.2 + Laravel 5.2.*)

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)


CubosAdmin aims to be the base application integration for [Philippine Global Outsourcing](http://philippineglobaloutsourcing.com) projects, [Christopher John Cubos](https://facebook.com/chriscubos), and [Ethan Sky Cubos](https://www.facebook.com/ethanskycubos). Our goal is to provide an integrated backend platform to help developers jumpstart their projects on both the frontend and backend of their applications.

## Installation
Download then run composer update

## Support

The Documentation will be done after the entire app will be integrated. This implmentation of Laravel and AdminLTE is created by [Philippines Outsourcing](http://philippineglobaloutsourcing.com).

## Folder Structure
	CubosAdmin/
	├── public/
	│	├── views/
	│	│	├── admin
	│	│	│   ├── bootstrap/
	│	│	│   ├── css/
	│	│	│   ├── img/
	│	│	│   └── js/
	│	│   └── img/
	│	├──	assets/
	│	│   ├── css/
	│	│   ├── js/
	│	│   ├── font/
	│	│   ├── plugins/
	│	│   └── img/
	└── app/
	    ├── Views/
	    │   ├── admin/
	    │   │   ├── assets/
	    │   │   ├── demos/
	    │   │   ├── layouts/
	    │   │   ├── menus/
	    │   │   ├── partials/
	    │   │   └── template/
	    │   ├── front/
	    │   │   └── default/
	    │   │       ├── assets/
	    │   │       ├── demos/
	    │   │       ├── layouts/
	    │   │       ├── partials/
	    │   │       │   ├── header.php
	    │   │       │   └── footer.php
	    │   │       └── template/
	    │   ├── auth/
	    │   ├── errors/
	    │   ├── layouts/
	    │   └── vendor/
	    ├── Models/
	    └── Modules/


## Packages Included

#### AdminLTE v2.3.2

#### Laravel 5.2.5

## Packages Included

        "laravelcollective/html": "^5.2",
        "intervention/image": "^2.3",
        "laracasts/flash": "^1.3",
        "roumen/feed": "^2.9",
        "maatwebsite/excel": "^2.1",
        "graham-campbell/parse": "^2.4",
        "creativeorange/gravatar": "^1.0"

#### Html/Form Builder (laravelcollective/html)

		
	composer require laravelcollective/html
	
	config/app.php
	
	Collective\Html\HtmlServiceProvider::class,
	
	fascades
	
	'Form'       => Collective\Html\FormFacade::class,
	'Html'       => Collective\Html\HtmlFacade::class,
	

#### Image Manipulation (intervention/image)

		
	composer require intervention/image
	
	config/app.php
	
	Intervention\Image\ImageServiceProvider::class,
	
	fascade
	
	'Image'      => Intervention\Image\Facades\Image::class,
	

#### Flash Messaging (laracasts/flash)

		
	composer require laracasts/flash
	
	config/app.php
	
	Laracasts\Flash\FlashServiceProvider::class,
	
	fascades
	
	'Flash'      => Laracasts\Flash\Flash::class,
	

#### RSS Feeds (roumen/feed)

		
	composer require roumen/feed
	
	config/app.php
	
	Roumen\Feed\FeedServiceProvider::class,
	
	fascades
	
	'Feed'      => Roumen\Feed\Facades\Feed::class,
	

#### Excel Output (maatwebsite/excel)

		
	composer require maatwebsite/excel
	
	config/app.php
	
	Maatwebsite\Excel\ExcelServiceProvider::class,
	
	fascades
	
	'Excel'     => Maatwebsite\Excel\Facades\Excel::class,
	

#### Parse API (graham-campbell/parse)

		
	composer require graham-campbell/parse
	
	config/app.php
	
	GrahamCampbell\Parse\ParseServiceProvider::class,
	

#### Gravatar (creativeorange/gravatar)

		
	composer require creativeorange/gravatar
	
	config/app.php
	
	Creativeorange\Gravatar\GravatarServiceProvider::class,
	
	fascades
	
	'Gravatar'   => Creativeorange\Gravatar\Facades\Gravatar::class,
	

### Modules (caffeinated/modules)

		
	composer require caffeinated/modules
	
	config/app.php
	
	Caffeinated\Modules\ModulesServiceProvider::class,
	
	fascades
	
	'Module'   => Caffeinated\Modules\Facades\Module::class,
	
	* Note: as of 2017-01-11 caffeinated/modules is not yet ready for 5.2 so I have to manually integrate it.
	
	**Notes**
	autoload_psr4.php
	'Caffeinated\\Modules\\' => array($vendorDir . '/caffeinated/modules/src/Caffeinated/Modules'),

	ModulesServiceProvider
	change **bindShared** to **singleton**

##### Publish Configuration Settings

	php artisan vendor:publish


## What I modified

Folder structure - transferred everything to app folder to make it more self-contained application.

Modular - Due to the large projects I am making, I've opted to make everything modular using caffeinated/modules package. This enabled me to manage databases with up to 200 tables or more. Currently tested with 180+ tables and works fine. It's also pretty organized.

Views - Views are now a centralized part of the application as a template.

Individual Views per Module - Each module have their own views to make it more portable to transfer from one app to another.

Generated Code - Currently, the generator I've made is internal and will be released someday once it get's to alpha stage.

Better Admin Layout - A lot of configuration and customization have been done to integrate AdminLTE to the system. Most of it lies under the code.

Laravel 5.2 - Obviously a lot of changes have been done to Laravel in 5.2. With that in mind, This app will be able to handle large scale development.

Now, make something awesome.

## Licenses

##### Laravel Framework
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

##### AdminLTE
AdminLTE is an open source project by [Almsaeed Studio](https://almsaeedstudio.com) that is licensed under [MIT](http://opensource.org/licenses/MIT). Almsaeed Studio
reserves the right to change the license of future releases.

##### CubosAdmin
CubosAdmin is a use at your risk license. For commercial or personal use. Retain the copyright notices. (c) Copyright 2016 [Philippines Outsourcing](http://philippineglobaloutsourcing.com) projects, [Christopher John Cubos](https://facebook.com/chriscubos), and [Ethan Sky Cubos](https://www.facebook.com/ethanskycubos).


Now make something awesome :)