@extends('layouts.master')
@section('content')



    <div id="kt_content_container" class="container-xxl mt-6">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1" style="font-family:NotoKufiArabic">قائمة الأقسام</span>
                    <span class="text-muted mt-1 fw-bold fs-7"></span>
                </h3>

                <div style="font-family:NotoKufiArabic" class="card-toolbar ms-2" data-bs-placement="top" data-bs-trigger="hover">
                    <a href="{{ route('surgerykinds.create') }}" class="btn btn-sm btn-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                    rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->إضافة قسم
                    </a>

                </div>


            </div>


            <!--end::Header-->
            <!--begin::Body-->

            <div class="card-body py-3 " style="font-family:NotoKufiArabic">
             <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-striped table-row-bordered gy-5 gs-7" id="kt_datatable"
                        style="margin-top: 13px !important">
                        <thead>
                            <tr class="fw-bolder  bg-secondary mb-3">
                                <th>#</th>
                                <th>إسم القسم </th>
                                <th> يتبع قسم</th>
                                {{-- <th>تاريخ الميلاد</th> --}}
                                {{-- <th>الهاتف</th> --}}
                                {{-- <th>الجنس</th> --}}
                                {{-- <th>تاريخ أخر زيارة</th> --}}
                                <th>الاجراءات </th>
                            </tr>
                        </thead>


                    </table>

                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->







        {{-- {!! $users->links() !!} --}}
    </div>

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
</div>
    <!--end::Main-->
    <script>
        var hostUrl = "assets/";
    </script>


    <!--begin::Modal-->

    <div class="modal fade" tabindex="-1" id="smallModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">

                    <h5 class="modal-title ">البيانات الأساسية للمريض</h5>
                    <p id="demo"></p>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <img src={{ asset('assets\media\svg\close\close.svg') }}>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row mb-5">
                                    <label class="col-form-label col-lg-4"> القسم الرئيسي </label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="surgery_t">
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group row mb-5">
                                    <label class="col-form-label col-lg-4"> القسم الفرعي</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="surgery_kind_id">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                            <div class="card-footer text-muted">
                            {{ Carbon\Carbon::now(); }}
                            </div>
                          </div>
