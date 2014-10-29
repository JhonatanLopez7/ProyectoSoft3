<?php
/* @var $this SeccionDinamicaController */
/* @var $model SeccionDinamica */

$this->breadcrumbs=array(
	'Seccion Dinamicas'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeccionDinamica', 'url'=>array('index')),
	array('label'=>'Create SeccionDinamica', 'url'=>array('create')),
	array('label'=>'View SeccionDinamica', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage SeccionDinamica', 'url'=>array('admin')),
);
?>

<h1>Update SeccionDinamica <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>