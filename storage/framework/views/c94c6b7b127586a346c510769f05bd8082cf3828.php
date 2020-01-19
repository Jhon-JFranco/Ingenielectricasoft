<?php $__env->startSection('contenido'); ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/datatables.min.js">
    </script>
     <div class="app-main__inner col">
        <div class="app-page-title">
            <div class="page-title-wrapper ">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-arielle-smile"> </i>
                    </div>
                    <div>CARGOS
                        <div class="page-title-subheading">Sistema de Administración de Ingenielectricas SAS
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                <a href="cargos/create"> <button type="button" data-toggle="tooltip" title="Registrar" data-placement="bottom"
                        class="btn-shadow mr-3 btn btn-primary">
                        NUEVO <i class="fa fa-plus-circle"></i>
                    </button></a>
                </div>
            </div>
        </div>
    </div>
</head>

<body>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table class="table table-hover table-sm table-bordered" id="tblcargos">
                    <thead>

                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($car->descripcion_cargo); ?></td>
                            <td>
                                <a href="<?php echo e(URL::action('CargosController@edit',$car->id_cargo)); ?>"><button
                                class="btn btn-primary btn-sm"  data-toggle="tooltip" title="Editar"><i class="fas fa-edit fa-lg"></i></button>
                                </a>
                                <a href="#" data-target="#modal-delete-<?php echo e($car->id_cargo); ?>" data-toggle="modal"><button
                                class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar"><i class="fas fa-trash fa-lg"></i></button>
                                </a>
                            </td>
                        </tr>
                        <?php echo $__env->make('cargos.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <script>
                        $(document).ready(function () {
                            $('#tblcargos').DataTable({
                                "language": {
                                    "lengthMenu": "_MENU_ Registros por pagina",
                                    "zeroRecords": "Sin Resultados",
                                    "search": "Buscar:",
                                    "info": "Listado _PAGE_ de _PAGES_ Paginas",
                                    "infoEmpty": "Sin Resultados",
                                    "infoFiltered": "(Busqueda de un total _MAX_ registros)",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                }
                            });
                        });

                    </script>
                </table>
            </div>
            <?php echo e($cargos->links()); ?>

        </div>
    </div>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectoingenielectricasoft\resources\views/cargos/list.blade.php ENDPATH**/ ?>