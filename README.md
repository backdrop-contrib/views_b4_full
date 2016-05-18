Views B4 Full
------------------------

Provides a Views plugin helper for displaying content from Views module in a CSS3 flexbox style as close to the Views B4 Full layout package markup in Backdrop 1.4+ as possible.

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Usage
 - License
 - Credits
 - Maintainers

INTRODUCTION
------------

You like the layouts in core Backdrop 1.4+ for building your website.  BUT, as a themer/designer, you would like extra CSS classes, wrappers, and containers to help style your page a certain way.  They are based on Bootstrap 4 and output markup/classes such as "container", "l-thirds", etc...  This module will help you output the same markup/classes as the Views B4 Full layout package, only on collections of content through Views.

Newer browsers (IE 10+) can use CSS3 Flexbox as an alternative layout formatter.
However, different browsers support different syntax when implementing this.
This module provides a UI/point-click solution to provide a good base for supporting all syntaxes for all browsers that can support it.

It is possible that you may need to write custom CSS in your theme to fully realize your vision, this module just helps out.

For more information:

https://css-tricks.com/snippets/css/a-guide-to-flexbox/
http://flexbox.io/


TESTED
-----

Working with basic content from Views.

KNOWN ISSUES
---------------------

Can output the region types container-fluid (full width container), container (container with padding), halfs, thirds, and quarters.

REQUIREMENTS
------------

Views UI

Using a Bootstrap 4 layout (such as found in core Backdrop 1.4+) to see any effect.

INSTALLATION
------------

Install this module using the official Backdrop CMS instructions at https://backdropcms.org/guide/modules

COMING FROM DRUPAL?
-------------------

This module is not a port from Drupal, but is a Views Plugin

PERMISSIONS
------------


USAGE
-----

Install the module.

When editing a View, choose:
format: views_b4_full
settings: choose all of your settings, as this writes the base CSS for this View

LICENSE
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

CREDITS
-----------

 - biolithic <https://github.com/biolithic>

MAINTAINERS
-----------

 - biolithic <https://github.com/biolithic>
