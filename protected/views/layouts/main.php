
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $baseUrl = Yii::app()->request->baseUrl;?>

    <!-- Le styles -->   
    <link href="<?php echo $baseUrl; ?>/css/bootstrap.css" rel="stylesheet">    
    <?php /*<link href="<?php echo $baseUrl; ?>/css/main.css" rel="stylesheet"> */?>

	<!--  User Styles -->
	<link href="<?php echo Yii::app()->request->baseUrl;?>/css/main.less" rel="stylesheet/less">
	
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  </head>

  <body>

    <div class="menu">
        <?php $this->renderPartial('/layouts/_menu'); ?>
    </div>

    <div class="container">
      <?php echo $content ?>
    </div>

      <hr>

      <footer>
        <p>&copy; UNIVERSIDADE FEDERAL DO RIO GRANDE DO SUL - 2013</p>
      </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <script src="<?php echo $baseUrl;?>/js/bootstrap.min.js"></script>
	  <script src="<?php echo $baseUrl;?>/js/less.js"></script>

  </body>
</html>
