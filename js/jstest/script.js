    $(document).ready(function () {
        $('.btn-mua').click(function () {
            // Lấy giá trị từ các trường input trong cùng một thẻ cha
            var idpm = $(this).closest('.card-title').find('.idphanmem').val();
            var price = $(this).closest('.card-title').find('.price').val();

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

                        success: function (response) {
                            // Xử lý phản hồi từ PHP (nếu cần)
                            console.log(response);
                            if (response.data4 == 1) {
                                Swal.fire({
                                    title: response.data1,
                                    text: response.data2,
                                    icon: response.data3
                                });
                            } else {
                                Swal.fire({
                                    title: response.data1,
                                    text: 'Bạn Không Đủ Tiền Để Mua Vui Long Nạp Thêm : ' + response.conlai + ' VND',
                                    imageUrl: response.data4,
                                    imageWidth: 300,
                                    imageHeight: 300,
                                    imageAlt: 'Custom image',
                                })
                            }
                        }
                    });
                }
            });
        });
    });
