<?php
/* @var $this RequisitoMinimoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Requisito Minimos',
);

$this->menu=array(
	array('label'=>'Create RequisitoMinimo', 'url'=>array('create')),
	array('label'=>'Manage RequisitoMinimo', 'url'=>array('admin')),
);
?>

<h1>Requisito Minimos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
