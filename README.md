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
- run `php code beautifier` to fix coding style issues `composer php-code-beautifier`

## GitFlow

- every `commit` will trigger a pre-commit hook to perform a `phpcs` analysis
- trigger a circle-ci analysis on `push`

## Status badge

[![CircleCI](https://dl.circleci.com/status-badge/img/gh/EmilienLetestu/adr_boiler_plate/tree/main.svg?style=svg)](https://dl.circleci.com/status-badge/redirect/gh/EmilienLetestu/adr_boiler_plate/tree/main)

## Documentation

- [Symfony documentation](https://symfony.com/doc/current/index.html)
- [CircleCI](https://circleci.com/docs/)