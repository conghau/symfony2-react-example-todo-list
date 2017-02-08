import $ from 'jquery';

class productApi {
    static searchProduct(term) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `/api/v1/products/search?field=id,name,sku,installment,image,price,tax,tax_info,price_after_tax,options,discount,org_price,final_price`,
                data: JSON.stringify(term),
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static getProductDetail(sku) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/products/sku/${sku}`,
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static getProductReview(productId) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/products/${productId}/reviews`,
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static getProductCategory(rootCategory = 0, level = 2) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: 'api/v1/products/category',
                data: {rootCategory: rootCategory, level: level}
            }).done((res) => {
                if(res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail((jqXHR, textStatus, errorThrown) => {
                reject(errorThrown);
            });
        });
    }
}
export default productApi;