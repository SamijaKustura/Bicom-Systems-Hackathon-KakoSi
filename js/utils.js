class Utils {
    static jsonize_form(selector) {
        var data = $(selector).serializeArray();
        var form_data = {};
        for (var i = 0; i < data.length; i++) {
            form_data[data[i].name] = data[i].value;
        }
        return form_data;
    }


    static json2form(selector, data) {
        for (const attr in data) {
            $(selector + " *[name='" + attr + "']").val(data[attr]);
        }
    }


    static request(endpoint, method, body, success, error) {
        $.ajax({
            url: endpoint,
            type: method,
            data: body,
            beforeSend: function (xhr) {
                if (localStorage.getItem("token")) {
                    xhr.setRequestHeader('Authentication', localStorage.getItem("token"));
                }
            },
            success: function (data) {
                success(data);
            },
            error: function (jqXHR, textStatus, errorThrow) {
                if (error) {
                    error(jqXHR, textStatus, errorThrow);
                } else {
                    toastr.error(jqXHR.responseJSON.message);
                }
            }
        });
    }

    static post(endpoint, body, success, error) {
        this.request(endpoint, "POST", body, success, error);
    }
}