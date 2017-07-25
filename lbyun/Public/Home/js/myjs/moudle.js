
var lbpi=[];
var  cont=[];
var pic=[];
var userurl=[];

lbpic=parent.lbpic;
pic=parent.pic;
cont=parent.cont
userurl=parent.userurl;


$(document).ready(function(){
	 
	 apple();
	 apple1();
	 dispicture();
	 
})






   function apple(){
   	
	   if(lbpic !=null && lbpic !=''){
		   
	  
		 $("#thelist").html("");
		 $("#indicator").html("");
		
		  for (var i = 0; i < lbpic.length; i++) {
			  $("#thelist").append("<li class='fcon'><img  src='"+lbpic[i]+"'></li>"); 
		  }
		  for (var i =1;  i< lbpic.length; i++) {
			   $("#indicator").append("<a hidefocus='true' target='_self' class=''><i></i></a>");
		  }
		 
		  /*  $("#indicator li").eq(0).addclass("active")  */
		  
		  
		  Qfast.add('widgets', { path: "static/module_option/js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
			Qfast(false, 'widgets', function () {
				K.tabs({
					id: 'fsD1',  			//焦点图包裹id
					conId: "thelist",  		//大图域包裹id
					tabId:"indicator",  		//小圆点数字提示id
					tabTn:"a",				
					conCn: '.fcon',			//大图域配置class
					auto: 1, 				//自动播放1或0
					effect: 'fade', 		//效果配置
					eType: 'click', 		//点击事件
					pageBt:true,			//是否有按钮切换页码
					bns: ['.prev', '.next'],//前后按钮配置class                
					interval: 3000 			//停顿时间
				}) 
			}) 
		  
	   }  
		  
		  
}

function apple1(){
	 
	 
	 if(cont !=null && cont !=''){
		  
		   $("#addtr").html('');
		  for(var i=0; i<cont.length;i++){
				                  
				$("#addtr").append("<li onclick='trtdalert(this)'>"+
						
						"<div>"+"<b>"+
						  "<img src='"+pic[i]+"'>"+"</b>"+
						"</div>"+
						"<span>"+cont[i]+"</span>"+
						"<input type='hidden' value='"+userurl[i]+"'/>"+
					"</li>")                 
			  
		      }
	      }
	 
	 
	 
}



function dispicture(){
	  var picture=$("#trtdtab").find('img')
	 $.each(picture,function (i,index){
		 console.log($(this).attr('src'));
		 if($(this).attr('src')=='http://localhost:8080/Ylb/static/module_option/images/img.jpg'){
			 
			 $(this).parent().remove();
		 }
	 })
	  
}









