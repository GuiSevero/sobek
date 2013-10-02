<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<h2>
THE ACTIVITY
</h2>
<p>
To start a summary writing activity, please log into the system by simply entering your email. 
</p>

<p>
After that, you will see a text editing window in which you can import (or copy/paste) the text to be summarized. A particular tool is available here to allow you to see a visual representation of relevant terms and relationships in the text. To activate this tool, just switch tabs by selecting the one with the following icon: 
</p>
<?php echo CHtml::image(Yii::app()->baseUrl .'/img/sobek.png')?>
<p>To write your summary, you can select the last tab which has the label Summary.</p>
<p>
You are ready to go! When logging into the system, a new tab will be open for you to to access the Sobek Text Editor. But you can always come back to this page by switching tabs in your web browser. 
</p>


<form class="form-inline well" method="POST" action="<?php echo $this->createUrl('/site/autoeditor')?>">
	<h3>Get Started</h3>
	<div class="input-prepend">
      <span class="add-on"><i class="icon-envelope"></i></span>
      <?php echo CHtml::tag('input',array('name'=>'email', 'id'=>'email', 'type'=>'email','placeholder'=>'Type your email adress', 'required'=>true))?>
    </div>
	<?php echo CHtml::submitButton('Send', array('class'=>'btn btn-primary'))?>
</form>