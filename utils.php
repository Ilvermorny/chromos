<?php

function isavailable($user)
{
    global $db;
    $query = $db->simple_select("chromouseravailable", "*", "uid=$user", array(
        "limit" => 1
    ));
    return $db->num_rows($query);
}

function available($user)
{
    global $db;
    $query = $db->simple_select("chromouseravailable", "*", "uid=$user", array(
        "limit" => 1
    ));
    return $db->fetch_array($query);
}

function randomChromo($type)
{
    global $db;
    $query = $db->simple_select("chromos", "*", "type='$type'", array(
        "order_by" => "RAND()",
        "limit" => 1
    ));
    return $db->fetch_array($query);
}

function getchromo($id)
{
    global $db;
    $query = $db->simple_select("chromos", "*", "id=$id", array(
        "limit" => 1
    ));
    return $db->fetch_array($query);
}

function setChromo($user, $chromo, $available)
{
    global $db;
    $db->insert_query('chromouser', array(
        'idchromo' => $chromo,
        'iduser' => $user
    ));
    $db->delete_query('chromouseravailable', "id=$available", 1);
}

function getChromos($user)
{
    global $db;
    $query = $db->write_query("SELECT *
                                FROM mybb_chromos
                                INNER JOIN mybb_chromouser
                                ON mybb_chromos.id = mybb_chromouser.idchromo
                                WHERE mybb_chromouser.iduser=$user
                                ORDER BY mybb_chromos.id ASC;");
    return $query;
}
