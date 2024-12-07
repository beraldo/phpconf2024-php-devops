#!/bin/bash

echo -e "Running PHPLint..."
composer phplint

echo -e "Running PHP CS..."
composer phpcs

echo -e "Running PHPStan..."
composer phpstan

echo -e "Running Psalm..."
omposer psalm

echo -e "Running Tests..."
php artisan test


