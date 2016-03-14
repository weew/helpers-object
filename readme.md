# Common php helpers

[![Build Status](https://img.shields.io/travis/weew/php-helpers-common.svg)](https://travis-ci.org/weew/php-helpers-common)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-helpers-common.svg)](https://coveralls.io/github/weew/php-helpers-common)
[![Version](https://img.shields.io/packagist/v/weew/php-helpers-common.svg)](https://packagist.org/packages/weew/php-helpers-common)
[![Licence](https://img.shields.io/packagist/l/weew/php-helpers-common.svg)](https://packagist.org/packages/weew/php-helpers-common)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Functions](#functions)
    - [safe_clone](#safe_clone)

## Installation

`composer require weew/php-helpers-common`

## Introduction

This tiny library provides various useful helper functions.

## Functions

#### safe\_clone

Clones a value using the `clone` function if it is an object, simply returns the value otherwise.

`mixed safe_clone(mixed $value)`
