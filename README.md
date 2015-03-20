## Reverse engineering showcase

### What's inside?

* Bundles from Symfony Standard distribution
* Sonata Admin Bundles: Admin and Doctrine ORM Admin
* Sonata Ecommerce Bundles: Payment, Customer, Invoice, Order and Product
* Sonata Foundation Bundles: Core, Notification, Formatter, Intl, Cache, Seo and Easy Extends
* Sonata Feature Bundles: Page, Media, News, User, Block, Timeline
* Api Bundles: FOSRestBundle, BazingaHateoasBundle, NelmioApiDocBundle and JMSSerializerBundle

### Prerequisites

1. Check the intl extensions of your PHP, if the result is an empty string please install it:

    > php -m | grep intl intl

2. MySQL version 5.4 or greater.

    > mysql --version

3. PHP version 5.4 or greater.

### Installation

1. Clone the following repository:

    > git clone git@github.com:antonio-pierro/reverse-engineering-showcase.git

2. Composer Installation

    > composer install

    # When you get the massage `Some parameters are missing. Please provide them`, 
    # answer with default values to all questions.

3. Configure your database running the following sql statements:

    CREATE DATABASE re_db;
    CREATE USER ‘re_user'@'localhost' IDENTIFIED BY ‘re_psw';
    GRANT ALL ON re_db.* TO ‘re_user'@'localhost';

4. Load the data:

    > php bin/load_data.php

### Run

You can use the built in server to start the demo:

    > app/console server:run localhost:9090

Tests
-----

### Functional testing

To run the Behat tests, copy the default configuration file and adjust the base_url to your needs

    # behat.yml
    imports:
        - behat.yml.dist

    # Overwrite only the config you want to change here

You can now run the tests suite using the following command

    bin/qa_behat.sh

To get more informations about Behat, feel free to check [the official documentation][link_behat].

### Unit testing

To run the Sonata test suites, you can run the command:

    bin/qa_client_ci.sh

