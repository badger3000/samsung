# Samsung WP Test theme

[![devDependencies Status](https://david-dm.org/badger612/samsung/dev-status.svg)](https://david-dm.org/badger612/samsung?type=dev)


This is a sample theme for WordPress. I have only include the neccesary files needed to match the creative and display a homepage. 


## Installation

To use this Theme for local development, your computer needs:

- [NodeJS](https://nodejs.org/en/) (0.12 or greater)
- [Git](https://git-scm.com/)

*** NOTE: the theme posted to dev is the final, compressed version, and only has files needed to rendor the theme

This is using a [Gulp](https://gulpjs.com/) build system and leveraged [WPGulp](https://github.com/ahmadawais/WPGulp) to kick start the WordPress workflow

Install dependances:

```bash
npm install
```
To run the build and start browsersync

```bash
npm start
```

To optimize images

```bash
gulp images
```

To generate WP POT translation file


```bash
gulp translate
```
To generate RTL stylesheets and Sourcemap
```bash
gulp stylesRTL
```
## Content Managment

There are many ways to control WordPress content and I choose a few diffrent options for this theme
- __Title & Subheader__: This is coming from Settings > General and is displaying the 'Site Title' and Tagline  
- __Masthead/Footer__: I made two categories "top posts/bottom posts" and assigned these to posts to determine where they show up
- __Cards__: This is using a custom post type "Cards" and is viewable in the admin as a seprate menu item. The title (displayed on the site) of this section is coming from the custom post type's description
- __Quote Box__: This was added as a "Theme setting" and can be accsesed in the in the admin's left menu (towards the bottom)
- __Authors__: I added some "Extra profile information" towards this bottom, on the author screen. This has fields for "company & title" and is being displayed/used in the footer post, under the image 


## Frameworks used

[Foundation Grid](https://foundation.zurb.com/sites/docs/xy-grid.html)

I just imported the xy-grid, plus untilies (breakpoint mixin, rem mixin, etc). This made it quick to build responsive, flex box based, grid markup

[AOS - Animate on scroll library](https://github.com/michalsnik/aos)

Light weight JS animation library ( CSS based ) for scrolling. I just used the basic for my example, but it has an extendable API and the ablity to make custom CSS animations

[Flickity](https://flickity.metafizzy.co/)

Another light weight JS libary carousel, with touch support. Easlie configrable and extendable, with a variatiy of options

### What I didn't use

-  No JQuery - Trying to keep dependencies to a minimal
-  No WP Plugins - No front end plugins are needed for the theme to work
-  No Images - the only image in the theme is default-headshot.jpg and is only refrenced as a fallback image, if no image was set to a post in WP 

