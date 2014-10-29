<?php
/* @var $this SeccionDinamicaController */
/* @var $model SeccionDinamica */

$this->breadcrumbs=array(
	'Seccion Dinamicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeccionDinamica', 'url'=>array('index')),
	array('label'=>'Manage SeccionDinamica', 'url'=>array('admin')),
);
?>

<h1>Create SeccionDinamica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>