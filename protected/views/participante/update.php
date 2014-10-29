<?php
/* @var $this ParticipanteController */
/* @var $model Participante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participante', 'url'=>array('index')),
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'View Participante', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Participante', 'url'=>array('admin')),
);
?>

<h1>Update Participante <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>