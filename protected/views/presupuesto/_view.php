<?php
/* @var $this PresupuestoController */
/* @var $data Presupuesto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codigo), array('view', 'id'=>$data->codigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_porcentaje_financiero')); ?>:</b>
	<?php echo CHtml::encode($data->max_porcentaje_financiero); ?>
	<br />


</div>