<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/tinymce/tinymce.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/editor.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/file_helper.js', CClientScript::POS_END);

?>

<div class="row">
<div class="span12">
<ul class="nav nav-tabs">
  <li class="active"><a href="#text" data-toggle="tab">Reading</a></li>
  <li><a href="#sobek" data-toggle="tab" id="sobek-tab"><?php echo CHtml::image(Yii::app()->baseUrl .'/img/sobek.png', 'Sobek', array('width'=>'55px'))?></a></li>
  <li><a href="#summary" data-toggle="tab">Writing</a></li>
</ul>

<div class="tabbable tabs-left">
<div class="tab-content">

  <div class="tab-pane active" id="text">
  
	  <textarea class="reading" id="raw-text"></textarea>
		  <div class="row">
	  <div class="span8">
	  	<h4>Insert the text to be summarized here. <span style="font-size: 12px;"><i>You can choose a textfile from your computer.</i></span></h4>
	  </div>
	  <div class="span4"><input class="btn btn-small" type="file" id="file-input"></div>
	  </div>
  </div>
  
  <div class="tab-pane " id="sobek" >
  <object type="application/x-java-applet" height="800" width="100%" >
        <param name="code" value="grafo.WebGraphViewImages" />
        <param name="archive" value="<?php echo Yii::app()->baseUrl?>/applet/AppletUCI.jar" />
        <param name="palavra" id="sobek-text-input" value="qualquer texto texto texto texto qualquer">
        <param name="user" value="" id="username">
        Applet failed to run.  No Java plug-in was found.
  </object>
  
  
  </div>
  <div class="tab-pane" id="summary">
  		<textarea class="editor"></textarea>
  		<h4>Write your summary here</h4>  
  </div>
</div>

</div>
</div>
</div>