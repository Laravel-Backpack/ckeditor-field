<p>
    <br>
    <a href="https://packagist.org/packages/backpack/ckeditor-field" title="Latest Version on Packagist"><img src="https://img.shields.io/packagist/v/backpack/ckeditor-field.svg?style=flat-square"></a>
    <a href="https://packagist.org/packages/backpack/ckeditor-field" title="Total Downloads"><img src="https://img.shields.io/packagist/dt/backpack/ckeditor-field.svg?style=flat-square"></a>
    <a href="https://github.com/Laravel-Backpack/ckeditor-field/commits/master" title="Last commit"><img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/laravel-backpack/ckeditor-field"></a>
    <a href="https://github.com/the-whole-fruit/manifesto"><img src="https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen?style=flat-square" title="We believe writing good code is not only about writing good code. It’s also about the words around it. We aims to deliver both: code and words."></a>
</p>

# backpack\ckeditor-field

A CKEditor field type for [Laravel Backpack](https://backpackforlaravel.com), using the [CKEditor](https://ckeditor.com/) WYSIWYG editor.

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
