BIC Bootstrap WP Theme 0.3
**************************

Bootstrap is a responsive front-end toolkit from Twitter with core HTML, CSS, and JS 
for grids, type, forms, navigation, and much more. For details see: http://www.getbootstrap.com. 

With this theme you can use Bootstrap 3 in WordPress to build custom themes quickly and easily.



Features
********

    Templates: index, archiv, page, page-fullwidth, 404, search. Sidebars and content in seperated files.
    Breadcrumbs: a breadcrumb navigation is shown on all pages and archives (except home).
    Menues: a header, a main and a footer menu can be configured in theme options.
    Sidebars: different sidebars (sidebar for blog, sidebar for pages, 4 footer sidebars, 3 home sidebars).
    Theme Options: Logo, Copyright text, Favion, Analytics, automatic excerpt usage, show search box in header, show meta data for posts, show featured image on post, top callout, show content of a page on top of the index template if it is displayed as frontpage. 
    External Plugins: you can use Wp-PageNavi for Pagination on archives
    Translation Ready: available translations: german and english, use the plugin “Codestyling Localization” to edit or add new transalations. 
    Shortcodes for Buttons and column layout


Screenshots & Demo
******************

You can find Screenshots and a Demo on: http://www.besserdich.com/wordpress/twitter-bootstrap-3-blank-theme-fuer-wordpress/ 


 
Usage
*****

Installation
Download Theme, install in on an actual WordPress site.

Theme options
In the backend menu under Design > Options you can define the option settings. 

Menu
Create a header, a main and a footer menu under Design > Menu.

Sidebars
Sidebars can be filled with widgets for Pages, Blog Areas (archive and single) separately. For the footer there are 4 sidebars, 
for the option "show content of a page on top of the index template if it is displayed as frontpage" there are also 3 sidebars.

Shortcodes - Buttons
[button type="primary" target="_blank" size="lg" link="/kontakt/"]Button Text[/button]
you can set the following options: 
type: default, primary, success,info, warning, danger, link
size: lg,'empty', sm, xs

Shortcodes - 2 Columns
[two_columns_one]one half[/two_columns_one]
[two_columns_one]one half[/two_columns_one]

Shortcodes - 3 Columns
[three_columns_one]
one third
[/three_columns_one]
[three_columns_two]
two third
[/three_columns_two]

Shortcodes - 4 Columns
[four_columns_two]
two fourth
[/four_columns_two]
[four_columns_one]
one fourth
[/four_columns_one]
[four_columns_one]
one fourth
[/four_columns_one]


Shortcodes - Divider
[divider]

Using templates 
If you want to use static pages, select a page template (page, page-full-width). 
When you are using the index as start page (Settings > Reading > Start > Show latest Posts), you can enable to show content from a page by id on top of the posts. 
The three home sidebars (Design > Widgets) are shown under the content of the page. 

Customizing templates
The templates are very easy pages oriented on the official bootstrap examples (http://getbootstrap.com/getting-started/#examples). 
You can adjust them according to the bootstrap documentation (http://getbootstrap.com/getting-started/). 

Customizing CSS Styles
You can add your custom styles ts the file style.css in the theme root folder. You can delete the existing data after the import bootstrap.css statement. 

Using a child theme 
If you don't want to make your changes in the original theme, you can create a child theme very easy: http://www.besserdich.com/wordpress/child-themes-in-wordpress/

Plugins
Install  WP-PageNavi to show a pagination on archive pages. 
Use the plugin „Codestyling Localization“ to edit or add translations. 



Comments & Bugs 
***************

Please report all issues and comments on: http://www.besserdich.com/wordpress/twitter-bootstrap-3-blank-theme-fuer-wordpress/ or 
by email to nina.taberski@besserdich.com.  


Later Versions see git repository 


Version 0.3
***********

- third menu for header
- fourth footer column 
- new theme options: show post meta data (posted on by…), show search box in header, show featured image on post, top callout, show content of a page on top of the index template if it is displayed as frontpage.  
- reduce page templates 
- download as installable theme 
- prevent scroll by using more link 
- more link for excerpts 
- show page content on index if used as front page (options)
- new version of navwalker 
- further small bugfixes



Version 0,2
************

- new the options (favicon) 
- Shortcodes for buttins and columns 
- comments as media objects 
- Bugfix Post Navigation without plugin Wp-Pagenavi
- Bugfix if no menu is set 
- Bugfix for using glyphicons 
- Bugfix in layout of page full width 


Version 0.1
************
 
- initial Version 



Copyright and license
*********************

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.



Thanks to 
**********

the Original Twitter Bootstrap Authors: 
- Mark Otto
+ http://twitter.com/mdo
+ http://github.com/markdotto
- Jacob Thornton
+ http://twitter.com/fat
+ http://github.com/fat

the author of BootstrapWP (Wordpress theme for Bootstrap 2.3, basis for my functions.php)
- Rachel Baker 
+ http://bootstrapwp.rachelbaker.me/

the author of wp_bootstrap_navwalker (menu walker that was compatible to bootstrap 3)
- Edward McIntyre
+ https://github.com/twittem/wp-bootstrap-navwalker