// only allow numeric input
$('input[numberic]').on('keypress', function (e) {
    if (isNaN(this.value + String.fromCharCode(e.keyCode))) return false;
});

// Tăng giảm số lượng mua thẻ
$('input.input--amount').on('input',function () {
    if ($(this).val() > 20){
        $(this).val(20);
    }
});

$('.js-amount').on('click', function () {
    let input = $(this).parent().find('input.input--amount');
    let value = input.val();
    if ($(this).data('action') === 'add') {
        input.val(++value);
    }
    if ($(this).data('action') === 'minus' && value > 1) {
        input.val(--value);
    }
    if (input.val() > 20) {
        input.val(20)
    }
});
