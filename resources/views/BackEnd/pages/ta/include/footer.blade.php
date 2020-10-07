					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery-ui/js/jquery-ui.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/popper.js/js/popper.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/bootstrap/js/bootstrap.min.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/pages/waves/js/waves.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/pages/widget/amchart/amcharts.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/pages/widget/amchart/serial.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/pages/widget/amchart/light.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/bower_components/chartist/js/chartist.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/js/pcoded.min.js') }} "></script>
		<script src=" {{ asset('BackEnd/files/assets/js/vertical/vertical-layout.min.js') }} "></script>
		<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/pages/dashboard/custom-dashboard.min.js') }} "></script>
		@stack('js')

		<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/jquery.validate.js') }} "></script>

		<script type="text/javascript">
        $.validator.addMethod("myPassword",function(value,element){
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/.test(value);
            });
    	</script>

		<script type="text/javascript">
			$().ready(function() {

	        $("#pass_res_form").validate({
	            rules: {
	            	old_password:{
	            		required: true
	            	},
	            	new_password:{
	            		required: true,
	            		myPassword: true,
                    	rangelength:[6,12]
	            	},
	                conf_password:{
	                	equalTo : "#new_password"
	                }
	            },
	            messages: {
	            	old_password:{
	            		required: "Please Enter Old Password"
	            	},
	            	new_password:{
	            		required: "Please Enter New Password",
	            		myPassword: "Password Must Contain Uppercas, Lowercase and Number",
                    	rangelength: "Password Must be 6 to 12 Characters"
	            	},
	                conf_password:{
	                	equalTo: "Password Does Not Match"
	                }
	            }
	        });
	        
	        });
		</script>
		
		<script type="text/javascript" src=" {{ asset('BackEnd/files/assets/js/script.min.js') }} "></script>
	</body>
	
</html>