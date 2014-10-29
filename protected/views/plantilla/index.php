<?php
/* @var $this PlantillaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plantillas',
);

$this->menu=array(
	array('label'=>'Create Plantilla', 'url'=>array('create')),
	array('label'=>'Manage Plantilla', 'url'=>array('admin')),
);
?>

<h1>Plantillas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
