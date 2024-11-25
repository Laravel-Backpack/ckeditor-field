# backpack\ckeditor-field

```
// TODO: Badge - Latest Version on Packagist
// TODO: Badge - Total Downloads
```

A CKEditor field type for [Laravel Backpack](https://backpackforlaravel.com), using the [CKEditor](https://ckeditor.com/) WYSIWYG editor.

// TODO: screenshot

## Install

To install this package via Composer, run this command:

```bash
composer require backpack/ckeditor-field
```

## Usage

In your CrudController, use the `CKEditor` field type:

```php
CRUD::field('content')->type('ckeditor');
```

You can customize most of CKEditor's options:

```php
CRUD::field([   // CKEditor
    'name'          => 'content',
    'type'          => 'ckeditor',

    // optional:
    'options'       => [
        'autoGrow_minHeight'   => 200,
        'autoGrow_bottomSpace' => 50,
        'removePlugins'        => [],
    ],

    // elfinder configuration options when using [the file manager package](https://github.com/Laravel-Backpack/FileManager)
    'elfinderOptions' => [], // it's the same as `true`, will enable with default options, by default is: `false`
]);
```

If you'd like to be able to select files from elFinder, you need to install [Backpack/FileManager](https://github.com/Laravel-Backpack/FileManager) package and enable it in your field: `elfinderOptions => true`.

## Custom Builds

Custom builds are not supported at the moment. If you need a custom build, you should publish the field to your own `resources/views/vendor/backpack/ckeditor-field/fields/ckeditor.blade.php` and modify it as needed.

## License

CKEditor is released under the GPL license. Please see the [CKEditor licensing page](https://ckeditor.com/legal/ckeditor-oss-license) for more information. Means that if you use CKEditor in your project, and you distribute that project, you need to make the source code of your project available under a GPL-compatible license or purchase a commercial CKEditor license.

## Security

If you discover any security related issues, please email tabacitu@backpackforlaravel.com instead of using the issue tracker.

Please **[subscribe to the Backpack Newsletter](http://backpackforlaravel.com/newsletter)** so you can find out about any security updates, breaking changes or major features. We send an email every 1-2 months.

## Credits

- [Pedro Martins](https://github.com/pxpm)
- [Cristian Tabacitu](https://github.com/tabacitu)
