function loadCoin(sigla = '') {
    //trás moeda padrão de acesso
    $.ajax({
        url: "api/v1/coinBySigla",
        type: "POST",
        data: {'sigla': sigla},
        dataType: "json"
    }).done(function (data) {
        var valor = parseFloat(data.moeda[0].bid);

        $('#moeda').text("Conversão de " + data.moeda[0].name);
        $('#valor').text(valor.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'}));
        $('#valor').attr('data-value', data.moeda[0].bid);
    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function () {

    });
}

function loadNews(search = 'bitcoin') {
    $('.newsItem').empty();
    $('.miniBoxNews').empty();
    //trás notícias sobre a moeda padrão de acesso
    $.ajax({
        url: "api/v1/getNews" , //
        type: "POST",
        data: {'dias': 7, 'search': search},
    }).done(function (data) {
        $.each(data.articles, function(key, item){
            var active = '';
            var htmlCarousel = '';
            var htmlMiniBox = '';
            let dataPub = new Date(item.publishedAt);
            let dataPubFormatada = (dataPub.getDate() ) + "/" + ((dataPub.getMonth() + 1)) + "/" + (dataPub.getFullYear()) ;               ;
            if(key == 0){
                active = ' active';
            }

            if(key <= 2){
                htmlCarousel += '\n' +
                    '<div class="carousel-item '+ active +'" style="min-height: 100% !important; height: 100% !important;">\n' +
                    '   <div class="card border-0 rounded-0 text-light overflow zoom" style="min-height: 100% !important; height: 100% !important;">\n' +
                    '       <div class="position-relative" style="min-height: 100% !important; height: 100% !important;">\n' +
                    '           <!--thumbnail img-->\n' +
                    '           <div style="min-height: 100% !important; height: 100% !important;">\n' +
                    '               <a href="'+ item.url +'" target="_blank">\n' +
                    '                   <img class="img-fluid w-100"\n' +
                    '                       src="'+ item.urlToImage +'"\n' +
                    '                       alt="'+ item.title +'" style="min-height: 100% !important; height: 100% !important; object-fit: cover;">\n' +
                    '               </a>\n' +
                    '           </div>\n' +
                    '           <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">\n' +
                    '               <!--title-->\n' +
                    '               <a href="'+ item.url +'" target="_blank">\n' +
                    '                   <h4 class="post-title text-white my-1">'+ item.title +'</h4>\n' +
                    '               </a>\n' +
                    '               <!-- meta title -->\n' +
                    '               <div class="news-meta">\n' +
                    '                   <span class="news-author">'+ item.source.name +'</span>\n' +
                    '                   <span class="news-date">'+ dataPubFormatada +'</span>\n' +
                    '               </div>\n' +
                    '           </div>\n' +
                    '       </div>\n' +
                    '   </div>\n' +
                    '</div>';
            }

            if(key > 2){
                var pt = 1;
                if(key > 4){
                    pt = 3;
                }

                htmlMiniBox += '\n' +
                    '<div class="col-6 pb-1 pt-'+ pt +' pr-1" style="min-height: 170px !important; height: 170px !important;">\n' +
                    '   <div class="card border-0 rounded-0 text-light overflow zoom" style="min-height: 100% !important; height: 100% !important;">\n' +
                    '       <div class="position-relative" style="min-height: 100% !important; height: 100% !important;">\n' +
                    '           <!--thumbnail img-->\n' +
                    '           <div style="min-height: 100% !important; height: 100% !important;">\n' +
                    '               <a href="'+ item.url +'" target="_blank">\n' +
                    '                   <img class="img-fluid w-100"\n' +
                    '                       src="'+ item.urlToImage +'"\n' +
                    '                       alt="'+ item.title +'" style="min-height: 100% !important; height: 100% !important; object-fit: cover;">\n' +
                    '               </a>\n' +
                    '           </div>\n' +
                    '           <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">\n' +
                    '               <!-- meta title -->\n' +
                    '               <div class="news-meta">\n' +
                    '                   <span class="news-author"><a href="'+ item.url +'" class="text-white">'+ item.source.name +'</a></span>\n' +
                    '               </div>\n' +
                    '           </div>\n' +
                    '       </div>\n' +
                    '   </div>\n' +
                    '</div>';
            }

            $('.newsItem').append(htmlCarousel);
            $('.miniBoxNews').append(htmlMiniBox);

        });
    }).fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);

    }).always(function () {

    });
}

$( document ).ready(function() {
    let coins = [];
    //busca Moedas
    $.ajax({
        url: "api/v1/coins",
        type: "GET",
        dataType: "json",
        async: false
    }).done(function (data) {
        var oldCoin = '';
        var coinBlock = [
            'CAD',
            'AUD',
            'ILS',
            'CHF'
        ];
        $.each(data, function (key, item) {
            var coinName = item.name;
            var coinCode = item.code;
            if((coinCode != oldCoin) && !coinBlock.includes(coinCode)) {
                if(coinName.includes('Dólar')){
                    coinName = 'Dólar';
                }

                $('select.moedas option:first')
                    .clone()
                    .removeAttr('disabled')
                    .val(coinCode)
                    .text(coinName)
                    .insertAfter('select.moedas option:first');


                oldCoin = coinCode;
            }
        });
        $('select.moedas option:first').remove();

        var coin = 'BTC';
        if( $('meta[name=coin]').attr('content') != ''){
            coin = $('meta[name=coin]').attr('content');
        }
        $('select.moedas option[value="'+ $('meta[name=coin]').attr('content')+'"]').attr('selected','selected');
    });


    var coinName = 'Bitcoin';
    if($('#cusSelectbox option:selected').val() != ''){
        var coinName = $('#cusSelectbox option:selected').text();
    }
    loadNews(coinName);
});
