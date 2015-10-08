/*
Title: Welcome
Description: A short introduction about how MDownHost.Me works.
*/


Wecome to MDownHost.Me
======================

[MDownHost.Me](http://mdownhost.me) is powered by [Pico](https://github.com/picocms/pico). A blazing fast, flat file, CMS.

Publish your changes
--------------------

To publish your changes, merge/commit it to your master branch and then push it
to origin:

    git add ./
    git commit -m 'My changes'
    git push origin master

A git hook will update your live site instantly.


Setup a development instance locally
------------------------------------

To have this site on your computer, open a shell and follow the steps:

    cd path/to/the/root/of/the/repo
    git clone https://github.com/picocms/Pico.git
    cd Pico
    composer install
    cd config
    ln -s ../../config.local.php config.php
    cd ..

At this point, you have Pico project ready on your machine. It is placed inside
your repository. `config.local.php`
will apply the configuration you have on your config.ini and merge it with
your local instance configurations.

Only the `config.ini` is interpreted by the MDownHost.Me. If you want a
configuration to work both on your local instance and at the
live site, insert it on `config.ini`. If an specific configuration must be
applied only to your local instance, include it straight on your
`config.local.php` file.

To get it working locally, you can simply run:

    php -S 0.0.0.0:8888 -t ./

Access the address [http://localhost:8888](http://localhost:8888) on your
browser to see the result.


Themes and plugins
------------------

Themes works almost exactly like it does on Pico. The only difference is that
you must specify the theme on the `config.ini`, instead of the `config.php`.
As it happens on Pico, your theme must be placed on the path `/themes`.

Plugins works like it does on Pico, for your local instance, but it must be 
preloaded at MDownHost.Me, in order to take effect at your live site.

If you don't find the plugin you want at MDownHost.Me, please, send me an email
and I will do my best to make it available ASAP.


More information
----------------

You can access the [page from Pico's content sample](/pico) to get more information 
about how Pico works.


Contact
-------

If you have any kind of trouble, feel free to contact me at the address
[dmelo87@gmail.com](mailto:dmelo87@gmail.com) . I also look forward to know what
you think about [MDownHost.Me](http://mdownhost.me).
