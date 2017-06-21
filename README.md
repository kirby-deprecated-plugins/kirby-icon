# kirby-icon
A custom Kirby field with Font Awesome Icons.

**Version 0.0.1 / October, 17th 2015 - intial public offering.**

**Version 0.0.2 / October, 19th 2015 - made icons case-insensitive.**

**Version 0.0.3 / October, 22th 2015 - renewed most of the script, better initialize / case-insensitive / trim spaces.**

*This is a simple, custom field for Kirby, allowing you to determine a [Font Awesome Icon](http://fortawesome.github.io/Font-Awesome/) in the CMS, which can be used on every page in your website.*

Simply enter a (valid) icon-name in the field and it is rendered in html on your page, with a neat preview in the CMS.

![Kirby Icon](https://standard-discourseorg.netdna-ssl.com/uploads/getkirby/original/2X/9/97bb1a81126d4498d392090340beaf50406800e9.gif "Kirby Icon, alive and kickin'")

##Installation##

Download the .zip-file and extract it in the root of your [Kirby](http://getkirby.com/) site.

Take a look at the blueprints and templates; they contain the most important code, which you can (and should) alter.

The files in the "fields" directory are the core of this custom-field, so you don't need to alter them (unless you really want to, ofcourse).

##Usage##

The implemenation depends on your own needs, but can be something like;

```<i class="fa fa-<?php echo $page()->my_first_icon()->text(); ?> fa-4x"></i>```

(Assuming that the field in the blueprint is called "my_first_icon").