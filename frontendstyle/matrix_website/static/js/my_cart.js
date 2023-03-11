odoo.define('website_sale.cart_init', function (require) {
"use strict";

    require('web.dom_ready');
    var ajax = require('web.ajax');
    var rpc = require('web.rpc');
    var Widget = require('web.Widget');
    var ProductLength = Widget.extend({
        init: function(){
            this.update_cart_length();
        },
        update_cart_length: function() {
            var update_cart_length = ajax.jsonRpc("/shop/cart/get_length", 'call', {});
            update_cart_length.then(function(data) {
                $('.my_cart_quantity').html(data.cart_quantity || '');
            });
            return update_cart_length;
        },
    });
    new ProductLength();

});
