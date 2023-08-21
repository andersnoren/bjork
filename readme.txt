=== Björk ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.2
Requires PHP: 5.6
Tested up to: 6.3
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Make sure you're running WordPress 6.1 or later.
2. Upload the theme.
3. Activate the theme.


== Licenses ==

Björk is derived from the Davis Blocks theme, Copyright (c) 2022 Anders Norén.
Davis Blocks is distributed under the terms of the GNU GPL version 2.0.

Björk bundles the following third-party resources:

Albert Sans font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/Albert+Sans/

All illustrations in the theme files and screenshot.png by Anders Norén
License: Creative Commons Zero, https://creativecommons.org/publicdomain/zero/1.0/


== Changelog ==

Version 0.2.2 (2023-08-21)
-------------------------
- Removed opt-in of the opinionated wp-block-styles, since it causes issues with pull quote styles in 6.3.
- Updated styles to account for removal of wp-block-styles.

Version 0.2.1 (2023-02-24)
-------------------------
- Fixed local files being referenced in frontpage.html.
- Fixed the body margin being different in 0.2.

Version 0.2 (2023-02-10)
-------------------------
- Added WordPress 6.1 support.
	- Theme.json: Added spacingSizes.
	- Theme.json: Added element styles for button, heading, caption, and link, and removed the CSS it replaces.
	- Enabled fluid font sizes in theme.json.
	- Enabled useRootPaddingAwareAlignments in theme.json.
	- Reworked and reduced custom alignment styles to still support full alignments on mobile.
	- Enabled blockGap in theme.json.
- Removed some custom styles for the search form and tables from style.css.
- Bumped copyright year in the footer to 2023.

Version 0.1.10 (2022-10-07)
-------------------------
- Removed index.php, since it's no longer needed to pass the WordPress.org automatic theme review.

Version 0.1.9 (2022-09-28)
-------------------------
- Added the `left-sidebar` style.css theme tag (thanks, Justin).

Version 0.1.8 (2022-09-27)
-------------------------
- Updated <!-- wp:template-part --/> to omit the "theme":"bjork" code, fixing issues when modifying template parts in child themes (thanks, @janboddez).

Version 0.1.7 (2022-09-26)
-------------------------
- Cleaned up style.css.
- Updated inputs to only have buttons be set to -webkit-appearance: none, fixing checkboxes (thanks, Stanislav).

Version 0.1.6 (2022-09-15)
-------------------------
- Updated theme description in style.css with a link to the demo site.
- Set inputs to -webkit-appearance: none, fixing button display in iOS.

Version 0.1.5 (2022-09-09)
-------------------------
- Updated Albert Sans to use woff2 files, reducing file size and fixing font weight display in Firefox.

Version 0.1.4 (2022-09-09)
-------------------------
- Another stab at the blockGap issue, now by removing spaces around the values inside var() which seem to trip up Gutenberg.

Version 0.1.3 (2022-09-09)
-------------------------
- Fixed a blockGap issue causing missing gutters in columns when running the Gutenberg plugin.

Version 0.1.2 (2022-09-08)
-------------------------
- Removed a leftover line of CSS targeting the button in the Search Form block.

Version 0.1.1 (2022-09-07)
-------------------------
- Changed the loop.html template part to use the blog-grid-cols-2.php pattern by default, matching the demo site.
- Fixed the height of the sidebar being incorrect when the user admin bar is displayed (thanks, @JeroenRotty).
- Adjusted the theme description.

Version 0.1 (2022-09-02)
-------------------------