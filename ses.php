<?php



function getUsersList()
{
    require __DIR__ . '/userbase.php';
    foreach ($users as $login => $pass){
        $userlist[] = $login;
    }
    return $userlist;
}

function  existsUser($login):bool
{

    return in_array($login, getUsersList());

}

function сheckPassword($login, $password)
{
    require __DIR__ . '/userbase.php';
    if (existsUser($login)){
        if (password_verify($password,$users[$login])){
            return true;
        }else{
            return false;
        }
    } else {
        return false;
    }


}

