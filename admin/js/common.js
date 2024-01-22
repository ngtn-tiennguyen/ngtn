function queryData(url, dataSend, callback) {

    $.ajax({
        type: 'GET',
        url: url,
        data: dataSend,
        async: true,
        dataType: 'json',
        success: callback
    });
}

var upload = function (photo, callback) {
	
	var formData = new FormData();
    formData.append('photo', photo[0]);
    
    $.ajax({
        url: 'php/process.php',
        type : 'POST',
        data : formData,
        async: true,
        xhrFields: {
            withCredentials: true
        },
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
        success : callback
    });
};