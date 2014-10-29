<?php
/* @var $this ParticipanteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participantes',
);

$this->menu=array(
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'Manage Participante', 'url'=>array('admin')),
);
?>

<h1>Participantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
