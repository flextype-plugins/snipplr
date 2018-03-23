# Snipplr Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square "Flextype Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-plugins/snipplr/blob/master/LICENSE.txt)

Snipplr plugin for quick embedding [Snipplr](http://snipplr.com/) snippets.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
...
plugins:
  - snipplr
```

# Usage in page content

```
[snipplr id=327689]
```

## Usage in template

```php
<?php echo Flextype\snipplr(327689); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/snipplr/blob/master/LICENSE)
