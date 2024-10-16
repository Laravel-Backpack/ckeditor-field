# backpack\ckeditor-field

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

A CKEditor field type for Laravel Backpack, using the [CKEditor](https://ckeditor.com/) WYSIWYG editor.

## Install

You can install this package via composer using this command:

```bash
composer require backpack/ckeditor-field
```

## Usage

In your CrudController, use the `CKEditor` field type:

```php
CRUD::field('content')->type('ckeditor');
```

Find more information on how to use this field in the [official Backpack for Laravel documentation](https://backpackforlaravel.com/docs/6.x/crud-fields#ckeditor).

## License

CKEditor is released under the GPL license. Please see the [CKEditor licensing page](https://ckeditor.com/legal/ckeditor-oss-license) for more information. Means that if you use CKEditor in your project, and you distribute that project, you need to make the source code of your project available under a GPL-compatible license or purchase a commercial CKEditor license.


> ### Security updates and breaking changes
> Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## Security

If you discover any security related issues, please email tabacitu@backpackforlaravel.com instead of using the issue tracker.

Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## Credits

- [Cristian Tabacitu][link-author]
- [All Contributors][link-contributors]
