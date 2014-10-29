<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Convocatorias', 'url'=>array('index')),
	array('label'=>'Gestion de Convocatorias', 'url'=>array('admin')),
);
?>

<h1>Crear Convocatoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>