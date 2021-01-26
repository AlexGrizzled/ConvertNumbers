# ConvertNumbers
## Convert digits to Arabic and Roman numerals.
## Конвертируем с римских цифр в арабские и наоборот.


- **Via Composer**

```bash
composer require alexgrizzled/convertnumbers
```

```php
<?php
//Example php code
require __DIR__ . '/vendor/autoload.php';

use AlexGrizzled\ConvertNumbers;

$roman = 'IV';
$arabic = 7;

echo ConvertNumbers::toArabic($roman) . PHP_EOL;
echo ConvertNumbers::toRoman($arabic) . PHP_EOL;

//OR

$quarter = ConvertNumbers::toRoman(ceil(date('n') / 3));
$year = date('Y');
echo "It is now the {$quarter} quarter of {$year}" . PHP_EOL;

```
