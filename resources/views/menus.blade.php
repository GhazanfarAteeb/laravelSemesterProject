@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1302.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
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
                                                <input type="search" class="form form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-4">
                                            Search
                                            </button>

                                            <button type="submit" class="btn btn-primary">
                                                Add Menu
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
                                                aria-label="Order ID">Order ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">Item Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Quantity">Quantity</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Customer Name">
                                                    Order ID
                                                </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Customer Name">
                                                        Price Per Unit
                                                    </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td class="dtr-control sorting_1" tabindex="0">{{$menu->id}}</td>
                                                <td>{{$menu->ItemName}}</td>
                                                <td>{{$menu->quantity}}</td>
                                                <td>{{$menu->OrderID}}</td>
                                                <td>{{$menu->unitPrice}}</td>
                                                <td>{{$menu->unitPrice * $menu->quantity}}</td>
                                                <td class="text-center">
                                                    <button type="submit" class="btn btn-primary mr-2">
                                                        <a href="updateMenu/{{$menu->id}}" class="text-white">
                                                            Update
                                                        </a>
                                                    </button>

                                                    <button type="submit" class="btn btn-danger">
                                                        <a href="deleteMenu/{{$menu->id}}" class="text-white">
                                                            Delete
                                                        </a>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing results from {{(($menus->currentPage()-1)*10)+1}} to {{($menus->currentPage()-1)*10+$menus->count()}} </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous" id="example2_previous"><a href="{{$menus->previousPageUrl()}}"
                                                aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        @for ($i=1;$i<=$menus->lastPage();$i++)
                                            <li class="paginate_button page-item"><a href="{{$menus->url($i)}}" aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                    class="page-link">{{$i}}</a></li>
                                        @endfor

                                        <li class="paginate_button page-item next" id="example2_next"><a href="{{$menus->nextPageUrl()}}"
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
