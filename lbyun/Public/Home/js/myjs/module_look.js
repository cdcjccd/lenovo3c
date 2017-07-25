 
 var newpot=[];
 
 newpot=$("#newpot").val().split(",");

 $(document).ready(function(){
	 
	
	 newpotfunction();
	
	 
 })
 

 
function newpotfunction(){
	 
	 if(newpot.length>0){
		 for(var i=0;i<newpot.length;i++){
			 
			 
			 switch(newpot[i]){
			 
			 case "隐藏新闻功能": 
				 
				 $("div[class='xinwen']").attr("style","display:none");
				 break;
			 case "隐藏产品名称": 
				 
				 $("div[class='logo']").attr("style","display:none");
				 break;
			 case "显示新闻功能":
				
			    	 $("div[class='xinwen']").attr('style','display:inline');
			    	 break;
			 case "显示产品名称":
				 
			    	 $("div[class='logo']").attr('style','display:inline');
			    	 break;
			 }
			 
		 }
	 }
 }