@extends('layouts.master')
@section('content')

<div id="kt_content_container" class="container-xxl mt-6">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1" style="font-family:NotoKufiArabic">قائمة المستخدمين</span>
                <span class="text-muted mt-1 fw-bold fs-7">إجمالي عدد المرضى({{ App\Models\Patient::count() }})</span>
            </h3>
            <div class="d-flex flex-stack mb-5">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                </div>
                <!--end::Search-->
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                    <div class="accordion m-auto" id="kt_accordion_1">
                        <div class="accordion-item border-0">
                    <!--begin::Filter-->
                    <button type="button" id="kt_accordion_1_header_1" class="btn btn-sm btn-light-primary" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                                        </svg>
                                                    </span>
                        <!--end::Svg Icon-->بحث متقدم</button>
                    <!--begin::Menu 1-->
                        </div>
                        </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->
                    <div style="font-family:NotoKufiArabic" class="card-toolbar ms-2" data-bs-placement="top" data-bs-trigger="hover">
                        <a href="{{ route('appointment.createnewappointment') }}" class="btn btn-sm btn-primary">
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
                            <!--end::Svg Icon-->إضافة زيارة
                        </a>

                    </div>

                    <!--end::Add customer-->

                </div>
                <!--end::Toolbar-->
                <!--begin::Group actions-->

            </div>

        </div>
                    <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                        <div class="accordion-body">
                            <div class="card-body pt-0">
                                <form class="kt-form kt-form--fit mb-0">


                                    <div class="row mb-0 search_input">
                                        <div class="col-lg-2 mb-6">
                                            <label>رقم المريض:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text" style="padding:1.1rem;border-radius: 0px 5px 5px 0px"><i class="fa fa-id-card" ></i></span></div>

                                                <input type="text" class="form-control datatable-input" name="filter_1" id="filter_1" placeholder="رقم المريض" data-col-index="5"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-6">
                                            <label>اسم المريض :</label>
                                            <input type="text" class="form-control datatable-input" name="filter_2" id="filter_2" placeholder="اسم المريض" data-col-index="5"/>

                                        </div>
                                        <div class="col-lg-3 mb-6">
                                            <label>سبب الزيارة:</label>
                                            <input type="text" class="form-control datatable-input" name="filter_3" id="filter_3" placeholder="القسم" data-col-index="5"/>

                                        </div>

                                        <div class="col-lg-2 mb-6">
                                            <label>الجنس :</label>
                                            <div>
                                                <select class="form-select form-select-solid" name="filter_4" id="filter_4">
                                                    <option value="">اختر ..</option>
                                                    <option value="Male">ذكر</option>
                                                    <option value="Female">أنثى </option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-2 mb-6">
                                            <label>العملة:</label>
                                            <div>
                                                <select class="form-select form-select-solid" name="filter_5" id="filter_5">
                                                    <option value="">اختر ..</option>

                                                </select>
                                            </div>
                                        </div> --}}

                                        <div class="col-lg-4 mb-6">
                                            <label>تاريخ الإضافة:</label>
                                            <div class="input-daterange input-group">
                                                <input class="form-control input_date_ flatpickr-input active" placeholder="من" name="from_date" id="from_date"/>
                                                {{--                                        <input type="text" class="form-control datatable-input" name="from_date" id="from_date" placeholder="من" data-col-index="5"/>--}}
                                                <div class="input-group-append">
                                                    <span class="input-group-text" style="padding:1.1rem;border-radius: 0px"><i class="la la-ellipsis-h"></i></span>
                                                </div>
                                                <input class="form-control input_date_ flatpickr-input active" placeholder="إلى" name="to_date" id="to_date"/>
                                                {{--                                        <input type="text" class="form-control datatable-input" name="to_date" id="to_date" placeholder="إلى" data-col-index="5"/>--}}
                                            </div>
                                        </div>


                                        {{--<div class="col-lg-3  mb-lg-0 mb-6">--}}
                                        {{--<label>Status:</label>--}}
                                        {{--<select class="form-control datatable-input" data-col-index="6">--}}
                                        {{--<option value="">اختر</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        <div class="col-lg-3 mt-auto mb-auto" style="position: relative;top: 2px">
                                            <button type="button" class="btn btn-primary btn-primary--icon" name="filter" id="filter" {{--id="kt_search"--}}>
                                <span>
                                    <i class="la la-search"></i>
                                    <span>بحث</span>
                                </span>
                                            </button>
                                            &nbsp;
                                            <button type="button" class="btn btn-secondary btn-secondary--icon" name="refresh" id="refresh" {{--id="kt_reset"--}}>
                                <span>
                                    <i class="la la-close"></i>
                                    <span>إعادة تعيين</span>
                                </span>
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>
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
                                <th>الرقم </th>
                                <th>إسم المريض</th>
                                <th>الزيارة القادمة</th>
                                <th>القسم</th>
                                <th>سبب الزيارة</th>
                                <th>ملاحظات</th>
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
        </div>
    </div>
    </div>


</div>



        {{-- {!! $users->links() !!} --}}


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

    <!--end::Main-->
    <script>
        var hostUrl = "assets/";
    </script>

</div>



<div class="modal fade" tabindex="-1" id="kt_modal_1">

    <div class="modal-dialog">
        <div class="modal-content w-75 p-3">
            <div class="modal-header bg-secondary">

                <h5 class="modal-title ">إضافة دفعات مالية للمريض</h5>
                <p id="demo"></p>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <img src={{ asset('assets\media\svg\close\close.svg') }}>
                </div>
                <!--end::Close-->
            </div>
            <form id="Form_">
            <div class="row">
				<div class="form-control form-control-solid sm-3 border mt-6 ">
					<label class="fs-4 fw-semibold form-label" for="name_patient" >إسم المريض ورقمه
						</label>
                    <input type="text" id="patient_name" class="patient_name form-control form-control-solid paid @error('paid') is-invalid @enderror" readonly >
                    <input type='hidden' name='seatNumbers' value='' id='seatNumbers'>


				</div>

				<div class="col-12 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label" for="amount_paid">المبلغ
						المدفوع</label>
					<input type="number"
						class="form-control form-control-solid paid @error('paid') is-invalid @enderror"
						name="paid" id="paid" value="{{ old('paid') }}" placeholder="المبلغ المراد دفعة">
				</div>

				<div class="col-12 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label"
						for="currancy">عملة الدفع</label>
						<select class="form-select form-select-lg form-select-solid  @error('currancy') is-invalid @enderror "
					name="currancy" id="currancy" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
						<option value="شيكل" selected >شيكل</option>

					</select>

				</div>

				<div class="col-12 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">تاريخ
						الدفع</label>
					<input type="date" name="paid_date"
						class="form-control form-control-solid  flatpickr-input active @error('paid_date') is-invalid @enderror"
						value="{{ date('Y-m-d') }}" id="kt_datepicker_1"
						placeholder="تاريخ الدفع" value="{{ old('paid_date') }}">
				</div>
                <div>
                    <label class="fs-4 fw-semibold form-label mt-6">ملاحظـــات</label>
                    <textarea id="kt_docs_tinymce_basic" class="form-control form-control-solid" rows="3" name="notes"
                    placeholder="ملاحظات"></textarea>
                    </div>
                    <div class="d-flex">
                        <button type="submit" id="btn_paid" class="btn btn-primary mt-6">
                        <span class="indicator-label btn-lg btn-block">حفظ</span>
                        </button>
                    </div>
			</div>
            <h2></h2>
        </form>



       </div>
   </div>
 </div>

</div>
</div></div>
                <!--end::Close-->





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
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4"> إسم المريض</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="patient_id">
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4">تاريخ الزيارة</label>
                                    <div class="col-lg-8">
                                       <div class="form-control-plaintext border px-2 alpha-slate " id="visit_date"
                                            style=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4">تاريخ الزيارة القادمة</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="next_visit_date">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4">القسم</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="surgery_kind_id">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4">سبب الزيارة</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="surgery_kind_id_child">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group row mb-1">
                                    <label class="col-form-label col-lg-4">ملاحظات</label>
                                    <div class="col-lg-8">
                                        <div class="form-control-plaintext border px-2 alpha-slate " style="" id="notes">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div col-12>

                                <div class="card text-center">
                                    <div class="card-header">

                                    </div>
                                    <div class="card-body ">
                                      <h5 class="card-title">بيانات التجميد </h5>
                                      <p class="card-text">
                                       </p>
                                      <div class="form-group row mb-1">
                                       <label class="col-form-label col-lg-4">عدد العينات</label>
                                       <div class="col-6 lg-8">
                                           <div class="form-control-plaintext border px-2 alpha-slate " style="" id="qty_packages">
                                           </div>
                                       </div>
                                   </div>
                                      <div class="form-group row mb-1">
                                       <label class="col-form-label col-lg-4">تاريخ بداية التجميد</label>
                                       <div class="col-6 lg-8">
                                           <div class="form-control-plaintext border px-2 alpha-slate " style="" id="freez_start_date">
                                           </div>
                                       </div>
                                   </div>
                                      <div class="form-group row mb-1">
                                       <label class="col-form-label col-lg-4">تاريخ نهاية التجميد</label>
                                       <div class="col-6 lg-8">
                                           <div class="form-control-plaintext border px-2 alpha-slate " style="" id="freez_end_date">
                                           </div>
                                       </div>
                                   </div>

                                </div>
                                <div class="d-flex flex-nowrap">
                                    <div class="col-4 order-3 p-2  card text-white bg-danger rounded-left " id='total_amount'></div>
                                    <div class="col-8 order-2 p-2 card text-white bg-success rounded-right" >إجمالي المبلغ المتبقي</div>

                                  </div>

                                                <div class="card-footer text-muted">
                                                {{ Carbon\Carbon::now(); }}
                                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div></div>

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
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                });
                                var csrf = "{{ csrf_token() }}";
                                var DATA_URL = "{{ route('appointment.getData') }}";
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
                            <script src="{{ asset('assets/js/custom/pages/datatable/users/data-json-appointment.js') }}" type="text/javascript">
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

                                // استدعاء المودال
                                $(document).on('click', '#smallButton1', function(event) {

                                    event.preventDefault();
                                    let id = $(this).attr('data-attr');
                                    // console.log(id);
                                    // alert(1);
                                    // alert(id)
                                    $.ajax({
                                        type: "GET",
                                        url: SITEURL +'/appointments/'+id,


                                        // return the result
                                        success: function(result) {

                                         console.log(result);
                                            $('#smallModal').modal("show");
                                            $('#patient_id').html(result.app_return.full_name);
                                            $('.patient_name').html(result.app_return.full_name);
                                            $('#visit_date').html(result.app_return.visit_date);
                                            $('#surgery_kind_id').html(result.app_return.surgery_kind_id);
                                            $('#surgery_kind_id_child').html(result.app_return.surgery_kind_id_child);
                                            $('#total_amount').html(result.total_amount);
                                            $('#next_visit_date').html(result.app_return.next_visit_date);
                                            $('#freez_start_date').html(result.app_return.freez_start_date);
                                            $('#freez_end_date').html(result.app_return.freez_end_date);
                                            $('#qty_packages').html(result.app_return.qty_packages);
                                            $('#notes').html(result.app_return.notes);
                                            $('#created_at').html(result.app_return.created_at);
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
                            <script>

                                $(".flatpickr-input").flatpickr({

                                });

                                </script>
                                <script>

                                     function paid_(appointment,patient) {
                                        $('#kt_modal_1').modal("show");
                                        // $('#patient_name').val(patient);
                                        var p_name = $('#data_'+appointment+'_'+patient).attr('data-p-name');
                                        var p_no = $('#data_'+appointment+'_'+patient).attr('data-p-no');
                                        $('#patient_name').val(p_name+'_'+p_no);
                                    $("#btn_paid").click(function(e) {
                                        e.preventDefault();
                                        var paid = $('#paid').val();
                                        var currancy = $('#currancy').val();
                                        var date_paid = $('#kt_datepicker_1').val();
                                        var notes = $('#kt_docs_tinymce_basic').val();
                                        var seatNumbers=$('#seatNumbers').val(patient);
                                        console.log(paid);
                                        $('#btn_paid').html('جاري الحفظ');


                                        $.ajax({
                                            type: 'post',
                                            url: SITEURL + '/appointments/' + appointment+'/'+patient,
                                            data: {
                                                paid: paid,
                                                currancy: currancy,
                                                date_paid: date_paid,
                                                notes: notes,
                                                '_token': '{{ csrf_token() }}'
                                            },
                                            //                    dataType: 'json',
                                            success: function(data) {
                                                $('#Form_').trigger("reset");
                                                $('#kt_modal_1').modal("hide");
                                                $('#btn_paid').html('حفظ');
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "تمت العملية بنجاح!",
                                                    showConfirmButton: false,
                                                    timer: 3000
                                                  

                                                });
                                                location.reload();
                                                // $("#kt_modal_1").modal({ backdrop: "static ", keyboard: false });


                                                // var oTable = $('#kt_datatable').DataTable();
                                                // oTable.destroy();
                                                // KTDatatablesDataSourceAjaxServer.init();

                                            },
                                            error: function(data) {
                                                $('#btn_paid').html('حفظ');
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


                           

                                     };
                                </script>
                        @endsection
