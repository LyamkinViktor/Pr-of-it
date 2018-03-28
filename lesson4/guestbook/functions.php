<?php

function getData() {
    if (file_exists(__DIR__ . '/db.txt')) {
        return file(__DIR__ . '/db.txt', FILE_IGNORE_NEW_LINES);
    }
    return null;
}