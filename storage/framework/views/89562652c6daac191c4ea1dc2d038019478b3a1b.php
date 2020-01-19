<?php $__env->startSection('contenido'); ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

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
    <style>
        .btnatras {
            color: red;
        }

    </style>
</head>

<body>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Ingenielectricasoft</h5>
                <form class="needs-validation" novalidate method="POST" action="<?php echo e(route('usuarios.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Documento</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Documento" name="numero_documento" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Nombre</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Nombre" name="nombre_usuario" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Apellido</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Apellido" name="apellido_usuario" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Telefono</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Telefono" name="telefono" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltipUsername">Correo Electronico</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control has-feedback-left"
                                                id="validationTooltipUsername" placeholder="Ingrese Correo"
                                                data-validate-linked="email"
                                                aria-describedby="validationTooltipUsernamePrepend"
                                                name="correo_electronico" required>
                                            <div class="invalid-feedback">
                                                Campo Obligatorio
                                            </div>
                                        </div>
                                        <!--  <input type="email" data-validate-linked="email"
                                        required="required" class="form-control has-feedback-left">
                                        <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>-->
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Contraseña</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Contraseña" name="contrasena" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Estado</label>
                                        <select class="form-control" name="estado" id="estado" required>
                                            <option value="">Seleccione el Estado</option>
                                            <option>Activo</option>
                                            <option>Inactivo</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Rol</label>
                                        <select class="form-control" name="id_rol" id="id_rol" required>
                                            <option value="">Seleccione el Rol</option>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($roles->id_rol); ?>">
                                                <?php echo e($roles->descripcion_rol); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="<?php echo e(route('usuarios.index')); ?>">Volver a la lista</a>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectoingenielectricasoft\resources\views/usuarios/create.blade.php ENDPATH**/ ?>