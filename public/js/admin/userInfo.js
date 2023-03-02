$(document).ready(function() {

    $('#roleFilter').on('change', function(){
        let value = $(this).val();
        // alert(value);
        // console.log(value);

        $.ajax({
            url:"/admin/userInfo/" + value,
            type:"GET",
            data:"request=" + value,
            beforeSend: function(){
                $('.board').html("<span>Working....</span>")
            },
            success: function(data){
                $('.board').html(data);
                // console.log(data)
            }
        });
    });
});