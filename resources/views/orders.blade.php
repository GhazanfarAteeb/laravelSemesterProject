@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1302.4px;">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="container">
                            <div class="col-sm-12">
                                <form action="" method="">
                                    <div class="container">
                                        <div class="row">
                                        <label class="col-sm-1 col-form-label">Search</label>
                                            <div class="col-sm-3">
                                                <input type="search" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary" class="col-sm-2">
                                            Search
                                            </button>
                                        </div>
                                    </div>
                                    <label></label>
                                </form>
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                    aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Browser: activate to sort column ascending">Browser</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.7</td>
                                            <td>A</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td>1.8</td>
                                            <td>A</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                                    entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#"
                                                aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                                data-dt-idx="1" tabindex="0" class="page-link">1</a></li>

                                        <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6"
                                                tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                                aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>

<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/dataTables/dataTables.buttons.min.js"></script>
<script src="/assets/vendor/dataTables/dataTables.bootstrap4.min.js"></script>
<script src="/assets/vendor/dataTables/buttons.bootstrap4.min.js"></script>
<script src="/assets/vendor/dataTables/jquery.datatables.min.js"></script>
<script src="/assets/vendor/html5-buttons/buttons.colVis.min.js"></script>
<script src="/assets/vendor/html5-buttons/buttons.html5.min.js"></script>
<script src="/assets/vendor/html5-buttons/buttons.print.min.js"></script>
<script src="/assets/vendor/jszip/jszip.min.js"></script>
<script src="/assets/vendor/pdfmake/pdfmake.min.js"></script>
<script src="/assets/vendor/pdfmake/pdfmake.min.js"></script>
<script src="/assets/vendor/pdfmake/vfs_fonts.js"></script>
<script>
    $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
</script>
@endsection
