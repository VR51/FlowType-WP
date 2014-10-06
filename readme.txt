=== FlowType WP ===
Contributors: leehodson
Tags: responsive,font,text,responsive text
Donate link: http://journalxtra.com
Requires at least: 3.0
Tested up to: 4.0
Stable tag: 1.1.1
License: GPLv2
License URI: http://wordpress.org/about/gpl/

Make font size responsive. Responsive web typography at its finest using the FlowType.js script. This is the WP alpha version.

== Description ==
Make the text in WordPress sites resize in response to pages being viewed in different web browser widths (viewport widths).

Ideally, the most legible typography contains [between 45 and 75 characters per line](http://webtypography.net/2.1.2). This is difficult to accomplish for all screen widths with only CSS media-queries. FlowType.JS for WP eases this difficulty by changing the font-size based on a specific element\'s width. This allows for a perfect character count per line at any screen width.

FlowType.JS created by @simplefocus. The original script can be found at https://github.com/simplefocus/FlowType.JS. The WordPress plugin was created by Lee Hodson of JournalXtra.com.

== Installation ==
1. FTP Upload: Using your FTP program, upload the un-zipped plugin folder into /wp-content/plugins folder on your server.
2. WordPress Upload: Navigate to Plugins > Add New > Upload and choose the zipped plugin folder

== Frequently Asked Questions ==

= Doesn't Work?  =

* Check the correct HTML selectors are being targeted.
* Ensure that jQuery loads before the FlowType.JS script.
* Ensure FlowType.JS loads before the inline script configs e.g. before the <script></script> tags.
* Some caching plugins and optimisation plugins move scripts to the WordPress footer. Ensure the FlowType and jQuery scripts are not deferred to the footer.

= General Info =

This information is provided for reference only. This is an alpha version of the WordPress plugin. This FAQ is a modified version of the readme of the FlowType.JS jQuery plugin. The script sections have been modified for compatibility with WordPress.

Set minimum and maximum width thresholds to control the FlowType.JS magic within specific element widths.

In this example, FlowType.JS will stop resizing text once the element width becomes smaller than 500px or larger than 1200px.

```
<script>
  $j = jQuery.noConflict();
  $j(document).ready(function($) {
      $('body').flowtype({
         minimum : 500,
	 maximum : 1200
      });
    });
</script>
```

Set minimum and maximum font-size thresholds to control the FlowType.JS magic within specific font sizes.

In this example, FlowType.JS will stop resizing text once the font-size becomes smaller than 12px or larger than 40px.

```
<script>
  $j = jQuery.noConflict();
  $j(document).ready(function($) {
      $('body').flowtype({
      minFont : 12,
      maxFont : 40
      });
    });
</script>
```

### Font-size ###

Set your own font-size using the `fontRatio` variable. When using `fontRatio`, increase the value to make the font smaller (and vice versa).

_Note:_ Because each font is different, you will need to "tweak" `fontSize` and "eye ball" your final product to make sure that your character count is within the recommended range.

```
<script>
  $j = jQuery.noConflict();
  $j(document).ready(function($) {
      $('body').flowtype({
	  fontRatio : 30
      });
    });
</script>
```

### Line-height ###

In v1.0 of FlowType, we made the plugin set a specific line-height in pixels. We received many statements that setting a specific line-height is very dangerous. So, what did we do? We removed support for line-height in v1.1.

What do I do now? It's quite simple: use unitless line-height in your CSS. It will automatically make changes based on the `font size`. Here's an example of what we suggest for `line-height`:

`css
line-height: 1.45;
`

## Getting Started ##

### Step 1: Set Typography Base ###

Prepare for FlowType.JS by making sure that the typography is flexible. Start with this CSS and make changes as necessary:

```css
body {
   font-size: 18px;
}

h1,h2,h3,h4,h5,h6,p {
   line-height: 1.45;
}

h1 { font-size: 4em; }
h2 { font-size: 3em; }
h3 { etc...
```

_Note:_ Setting a specific font-size in your CSS file will make sure that your website remains accessible in case your viewer has JavaScript disabled. These numbers will be overridden as FlowType.JS updates the `font-size` number inline.

### Step 2: Make Changes ###

You will most likely want to change the default settings. To do so, simply include these options in your code and tweak away:


```
<script>
  $j = jQuery.noConflict();
  $j(document).ready(function($) {
      $('body').flowtype({
	  minimum   : 500,
	  maximum   : 1200,
	  minFont   : 12,
	  maxFont   : 40,
	  fontRatio : 30
      });
    });
</script>
```

== Changelog ==

1.1.1

* Added jQuery enqueuing - thank you GitHub user Vitaligent for pointing out this oversight.
* Prevented script loading in admin
* Added .n suffix to version number to reflect WP plugin version update, not FlowType.JS version update.

1.1

* Initial Release.
* Version number chosen because it matches the version of FlowType.JS loaded by the plugin.