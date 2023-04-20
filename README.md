# SYMFONY ADR SKELETON

A ready to use Action Domain Responder Symfony skeleton

## Requirements

- php >=8.1
- composer >=2.0

## Installation 

- composer install

## Useful commands

- run test `php bin/phpunit`
- run `phpcs` analysis `composer php-cs`
- run `php code beatifier` to fix coding style issues `composer php-code-beautifier`

## GitFlow

- every `commit` will trigger a pre-commit hook to perform a `phpcs` analysis
- perform a circle-ci analysis on `push`