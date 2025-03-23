# JTL-Shop

|**JTL-Shop** is an open source shop software designed for use with JTL-Wawi. |
|:-----------------:|

## System Requirements

**Webserver**
* Apache Version 2.2 or 2.4
	* mod_rewrite module activated
	* .htaccess support (allowed to override options)
* nginx
  
**Database** 
* MySQL 5 >= 5.6
* MariaDB >= 10.1

**PHP**
* PHP 7.3 or greater
* PHP-Modules: 
	* [SimpleXML](https://php.net/manual/en/book.simplexml.php)
	* [ImageMagick + Imagick](https://php.net/manual/en/book.imagick.php)
	* [Curl](https://php.net/manual/en/book.curl.php)
	* [Iconv](https://php.net/manual/en/book.iconv.php)
	* [MBString](https://php.net/manual/en/book.mbstring.php)
	* [Tokenizer](https://php.net/manual/en/book.tokenizer.php)
	* [Intl](https://www.php.net/manual/de/book.intl.php)
	* [PDO (MySQL)](https://php.net/manual/en/book.pdo.php)
	* Optional: [IonCube Loader](https://www.ioncube.com/loaders.php) for some third-party plug-ins
* PHP Settings
	* `max_execution_time` >= 120s
	* `memory_limit` >= 128MB
	* `upload_max_filesize` >= 8MB
	* `allow_url_fopen` activated

## Software boundaries
* See [Software boundaries and limits](https://jtl-url.de/limits) for details

## License 
* MIT License - see [LICENSE.md](LICENSE.md)

## Changelog
* See [issues.jtl-software.de](https://issues.jtl-software.de/issues?project=JTL-Shop) or review commits in [Gitlab](https://gitlab.com/jtl-software/jtl-shop/core) for the latest changes

## Third party libraries
* [Smarty](https://www.smarty.net/) - LGPL
* Guzzle - MIT
* Intervention Image - MIT
* elFinder - BSD
* CodeMirror - MIT
* Minify
* NuSoap - LGPLv2
* PCLZip - LGPL
* PHPMailer - LGPL
* phpQuery - MIT

### Frontend libraries
* jQuery + jQuery UI + various jQuery Scripts - MIT
* Bootstrap + Bootstrap-Scripts - MIT
* Photoswipe - MIT
* FileInput - BSD
* imgViewer - MIT
* typeAhead - MIT
* WaitForImages - MIT
* LESS Leaner CSS - Apache v2 License
* [slick](https://github.com/kenwheeler/slick/) - MIT

## Contributing

If you want to participate in the development of JTL-Shop,  
you can do it in the following way:

* first create your own *fork* of this repository
* then create a *branch* in your own *fork*
* finally make a merge request for that *branch* in the *upstream* of your *fork*

Please DO NOT create a merge request of your own master branch!

A short description of the procedure can be found here: 
[contributing](https://docs.jtl-shop.de/de/latest/shop_programming_tips/contributing.html)

## Related Links

* [JTL](https://www.jtl-software.de/) - JTL-Software Homepage
* [JTL Userguide](https://guide.jtl-software.de/) - Userguide
* [JTL Developer Documentation](https://docs.jtl-shop.de/) - Developer Docs
* [JTL Community](https://forum.jtl-software.de/) - JTL-Forum 
* [JTL Shop-Entwicklung](https://gitlab.com/jtl-software/jtl-shop/core) - GitLab Repository
* [JTL Shop-Builds](https://build.jtl-shop.de/) - Ready-to-use zip archives 

# Waschguru Onlineshop - JTL-Wawi mit Cartzilla Design

Dieses Projekt ist ein JTL-Wawi Onlineshop mit dem Cartzilla Design. Die Implementierung erfolgt schrittweise und behält dabei die bestehende JTL-Wawi Funktionalität bei.

## Projektstruktur

### Wichtige Verzeichnisse

- `templates/sellx/` - Hauptverzeichnis für alle Template-Dateien
  - `layout/` - Layout-Dateien wie Header und Footer
  - `boxes/` - Box-Templates für verschiedene Shop-Komponenten
  - `snippets/` - Wiederverwendbare Template-Snippets
  - `themes/` - Theme-spezifische Dateien
  - `assets/` - Statische Assets (CSS, JS, Bilder)
  - `locale/` - Übersetzungsdateien

### Wichtige Dateien

- `templates/sellx/layout/header.tpl` - Enthält das Haupt-Layout mit `<main class="content-wrapper">`
- `templates/sellx/js/custom.js` - Benutzerdefinierte JavaScript-Funktionen
- `templates/sellx/locale/de-DE/` - Deutsche Übersetzungen und Sprachvariablen

## Design-Richtlinien

- Das Design basiert ausschließlich auf dem Cartzilla-Theme
- Alle Smarty-Variablen bleiben unverändert und werden bevorzugt verwendet
- Neue Smarty-Variablen werden nur erstellt, wenn sie für das Frontend benötigt werden
- JavaScript-Funktionalitäten werden in `templates/sellx/js/custom.js` implementiert
- Das `<main class="content-wrapper">` wird bereits in `header.tpl` gesetzt und sollte nicht in einzelnen Templates wiederholt werden

## Template-Integration

### Kategorien
- `templates/sellx/boxes/box_categories.tpl` - Haupttemplate für Kategorien
- `templates/sellx/snippets/categories_recursive.tpl` - Rekursives Template für Unterkategorien

### Produktdetails
- `templates/sellx/productdetails/index.tpl` - Haupttemplate für Produktdetails
- `templates/sellx/productdetails/image.tpl` - Template für Produktbilder
- `templates/sellx/productdetails/price.tpl` - Template für Preisanzeige

### Filter
- `templates/sellx/snippets/filter/price_slider.tpl` - Template für den Preisfilter
- `templates/sellx/snippets/filter/box_categories.tpl` - Template für Kategoriefilter

## Entwicklungshinweise

1. Alle neuen Templates sollten dem Cartzilla-Design folgen
2. Bestehende Smarty-Variablen sollten bevorzugt verwendet werden
3. Neue Sprachvariablen müssen in `templates/sellx/locale/de-DE/` erstellt werden
4. JavaScript-Funktionalitäten gehören in `custom.js`
5. Layout-Strukturen sollten in `header.tpl` und `footer.tpl` zentral verwaltet werden

## Wichtige Smarty-Variablen

- `$Artikel` - Aktueller Artikel
- `$Kategorie` - Aktuelle Kategorie
- `$Einstellungen` - Shop-Einstellungen
- `$Link` - Link-Generator
- `$smarty.session` - Session-Variablen

## CSS-Klassen

Das Projekt verwendet die Cartzilla CSS-Klassen:
- `content-wrapper` - Hauptcontainer
- `container` - Bootstrap Container
- `row` - Bootstrap Row
- `col-*` - Bootstrap Spalten
- `card` - Karten-Layout
- `btn` - Buttons
- `form-control` - Formulareingaben
