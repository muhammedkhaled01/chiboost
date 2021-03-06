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

//    Start options
    $(document).on('click', 'input.check-options', function () {
        var price = $(this).data('price') * 1;
        var optionsPrice = $('#price').attr('data-optionsPrice') ? $('#price').attr('data-optionsPrice') * 1 : 0;
        if ($(this).is(':checked')) {
            $('#price').attr('data-optionsPrice', (optionsPrice + price))
        } else {

            $('#price').attr('data-optionsPrice', (optionsPrice - price))
        }
        countPrice()
    })

    $(document).on('change', '#currentLP', function () {
        var price = ($(this).val() * 1 / 20) * 1.5;
        $('#price').attr('data-rangePrice', price)
        countPrice()
    })
    $(document).on('change', '.currentLP', function () {
        var price = ($(this).val() * 1 / 20) * 1.5;
        $('#price').attr('data-rangePrice', price)
        countPrice()
    })

    function countPrice() {
        var mainPrice = $('#price').attr('data-mainPrice') * 1;
        var rangePrice = $('#price').attr('data-rangePrice') ? $('#price').attr('data-rangePrice') * 1 : 0;
        var rolePrice = $('#price').attr('data-rolePrice') ? $('#price').attr('data-rolePrice') * 1 : 0;
        var optionsPrice = $('#price').attr('data-optionsPrice') ? $('#price').attr('data-optionsPrice') * 1 : 0;
        var currentRank = $('#price').attr('data-currentRank') ? $('#price').attr('data-currentRank') * 1 : 0;
        var desiredRank = $('#price').attr('data-desiredRank') ? $('#price').attr('data-desiredRank') * 1 : 0;
        var final = mainPrice + rolePrice + optionsPrice + desiredRank + currentRank - rangePrice
        $('#price').val(final.toFixed(2))
    }

    onStart();

    function onStart() {
        var item_cr = $('#from-select-rank1').val();
        var price_cr = setRankPriceValue(item_cr);
        $('#price').attr('data-currentRank', price_cr);
        var item_dr = $('#from-select-rank2').val();
        var price_dr = setRankPriceValue(item_dr);
        $('#price').attr('data-desiredRank', price_dr);
        countPrice()
    }

    $(document).on('change', '#from-select-rank1', function () {
        var item = $(this).val();
        $('.rankimg1').addClass('hidden');
        $(`#_${item}`).removeClass('hidden');
        chooseRankChanger(item, 'from-select-rank2')
        var price = setRankPriceValue(item);
        $('#price').attr('data-currentRank', price);
        countPrice()
    })
    $(document).on('change', '#from-select-rank2', function () {
        var item = $(this).val();
        $('.rankimg2').addClass('hidden');
        $(`#__${item}`).removeClass('hidden');
        var price = setRankPriceValue(item);
        $('#price').attr('data-desiredRank', price);
        countPrice()
    })

    function chooseRankChanger(item, otherListId) {
        var select = otherListId.substr(otherListId.length - 1, otherListId.length) * 1
        var id = 0;
        $(`#${otherListId} option`).each(function (e) {
            if (item == $(this).attr('value')) {
                id = $(this).data('id');
            }
        })
        $(`#${otherListId} option`).each(function (e) {
            $(this).removeAttr('disabled')
            if ($(this).data('id') <= id) {
                $(this).attr('disabled', 'disabled');
            }
            if ($(this).data('id') == id + 1) {
                $(this).attr('selected', '');
                $(`.rankimg${select}`).addClass('hidden');
                var _ = "";
                for (var i = 0; i < select; i++) {
                    _ += "_";
                }
                $(`#${_}${$(this).attr('value')}`).removeClass('hidden');
            }
        })
        onStart();
    }

    if (boosting != null) {
        var title = `
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-invoice">Your order</h2>
                </div>
            </div>
        </div>`;
        var content = `
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="text-title-order">Code</div>
                    <div class="text-title-order">Current Rank</div>
                     ${boosting.type == 'divisions' ? `<div class="text-title-order">desired rank</div>` : ''}
                    <div class="text-title-order">Server</div>
                     ${boosting.type == 'netwins' ? `<div class="text-title-order">Wins</div>` : ''}
                     ${boosting.type == 'placements' ? `<div class="text-title-order">Games</div>` : ''}


                    <div class="text-title-order">Total payment</div>
                </div>
                <div class="col-7">
                    <div class="answer-order">${beautifyRank(boosting.id)}</div>
                    <div class="answer-order">${beautifyRank(boosting.current_rank)}</div>
                    ${boosting.type == 'divisions' ? `<div class="answer-order">${beautifyRank(boosting.desired_rank)}</div>` : ''}

                    <div class="answer-order">${beautifyRank(boosting.server)}</div>
                    ${boosting.type == 'netwins' ? `<div class="answer-order">${beautifyRank(boosting.wins)}</div>` : ''}
                    ${boosting.type == 'placements' ? `<div class="answer-order">${beautifyRank(boosting.games)}</div>` : ''}

                    <div class="answer-order">${beautifyRank(boosting.price)}</div>
                </div>
                <div class="col-12">
                <div class="text-discord">
                    <p>To complete a purchase, contact us via <a href="https://discord.gg/edu4G86q">Discord</a>... </p>

                </div>

                </div>
            </div>
        </div>`;
        $.confirm({

            title: title,
            content: content,
            buttons:
                {
                    Done: {
                        btnClass: 'btn-green',
                        action: function () {
                        }
                    },
                },
            columnClass: 'col-md-7'

        })

    }
    // $('button.btn-checkout').confirm({
    //     closeIcon: true,
    //     icon: 'fab fa-accessible-icon',
    //     title: 'Hello world babe!',
    //     content: 'Simple modal!',
    //     columnClass: 'col-md-4 col-md-offset-4',
    // });


});

function beautifyRank(rank) {
    var value = "";
    var rankArr = rank.split('_');
    for (var item of rankArr) {
        item = item.charAt(0).toUpperCase() + item.slice(1);
        value += item + " ";
    }
    return value.trim();
}

function setRankPriceValue(item) {
    var value = 0;
    switch (item) {
        case "iron_4":
            value = 1;
            break;
        case "iron_3":
            value = 2;
            break;
        case "iron_2":
            value = 3;
            break;
        case "iron_1":
            value = 4;
            break;
        case "bronze_4":
            value = 5;
            break;
        case "bronze_3":
            value = 6;
            break;
        case "bronze_2":
            value = 7;
            break;
        case "bronze_1":
            value = 8;
            break;
        case "silver_4":
            value = 9;
            break;
        case "silver_3":
            value = 10;
            break;
        case "silver_2":
            value = 11;
            break;
        case "silver_1":
            value = 12;
            break;
        case "gold_4":
            value = 13;
            break;
        case "gold_3":
            value = 14;
            break;
        case "gold_2":
            value = 15;
            break;
        case "gold_1":
            value = 16;
            break;
        case "platinum_4":
            value = 17;
            break;
        case "platinum_3":
            value = 18;
            break;
        case "platinum_2":
            value = 19;
            break;
        case "platinum_1":
            value = 20;
            break;
        case "diamond_4":
            value = 21;
            break;
        case "diamond_3":
            value = 22;
            break;
        case "diamond_2":
            value = 23;
            break;
        case "diamond_1":
            value = 24;
            break;
        case "master":
            value = 25;
            break;
        case "grandMaster":
            value = 26;
            break;
    }
    return value;
}

//Side bar
$('.slide').on('click', function () {
    $(this).toggleClass('is-expanded');
})


