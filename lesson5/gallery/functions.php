<?php

function getUsersList() {
    return ['admin' => '$2y$10$Yc0bzu/omrO3A0LRKI3yUe8Gw7Mq53m97z4WLEXhB/xBQrY/QspS.',
            'user1' => '$2y$10$btLtycGga7cagAcolc43duCuUsTJyXxTEmiz51Cji0jYSeEmDQ4/q',
            //'user2' => '$2y$10$Jrr5fzT3lObyynzDfUygaOnG5dZeToT4QBruIxBoNKiFHj34Bjf2C'
        ];
    // хэш от паролей 123, 1234, 12345
}


function existsUser($login) {
    $userList = getUsersList();
    if (isset($userList[$login])) {
        return true;
    }
    return false;
}

function checkPassword($login, $password) {
    if (true == existsUser($login)) {
        $users = getUsersList();
        return password_verify($password , $users[$login]);
    }
    return false;
}

function getCurrentUser($login) {
    if (isset($_SESSION['login']) && true == existsUser($login)) {
        return $_SESSION['login'];
    }
    return null;
}
