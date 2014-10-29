<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List PalabrasClave', 'url'=>array('index')),
	array('label'=>'Create PalabrasClave', 'url'=>array('create')),
	array('label'=>'View PalabrasClave', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage PalabrasClave', 'url'=>array('admin')),
);
?>

<h1>Update PalabrasClave <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>