app
	.factory('LoggerService', [ function() {
    	return {
    	$log: function (message, severity, type, effect) {
			if(type===undefined || type=="") { 
				type = "bar" 
			}
			
			if(severity===undefined || severity=="") {
				severity = "error";
			} 
			
			if(effect===undefined || effect=="") {
				effect="slidetop";
			} 

		
			// create the notification
			var notification = new NotificationFx({
					message : message,
					layout : type, //bar, attached, growl
					effect : effect, //scale, jelly, slide, 'slidetop'
					type : severity, // notice, warning or error
					onClose : function() {}
				});

				// show the notification
				notification.show();
		
		},
		$error: function (message) {
		    var severity = "error";
		    var type = "growl";
		    var effect = "slide";
		    var message = "<span class='fa fa-exclamation-circle fa-3x pull-left'></span><p>" + message + "</p>";
		    
		        var notification = new NotificationFx({
		            message: message,
		            layout: type,
		            effect: effect,
		            type: severity,
		            onClose: function() {
		            }
		        });
		        notification.show();
		},
		$ok: function (message) {
		    var severity = "notice";
		    var type = "growl";
		    var effect = "slide";
		    var message = "<p>Data Saved</p>"+(message?message:"");
		    
		        var notification = new NotificationFx({
		            message: message,
		            layout: type,
		            effect: effect,
		            type: severity,
		            onClose: function() {
		            }
		        });
		        notification.show();
		}
	};
}]);