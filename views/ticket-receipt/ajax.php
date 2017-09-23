<?php

use yii\helpers\Html;


use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Provider;
use app\models\Truck;
use app\models\Driver;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */
/* @var $form yii\widgets\ActiveForm */


/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = Yii::t('ticket-receipt', 'create');?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><h1><?= Html::encode($this->title) ?></h1></h4>
      </div>
      <div class="modal-body">
        

		<div class="ticket-receipt-form">

		    <?php $form = ActiveForm::begin(['id' => 'ticket-receipt-form']); ?>

		    <?= $form->errorSummary($model); ?>

		    <?= $form->field($model, 'id_provider')->dropDownList(ArrayHelper::map(Provider::getProviders(),'id','name'),['prompt'=>'--Seleccione--']) ?>

		    <?= $form->field($model, 'id_truck')->dropDownList(ArrayHelper::map(Truck::getTrucks(),'id','licence_plate'),['prompt'=>'--Seleccione--']) ?>

		    <?= $form->field($model, 'id_driver')->dropDownList(ArrayHelper::map(Driver::getDrivers(),'id','NameComplete'),['prompt'=>'--Seleccione--']) ?>

		    <?= $form->field($model, 'quantity_chicken')->textInput() ?>

		    <?= $form->field($model, 'gross_weight')->textInput() ?>

		    <?= $form->field($model, 'tare_weight')->textInput() ?>

		    <?= $form->field($model, 'net_weight')->textInput() ?>

		    <?= $form->field($model, 'quantity_cage')->textInput() ?>


		</div>
      </div>
      <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ticket-receipt', 'create') : Yii::t('ticket-receipt', 'update'), 
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id'=>'submit']) ?>
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div><!-- /.modal-content -->
<?php ActiveForm::end(); ?>
<script type="text/javascript"> 
    function update()
    {
    	$("#modal-ticket").modal("hide");
    	$.pjax.reload({container: '#grid-tickets'});
    }
    $(document).ready(function(){$('#submit').on('click',function() {
          $.ajax({
            url : $("#ticket-receipt-form").attr('action'),
            type : 'post',
            data : $("#ticket-receipt-form").serialize(),
            success : function(data){
                if(data.success==true)
                {
                    div='<div class="alert alert-success" role="alert"><b>'+data.data+'</b></div>';
                    $("div.modal-content").html(div);
                    setTimeout('update()',1500);
                }
                else{
                    $("div.modal-content").html(data);
                }   
            }    
        });
      });
    });
</script>