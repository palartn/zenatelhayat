@extends('layouts.master')
@section('content')
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>
        <div class="container my-4">
            <div class="row">
                <h2 class="fs-3 text-center my-3">البحث بالتاريخ</h2>
                <div class="my-2">
                    <form action="{{ route('expenses_date'); }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="date" class="form-control border border-primary border form-control-solid ps-12 flatpickr-input active" name="start_date"  placeholder="من تاريخ">
                            <input type="date" class="form-control border border-primary form-control-solid ps-12 flatpickr-input active " name="end_date"   placeholder="إلى تاريخ">

                            <button class="btn btn-primary" type="submit">استعلام</button>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200 ">

                            <th scope="col">#</th>
                            <th scope="col">الإســـم</th>
                            <th scope="col">المبلغ</th>
                            <th scope="col">التاريخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $data)
                        <tr class="fw-bold fs-4 text-gray-800">
                            <th scope="row">{{ ++$key }}</th>
                            <td >{{ $data->paied_for }}</td>
                            <td>{{ $data->amount }}</td>
                            <td>{{ $data->pay_date }}</td>
                        </tr>
                        @endforeach
                        <tr class="fw-bold fs-3 text-gray-800 table-light">
                        <td colspan="3">مجموع المصروفات</td>
                        <td class="text-danger" >{{ $sum_expense }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script>

            $(".flatpickr-input").flatpickr({

            });

            </script>
            <script>
                tinymce.init({
                    selector: '#kt_docs_tinymce_basic'
                });
                </script>
@endsection
