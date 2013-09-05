<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/tinymce/tinymce.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/sobek_editor.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl .'/js/file_helper.js', CClientScript::POS_END);
//Yii::app()->clientScript->registerCssFile('url');



?>

<h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>
<p><?php echo $email?></p>

<ul class="nav nav-tabs">
  <li><a href="#text" data-toggle="tab">Text</a></li>
  <li class="active"><a href="#sobek" data-toggle="tab" id="sobek-tab"><?php echo CHtml::image(Yii::app()->baseUrl .'/img/sobek.png', 'Sobek', array('width'=>'55px'))?></a></li>
  <li><a href="#summary" data-toggle="tab">Summary</a></li>
</ul>


<div class="tab-content">
  <div class="tab-pane" id="text">
  <h4>Text Editor</h4>
	  <textarea class="editor" id="raw-text"></textarea>
	  <input type="file" id="file-input">
  </div>
  <div class="tab-pane active" id="sobek">
  <object type="application/x-java-applet" height="800" width="600" >
        <param name="code" value="grafo.WebGraphViewImages" />
        <param name="archive" value="<?php echo Yii::app()->baseUrl?>/applet/AppletUCI.jar" />
        <param name="palavra" id="sobek-text-input" value="qualquer texto texto texto texto qualquer">
        Applet failed to run.  No Java plug-in was found.
  </object>
  
  
<?php /*
<applet code="gui/Web" archive="AppletSobek.jar" width=600 height=500>
<param name="palavra" value="qualquer texto">
Sobek - Your browser doesn't support applets! Try another one.
</applet>
*/?>
  </div>
  <div class="tab-pane" id="summary">
  		<h4>Summary Editor</h4>
  		<textarea class="editor"></textarea>  
  </div>
</div>