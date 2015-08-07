<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="col-xs-0 col-sm-0 col-md-3 personaje">
	<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/player.png">-->
</div>
<div class="col-xs-12 col-sm-12 col-md-6">
	<div class="panel panel-default panel-transparent">
		<div class="panel-heading">Equipo</div>
		<div class="panel-body ">
			<?php echo CHtml::submitButton('Crear Equipo', array('class' => 'btn btn-sm btn-default btn-rojo')); ?>
		</div>
	<div class="col-xs-0 col-sm-0 col-md-3"></div>



	     <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	    <script type="text/javascript">
    $(document).ready(function(){
         $(".container-index").mCustomScrollbar({
		     theme:"red"
		});
    });
    </script>