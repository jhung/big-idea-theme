# BIG IDeA Wordpress Theme

This is an accessible, responsive Wordpress theme created by the Floe Project. The BIG IDeA is a child theme of the [Floe wp-a11y theme](https://github.com/jhung/wp-a11y-theme/).

[http://bigidea.one](http://bigidea.one) is an example of a site using this theme.

## Under Development

This theme is still under development.

# Requirements

* [Floe wp-a11y theme](https://github.com/jhung/wp-a11y-theme/)
* [UI Options Wordpress plugin](https://github.com/fluid-project/uio-wordpress-plugin)
* [Facebook Feed WD](https://wordpress.org/plugins/wd-facebook-feed/)
* [Instagram Feed](https://wordpress.org/plugins/instagram-feed/)
* [Feedback Post Plugin](https://github.com/jhung/feedback-post-plugin/tree/v0-0-1) (still in development)
* [Font Awesome 4 Menu Plugin](https://wordpress.org/plugins/font-awesome-4-menus/)
* [Cimy User Extra Fields](https://wordpress.org/plugins/cimy-user-extra-fields/)

# Installation

1. Ensure the above requirements are met.
2. Copy this theme into a sub-directory in your Wordpress `themes` directory.
3. Activate the `BIG IDeA` theme.

# Content Structure

The structure of the content for the BIG IDeA site follows the content structure outlined in the wp-a11y theme.

See: [wp-a11y Theme Readme](https://github.com/jhung/wp-a11y-theme/blob/foundation/README.md)

# Configuring Cimy User Extra Fields

For the user registration and the business feedback form to work properly, Cimy User Extra Fields needs to be installed and configured.

Once the plugin is installed, the following settings are used for BIG IDeA:

Under "Authors & Users Extended":
* "Hide n. posts field" checked.
* All other options unchecked.

Under "Authors & Users Extended":
* "Show username" checked.
* "Show website" checked.
* All other fields unchecked.

Under "Extra Fields" add the custom WordPress Fields:

* Name: BUSINESS_CONTACT_NAM
    * Order: 1
    * Type: text
    * Label: "Business Contact Person"
    * Max length: checked
    * Max length value: 200
    * Show the field in the registration: checked
    * Show the field in User's profile: checked
    * Show the field in Users Extended section: checked
    * All other options unchecked

* Name: CONTACT_PHONE
    * Order: 2
    * Type: text
    * Label: Contact "Phone Number"
    * Max length: checked
    * Max length value: 30
    * Show the field in the registration: checked
    * Show the field in User's profile: checked
    * Show the field in Users Extended section: checked
    * All other options unchecked

* Name: BUSINESS_NAME
    * Order: 3
    * Type: text
    * Label: "Business Name (public)"
    * Max length: checked
    * Max length value: 300
    * Show the field in the registration: checked
    * Show the field in User's profile: checked
    * Show the field in Users Extended section: checked
    * All other options unchecked

* Name: ADDRESS
    * Order: 4
    * Type: text
    * Label: "Business Address (public)"
    * Max length: checked
    * Max length value: 300
    * Show the field in the registration: checked
    * Show the field in User's profile: checked
    * Show the field in Users Extended section: checked
    * All other options unchecked

* Name: CITY
    * Order: 5
    * Type: text
    * Label: "City (public)"
    * Max length: checked
    * Max length value: 100
    * Show the field in the registration: checked
    * Show the field in User's profile: checked
    * Show the field in Users Extended section: checked
    * All other options unchecked

# About

The BIG IDeA theme is created and maintained by the [FLOE Project](http://www.floeproject.org/).
