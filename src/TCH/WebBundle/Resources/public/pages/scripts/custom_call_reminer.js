/**
 * Created by hautruong on 19/01/2017.
 */

;var NotificationCallReminder = function () {
    var pub = {};
    pub.getCallReminder = function (page = 1, pageSize = 10) {
        var datasend = {orderBy: "reminderTime", orderDirection: "ASC", page: page, pageSize: pageSize};
        $.ajax(
            {
                url: '/api/v1/call-log/reminder/user/current',
                type: 'GET',
                data: datasend,
                success: function (data) {
                    if ((data.code || 200) === 500) {
                        return;
                    }
                    $('#notification-call-reminder-badge').html(data.total || 0);

                    var items = data.items || [];
                    var callHtml = prepareReminder(items);

                    $('#notification-call-reminder ul.call-reminder').html(callHtml);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            }
        )
    };

    pub.markReadReminder = function (reminderId) {
        var dataPost = {status: 'disabled'};
        $.ajax(
            {
                url: '/api/v1/call-log/reminder/' + reminderId + '/update',
                type: 'PUT',
                data: dataPost,
                dataType: "json",
                success: function (data) {
                    pub.getCallReminder();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            }
        )
    };

    pub.handleSetIntervalReminder = function (time = 600000) {
        pub.getCallReminder();
        setInterval(function () {
            pub.getCallReminder();
        }, time);
    };

    pub.init = function () {
        pub.handleSetIntervalReminder(500000);
    };

    var prepareReminder = function (reminders) {
        var tpl = '';
        tpl += '<li class="external"> <h3> <span class="bold">' + iCareLocale['notification_call_reminder.title']+ '</span></h3> </li>';
        if (0 === reminders.length) {
            tpl += '<li class="remind-item">'+iCareLocale['notification_call_reminder.no_call']+'</li>';
            return tpl;
        }
        reminders.forEach(reminder => {
            tpl += '<li class="remind-item">';
            tpl += '    <div class="cr-item">';
            tpl += '       <div class="cr-left">';
            tpl += '            <h3>' + moment.utc(reminder.reminder_time).format('HH:mm') + '</h3>';
            tpl += '            <h5>' + moment.utc(reminder.reminder_time).format('YYYY-MM-DD') + '</h5>';
            tpl += '       </div>';
            tpl += '        <div class="cr-right">';
            tpl += '            <h4>' + reminder.customer_name + '</h4>';
            tpl += '            <h4>' + reminder.customer_phone + '</h4>';
            tpl += '           <a href="#" onclick="return NotificationCallReminder.markReadReminder(' + reminder.id + ')">Mark Called</a>';
            tpl += '        </div>';
            tpl += '        <div style="clear: both"></div>';
            tpl += '    </div>';
            tpl += '</li>';
        });

        return tpl;
    };

    return pub;
}();
$(function () {
    //NotificationCallReminder.handleSetIntervalReminder();
});
