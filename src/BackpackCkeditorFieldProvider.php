<?php

namespace Backpack\CkeditorField;

use Illuminate\Support\ServiceProvider;
use Backpack\CkeditorField\AutomaticServiceProvider;

class BackpackCkeditorFieldProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'backpack';
    protected $packageName = 'ckeditor-field';
    protected $commands = [];
}