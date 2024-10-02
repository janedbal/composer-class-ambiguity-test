## Composer does not check class ambiguity properly
- If you have class duplicate in your project, composer will not warn about that.
  - This repository shows an example of that.
  - Since composer 2.8, you can use `--strict-ambiguous`, but that still does not solve this issue
- Currently, you can ensure no ambiguity is present by [shipmonk/name-collission-detector](https://github.com/shipmonk-rnd/name-collision-detector)

### How to reproduce
```sh
composer install
composer dump -a --strict-ambiguous
echo $?
php run.php
```

### How to see all real collisions
```sh
composer require --dev shipmonk/name-collision-detector
vendor/bin/detect-collisions src tests
```

### Related GitHub issue
- https://github.com/composer/composer/issues/12140
