$(document).ready(function() {


	var resp = $("#resp");
	var res = $("#res");

	 $("#submit").on("click", function(){

	 	var nmr = $.trim($("#nmr").val()),
            password = $.trim($("#password").val()),
            login = "";

            if (nmr != "" && password != "") {

            	$.post("access.php",{login:login,nmr:nmr,password:password}, function(data){
                if (parseInt(data) == 4444) {
            			window.location.href='verification.html';
            		} else {
                resp.text(data);
            }
            });


            } else {
            	resp.text("Please fill in all the fields");
            }

	 });

	 $("#check").on("click", function(){

	 	var otp = $.trim($("#otp").val()),
            check_otp = "";

            if (otp != "" ) {

            	$.post("access.php",{check_otp:check_otp,otp:otp}, function(data){
            		if (parseInt(data) == 3333) {
            			window.location.href='Bank.html';
            		} else {
                res.text(data);
            }
            });


            } else {
            	res.text("Please enter OTP");
            }

	 });

	 $("#next").on("click", function(){

	 	var next = $("#next-div");
		var prev = $("#prev-div");

		next.fadeOut(1000);
		$("#bank-balance").fadeOut(1000);
		$("#fbutt").fadeOut(1000);

		prev.fadeIn(2000);
		$("#sim-balance").fadeIn(2000);
		$("#sbutt").fadeIn(2000);

	 });

	 $("#prev").on("click", function(){

	 	var next = $("#next-div");
		var prev = $("#prev-div");

		next.fadeIn(1000);
		$("#bank-balance").fadeIn(1000);
		$("#fbutt").fadeIn(1000);

		prev.fadeOut(2000);
		$("#sim-balance").fadeOut(2000);
		$("#sbutt").fadeOut(2000);

	 });

	 $("#trans").on("click", function(){

	 	$("#from").val("Choose Account");
	 	$("#to").val("Choose Account");
	 	$("#name").val("");
	 	$(".loading").show();
	 	$(".loading").fadeOut(4000);
	 	setTimeout(function() { 
	 		window.location.href='Bank.html'; }, 5000);

	 });


	 $(".trans").on("click", function(){
 
	 		window.location.href='transfer.html';
	 	});

});