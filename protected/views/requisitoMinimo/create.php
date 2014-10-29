<?php
/* @var $this RequisitoMinimoController */
/* @var $model RequisitoMinimo */

$this->breadcrumbs=array(
	'Requisito Minimos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RequisitoMinimo', 'url'=>array('index')),
	array('label'=>'Manage RequisitoMinimo', 'url'=>array('admin')),
);
?>

<h1>Create RequisitoMinimo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>