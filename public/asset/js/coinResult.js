$( document ).ready(function() {
    $(document).on('keyup', '#quantidade', function(){
        if($(this).val() > 0){
            $(document).find('#valor').text(($(this).val() * $(document).find('#valor').attr('data-value')).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));
        }
        if($(this).val() <= 0){
            $(document).find('#valor').text('0');
        }
    });

    loadCoin($('meta[name=coin]').attr('content'));
});
