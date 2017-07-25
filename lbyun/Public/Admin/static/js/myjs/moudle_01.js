 var pathuser=[]; 
		//弹出一个页面层
		$('#thelist').on('click',function(){
			  layer.open({
			  type: 2,
			  title: false,
			  closeBtn: 1, //不显示关闭按钮
			  shade: [0],
			  area: ['800px', '600px'],
			  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
			  /*time: 2000,//2秒后自动关闭*/ 
			 /* anim: 2,*/
			 title: '自定义修改',
			  maxmin:true, //开启最大化最小化按钮
			  content: ['<%=basePath%>module_style/upload_photo.jsp', 'no'], //iframe的url，no代表不显示滚动条
			  end: function(){ //此处用于演示
				 
			      pathuser=$("#picc").val().split(",");
			     
			  
			      if (pathuser !='' &&  pathuser !=null &&  pathuser !=undefined) {
			    	    $("#thelist").html("");
						
						 $("#indicator").html("");
						
						  for (var i = 0; i < pathuser.length; i++) {
							  $("#thelist").append("<li class='fcon'><img  src='<%=basePath%>uploadFiles/wepictures/"+pathuser[i]+"'></li>"); 
						  }
						  for (var i =0;  i< pathuser.length; i++) {
							   $("#indicator").append("<a hidefocus='true' target='_self' class=''><i></i></a>");
						  }
						  

							Qfast.add('widgets', { path: "<%=basePath%>static/module_option/js/terminator2.2.min.js", type: "js", requires: ['fx'] });  
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
						 
						 /*  $("#indicator li").eq(0).addclass("active") */
					   }
	            }
			});
		});
		//弹出上传icon的页面
		/* $('td').on('click',function(){ */
			
			function trtdalert(index){
			
			
			var index=$(index);
			
			  layer.open({
			  type: 2,
			  title: false,
			  closeBtn: 1, //不显示关闭按钮
			  shade: [0],
			  area: ['800px', '600px'],
			  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
			  /*time: 2000,//2秒后自动关闭*/ 
			 /* anim: 2,*/
			  content: ['<%=basePath%>module_style/upload_icon.jsp', ''], //iframe的url，no代表不显示滚动条
			  title: '自定义修改',
			  maxmin:true, //开启最大化最小化按钮
			  end: function(){ //此处用于演示
				  
				 
				  
				  if($("#inpparent").val() !='编辑'){
					  
					  
					  
				     index.find("span").text($("#inpparent").val());
				     index.find("input").val($("#inpparenturl").val());
				     $("#inpp1").val($("#inpparent").val());
				     
				  }
					
			
			    
				      if($("#inpparentpic").val() !=''){
				    	  
				          index.find("img").attr('src',$("#inpparentpic").val());
				          $("#inpp2").val($("#inpparentpic").val());
				          
				      }
			      
			      if($("#inpparentpic1").val()!='<%=basePath%>static/module_option/images/img.jpg'){
			    	
			      var pathpiccuser=$("#inpparentpic1").val().split(",");
		
			  
			      if (pathpiccuser !='' &&  pathpiccuser !=null &&  pathpiccuser !=undefined) {
						 
						
						  for (var i = 0; i < pathpiccuser.length; i++) {
							
							  $("#inpparentpic1").val(pathpiccuser[0])
							  index.find("img").attr('src',$("#inpparentpic1").val());
							  $("#inpparentpic1").val("<%=basePath%>static/module_option/images/img.jpg");
							  $("#inpp3").val($("#inpparentpic1").val());
						  }
						 
						 
					   }
			      }
	            }
			});
		/* }); */
		}
		