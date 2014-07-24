# Parsedown plugin for Craft

This plugin adds [Parsedown](http://parsedown.org/) support to Craft.


## Installation

To install Parsedown, follow these steps:

1. Upload the parsedown/ folder to your craft/plugins/ folder.
2. Go to Settings > Plugins from your Craft control panel and enable the Parsedown plugin.


## Templating

To use Parsedown in your templates, just pass some text into the `parsedown` filter:

```jinja
{{ entry.myBodyField|parsedown }}
```

A `pd` shortcut filter is also available:

```jinja
{{ entry.myBodyField|pd }}
```

The filters also work in a single-line mode, where the text that’s passed in will not include wrapping `<p>` tags:

```jinja
<h1>{{ entry.title|parsedown('line') }}</h1>
```

## Plugin API

Other plugins can take advantage of Parsedown using the provided API:

```php
$parsedText = craft()->parsedown->parseText($entry->myBodyField);

$parsedLine = craft()->parsedown->parseLine($entry->title);
```
