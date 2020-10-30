{{-- Le indicamos el titulo --}}
@section('title', 'Colores')


    <div class="content">
        <div class="row">
            <div class="col-md-6">
                @if ($accion == 1)
                    @include('livewire.color.agregar')
                @elseif ($accion == 2)
                    @include('livewire.color.editar')
                @endif
            </div>
            <div class="col-md-6">
                @include('livewire.color.tabla')
            </div>
        </div>
    </div>


    <div class="card card-warning card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Toastr Examples
            </h3>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-success toastrDefaultSuccess">
                Toast de exito
            </button>
            <button type="button" class="btn btn-info toastrDefaultInfo">
                Launch Info Toast
            </button>
            <button type="button" class="btn btn-danger toastrDefaultError">
                Launch Error Toast
            </button>
            <button type="button" class="btn btn-warning toastrDefaultWarning">
                Launch Warning Toast
            </button>
            <div class="text-muted mt-3">
                For more examples look at <a
                    href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
            </div>
        </div>
        <!-- /.card -->
    </div>

@section('js')
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Guardado con exito')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });

        });

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borralo!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })

    </script>
    </body>

    </html>

@stop
