@extends('layouts.admin')
@section('contenido')
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
                <form class="needs-validation" novalidate method="POST" action="{{route('implementos.store')}}">
                 @csrf
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Empleado</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Cargo" name="id_empleado" required>
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
                                        <label for="validationTooltip05">Fecha Entrega</label>
                                        <fieldset>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="">
                                                        <input type="date" class="form-control has-feedback-left"
                                                            id="single_cal3" placeholder="Fecha"
                                                            aria-describedby="inputSuccess2Status3"
                                                            id="validationTooltip05" name="fecha_entrega" required>
                                                        <div class="invalid-feedback">
                                                            Campo Obligatorio
                                                        </div>
                                                        <span class="fa fa-calendar-o form-control-feedback left"
                                                            aria-hidden="true"></span>
                                                        <span id="inputSuccess2Status3" class="sr-only"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="{{route('implementos.index')}}">Volver a la lista</a>
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
@stop
