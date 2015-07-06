# mod_megamenu

A Joomla! module that provides an extensive Website menu/navbar showing children of Navigation Categories and Featured Items. This would effectively replace the classic menu is hidden. This module is written on [Twitter Bootstrap 3](http://getbootstrap.com).

The MegaMenu module was written my [Moyo Web Architects](http://moyoweb.nl).

## Requirements

* Joomla 3.X . Untested in Joomla 2.5.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better
* Composer
* A Joomla template for rendering the navigation, currently most are written in Bootstrap 3.

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

from the local repository;

```json
{
    "name": "moyo/mod_megamenu",
    "type": "vcs",
    "url": "https://github.com/kedweber/mod_megamenu.git"
}
```

and from the official repository;

```json
{
    "name": "moyo/mod_megamenu",
    "type": "vcs",
    "url": "https://github.com/moyoweb/mod_megamenu.git"
}
```

The require section should contain the following line:

```json
    "moyo/mod_megamenu": "1.0.*",
```

Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).

### Configuration

After installing and discovering, you can add the megamenu to your site through the  module manager in Joomla!'s 
back-end CMS. The module type to activiate if you wish to try this Module is 'mod megamenu'.

The following settings are configurable:

* **Menu** Choose the menu to display.
* **ETC**
