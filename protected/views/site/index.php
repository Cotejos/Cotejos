<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="col-xs-0 col-sm-0 col-md-3 personaje">
	<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/player.png">-->
</div>
<div class="col-xs-12 col-sm-12 col-md-6">
	<div class="panel panel-default panel-transparent">
		<div class="panel-heading">Hola Juan Carvajal</div>
		<div class="panel-body ">
			<div class="col-xs-12 col-sm-12 col-md-6 ">	
				<div class="panel panel-default ">
					<div class="panel-heading panel-heading-info ">Próximos Cotejos<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/separator.png"></div>
					<div class="panel-body panel-body-info">
							<div class="container-index">
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
								<div class="next-matches">Maracana</div>
							</div>

					</div>
					<div class="panel-footer panel-footer-info"><?php echo CHtml::submitButton('Crear Cotejo', array('class' => 'btn btn-sm btn-default btn-rojo')); ?></div>
				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-info">Mis Equipos<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/separator.png"></div>
					<div class="panel-body panel-body-info">
					Nombre: Juan Esteban Carvajal
					Nombre: Juan Esteban Carvajal
					Nombre: Juan Esteban Carvajal
					Nombre: Juan Esteban Carvajal
					</div>

					<div class="panel-footer panel-footer-info"><?php echo CHtml::submitButton('Crear Equipo', array('class' => 'btn btn-sm btn-default btn-rojo')); ?></div>
				</div>
		</div>
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
