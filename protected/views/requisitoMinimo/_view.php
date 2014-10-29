<?php
/* @var $this RequisitoMinimoController */
/* @var $data RequisitoMinimo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obligatorio')); ?>:</b>
	<?php echo CHtml::encode($data->obligatorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valido_hasta')); ?>:</b>
	<?php echo CHtml::encode($data->valido_hasta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />


</div>