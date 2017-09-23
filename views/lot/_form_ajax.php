<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\TypeChicken;
use app\models\Pigment;
use app\models\TicketReceipt;

      ?>
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><?=$this->title = Yii::t('lot', 'create')?></h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
                <?php $form = ActiveForm::begin(['id' => 'lot-form']);?>
                <?= $form->errorSummary($model); ?>
                <?= $form->field($model, 'id_ticket_receipt')->dropDownList(
                ArrayHelper::map(TicketReceipt::getTicketsR(), 'id', 'code'),['prompt' => '--- Seleccione ---','disabled'=>"disabled",['options'=>['disabled' => 'disabled']]]); ?>

                <?= $form->field($model, 'id_pigment')->dropDownList(
                      ArrayHelper::map(Pigment::find()->asArray()->all(), 'id', 'name'),['prompt' => '--- Seleccione ---']
                ) ?>

                <?= $form->field($model, 'comments')->textarea(['rows' => '6']) ?>

                <?= $form->field($model, 'quantity_chicken')->textInput() ?>

                <!-- <?= $form->field($model, 'counter_1')->textInput() ?>

                <?= $form->field($model, 'counter_2')->textInput() ?>

                <?= $form->field($model, 'total')->textInput() ?> -->

                <?= $form->field($model, 'type_chicken')
                ->dropDownList(
                    ArrayHelper::map(TypeChicken::find()->asArray()->all(), 'id', 'name'),
                    ['prompt' => '--- Seleccione ---']
                ) ?>

                <?= $form->field($model, 'quantity_discard')->textInput() ?>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <?= Html::submitButton($model->isNewRecord ? Yii::t('lot', 'create') : Yii::t('lot', 'update'), ['id'=>'submit','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
    
        <?php ActiveForm::end(); ?>
    </div>
    <script type="text/javascript"> 
    function update()
    {
        $("#modal-ticket").modal("hide");
        window.location.reload();
        //$.pjax.reload({container: '#grid-tickets'});
    }
    $(document).ready(function(){$('#submit').on('click',function() {
          $.ajax({
            url : $("#lot-form").attr('action'),
            type : 'post',
            data : $("#lot-form").serialize(),
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