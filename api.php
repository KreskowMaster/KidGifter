<?php

include 'Model.class.php';
include 'Controler.class.php';
include 'config.php';
$list = $_POST['data'];
$new_list = array();
foreach ($list as $gift) {
    array_push($new_list, array(
        "name" => $gift['formtitle'],
        "desc" => $gift['formdesc'],
        "img_url" => $gift['formimg']
    ));
}
$model = new Model(DBHOST, DBPORT, DBUSERNAME, DBPASSWORD, DBNAME);
$list_id = $model->saveList($new_list);
echo(json_encode(array("list_id" => $list_id)));
