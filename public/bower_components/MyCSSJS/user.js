$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#approve').DataTable({
    processing: true,
    serverSide: true,
    destroy:true,
    ajax: $('#approve').attr('data-url'),
    columns: [
        { data: 'id', name: 'id' },
        { data: 'email', name: 'email' },
        { data: 'name', name: 'name' },
        { data: 'avatar', name: 'avatar' },
        { data: 'role', name: 'role' },
        { data: 'action', name: 'action' },
    ],
});

$(document).on('click', '.approve', function() {
    $id = $(this).attr('data-user');
    $.ajax({
        dataType: 'JSON',
        method: 'get',
        cache: false,
        contentType: false,
        processData: false,
        url: route('confirmRequest', $id),
        success: function(response) {
            toastr.info(response.success);
            $('#approve').DataTable().ajax.reload(null, false);
        },
    })
})

$(document).on('click', '.refuse', function() {
    $id = $(this).attr('data-user');
    $.ajax({
        dataType: 'JSON',
        method: 'get',
        cache: false,
        contentType: false,
        processData: false,
        url: route('refuseRequest', $id),
        success: function(response) {
            toastr.info(response.success);
            $('#approve').DataTable().ajax.reload(null, false);
        },
    })
})
