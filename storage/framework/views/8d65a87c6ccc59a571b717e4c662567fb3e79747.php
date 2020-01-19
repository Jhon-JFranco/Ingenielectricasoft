<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-<?php echo e($imp->id_implemento); ?>" data-backdrop="false">
    <?php echo e(Form::Open(array('action'=>array('ImplementosController@destroy',$imp->id_implemento),'method'=>'delete'))); ?>

    <br>
    <br>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Implemento</h4>
            </div>
            <div class="modal-body">
                <p>Está seguro que desea eliminar el registro?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary"
                    data-dismiss="modal">Cerrar</button>
                <button type="submit"
                    class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">Confirmar</button>
            </div>
        </div>
    </div>
    <?php echo e(Form::Close()); ?>


</div>
<?php /**PATH C:\laragon\www\proyectoingenielectricasoft\resources\views/implementos/modal.blade.php ENDPATH**/ ?>