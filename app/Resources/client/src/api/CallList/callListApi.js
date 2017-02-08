import $ from 'jquery';
import _ from 'lodash';

class callListApi {

    static getCallLists() {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/user/assigned-call-list`,
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function () {
                reject('Can not load billing customer statistic');
            });
        });
    }

    static getCustomerByKeyword(orgId, keyword, websiteId) {
        let data = JSON.stringify({
            orgId: orgId,
            keyword: keyword,
            websiteId: websiteId
        });
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `/api/v1/customers/detail`,
                data: data,
                dataType: "json"
            }).done(function (res) {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail(function (e) {
                reject('Can not load customer');
            });
        });
    }

    static searchCustomer(term) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/customers/search',
                data: JSON.stringify(term),
                dataType: "json"
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

    static searchCompany(keyword) {
        let data = {q: keyword || '', field: 'id,company_name,net_suite_customer_id'};
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: '/api/v1/company/search',
                data: data,
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

    static getICareCenters() {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: 'api/v1/user/icare-centers',
                dataType: "json"
            }).done(function (res) {
                resolve(res.data);
            }).fail(function () {
                reject('Can not load iCare centers');
            });
        })
    }

    static getCompanyDetail(id) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/company/${id}`
            }).done((res) => {
                if (res.code == 200) {
                    resolve(res.data);
                } else {
                    reject(res.message);
                }
            }).fail((jqXHR, textStatus, errorThrown) => {
                reject(errorThrown);
            });
        });
    }

    static getCallLog(id, pageNum, pageSize) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/call-log/customer/${id}?page=${pageNum}&pageSize=${pageSize}&fetchUser=true`
            }).done((res) => {
                if (_.isUndefined(res.items) == false && _.isEmpty(res.items) === false) {
                    resolve(res);
                } else {
                    reject(res.message);
                }
            }).fail((jqXHR, textStatus, errorThrown) => {
                reject(errorThrown);
            });
        });
    }

    static saveCallLog(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/call-log/create',
                data: data,
                dataType: "json"
            }).done(function (res) {
                if (res) {
                    resolve(res);
                } else {
                    reject();
                }
            }).fail(function () {
                reject('Cannot save call log !')
            })
        });
    }

    static updateCallLog(id, data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "PUT",
                url: `/api/v1/call-log/${id}/update`,
                data: data,
                dataType: "json"
            }).done(function (res) {
                if (res) {
                    resolve(res);
                } else {
                    reject();
                }
            }).fail(function () {
                reject('Cannot update call log !')
            })
        });
    }

    static getLastCall(id) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/call-log/customer/${id}/last`
            }).done((res) => {
                if (res.code == 200 && _.isEmpty(res.data) == false) {
                    resolve(res.data);
                } else {
                    reject();
                }
            }).fail((jqXHR, textStatus, errorThrown) => {
                reject(errorThrown);
            });
        });
    }

    static getCalling(userId = '') {
        let data = {
            "filter": {
                "userId": userId,
                "callStep": "calling"
            },
            "pageNum": 1,
            "pageSize": 1,
            "orderBy": "id",
            "orderDirection": "ASC"
        };
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: 'api/v1/call-log/search',
                data: data,
                dataType: "json"
            }).done(function (res) {
                if (_.isEmpty(res.items) == false) {
                    resolve(res);
                } else {
                    reject({});
                }
            }).fail(function () {
                reject('Cannot save call log !')
            })
        });
    }

    static saveReminder(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/call-log/reminder/save',
                data: data,
                dataType: "json"
            }).done(function (res) {
                if (res) {
                    resolve(res);
                } else {
                    reject();
                }
            }).fail(function () {
                reject('Cannot save reminder !')
            })
        });
    }

    static getCities() {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: '/api/v1/cities',
                dataType: "json"
            }).done(function (res) {
                if (_.isEmpty(res.data) == false && res.code == 200) {
                    resolve(res.data);
                } else {
                    reject({});
                }
            }).fail(function () {
                reject('Cannot load cities !')
            })
        });
    }
}
export default callListApi;
