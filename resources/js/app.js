require('./bootstrap');

const $ = require('jquery');

    $(document).ready(function () {  
    
        $(document).on('change', '#filter', function () {  
            
            let eta = $(this).val();

            $.ajax({
                method: 'post',
                url: 'http://' + window.location.host + "/api/students/eta",
                data: {'eta' : eta},
                success: function (data) {
                    console.log(data.response);
                }
            });        
        });
    });