$(function() {
    mammamiaCart({

        //array que representa o formato e as colunas do carrinho, consulte
        // a documentação das colunas do carrinho
        cartColumns: [
            { attr: "name", label: "Name" },
            { attr: "price", label: "Price", view: 'currency' },
            { view: "decrement", label: false },
            { attr: "quantity", label: "Qty" },
            { view: "increment", label: false },
            { attr: "total", label: "SubTotal", view: 'currency' },
            { view: "remove", text: "Remove", label: false }
        ],

        // "div" ou "table" - constrói o carrinho como uma mesa ou coleção de divs
        cartStyle: "div",

        // como mammamiaCart deve finalizar a compra, consulte a referência de finalização da compra para mais informações
        checkout: {
            type: "PayPal",
            email: "tarciano2020@gmail.com"
        },

        // definir a moeda, consulte a referência de moeda para obter mais informações
        currency: "BRL",

        //coleta de dados arbitrários que você pode querer armazenar com o carrinho,
        // como informações do cliente
        data: {},

        // definir o idioma do carrinho (pode ser usado para checkout)
        language: "portuguese-br",

        // matriz de campos de item que não serão enviados para checkout
        excludeFromCheckout: [
            'qty',
            'thumb'
        ],

        // função personalizada para adicionar custo de envio
        shippingCustom: null,

        // opção de envio de taxa fixa
        shippingFlatRate: 0,

        // frete adicionado com base neste valor multiplicado pela quantidade do carrinho
        shippingQuantityRate: 0,

        // frete adicionado com base neste valor multiplicado pelo subtotal do carrinho
        shippingTotalRate: 0,

        // taxa de imposto aplicada ao subtotal do carrinho
        taxRate: 0,

        // verdadeiro se o imposto deve ser aplicado ao frete
        taxShipping: false,

        //retornos de chamada de evento
        beforeAdd: null,
        afterAdd: null,
        load: null,
        beforeSave: null,
        afterSave: null,
        update: null,
        ready: null,
        checkoutSuccess: null,
        checkoutFail: null,
        beforeCheckout: null

    });

    mammamiaStore.init({

        // marca pode ser texto ou URL de imagem
        brand: "Mammamia",

        // número de produtos por linha (aceita 1, 2 ou 3)
        numColumns: 3,


        // nome do arquivo JSON, localizado na raiz do diretório
        JSONFile: "products.json"

    });

});