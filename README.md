# Kirby TinyMCE 

[![GitHub issues](https://img.shields.io/github/issues/PaulMorel/kirby-tinymce.svg)](https://github.com/PaulMorel/kirby-tinymce/issues)
[![GitHub license](https://img.shields.io/github/license/PaulMorel/kirby-tinymce.svg)](https://github.com/PaulMorel/kirby-tinymce/blob/master/LICENSE.md)

Kirby TinyMCE is the classic and familliar WYSIWYG editor TinyMCE as a panel field for [Kirby 3 CMS](https://getkirby.com/).

The plugin is currently in its early development stages. Expect bugs. Check out the [develop](https://github.com/PaulMorel/kirby-tinymce/tree/develop) branch for updates.

## Requirements

- PHP 7.1+
- Kirby 3.0.0+

### Included Dependencies
- Markdownify 2.3
- TinyMCE Vue component 2.1.0

## Installation

### Download ZIP

Download or clone the repository and extract it to `site/plugins/tinymce` within your project root.

### Composer


### Git Submodule

If you're using Git to manage your project, you can add this plugin as a Git submodule.

```
$ cd your/project/root
$ git submodule add https://github.com/PaulMorel/kirby-tinymce.git site/plugins/tinymce
```
## Usage

### Blueprints
Once the plugin is installed, you can start using TinyMCE in your blueprints:

``` yml
text:
  label: Text
  type: tinymce
  plugins:
    - work in progress
  menubar: format help
  toolbar: bold italic anchor
```

If you wish, you can also set global defaults in your `config.php` file:

```
c::set('plugin.tinymce.plugins', '');
c::set('plugin.tinymce.toolbar, '');
c::set('plugin.tinymce.menubar, '');
```

These options will be overridden by any options set on individual fields. 

If neither are set, the field will use sensible defaults.

## Options

### `plugins`

Allows you to specify which plugins TinyMCE will attempt to load when starting up. See the [TinyMCE documentation](https://www.tinymce.com/docs/configure/integration-and-setup/#plugins) for more detailed information.

Type: `String`

Currently available plugins:
- autolink
- autoresize
- charmap
- code
- codesample
- colorpicker
- contextmenu
- directionality
- hr
- image
- insertdatetime
- link
- lists
- media
- nonbreaking
- paste
- searchreplace
- tabfocus
- table
- template
- visualblocks
- visualchars
- wordcount
  
### `toolbar`

Allows you to specify the controls that should appear on TinyMCE's toolbar. See the [TinyMCE documentation](https://www.tinymce.com/docs/configure/editor-appearance/#toolbar) for more detailed information.

Type: `String|Array|Bool`
 
### `menubar`

Allows you to specify which menus should appear on TinyMCE's menubar. See the [TinyMCE documentation](https://www.tinymce.com/docs/configure/editor-appearance/#menubar) for more detailed information.

Type: `String|Bool`

## Changelog

### 0.1.0
- Initial Preview Release

## Roadmap

- Internationalisation and localisation where applicable
- Add unit tests where applicable
- Add individual plugin options
- Update theme to match panel styles

## Contributing
Any suggestion or contribution is welcome. Don't hesitate to create Issues and Pull Requests.

## License

This repository is under the [GNU LGPL v2.1 license](https://github.com/PaulMorel/kirby-tinymce/blob/master/LICENSE).

## Acknowledgments

Kirby CMS by Bastian Allgeier  
TinyMCE by Ephox  
Parsedown & Parsedown Extra by Emanuil Rusev  
Markdownify by Milian Wolff & Thomas Zilliox
