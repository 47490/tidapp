<?php

/**
 * Inställningar för api:et
 * @return stdClass
 */
function settings(): stdClass {
    $retur = new stdClass();

    $retur->dsn = "mysql:host=localhost;dbname=tidsapp";
    $retur->dbUser = "root";
    $retur->dbPassword= "";
    return $retur;
}