</
                            </div>

                    </div>
                </div>
            </div>

                            <!--end::Modal-->
                        @endsection

                        @section('styles')
                            <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}"
                                rel="stylesheet" type="text/css" />
                            <link href="{{ asset('assets/plugins/custom/datatables/buttons.dataTables.min.css') }}"
                                rel="stylesheet" type="text/css" />
                            <link rel="stylesheet" type="text/css"
                                href="{{ asset('assets/plugins/custom/iziModal/iziModal.min.css') }}"> <!-- Original -->
                            <link rel="stylesheet" type="text/css"
                                href="{{ asset('assets/plugins/custom/iziModal/izi-modal.min.css') }}">
                            <style>
                                .dt-button-collection .dropdown-menu {
                                    position: relative;
                                }

                                .dir_ltr {
                                    direction: ltr !important;
                                }

                                div.dt-button-collection {
                                    width: 172px !important;
                                }

                                tr {
                                    cursor: pointer;
                                }
                            </style>
                        @endsection

                        @section('scripts')
                        <script>
                            $('#from_date').flatpickr({
                                format : 'dd-mm-yyyy',
                            });

                            $('#to_date').flatpickr({
                                format : 'dd-mm-yyyy',
                            });
                        </script>
                            <script>
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                });
                                var csrf = "{{ csrf_token() }}";
                                var DATA_URL = "{{ route('surgerykind.getSurgerykindData') }}";
                                var SITEURL = '{{ URL::to('') }}';
                                var from_date = -1;
                                var to_date = -1;
                                var filter_1 = -1;
                                var filter_2 = -1;
                                var filter_3 = -1;
                                var filter_4 = -1;

                                //var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
                            </script>

                            <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
                            {{--    <script src="{{ asset('assets/js/pages/features/miscellaneous/sweetalert2.js') }}" type="text/javascript"></script> --}}
                            <script src="{{ asset('assets/js/custom/pages/datatable/users/data-json-surgerykind.js') }}" type="text/javascript">
                            </script>
                            <script src="{{ asset('assets/js/custom/documentation/forms/select2.js') }}"></script>
                            <script src="{{ asset('assets/js/custom/modals/new-target.js') }}"></script>
                            <script src="{{ asset('assets/js/custom/iziModal/iziModal.min.js') }}"></script>

                            <script>
                                // $('#kt_datepicker').datepicker({
                                // 	todayHighlight: true,
                                // 	templates: {
                                // 		leftArrow: '<i class="la la-angle-left"></i>',
                                // 		rightArrow: '<i class="la la-angle-right"></i>',
                                // 	},
                                // 	format : 'dd-mm-yyyy',
                                // });
                            </script>
                            <script>
                                /* When click Add */
                                $('#ajax-modal').iziModal();
                                $('#create_item').click(function() {
                                    $('#ajax-modal').removeClass('d-none');
                                    $('#btn-save').val("create_item");
                                    $('#status_id').removeAttr('disabled');
                                    $('#status_id').css('background-color', '#F5F8FA');
                                    $('#parent_id').select2().val('').trigger("change");
                                    $('#Form_').trigger("reset");
                                    $('#ajax-modal').iziModal('open');
                                    $('#ajax-modal').iziModal('setTitle', "إضافة ثابت جديد");
                                    $('#ajax-modal').iziModal('setIcon', 'fa fa-plus');

                                });

                                function updated_(id) {
                                    $.get(SITEURL + '/users/' + id + '/edit', function(data) {
                                        // $('#name-error').hide();
                                        $('#ajax-modal').removeClass('d-none');
                                        $('#btn-save').val("update_item");
                                        $('#ajax-modal').iziModal('open');
                                        $('#ajax-modal').iziModal('setTitle', "تعديل بيانات الثابت");
                                        $('#ajax-modal').iziModal('setIcon', 'fa fa-edit');
                                        $('#status_id').val(data.status_id);
                                        $('#status_id').attr('disabled', 'disabled');
                                        $('#status_id').css('background-color', '#cacdd0');
                                        $('#status_name').val(data.status_name);
                                        $('#parent_id').select2().val(data.parent_id).trigger("change");
                                        $('#order').val(data.orderby);
                                        $('#description').val(data.description);
                                    })
                                }
                                $(document).ready(function() {
                                    $("#btn-save").click(function(e) {
                                        e.preventDefault();
                                        $('#btn-save').html('جاري الحفظ');
                                        var status_id = $("#status_id").val();
                                        var status_name = $("#status_name").val();
                                        var parent_id = $("#parent_id").val();
                                        var description = $("#description").val();
                                        if ($('#ajax-modal:has(h2.iziModal-header-title:contains("إضافة ثابت جديد"))')) {
                                            var url_ = "{{ route('users.store') }}";
                                            var type_ = "POST";
                                        } else {
                                            var url_ = SITEURL + '/surgerykinds/' + status_id;
                                            var type_ = "PUT";
                                        }
                                        $.ajax({
                                            type: type_,
                                            url: url_,
                                            data: {
                                                status_id: status_id,
                                                status_name: status_name,
                                                parent_id: parent_id,
                                                description: description,
                                                '_token': '{{ csrf_token() }}'
                                            },
                                            //                    dataType: 'json',
                                            success: function(data) {
                                                $('#Form_').trigger("reset");
                                                $('#parent_id').select2().val('').trigger("change");
                                                $('#ajax-modal:has(h2.iziModal-header-title:contains("تعديل بيانات الثابت"))')
                                                    .iziModal('close');
                                                $('#btn-save').html('حفظ');
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "تمت العملية بنجاح!",
                                                    showConfirmButton: false,
                                                    timer: 3000
                                                });
                                                var oTable = $('#kt_datatable').DataTable();
                                                oTable.destroy();
                                                KTDatatablesDataSourceAjaxServer.init();

                                            },
                                            error: function(data) {
                                                $('#btn-save').html('حفظ');
                                                Swal.fire({
                                                    icon: "error",
                                                    title: "خطأ!",
                                                    text: "لم يتم الحفظ",
                                                    showConfirmButton: false,
                                                    timer: 3000
                                                });
                                            }
                                        });
                                    });


                                });
                                // استدعاء المودال
                                $(document).on('click', '#smallButton1', function(event) {

                                    event.preventDefault();
                                    let id = $(this).attr('data-attr');
                                    // console.log(id);
                                    // alert(1);
                                    // alert(id)
                                    $.ajax({
                                        type: "GET",
                                        url: SITEURL +'/surgerykinds/'+id,


                                        // return the result
                                        success: function(result) {

                                         console.log(result);
                                            $('#smallModal').modal("show");
                                           // $('#patient_number').html(result.data.patient_number);
                                            //$('#patient_id').html(result.data.full_name);
                                            $('#surgery_kind_id').html(result.data.name);
                                            $('#name').html(result.data.id);
                                             $('#surgery_t').html(result.data.surgery_kind_id);
                                            // $('#remaining_amount').html(result.data.remaining_amount);
                                            // $('#currency').html(result.data.currency);
                                            // $('#pay_date').html(result.data.pay_date);
                                            // $('#notes').html(result.data.notes);
                                          //  $('#qty_packages').html(result.data.qty_packages);
                                            // $('#notes').html(result.data.notes);
                                            $('#created_at').html(result.data.created_at);
                                            $('#smallBody').html(result).show();
                                        },
                                        error: function(jqXHR, testStatus, error) {
                                            console.log(error);
                                             alert("Page " + href + " cannot open. Error:" + error);

                                        },

                                    })
                                });
                            </script>
                            <script>
                                // $(function() {
                                //     // setTimeout() function will be fired after page is loaded
                                //     // it will wait for 5 sec. and then will fire
                                //     // $("#successMessage").hide() function
                                //     setTimeout(function() {
                                //         $("#successMessage").hide('blind', {}, 500)
                                //     }, 5000);
                                // });

                                setTimeout(function() {
                                    $('.alert-session-flash').fadeOut('low');
                                }, 3000); // <-- time in milliseconds


                                // $('#user_photo').attr("src", 'https://cdn.pixabay.com/photo/2017/01/31/21/23/avatar-2027366__340.png');
                                // $('#user_photo').attr("src", text);


                            </script>
                        @endsection
