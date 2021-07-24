<?php

$_config['sql_host'] = 'localhost';
$_config['sql_user'] = '__DB_NAME__';
$_config['sql_pass'] = '__DB_PWD__';
$_config['sql_db'] = '__DB_NAME__';

$_config['sql_prefix'] = '';

$_config['default_accuracy'] = 1000;

// The following function free us from requiring mysqlnd
function get_result($Statement)
{
    $RESULT = array();
    $Statement->store_result();
    for ($i = 0; $i < $Statement->num_rows; $i++) {
        $Metadata = $Statement->result_metadata();
        $PARAMS = array();
        while ($Field = $Metadata->fetch_field()) {
            $PARAMS[] = &$RESULT[ $i ][ $Field->name ];
        }
        call_user_func_array(array( $Statement, 'bind_result' ), $PARAMS);
        $Statement->fetch();
    }
    return $RESULT;
}
