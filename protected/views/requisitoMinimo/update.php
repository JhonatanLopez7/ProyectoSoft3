<?php
/* @var $this RequisitoMinimoController */
/* @var $model RequisitoMinimo */

$this->breadcrumbs=array(
	'Requisito Minimos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List RequisitoMinimo', 'url'=>array('index')),
	array('label'=>'Create RequisitoMinimo', 'url'=>array('create')),
	array('label'=>'View RequisitoMinimo', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage RequisitoMinimo', 'url'=>array('admin')),
);
?>

<h1>Update RequisitoMinimo <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>