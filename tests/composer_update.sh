#!/usr/bin/env bash

composer remove avisota/contao-message --no-update
composer remove avisota/contao-message-element-headline --no-update
composer remove avisota/contao-message-element-image --no-update
composer update --prefer-dist --no-interaction
composer require avisota/contao-message 3.2.x-dev --no-update
composer require avisota/contao-message-element-headline 3.1.x-dev --no-update
composer require avisota/contao-message-element-image 3.1.x-dev
