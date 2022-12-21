<script>
    $('.category').on('click', function(e) {
        e.preventDefault();
        $('#productList').html("");
        $('#catproducts').html("");
        $('#subCategory').html("");
        let id = $(this).data('id');
        var url = "{{ route('categoryProducts', ':id') }}";
        url = url.replace(':id', id);
        $.get(url, function(data) {
            console.log(data.sub_categorys);

            for (var a = 0; a < data.products.length; a++) {
                for (var b = 0; b < data.products[a].length; b++) {
                    $('#productList').append(
                        "<div class='owl-item cloned col-md-4 col-sm-12 mt-5'> <div class='card product-card text-center rounded'> <a href= '" + data.products[a]['id'] + "'<img class='product-thumb mx-auto pt-3' src='{{ asset('/storage/images/Product/th/" + +"') }}' alt='There is no image avaliable for this product'></a> <div class='card-body py-4'> <h3 class='' id='title'>" + data.products[a]['title'] + " </h3> <h4 class='text-primary py-2 '' id='price'> " + data.products[a]['price'] + " </h4></div></div></div>");
                }

            }

            for (var d = 0; d < data.sub_categorys.length; d++) {
                $('#subCategory').append("<li><a href='javascript:void(0)' data-id='" + data.sub_categorys[d].id + " ' class='d-flex p-3 ' ><span> " + data.sub_categorys[d].name + " </span></a></li>");
            }
        });
    });


    // SUB CATEGORY PRODUCTS
    $('.subcat').on('click', function(e) {

        e.preventDefault();
        let id = $(this).data('id');
        alert(id);
        // var url = "{{ route('categoryProducts', ':id') }}";
        // url = url.replace(':id', id);
        // $.get(url, function(data) {
        //     console.log(data.sub_categorys);

        //     for (var a=0; a < data.products.length; a++) {
        //         for(var b=0; b<data.products[a].length; b++){
        //             $('#productList').append(
        //             "<div class='owl-item cloned col-md-4 col-sm-12 mt-5'> <div class='card product-card text-center rounded'> <a href= '"+ data.products[a][b].id +"'<img class='product-thumb mx-auto pt-3' src='{{ asset('/storage/images/Product/th/"+ data.products[a][b].id->image->image_name"') }}' alt='There is no image avaliable for this product'></a> <div class='card-body py-4'> <h3 class='' id='title'>"+ data.products[a][b].title +" </h3> <h4 class='text-primary py-2 '' id='price'> "+ data.products[a][b].price +" </h4></div></div></div>");
        //         }

        //     }

        //     for (var d=0; d < data.sub_categorys.length; d++) {
        //         $('#subCategory').append("<li><a href='javascript:void(0)' data-id='" +data.sub_categorys[d].id + " ' class='d-flex p-3 ' ><span> "+ data.sub_categorys[d].name +" </span></a></li>");
        //     }
        // });
    });
</script>