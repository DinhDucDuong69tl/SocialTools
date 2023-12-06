$(document).ready(function(){
    $('.btn-mua').click(function(){
        var idpm = $('.idphanmem').val();
        var price = $('.price').val();
        Swal.fire({
            title: 'Bạn có chắc chắn muốn mua?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Có',
            cancelButtonText: 'Không'
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng chọn "Có", gửi dữ liệu sang PHP
                var dataToSend = {
                    action: 'mua',
                    idpm: idpm,
                    price: price,

                    // Thêm các trường dữ liệu khác nếu cần
                };

                $.ajax({
                    type: 'POST',
                    url: '../View/xuly.php',
                    data: dataToSend,
                    dataType: 'json', 

                    success: function(response){
                        // Xử lý phản hồi từ PHP (nếu cần)
                        console.log(response);
                        
                        Swal.fire({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success"
                          });
                    }
                });
            }
        });
    });
});
