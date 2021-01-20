# ConvertNumbers
## Convert digits to Arabic and Roman numerals.
## Конвертируем с римских цифр в арабские и наоборот.

composer require alexgrizzled/convertnumbers
```php
//Example php code
require __DIR__ . '/vendor/autoload.php';

use AlexGrizzled\ConvertNumbers;

$roman = 'IV';
$arabic = 7;

echo ConvertNumbers::toArabic($roman) .PHP_EOL;
echo ConvertNumbers::toRoman($arabic) .PHP_EOL;
```
