function deleteTemplate(template_id) {
    $('.loader').attr('style', 'block')
    var cfm =  confirm('Are you sure?');
    var _token = $('input[name="_token"]').val();
    if (cfm) {
        $.ajax({
            method: "DELETE",
            url: "/template/" + template_id,
            data: { _token : _token },
            success: function () {
                window.location = "/template";
            },
            error: function (data) {
                $('.loader').attr('style', 'none')
                console.log(data);
            }
        });
    }
};