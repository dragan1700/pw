<?php
header("Content-Type: text/html; charset=utf-8");

function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds') {
    $sets = array();
    if (strpos($available_sets, 'l') !== false)
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    if (strpos($available_sets, 'u') !== false)
        $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
    if (strpos($available_sets, 'd') !== false)
        $sets[] = '23456789';
    if (strpos($available_sets, 's') !== false)
        $sets[] = '!@#.:$%&*?';

    $all      = '';
    $password = '';
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
        $all .= $set;
    }

    $all = str_split($all);
    for ($i = 0; $i < $length - count($sets); $i++)
        $password .= $all[array_rand($all)];

    $password = str_shuffle($password);

    if (!$add_dashes)
        return $password;

    $dash_len = floor(sqrt($length));
    $dash_str = '';
    while (strlen($password) > $dash_len) {
        $dash_str .= substr($password, 0, $dash_len) . '-';
        $password = substr($password, $dash_len);
    }
    $dash_str .= $password;
    return $dash_str;
}

$newUsers[] = array('Hans Muster', 'Hans', 'Muster', 'hmu', 'hans.muster@acme.com');
$newUsers[] = array('Joe Doe', 'Joe', 'Doe', 'jdo', 'joe.doe@acme.com');
$newUsers[] = array('Franz Kafka', 'Franz', 'Kafka', 'fka', 'franz.kafka@acme.com');

$output = '<table>';

foreach ($newUsers as $us) {
    $u                 = $users->add($us[3]);
    $u->setOutputFormatting(false);
    $u->name           = $us[3];
    $u->admin_theme    = 'AdminThemeUikit';
    $u->title          = $us[0];
    $u->user_firstname = $us[1];
    $u->user_lastname  = $us[2];
    $u->user_short     = $us[3];
    $u->user_email     = $us[4];
    $u->email          = $us[4];

    $pass = generateStrongPassword();
    $u->pass = $pass;

    $u->addRole("intern");
    $u->addRole("login-register");
    $u->save();

    $output .= "<tr><td>{$us[0]}</td><td>{$us[1]}</td><td>{$us[2]}</td><td>{$us[3]}</td><td>{$us[4]}</td><td>$pass</td></tr>";
}

$output .= "</table>";
echo $output;
