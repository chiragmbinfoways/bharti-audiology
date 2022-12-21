<script>
    $(function() {

        $(document).on('change', "[name='category']", function() {
            var id = $(this).val();
            var url = "{{ route('subcategory.product', ':id') }}";
            url = url.replace(':id', id);
            $.get(url, function(data) {
                console.log(data);
                $('#sub_cat_id').html(data);
             })
        });
        //IMAGE ORDER
        $(".imageOrder").on('change', function(e) {
            let orderNo = $(this).val();
            let id = $(this).data('id');
            let product_id = $("#productId").val(); 
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: "POST",
                dataType: "json",
                url: '{{ route('order.image.product') }}',
                data: {
                    'orderNo': orderNo,
                    'id': id,
                    'product_id': product_id,
                },
                success: function(data) {
                    
                    if (data.status == "success") {
                        var selector = ".flash-message .messageArea";
                        var message_status = "success";
                        var message_data = "Attrinute status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                    else{
                        alert("Please allocate another order no!")
                        var selector = ".flash-message .messageArea";
                        var message_status = "error";
                        var message_data = "Attrinute status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                }
            });
        });
     
        $(document).on('change', "[id='attribute_id']", function() {
            var id = $(this).val();
            var url = "{{ route('attribute_value.product', ':id') }}";
            url = url.replace(':id', id);
            $.get(url, function(data) {
                console.log(data);
                $('#attribute_value_id').html(data);
             })
        });
     
        //STATUS SWITCH ON CHANGE EVENT
        $(".categoryStatus").on('change.bootstrapSwitch', function(e) {
            let status = $(this).prop('checked') == true ? 1 : 0;
            let category_id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: "POST",
                dataType: "json",
                url: '{{ route('status.change.category') }}',
                data: {
                    'status': status,
                    'category_id': category_id
                },
                success: function(data) {
                    if (data.status == "success") {
                        var selector = ".flash-message .messageArea";
                        var message_status = "success";
                        var message_data = "Category status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                }
            });
        })
        //DELETE Category
        $(".deleteCategory").on('click', function(e) {
            e.preventDefault();
            let category_id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('category.delete') }}',
                        data: {
                            'category_id': category_id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "User has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);

                                for (var i = 0; i < data.categories.length; i++) {
                                    var category = data.categories[i];
                                    $('.dataRow' + category.id).hide();
                                }
                                $('.dataRow' + category_id).hide();
                            }
                        }
                    });
                }
            });
        })




        //STATUS SWITCH ON CHANGE EVENT
        $(".brandStatus").on('change.bootstrapSwitch', function(e) {
            let status = $(this).prop('checked') == true ? 1 : 0;
            let brand_id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: "POST",
                dataType: "json",
                url: '{{ route('status.change.brand') }}',
                data: {
                    'status': status,
                    'brand_id': brand_id
                },
                success: function(data) {
                    if (data.status == "success") {
                        var selector = ".flash-message .messageArea";
                        var message_status = "success";
                        var message_data = "Brand status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                }
            });
        })

        //DELETE Brand
        $(".deleteBrand").on('click', function(e) {
            e.preventDefault();
            let brand_id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('brand.delete') }}',
                        data: {
                            'brand_id': brand_id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "Brand has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);
                                $('.dataRow' + brand_id).hide();
                            }
                        }
                    });
                }
            });
        })




        //STATUS SWITCH ON CHANGE EVENT
        $(".attributeStatus").on('change.bootstrapSwitch', function(e) {
            let status = $(this).prop('checked') == true ? 1 : 0;
            let attribute_id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: "POST",
                dataType: "json",
                url: '{{ route('status.change.attribute') }}',
                data: {
                    'status': status,
                    'attribute_id': attribute_id
                },
                success: function(data) {
                    if (data.status == "success") {
                        var selector = ".flash-message .messageArea";
                        var message_status = "success";
                        var message_data =
                            "Attrinute status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                }
            });
        })
        //STATUS SWITCH ON CHANGE EVENT
        $(".productStatus").on('change.bootstrapSwitch', function(e) {
            let status = $(this).prop('checked') == true ? 1 : 0;
            let product_id = $(this).data('id');
            $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: "POST",
                dataType: "json",
                url: '{{ route('status.change.product') }}',
                data: {
                    'status': status,
                    'product_id': product_id
                },
                success: function(data) {
                    if (data.status == "success") {
                        var selector = ".flash-message .messageArea";
                        var message_status = "success";
                        var message_data =
                            "Product status has been changed successfully!";
                        alertMessage(selector, message_status, message_data);
                    }
                }
            });
        })

        //DELETE Brand
        $(".deleteAttribute").on('click', function(e) {
            e.preventDefault();
            let attribute_id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('attribute.delete') }}',
                        data: {
                            'attribute_id': attribute_id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "Attribute has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);
                                $('.dataRow' + attribute_id).hide();
                            }
                        }
                    });
                }
            });
        })
        //Delete Product
        $(".deleteProduct").on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('product.delete') }}',
                        data: {
                            'id': id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "Product has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);
                                $('.dataRow' + id).hide();
                            }
                        }
                    });
                }
            });
        })
        //Delete Product attributes
        $(".deleteProductAttribute").on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('product.attribute.delete') }}',
                        data: {
                            'id': id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "Product Attribute has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);
                                $('.dataRow' + id).hide();
                            }
                        }
                    });
                }
            });
        })
        $(".deleteAttributeValue").on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        type: "POST",
                        dataType: "json",
                        url: '{{ route('attribute.value.delete') }}',
                        data: {
                            'id': id
                        },
                        success: function(data) {

                            if (data.status == "success") {
                                var selector = ".flash-message .messageArea";
                                var message_status = "success";
                                var message_data =
                                    "Attribute Value has been deleted successfully!";
                                alertMessage(selector, message_status,
                                    message_data);
                                $('.dataRow' + id).hide();
                            }
                        }
                    });
                }
            });
        })
        $("#categoryDataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#categoryDataTable_wrapper .col-md-6:eq(0)');
        $("#brandDataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#brandDataTable_wrapper .col-md-6:eq(0)');

        $("#attributeDataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#attributeDataTable_wrapper .col-md-6:eq(0)');
        $("#productDataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#productDataTable_wrapper .col-md-6:eq(0)');

        $("#attributeValueDataTable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#attributeValueDataTable_wrapper .col-md-6:eq(0)');
    });

    

</script>
