# Common php helpers

[![Build Status](https://img.shields.io/travis/weew/helpers-object.svg)](https://travis-ci.org/weew/helpers-object)
[![Test Coverage](https://img.shields.io/coveralls/weew/helpers-object.svg)](https://coveralls.io/github/weew/helpers-object)
[![Version](https://img.shields.io/packagist/v/weew/helpers-object.svg)](https://packagist.org/packages/weew/helpers-object)
[![Licence](https://img.shields.io/packagist/l/weew/helpers-object.svg)](https://packagist.org/packages/weew/helpers-object)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Functions](#functions)
    - [sclone](#sclone)

## Installation

`composer require weew/helpers-object`

## Introduction

This tiny library provides various useful helper functions to deal with objects.

## Functions

#### sclone

Safely clones a value using the `clone` function if it is an object, simply returns the value otherwise.

`mixed sclone(mixed $value)`
