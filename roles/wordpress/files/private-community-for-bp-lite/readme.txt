=== Private Community For BP Lite ===
Contributors: bphelp
Tags: buddypress, bbpress, private community, privacy
Requires at least: 3.2.1 
Tested up to: 3.6.1 
License: GNU/GPL 2
Stable tag: 4.0

Makes BP pages private and only accessable to logged in users with the 
exception of the pages you set. 

== Description ==

Makes all WP posts/pages as well as BP and bbPress pages private and only accessable to logged in users with the 
exception of the posts/pages you set in Dashboard/Settings/PrivateCommunityBP. This version
allows 20 unblocked posts/pages and has not been tested for use with multisite installations.
You can unblock pages like activity, members, or posts, but not profiles.
Blocks RSS feeds to logged out visitors. This version does not unblock entire categories but 
If you need this functionality contact me <a href="http://bphelpblog.wordpress.com/submit-comments-tips-or-tricks-or-job-inqueries/" target="_blank">here</a>
for instructions on purchasing a version that will. 

== Installation ==

Install via the WordPress plugin installer and activate, or do a manual upload.

Go to Dashboard/Settings/PrivateCommunityBP to add unblocked pages.

== Screenshots ==

1. Private Community For BP Lite settings page

== Frequently Asked Questions ==

Q: Why is my private pages not redirecting to the redirect page?

A: You need to define the slug in Dashboard/Settings/PrivateCommunityBP/ Define Your Redirect Slug

Q: How can I unblock a post?

A: You can unblock a post using the slug of the post just like you would a page or alternatively
   you can use the post ID. I recommend using <a href="http://wordpress.org/plugins/reveal-ids-for-wp-admin-25/">Reveal IDs</a>
   to simplify the process of finding the ID of a post.
   
Q: How can I unblock an entire category?

A: You can't with the free version but I have a version that offers this flexibility for a reasonable fee.
   To purchase it contact me <a href="http://bphelpblog.wordpress.com/submit-comments-tips-or-tricks-or-job-inqueries/">here</a>

Q: Can I use this on a multisite installation?

A: This version is not tested for use with multisite Installations.

Q: Can I unblock sub-pages of forums and groups

A: No you can't at the moment but maybe in a future update.

Q: Why can't I unblock profiles to logged out visitors?

A: It would defeat the purpose of this plugin. 


== Notes ==

Makes all WP posts/pages as well as BP and bbPress pages private and only accessable to logged in users with the 
exception of the posts/pages you set in Dashboard/Settings/PrivateCommunityBP. This version
allows 20 unblocked posts/pages and has not been tested for use with multisite installations.
You can unblock pages like activity, members, or posts, but not profiles.
Blocks RSS feeds to logged out visitors. This version does not unblock entire categories but 
If you need this functionality contact me <a href="http://bphelpblog.wordpress.com/submit-comments-tips-or-tricks-or-job-inqueries/" target="_blank">here</a>
for instructions on purchasing a version that will.  
 
== Changelog ==

= 4.0 =
Added translation file for localization 

= 3.9 =
Renamed to Private Community For BP Lite for naming convention purposes

= 3.8 =
Fixed potential redeclare function call if using one of my other plugins

= 3.7 =
Added more unblocked fields for a total of 20.

= 3.6 =
Removed front page from automatically being unblocked.

= 3.5 =
Made it possible to unblock posts. A few other minor changes.

= 3.4 =
Small bugfix in private-community-for-bp.php on line 111 that caused unblocked item
four to not be display in the settings page after saving it.
Thanks to Fabian for help debugging!

= 3.3 =
Added allowance for up to 10 unblocked pages.

= 3.2 =
Added a field to change your register slug if it has been changed.
Made RSS feeds accessable to logged in users.

= 3.1 =
Added allowance for up to 6 unblocked pages

= 3.0 =
Added dashboard settings allowance for up to 2 public unblocked pages.
first release to the wordpress repository

== Upgrade Notice ==

= 4.0 =
Added translation file for localization 

= 3.9 =
Renamed to Private Community For BP Lite for naming convention purposes

= 3.8 =
Fixed potential redeclare function call if using one of my other plugins

= 3.7 =
Added more unblocked fields for a total of 20.

= 3.6 =
Removed front page from automatically being unblocked.

= 3.5 =
Made it possible to unblock posts. A few other minor changes.

= 3.4 =
Small bugfix in private-community-for-bp.php on line 111 that caused unblocked item
four to not be display in the settings page after saving it.
Thanks to Fabian for help debugging!

= 3.3 =
Added allowance for up to 10 unblocked pages.

= 3.2 =
Added a field to change your register slug if it has been changed.
Made RSS feeds accessable to logged in users.

= 3.1 =
Added allowance for up to six unblocked pages

= 3.0 =
* first release to the wordpress repository