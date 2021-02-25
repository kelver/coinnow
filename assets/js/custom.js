/*

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

*/

"use strict";
const d = document;
d.addEventListener("DOMContentLoaded", function(event) {
    function loadCoin(sigla = '') {
        var data = new FormData();
        data.append('sigla', sigla);

        //trás moeda padrão de acesso
        (async () => {
            const rawResponse = await fetch('functions/getCoins.php', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            });
            // const content = await rawResponse.json();
            await rawResponse.json().then(function(data){
                var valor = parseFloat(data[0].bid);

                const elMoeda = document.querySelector('#moeda');
                const elValor = document.querySelector('#valor');

                elMoeda.textContent = data[0].name;
                elValor.textContent = valor.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
                elValor.setAttribute('data-value', data[0].bid);
            });
        })();
    }

    function loadText(sigla = '') {
        var data = new FormData();
        data.append('sigla', sigla);

        //trás moeda padrão de acesso
        (async () => {
            const rawResponse = await fetch('functions/getText.php', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            });
            // const content = await rawResponse.json();
            await rawResponse.json().then(function(data){
                console.log(data);
                document.querySelector('.txtBox').innerHTML = data;
            });
        })();
    }

    function loadNews(search = 'bitcoin') {
        // document.querySelector('#newsItem').empty();
        var data = new FormData();
        data.append('sigla', search);

        //trás notícias sobre a moeda padrão de acesso
        (async () => {
            const rawResponse = await fetch('functions/getNews.php', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data
            });
            // const content = await rawResponse.json();
            await rawResponse.json().then(function(data){
                console.log(data.articles.length);
                var htmlNews = '';
                data.articles.forEach(function(valor, chave){
                    htmlNews += '' +
                        '<li class="glide__slide">\n' +
                        '   <div class="imgHolder">\n' +
                        '       <a class="" href="'+ valor.url +'">\n' +
                        '           <img class="imgSlide" src="'+ valor.urlToImage +'" alt="">\n' +
                        '           <div class="col-12 captionSlide">\n' +
                        '               <p>'+ valor.title +'</p>\n' +
                        '               <p><i>'+ valor.source.name +' <small>18/2/2021</small></i></p>\n' +
                        '           </div>\n' +
                        '       </a>\n' +
                        '   </div>\n' +
                        '</li>';
                });
                document.querySelector('.glide__slides').innerHTML = htmlNews;

                new Glide('.glide', {
                    type: 'slide',
                    startAt: 0,
                    perView: 1
                }).mount();
                d.querySelector('.imgSlide').style.height = parseInt(d.querySelector(".glide__slides").clientHeight) + 'px';
                loadText(document.querySelector('#moedas').value);
            });
        })();
    }

    document.querySelector('#quantidade').addEventListener('keyup', function(){
        if(this.value > 0){
            document.querySelector('#valor').textContent = (this.value * document.querySelector('#valor').getAttribute('data-value')).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
        }
        if(this.value <= 0){
            document.querySelector('#valor').textContent = 'R$ 0,00';
        }
    });

    // evento de seleção de moeda
    document.querySelector('#moedas').addEventListener('change',function(){
        loadCoin(this.value);
        loadNews(this.value);
    });

    // Choices.js
    var selectStateInputEl = d.querySelector('#moedas');
    if(selectStateInputEl) {
        const choices = new Choices(selectStateInputEl, {
            searchEnabled: false,
            placeholder: false,
            // placeholderValue: 'Selecione uma moeda',
            searchPlaceholderValue: null,
        });
        loadCoin(document.querySelector("#moedas").value);
        loadNews(document.querySelector("#moedas").value);
    }
});
