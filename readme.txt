=== Remove jQuery ===
Contributors: MarcDK
Tags: jQuery
Requires at least: 5.0
Donate link: https://marc.tv/out/donate
Tested up to: 5.6.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Removes jQuery from your current theme if no administrator is logged-in. jQuery will still be loaded and continue to work in you backend and when the admin toolbar is visible. 

== Description ==

Removes jQuery from your current theme if no administrator is logged-in. jQuery will continue to work in you backend and when the admin toolbar is visible. Plugins which depend on jQuery will not be loaded either.

== Changelog ==

= 1.0 =
* Initial version. 

== Installation ==

Remove jQuery can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

== Frequently Asked Questions ==

= Why did you do this? =

Because I needed a simple plugin to do this job and decided to do it on his own. WordPress frontends are is much faster without jQuery.  

= jQuery is still loading! The plugin does not work!  =

You are most likely logged-in as administrator and the admin topbar is visible. Many plugins rely on jQuery for backend features. So I kept it enabled for the admin topbar, too.