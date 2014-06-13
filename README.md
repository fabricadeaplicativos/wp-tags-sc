Raw Tags as Shortcodes
==========

## Why

So you decided to use WordPress as a CMS. All is fun for a while, but sometimes it may get into your way just because of some it's decisions. Maybe you want to put some sytle attributes directly on your tags but some portions of your styles can be removed by WP without a notice.

Want to add an iframe? You are out of luck...

Or maybe you need some data-* attributes on a tag...

## How to use

Instead of using the normal tags on the content editor you may use our shortcodes.

`<div style="...A lot of style statments...">...</div>`

will become

`[div style="...A lot of style statments"]...[/div]`

### Supported tags:
* div
* img
* iframe
* span

### Attributes

All shortcodes support the id, class and style attributes. Other attributes that are unique to the img and iframe are supported (src, alt, ...)

If you need something that is outside the normal attributes, or not supported by the plugin you can use the attrs option.
It will just output everthing that you give to it.

`[div attrs='data-opt="OPTION!" data-opt1="value1"']...[/div]`

will become:

`<div data-opt="OPTION!" data-opt1="value1">...</div>`

