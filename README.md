# PHPUnit-Examples  
Testing methods and functions of PHPUnit version 12.1.

## **Requirements**
- PHP 8.3 or higher  
- Composer  

## **Installation**

To get started with PHPUnit, follow these steps:

1. Install **PHP 8.3** (or higher).
2. Install **Composer** globally if you haven't already. You can follow the installation instructions from [Composer's official site](https://getcomposer.org/download/).

## Structure of `composer.json`

The `composer.json` file in this project includes the following configuration:

```json
{
    "autoload": {
        "classmap": [
            "class/"
        ]
    },
    "require-dev": {
        "phpunit/phpunit": "^12.1"
    }
}
```

After updating your composer.json, run the following command to install the dependencies:

```bash
composer update
```

### Explanation of the Instruction:

1. **Command to Run Tests**:  
   - When you run the command `./vendor/bin/phpunit`, PHPUnit will look for the configuration file `phpunit.xml` in the root directory and execute the tests based on the configuration defined in this file.

2. **PHPUnit and `phpunit.xml`**:  
   - The PHPUnit configuration via `composer install` ensures that all necessary dependencies, including PHPUnit, are automatically installed, and the `phpunit.xml` file configuration will be ready for running the tests.

3. **Which tests are executed?**:  
   - Basically, all classes in the `tests/unitary/class` directory are executed. After running the tests, PHPUnit creates a new file with logs referencing the last execution in the `tests/build/unit_report.xml` directory. This path is created after the execution in step 1.
 
## **References**

For more detailed information on PHPUnit, including how to write and execute tests, refer to the official [PHPUnit documentation site](phpunit.de).