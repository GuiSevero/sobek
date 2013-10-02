<div class="navbar">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="hidden-desktop">
            <?php //echo CHtml::link('Revista Perspectiva', array('/site/index'), array('class'=>'brand'));?>
          </div>
          <div class="nav-collapse collapse">
              <?php $this->widget('zii.widgets.CMenu', array(
             				'activeCssClass'=>'active',
             				'activateItems'=>true,
             				'activateParents'=>true,
							'encodeLabel'=>false,
							'activeCssClass'=>'active',
							'htmlOptions'=>array('class'=>'nav'),
             				'items'=>array(
             				//array('label'=>'<i class="icon-home"></i>', 'url'=>array('/site/index')),
             				//array('label'=>'<i class="icon-home"></i>Editor', 'url'=>array('/site/editor')),
							//array('label'=>'Contact', 'url'=>array('/contact')),
             				//array('label'=>'Help', 'url'=>array('/help')),
             				
             
             				),
						));?>                
          </div><!--/.nav-collapse -->
</div>
</div>
</div>