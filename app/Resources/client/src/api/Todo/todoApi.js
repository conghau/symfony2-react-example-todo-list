/**
 * Created by hautruong on 08/02/2017.
 */
import $ from 'jquery';

class todoApi {
    static loadListTodo() {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `/api/v1/categories`,
            }).done(function (res) {
                resolve(res);
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static loadListTodoDetail(todoId) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "GET",
                url: `api/v1/category_items?category=${todoId}`,
            }).done(function (res) {
                resolve(res);
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static saveTodoItem(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `api/v1/category_items`,
                data: JSON.stringify(data),
                dataType: 'json'
            }).done(function (res) {
                resolve(res);
            }).fail(function () {
                reject('No Result');
            });
        });
    }

    static saveTodo(data) {
        return new Promise((resolve, reject) => {
            $.ajax({
                method: "POST",
                url: `api/v1/categories`,
                data: JSON.stringify(data),
                dataType: 'json'
            }).done(function (res) {
                resolve(res);
            }).fail(function () {
                reject('No Result');
            });
        });
    }
}
export default todoApi;