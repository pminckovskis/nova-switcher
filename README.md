# Laravel Nova Switcher Field
Replace default Boolean with switcher. \
Work on Index/Detail view with xhr, on Form like checkbox.

![](https://user-images.githubusercontent.com/839633/209843810-d656e6db-025f-4221-9c6c-9b238227706f.gif)

## Installation
```bash
composer require pminckovskis/nova-switcher
```

## Usage
```php
use Clarity\NovaSwitcher\NovaSwitcher;
...
NovaSwitcher::make('Active');
```
### Labels
```php
use Clarity\NovaSwitcher\NovaSwitcher;
...
NovaSwitcher::make('Active')
    ->trueLabel('On')
    ->falseLabel('Off');
...
NovaSwitcher::make('Active')
    ->withLabels(true: 'On', false: 'Off');
```
### Confirmation
```php
use Clarity\NovaSwitcher\NovaSwitcher;
...
NovaSwitcher::make('Active')
    ->confirmToTrue('enable?')
    ->confirmToFalse('disable?');
...
NovaSwitcher::make('Active')
    ->confirm(toTrue: 'enable?', toFalse: 'disable?');
```
of couse, you can only use confirmation dialogue to enable, or disable:
```php
use Clarity\NovaSwitcher\NovaSwitcher;
...
NovaSwitcher::make('Active')
    ->confirmToFalse('Turn it off?');
```
### Reverse
Also, you can use reverse value (if switcher checked, value is false and vice versa)
```php
NovaSwitcher::make('Active')
    ->reverse();
```

## Thanks to...
- [Trin4ik](https://github.com/trin4ik), based on https://github.com/trin4ik/nova-switcher