=== Live Writer Stealth ===
Contributors: codelizard
Donate link: http://www.codelizard.com/Information/Code-Lizard/donate.html
Tags: windows live writer, live writer, temporary post, theme detection
Requires at least: 3.0
Tested up to: 3.0.1
Stable tag: 1.0

Live Writer Stealth keeps those pesky Live Writer test posts from appearing on your site or in your RSS feeds.

== Description ==

Have you ever looked at the RSS feed and seen an entry that you didn't recognize staring you back in the face?

Temporary Post Used For Theme Detection (aaaa0000-abcd-1234-4321-a1b2c3d4e5f6 - xxxxxxxx-aaaa-2222-aaaa-a1b2c3d4e5f6)

Temporary what?  I don't see this post on my live site!  What is it??

If you're a user of Windows Live Writer (which, by the way is an EXCELLENT wysiwyg for blogging), then the answer is right
in front of you.

Windows Live Writer, in order to give the best quality possible, needs to detect the theme information for your blog.  The
way it does this is to create a temporary blog post, read it really quick, then delete it again right away.  The problem is,
sometimes the posts don't get deleted.  Worse yet, they may be picked up by RSS readers or indexed by an external source
(feedburner, anyone?) before it manages to be deleted.

So while it needs to be done, it can also be a pain in the backside.

Live Writer Stealth solves this issue.  It's a simple plug-in just to filter out posts from your live blog and RSS feeds that
match the format of the Windows Live Writer detection messages.  This doesn't break the functionality of WLW, because this
filter is only applied if you are not signed in as an admin and using Windows Live Writer.  Users and RSS viewers, however, will be none-the-wiser.


== Installation ==

1. Upload the whole Live Writer Stealth directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What versions does this plug-in work for? =

We've only tested it in Wordpress 3.0+

= How does it work? =

We just add a filter to remove any of these posts from the prying eyes of users, search engines, and RSS feeds.

= Where can I get it? =

You can download it from the Code Lizard website http://www.codelizard.com in the download section.

== Screenshots ==

None.

== Changelog ==

= 1.0 =
* Initial Release

== Upgrade Notice ==

None.
