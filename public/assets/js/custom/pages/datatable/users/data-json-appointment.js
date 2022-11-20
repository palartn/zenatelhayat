"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

    var initTable1 = function() {
        var table = $('#kt_datatable');
        // begin first table
        table.DataTable({
            language: {
                "sProcessing": "جارٍ التحميل...",
                "sLengthMenu": "أظهر _MENU_ مدخلات",
                "sZeroRecords": "لم يعثر على أية سجلات",
                "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "sInfoPostFix": "",
                "sSearch": "بحث عام:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "الأول",
                    "sPrevious": "السابق",
                    "sNext": "التالي",
                    "sLast": "الأخير"
                }
            },
            lengthMenu: [[10,25, 50, 100, 500,1000,1500,2000,10000], ['10','25', '50', '100', "500", "1000", "1500", "2000", "الكل"]],
            dom: 'Blfrtip',
            buttons: [
                {
                    "extend": "excel",
                    "text": "إكسل",
                    "bom": "true",
                    "attr": { class: 'btn btn-success buttons-excel buttons-html5'},
                    exportOptions: {
                        columns: [ 0,1,2,3  ]
                    },
                    customize: function (doc) {
                    }
                },
                {
                    "extend": "print",
                    "text": "طباعة",
                    "title": '',
                    "bom": "true",
                    "attr": { class: 'btn btn-info buttons-excel buttons-html5'},
                    exportOptions: {
                        columns: [ 0,1,2,3 ]
                    },

                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'direction', 'rtl' )
                            .prepend(
                                '<div style="display: flex;border-bottom: 1px solid #000;margin-bottom: 20px"><img src="'+SITEURL+'/assets/media/reports/header-right.png" width="100%" />'
                            );

                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'direction', 'rtl' );
                    },
                },

            ],
            select: true,
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,

            ajax: {
                headers: {
                    'X-CSRF-TOKEN': csrf
                },
                url: DATA_URL,
                type: 'POST',
                data: {
                    // parameters for custom backend script demo
                    columnsDef: [
                        'id','visit_date', 'next_visit_date', 'surgery_kind_id', 'surgery_kind_id_child', 'actions'],
                    from_date:from_date,
                    to_date:to_date,
                    filter_1:filter_1,
                    filter_2:filter_2,
                    filter_3:filter_3,
                    filter_4:filter_4,
                },
            },
            columns: [
                // {data: 'id',width: 100},
                {data: 'id',width: 30},
                //{data: 'patient_name',width: 100},
                {data: 'patient_id',width: 100},
                {data: 'next_visit_date',width: 80},
                {data: 'surgery_kind_id',width: 80},
                {data: 'surgery_kind_id_child',width: 80},
                {data: 'notes',width: 80},
                {data: 'actions',width: 145},

            ],
            columnDefs: [
                {
                    targets: -1,
                    title: 'الإجراءات',
                    orderable: false,
                    render: function(data, type, full, meta) {
                            return '\
							<a href="javascript:;" data-attr="'+full.id+'" data-toggle="modal" id="smallButton1" data-target="#smallModal" class="btn btn-sm btn-clean btn-icon btn-warning" title="عرض المستخدم">\
								<i class="las la-info"></i>\
							</a>\
                            <a href="'+SITEURL+'/appointments/'+full.id+'/edit"  class="btn btn-sm btn-clean btn-icon btn-primary" title="تعديل">\
                            <i class="las la-edit"></i>\
                        </a>\
                        <a href="javascript:;" onclick="return deleted_('+full.id+')" class="btn btn-sm btn-clean btn-icon btn-danger" title="حذف">\
                        <i class="las la-trash"></i>\
                    </a>\
                    <a href="'+SITEURL+'/appointments/'+full.id+'/file"" class="btn btn-sm btn-clean btn-icon btn-success" title="ملفات المريض">\
                    <i class="bi bi-file-diff"></i>\
                    </a>\
                    <a href="'+SITEURL+'/appointments/'+full.id+'" class="btn btn-sm btn-clean btn-icon btn-secondary" title="حجوزات المريض">\
                    <i class="fa fa-calendar" aria-hidden="true"></i>\
                    </a>\
						';
                    },
                      },
            ]
        });
    };
    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxServer.init();
});

$('#filter').click(function(){
    from_date = $('#from_date').val() ;
    to_date = $('#to_date').val();
    filter_1 = $('#filter_1').val();
    filter_2 = $('#filter_2').val();
    filter_3 = $('#filter_3').val();
    filter_4 = $('#filter_4').val();

    if(from_date == ''){
        from_date=-1;
    }
    if(to_date == ''){
        to_date=-1;
    }
    if(filter_1 == ''){
        filter_1=-1;
    }
    if(filter_2 == ''){
        filter_2=-1;
    }
    if(filter_3 == ''){
        filter_3=-1;
    }
    if(filter_4 == ''){
        filter_4=-1;
    }
    // if(filter_6 == ''){
    //     filter_6=-1;
    // }
    var oTable = $('#kt_datatable').DataTable();
    oTable.destroy();
    KTDatatablesDataSourceAjaxServer.init();

});

$('#refresh').click(function(){
    $('#from_date').val('');
    $('#to_date').val('');
    $('#filter_1').val('');
    $('#filter_2').val('');
    $('#filter_3').val('').trigger('change');
    $('#filter_4').val('').trigger('change');
    from_date='';
    to_date = '';
    filter_1='';
    filter_2='';
    filter_3='';
    filter_4='';

    if(from_date == ''){
        from_date=-1;
    }
    if(to_date == ''){
        to_date=-1;
    }
    if(filter_1 == ''){
        filter_1=-1;
    }
    if(filter_2 == ''){
        filter_2=-1;
    }
    if(filter_3 == ''){
        filter_3=-1;
    }
    if(filter_4 == ''){
        filter_4=-1;
    }

    var oTable = $('#kt_datatable').DataTable();
    oTable.destroy();
    KTDatatablesDataSourceAjaxServer.init();
});

//  When click deleted
function deleted_(id) {
    Swal.fire({
        title: "هل أنت متأكد؟!",
        text: "سيتم الحذف الآن!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "نعم, احذف",
        cancelButtonText: "ليس الآن",
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: "btn btn-default"
        },
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            console.log('sss')
            $.ajax({
                type: "DELETE",
                url: SITEURL + "/appointment/"+id,
                success: function (data) {
                    Swal.fire({
                        icon: "success",
                        title: "تم الحذف بنجاح!",
                        text: "سيتم الإرسال لسلة المهملات",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    var oTable = $('#kt_datatable').DataTable();
                    oTable.destroy();
                    KTDatatablesDataSourceAjaxServer.init();
                },
                error: function (data) {
                    // console.log('Error:', data);
                    Swal.fire({
                        icon: "error",
                        title: "خطأ!",
                        text: "لم يتم الحذف",
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        }
    });
}






