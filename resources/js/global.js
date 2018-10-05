Global = {

	isUserAgentMobile : function() {
		if ((/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i
				.test(navigator.userAgent.toLowerCase()))) {
			return true;
		} else {
			return false;
		}
	},

	getURLParameter : function(name) {
		return decodeURIComponent((new RegExp('[?|&]' + name + '='
				+ '([^&;]+?)(&|#|;|$)').exec(location.search) || [ , "" ])[1]
				.replace(/\+/g, '%20'))
				|| null;
	},
	
	getElementIndexOnDom : function(caller,identifier,parent)
	{
		return $(identifier).closest(parent).find(identifier).index(caller);
	},

	ajaxForm : function(dataForAjax, urlForAjax, successCallBack) {

		$.ajax({
			type : 'POST',
			url : urlForAjax,
			data : dataForAjax,
			dataType : "json",
			beforeSend : function() {
				//		displayModalView(true);
			},
			success : function(data) {
				if (data !== null) {
					successCallBack(data);
				} else {
					//alert("Unable to get a response from the server.");
				}
			},
			error : function() {
				//alert("Experiencing problems connecting to the server.");
			},
			complete : function() {
				//displayModalView(false);
			}
		});
	},
	
	ajaxCall : function(dataForAjax, urlForAjax, successCallBack) {

		$.ajax({
			type : 'POST',
			url : urlForAjax,
			data : dataForAjax,
			contentType: "application/json",
			dataType : "json",
			beforeSend : function() {
				//		displayModalView(true);
			},
			success : function(data) {
				if (data !== null) {
					successCallBack(data);
				} else {
					//alert("Unable to get a response from the server.");
				}
			},
			error : function() {
				//alert("Experiencing problems connecting to the server.");
			},
			complete : function() {
				//displayModalView(false);
			}
		});
	},

}
/* Global Document Ready */
$(function() {	

});