

<?php /* @var $this Controller */
?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">
        <meta name="viewport" content="width=device.width, initial-scale=1.0,maximu-scale=1.0,user-scalable=no"/>
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/full.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body class="full">
        <div class="container-fluid" id="page">

            <div class="row">

                <div id="mainmenu">
                    <?php
                    if (!Yii::app()->user->isGuest) {
                        $this->widget('bootstrap.widgets.TbNavbar', array(
                            'brandLabel' => "<image src=" . "'" . Yii::app()->request->baseUrl . "/images/logo.png" . "'",
                            'brandOptions'=>array('class'=>'brand-cotejos'),
                            'display' => false, // default is static to top
                            'items' => array(
                                array(
                                    'class' => 'bootstrap.widgets.TbNav',
                                    'items' => array(
                                        array('label' => 'Home', 'url' => Yii::app()->createUrl('site/index'), /*'active' => true*/),
                                        array('label' => 'Canchas', 'url' => '#'),
                                        array('label' => 'Torneos', 'url' => '#'),
                                        array('label' => 'Quienes somos', 'url' => Yii::app()->createUrl('site/about')),
                                        array('label' => 'Salir', 'url' => Yii::app()->createUrl('site/logout')),
                                    ),
                                    'htmlOptions' => array('class' => 'menu-cotejos'),
                                ),
                                
                            ),
                            'htmlOptions' => array('class' => 'navbar navbar-inverse'),
                        ));
                    }
                    ?>

                    <?php
                    /*
                      $this->widget('zii.widgets.CMenu',array(
                      'items'=>array(
                      array('label'=>'Home', 'url'=>array('/site/index')),
                      array('label'=>'About', 'url'=>array('/site/About' )),
                      array('label'=>'Contact', 'url'=>array('/site/contact')),
                      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      ),
                      ));
                     */
                    ?>
                </div><!-- mainmenu -->

                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    /*
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                     * */
                     
                    ?><!-- breadcrumbs -->
                <?php endif ?>
            </div>

            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-8"><?php echo $content; ?></div>
                <div class="col-xs-0 col-sm-0 col-md-2"></div>

                <div class="clear">
                </div>
            </div>

            <div class="row">
                <div class="col-xs-0 col-sm-0 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div id="footer">
                        Copyright &copy; <?php echo date('Y'); ?> Cotejos.com<br/>
                        Todos los derechos reservados.<br/>
                        <?php //echo Yii::powered(); ?>
                    </div><!-- footer -->
                </div>
                <div class="col-xs-0 col-sm-0 col-md-2"></div>
            </div>



        </div><!-- page -->

    </body>
</html>
