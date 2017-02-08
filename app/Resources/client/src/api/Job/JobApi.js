/**
 * Created by hautruong on 24/01/2017.
 */
import $ from 'jquery';
import _ from 'lodash';

class JobApi {
    static getJobApi(term) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: '/api/v1/posts'
            }).done(function (res) {
                resolve(res);
            }).fail(function () {
                reject('No Result');
            });
        });
    }
}

export default JobApi;