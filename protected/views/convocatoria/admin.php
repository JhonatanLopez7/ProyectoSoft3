<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	'Gestion',
);

$this->menu=array(
	array('label'=>'Lista de Convocatorias', 'url'=>array('index')),
	array('label'=>'Crear Convocatoria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#convocatoria-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion de Convocatorias</h1>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'convocatoria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'codigo',
		'nombre',
		'objetivo',
		'tipo',
		'estilo',
		'fecha_creacion',
		/*
		'fecha_ultima_modificacion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
