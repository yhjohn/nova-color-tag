# Color tag field for Laravel nova

<!-- [![Latest Version on Packagist](https://img.shields.io/packagist/v/vyuldashev/nova-money-field.svg?style=flat-square)](https://packagist.org/packages/vyuldashev/nova-money-field)
[![Total Downloads](https://img.shields.io/packagist/dt/vyuldashev/nova-money-field.svg?style=flat-square)](https://packagist.org/packages/vyuldashev/nova-money-field)
-->
![screenshot 1](https://user-images.githubusercontent.com/9361382/63682599-e18ff380-c82a-11e9-91fe-c709132f96a0.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require yhjohn/nova-color-tag
```

## Usage

Just define your field as you normally would and in addition, pass in array of colors as the
using the colors method,

Example

```php
// ...
use Yhjohn\ColorTag\ColorTag;

public function fields(Request $request)
{
    return [
        // ...
        ColorTag::make('Color')->colors(['#FF0000', '#FFCC00']),
    ];
}
```

You can also pass in any valid HTML [Color Names](https://www.w3schools.com/colors/colors_names.asp)

```php
ColorTag::make('Color')->colors(['AliceBlue', 'Cornsilk']),
```

