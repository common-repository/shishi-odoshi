=== shishi-odoshi ===
Contributors: Craig Wayne
Tags: debug, developer tools
Requires at least: 4.4
Tested up to: 4.9.4
Stable tag: 0.0.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Plugin is intended for developers only.

It is intended to assist with preventing errors thrown from edge cases.

=== Features ===
1. Always serve back a post thumbnail in the event 1 is not found


=== Usage ===
Ensure you have enable `WP_DEBUG`

```
define( 'WP_DEBUG', true);
```

Thereafter just activate the plugin


=== NOTE ===
This plugin does not provide any GUI (yet), nor any settings that can be configured


=== Upcoming ===
1. Integrate a wordpress settings area to control the features from this plugin
1. Display messages for sidebars that have no widgets attached but have been asked to display