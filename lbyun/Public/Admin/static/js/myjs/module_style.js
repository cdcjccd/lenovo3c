 

var newpotarry=[];


  $(document).ready(function(){
	  
	  
	 
	  
	   newpotfunction();
	   
   })


   function newpotfunction(){
	  
	  
	   newpotarry=newpot.split(",");
	   
	   for(i=0;i<newpotarry.length;i++ )
	    {
		   
		  
		   switch (newpotarry[i]){
		     case "隐藏新闻功能": 
		       $("div[class='xinwen']").attr('style','display:none');
		       break;
		     case "隐藏产品名称":
		    	 $("div[class='logo']").attr('style','display:none');
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
   