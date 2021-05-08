@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1302.4px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Orders</h1>
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
                                <form action="/CustomerMenuPost" method="post">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                           <label class="col-sm-1 col-form-label">Search</label>
                                        <div class="col-sm-3">
                                            <input type="search" name="searchBar" class="form form-control" placeholder="Search ID">
                                        </div>
                                            <button type="submit" class="btn btn-primary mr-4">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                    <label></label>
                                </form>
                                @if($order!=null)
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                    aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Order ID">
                                                Order ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">Customer Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Contact No.">
                                                Contact No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">
                                                Event Type
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">
                                                Event State
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Bill</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="sorting_1" tabindex="0">{{$order->id}}</td>
                                            <td>{{$order->CustomerName}}</td>
                                            <td>{{$order->ContactNo}}</td>
                                            <td>{{$order->EventType}}</td>
                                            <td>{{$order->EventState}}</td>
                                            <td>{{$order->Bill}}</td>
                                        </tr>

                                    </tbody>

                                </table>
                                <label></label>
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                                    aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Order ID">Order ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">Item Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Quantity">
                                                Quantity</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">
                                                Order ID
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Customer Name">
                                                Price Per Unit
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">Total</th>

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
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                                @else
                                <p>Nothing to show</p>
                                @endif
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
