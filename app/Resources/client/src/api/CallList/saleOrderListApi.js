import $ from 'jquery';

class saleOrderListApi {
    static getOrderByCustomerId($customerId, $pageSize, $pageNum) {
        return new Promise((resolve, reject) => {
                $.ajax({
                    method: "POST",
                    url: `/api/v1/order/customer/get-orders`,
                    data: {'customerId': $customerId, 'pageSize': $pageSize, 'pageNum': $pageNum},
                    dataType: "json"
                }).done(function (res) {
                    if (_.isUndefined(res) || res.error == 'true') {
                        reject('Can not load order list');
                    } else {
                        resolve(res);
                    }
                }).fail(function () {
                    reject('Can not load order list');
                });
            }
        );
    }

    static getOrderSummary(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/order/calculate',
                data: JSON.stringify(data),
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('Cannot calculate Order summary')
            })
        });
    }

    static postPlaceOrder(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/order/create',
                data: JSON.stringify(data),
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('Cannot place order !')
            })
        });
    }

    static postConfirmOrder(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/order/confirm',
                data: JSON.stringify(data),
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('Cannot confirm order !')
            })
        });
    }

    static getSaleOderDetail(orderIncrementId) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: '/api/v1/order/' + orderIncrementId + '/detail',
                dataType: "json"
            }).done(function (res) {
                resolve(res.data);
            }).fail(function () {
                reject('Can not load order detail');
            });
        });
    }

    static getSaleOrdersByUser($pageNum = 1, $pageSize = 10) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `api/v1/order/user/my-order`,
                data: {'pageSize': $pageSize, 'pageNum': $pageNum},
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data[0]);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('Can not load order list');
            });
        });
    }

    static cancelOrder(orderNo, note) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `api/v1/order/cancel`,
                data: JSON.stringify({
                    'orderNo': orderNo,
                    'note': note
                }),
                dataType: "json"
            }).done(function (res) {
                if(res.code == 200) {
                    resolve(res.data[0])
                } else {
                    reject(res.message);
                }
            }).fail(function () {
               reject('Can not cancel order.');
            });
        });
    }
}
export default saleOrderListApi;
