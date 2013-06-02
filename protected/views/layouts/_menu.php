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
          
          		<?php /*
          		<ul class="nav pull-right">
          	    <?php if(Yii::app()->user->isGuest): //TODO fazer sistema de login - nao usado por enquanto?>
              		<li class="pull-right"><?php echo CHtml::link('<i class="icon-user"></i>' , array('/site/login', 'returnUrl'=>$this->createUrl($this->route)));?></li>
              	<?php else:?>
              	<li class="dropdown" id="op-menu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-wrench icon-white"></i> <b>Menu</b> <b class="caret"></b></a>
                <?php $this->menu[] = array(
                    		'label'=>'<i class="icon-user"></i> Logout ('.Yii::app()->user->name.')',
                    		'url'=>array('/site/logout')
                    	);  ?>
                    	
				<?php //Adiciona itens adicionais do menu
					if(count($this->menu) > 0){
						$this->widget('zii.widgets.CMenu', array(
							'items'=>$this->menu,
							'encodeLabel'=>false,
							'activeCssClass'=>'active',
							'htmlOptions'=>array('class'=>'dropdown-menu'),
						));				 
					}
				?>
                    	
						
              </li>
              	<?php endif;?>
              	
              </ul>   
                 */?>
                 
              <?php $this->widget('zii.widgets.CMenu', array(
             				'activeCssClass'=>'active',
             				'activateItems'=>true,
             				'activateParents'=>true,
							'encodeLabel'=>false,
							'activeCssClass'=>'active',
							'htmlOptions'=>array('class'=>'nav'),
             				'items'=>array(
             				array('label'=>'<i class="icon-home"></i>', 'url'=>array('/site/index')),
             				array('label'=>'About', 'url'=>array('/about')),
							array('label'=>'Contact', 'url'=>array('/contact')),
             				array('label'=>'Help', 'url'=>array('/help')),
             				
             
             				),
						));?>                
          </div><!--/.nav-collapse -->
</div>
</div>
</div>