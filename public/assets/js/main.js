$(document).ready(function () {
    $('.carousel-item').height($(window).height());
    $(window).resize(function () {
        $('.carousel-item').height($(window).height());
    })
    $('.bg-auth').height($(window).height());
    $(window).resize(function () {
        $('.bg-auth').height($(window).height());
    })
    // Range Input
    $(document).on('input', '#currentLP', function () {
        var rangeInput = $('#currentLP').val();
        $('.lp-label').html($(this).val());

    });

//    Start role
    $(document).ready(function () {
        $(document).on('click', '.role', function () {
            $(this).siblings('input.role-checkbox').click();
        })
        $(document).on('click', 'input.role-checkbox', function () {
            var price = $(this).data('price') * 1;
            var rolePrice = $('#price').attr('data-rolePrice') ? $('#price').attr('data-rolePrice') * 1 : 0;
            if ($(this).is(':checked')) {
                $(this).siblings('img.role').addClass('role-active');
                $('#price').attr('data-rolePrice', (rolePrice + price))
            } else {
                $(this).siblings('img.role').removeClass('role-active');
                $('#price').attr('data-rolePrice', (rolePrice - price))
            }
            countPrice()
        })
        $(document).on('change', '#currentLP', function () {
            var price = ($(this).val() * 1 / 20) * 1.5;
            $('#price').attr('data-rangePrice', price)
            countPrice()
        })

        function countPrice() {
            var mainPrice = $('#price').attr('data-mainPrice') * 1;
            var rangePrice = $('#price').attr('data-rangePrice') ? $('#price').attr('data-rangePrice') * 1 : 0;
            var rolePrice = $('#price').attr('data-rolePrice') ? $('#price').attr('data-rolePrice') * 1 : 0;
            var final = mainPrice + rolePrice - rangePrice
            $('#price').text(final.toFixed(2))
        }
    })

});


