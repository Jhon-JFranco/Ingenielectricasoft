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
                        <i class="pe-7s-bell icon-gradient bg-arielle-smile"> </i>
                    </div>
                    <div>PEDIDOS
                        <div class="page-title-subheading">Sistema de Administración de Ingenielectricas SAS
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="pedidos/create"> <button type="button" data-toggle="tooltip" title="Registrar"
                            data-placement="bottom" class="btn-shadow mr-3 btn btn-primary">
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
                <table class="table table-hover table-sm table-bordered" id="tblpedidos">
                    <thead>
                        <thead>
                            <tr>
                                <th>Fecha Elaboración</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                                <th>Monto Total</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ped): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($ped->fecha_elaboracion); ?></td>
                            <td><?php echo e($ped->fecha_inicio); ?></td>
                            <td><?php echo e($ped->fecha_final); ?></td>
                            <td><?php echo e($ped->monto_total); ?></td>
                            <td><a href="<?php echo e(URL::action('PedidosController@edit',$ped->id_pedido)); ?>"><button
                                class="btn btn-primary btn-sm"  data-toggle="tooltip" title="Editar"><i class="fas fa-edit fa-lg"></i></button>
                                </a>
                                <a href="#" data-target="#modal-delete-<?php echo e($ped->id_pedido); ?>" data-toggle="modal"><button
                                class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar"><i class="fas fa-trash fa-lg"></i></button>
                                </a>
                            </td>
                        </tr>
                        <?php echo $__env->make('pedidos.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <script>
                        $(document).ready(function () {
                            $('#tblpedidos').DataTable({
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
            <?php echo e($pedidos->links()); ?>

        </div>
    </div>
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectoingenielectricasoft\resources\views/pedidos/list.blade.php ENDPATH**/ ?>