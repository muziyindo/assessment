 $(function() {
	 
	
    $("#btn-company").on("click",function(){
		
		 $('#loader_company').show();
            $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/internal/insertCompanyInfo',
                data: $('#form_company').serialize(),
                success: function(response)
                {
                    if(response.trim()==("success").trim())
                    {
                        $('#loader_company').hide();
                        //$("#success_").show();
                        //$('#form1')[0].reset();
						
						//hide company rating form
						$("#company").css("display","none");
						//revert background of company rating highlight and triangle
						$("#wiz-company").css({"background":"#2a5290","color":"#fff"});
						$("#wiz-company_").css({"border-left":"40px solid #2a5290"});
						
						//highlight department header and triangle
						$("#wiz-department").css({"background":"#fff","color":"#2a5290"});
						$("#wiz-department_").css({"border-left":"40px solid #fff"});
						//display department form
						$("#department").css("display","block");
                    }
                    else
                    {
                        $('#loader_company').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        /*setTimeout(function(){
                            $('#error_').hide();
                        },2000);*/
                    }
                    //alert(response)
                }
            }); //end ajax function
		
		
		
	});
	
	$("#btn-job").on("click",function(){
		
		//hide job form
		$("#job").css("display","none");
		//revert background of department highlight and triangle
		$("#wiz-job").css({"background":"#2a5290","color":"#fff"});
		$("#wiz-job_").css({"border-left":"40px solid #2a5290"});
		
		//highlight supervisor header and triangle
		$("#wiz-supervisor").css({"background":"#fff","color":"#2a5290"});
		$("#wiz-supervisor_").css({"border-left":"40px solid #fff"});
		//display job form
		$("#supervisor").css("display","block");
		window.scroll(0,0);
		
	});
	
	$("#btn-supervisor").on("click",function(){
		
		//hide supervisor form
		$("#supervisor").css("display","none");
		//revert background of department highlight and triangle
		$("#wiz-supervisor").css({"background":"#2a5290","color":"#fff"});
		$("#wiz-supervisor_").css({"border-left":"40px solid #2a5290"});
		
		//highlight reward header and triangle
		$("#wiz-reward").css({"background":"#fff","color":"#2a5290"});
		$("#wiz-reward_").css({"border-left":"40px solid #fff"});
		//display job form
		$("#reward").css("display","block");
		window.scroll(0,0);
		
	});
	
	
});