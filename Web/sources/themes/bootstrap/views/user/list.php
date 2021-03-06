<?php
/* @var $this RoutersController */

$this->breadcrumbs=array(
	'Management','Edit Users'
);
?>
<h1><?php //echo $this->id . '/' . $this->action->id; ?></h1>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
        'type'            => 'striped bordered condensed',
        'id'              => 'routers-grid',
        'dataProvider'    => $model->search(),
        'filter'          => $model,
        'enablePagination'=>true,
        'template'=>"{items}{pager}",
        'columns'         => array(
        array('name'=>'username', 'header'=>'Login'),
        array('name'=>'fname', 'header'=>'Firstname'),
        array('name'=>'lname', 'header'=>'Lastname'),
        array('name'=>'company', 'header'=>'Company'),
            array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
             'template'=>'{update}{delete}',
                        'buttons'=>array(       
                                'update' => array(
//                                  'url'=>'Yii::app()->controller->createUrl("ports/update", array("id"=>$data[id]))',
                                ),
                                'delete' => array(
//                                  'url'=>'Yii::app()->controller->createUrl("ports/delete", array("id"=>$data[id],"command"=>"delete"))',
                                ),
                            ),
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
        ),
        
    ));
?>