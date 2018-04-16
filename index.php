<?php
require_once('gojohnny.php');
require_once('classes/dbnew.php');
$page = TPage('go!Johnny PHP Class Library');
$query = new TDBQuery(new TDB2());

//$query->insert->table = 'config';
//$query->insert->values['key'] = 'title';
//$query->insert->values['val'] = 'Testing the New TDB Class';
//$query->insert->execute();
//print_r($query);
//$query->insert('config', array('key' => 'lastuse', 'val' => date('Y-m-d H:i:s')));

//$query->select->table = 'config';
//$query->select->where['key'] = 'title';
//$query->select->where['val'] = array('LIKE', 'TDB');
//$query->select->what = array('key', 'val');
//$query->select->order = 'id';
//$rows = $query->select->execute();
//$rows = $query->select('config', '*', 'id = 7');
//print_r($rows);
//$query->update->table = 'config';
//$query->update->where['key'] = 'lastuse';
//$query->update->values['val'] = date('Y-m-d H:i:s');
//$query->update->execute();
//$query->update('config', array('val'=> date('Y-m-d H:i:s')), "key = 'lastuse'");
//print_r($t);
$row = $query->selectrow('config', '*', 'id = 8');
print_r($row);

//$page->render();

//TSlideShow('Slideshow Test', array('This is the first slide', 'This is the 2nd slide', 'This is the 3rd slide'))->render();
?>