<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'author' => [[], ['_controller' => 'App\\Controller\\AuthorController::getAuthors'], [], [['text', '/api/authors']], [], [], []],
    'detailAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::getDetailAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'book' => [[], ['_controller' => 'App\\Controller\\BookController::getBooks'], [], [['text', '/api/books']], [], [], []],
    'detailBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::getDetailBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'deleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::DeleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'createBook' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/api/books']], [], [], []],
    'updateBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'App\Controller\AuthorController::getAuthors' => [[], ['_controller' => 'App\\Controller\\AuthorController::getAuthors'], [], [['text', '/api/authors']], [], [], []],
    'App\Controller\AuthorController::getDetailAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::getDetailAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'App\Controller\BookController::getBooks' => [[], ['_controller' => 'App\\Controller\\BookController::getBooks'], [], [['text', '/api/books']], [], [], []],
    'App\Controller\BookController::getDetailBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::getDetailBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'App\Controller\BookController::DeleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::DeleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'App\Controller\BookController::createBook' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/api/books']], [], [], []],
    'App\Controller\BookController::updateBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
];
