var Demo = (function() {
	function demoUpload() {
		var $uploadCrop;
		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            reader.onload = function (e) {
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	});
	            	$('.upload-demo').addClass('ready');
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}

		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 350,
				height: 350,
				type: 'circle'
			},
			boundary: {
				width: 400,
				height: 400
			}
		});
		$('#upload').on('change', function () { 
			readFile(this); 
			$(".btn.file-btn").show();
		});

		$('#btn-valider').on('click', function (ev) {
			$uploadCrop.croppie('result',{type: 'canvas',size:'viewport',format :'png'}).then(function (canvas) {
				$("#photo").val(canvas); 
					
					Update_infos_identification(base64_encode("traitement_ajax/main.php"));
				
							
				
			});

		});

		$('#btn-suivant').on('click', function (ev) {
			$uploadCrop.croppie('result',{type: 'canvas',size:'viewport',format :'png'}).then(function (canvas) {
				$("#photo").val(canvas); 
					
					btn_suivant_Update_infos_identification(base64_encode("traitement_ajax/main.php"));
				
							
				
			});

		});

	}


	function init() {
		demoUpload();
	}
	return {
		init: init
	};

})();





