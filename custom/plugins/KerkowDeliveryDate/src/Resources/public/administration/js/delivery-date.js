(this.webpackJsonp=this.webpackJsonp||[]).push([["delivery-date"],{"0oVt":function(e,t){e.exports="{% block sw_order_detail_base_secondary_info_delivery %}\n\t<dt>\n\t\t{{ $tc('sw-order.detailBase.labelShippingMethod') }}\n\t</dt>\n\t<dd>\n\t\t{{ hasDeliveries ? delivery.shippingMethod.translated.name :$tc('sw-order.detailBase.labelNoDeliveriesYet')  }}\n\t</dd>\n\t<dt>\n\t\t{{ $tc('sw-order.detailBase.labelDeliveryDate') }}\n\t</dt>\n\t<dd>\n\t\t{{currentOrder.customFields.delivery_date | date(\"d.m.Y\") }}\n\t</dd>\n\t<dt>\n\t\t{{ $tc('sw-order.detailBase.labelDeliverySlot') }}\n\t</dt>\n\t<dd>\n\t\t{{ $tc('sw-order.detailBase.' + currentOrder.customFields.delivery_slot) }}\n\t</dd>\n{% endblock %}\n"},"3UGY":function(e){e.exports=JSON.parse('{"sw-order":{"detailBase":{"labelDeliveryDate":"Delivery Day","labelDeliverySlot":"Delivery Slot","18to20":"6 to 8 pm","19to21":"7 to 9 pm"}}}')},Xvdh:function(e,t,r){"use strict";r.r(t);var d=r("0oVt"),l=r.n(d),a=r("no9N"),o=r("3UGY");Shopware.Locale.extend("de-DE",a),Shopware.Locale.extend("en-GB",o),Shopware.Component.override("sw-order-user-card",{template:l.a})},no9N:function(e){e.exports=JSON.parse('{"sw-order":{"detailBase":{"labelDeliveryDate":"Lieferdatum","labelDeliverySlot":"Zeitfenster","18to20":"18:00 bis 20:00 Uhr","19to21":"19:00 bis 21:00 Uhr"}}}')}},[["Xvdh","runtime"]]]);