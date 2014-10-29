<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PalabrasClave', 'url'=>array('index')),
	array('label'=>'Manage PalabrasClave', 'url'=>array('admin')),
);
?>

<h1>Create PalabrasClave</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>