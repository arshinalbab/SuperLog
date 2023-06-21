# SuperLog

SuperLog is a PHP logging library that provides a simple way to log messages to a file.

## Installation

Install SuperLog using [Composer](https://getcomposer.org/):

```bash
composer require arshinalbab/superlog
```

## Usage

Create an instance of the `SuperLog\Logger` class and use the `log()` method to log messages:

```php
<?php

require_once 'vendor/autoload.php';

use SuperLog\Logger;

$logger = new Logger();
$logger->log('This is a log message.');

```

By default, the log messages are written to a file named `log.txt` in the current directory. You can specify a different file path in the constructor:

```php
$logger = new Logger('path/to/log.txt');
```

## Contributing

Contributions are welcome! If you find any issues or want to contribute to the project, please follow these steps:

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Write tests for your changes
5. Run the tests: vendor/bin/phpunit
6. Commit your changes and push to your forked repository
7. Submit a pull request

## License

This project is licensed under the [MIT License](LICENSE).
