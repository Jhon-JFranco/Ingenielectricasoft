<?php $__env->startSection('contenido'); ?>
<!DOCTYPE html>
<html>

<head>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
</head>

<body>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Ingenielectricasoft</h5>
                <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('cargos.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Cargos</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Cargo" name="descripcion_cargo" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="<?php echo e(route('cargos.index')); ?>">Volver a la lista</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectoingenielectricasoft\resources\views/cargos/create.blade.php ENDPATH**/ ?>