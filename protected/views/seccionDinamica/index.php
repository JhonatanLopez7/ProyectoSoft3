<?php
/* @var $this SeccionDinamicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seccion Dinamicas',
);

$this->menu=array(
	array('label'=>'Create SeccionDinamica', 'url'=>array('create')),
	array('label'=>'Manage SeccionDinamica', 'url'=>array('admin')),
);
?>

<h1>Seccion Dinamicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
