//新建一个

    function  new_built(){
    	
    	layer.open({
			  type: 2,
			  title: false,
			  closeBtn: 1, //不显示关闭按钮
			  shade: [0],
			  area: ['1200px', '800px'],
			  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
			  /*time: 2000,//2秒后自动关闭*/ 
			 /* anim: 2,*/
			   title: '新增延保产品',
			  maxmin: true, //开启最大化最小化按钮
			  content: ['function_warranty/new_build.jsp', ''], //iframe的url，no代表不显示滚动条
			  end: function(){ //此处用于演示
				 
						 /*  $("#indicator li").eq(0).addclass("active") */
			
			     }
			});
    	
    }
		
		
	//编辑
		function compile_edit(id){
			
			  layer.open({
				  type: 2,
				  title: false,
				  closeBtn: 1, //不显示关闭按钮
				  shade: [0],
				  area: ['1200px', '800px'],
				  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
				  /*time: 2000,//2秒后自动关闭*/ 
				 /* anim: 2,*/
				   title: '自定义修改',
				  maxmin: true, //开启最大化最小化按钮
				  content: ['function_warranty/compile.jsp?EXTENDEDWARRANTY_ID='+id, '0'], //iframe的url，no代表不显示滚动条
				  end: function(){ //此处用于演示
					 
							 /*  $("#indicator li").eq(0).addclass("active") */
				
				     }
				});
			  
			
		} 	
		
		
		//查看
		function compile_look(id){
			
			  layer.open({
				  type: 2,
				  title: false,
				  closeBtn: 1, //不显示关闭按钮
				  shade: [0],
				  area: ['800px', '800px'],
				  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
				  /*time: 2000,//2秒后自动关闭*/ 
				 /* anim: 2,*/
				   title: '查看详情',
				  maxmin: true, //开启最大化最小化按钮
				  content: ['extendedwarranty/look.do?EXTENDEDWARRANTY_ID='+id, '0'], //iframe的url，no代表不显示滚动条
				  end: function(){ //此处用于演示
					 
							
				
				     }
				});
			
		} 	
		
		
		var EXTENDEDWARRANTY_ID;
		
		function compile_copy(id){
			
			EXTENDEDWARRANTY_ID=id;
			layer.open({
				  type: 2,
				  title: '选择要复制的产品',
				  shadeClose: true,
				  shade: 0.8,
				  area: ['900px', '90%'],
				  content: 'extendedwarranty/copydevice.do?EXTENDEDWARRANTY_ID='+id    //iframe的url
				}); 
			
			
		}
		
		
		
		
		
		
		$('#look').on('click',function(){
				  layer.open({
				  type: 2,
				  title: false,
				  closeBtn: 1, //不显示关闭按钮
				  shade: [0],
				  area: ['800px', '500px'],
				  offset: 'cb', //中间弹出，rb右下角弹出，lb左下角弹出
				  /*time: 2000,//2秒后自动关闭*/ 
				 /* anim: 2,*/
				   title: '自定义修改',
				  maxmin: true, //开启最大化最小化按钮
				  content: ['look.html', 'no'], //iframe的url，no代表不显示滚动条
				  end: function(){ //此处用于演示
					 
							 /*  $("#indicator li").eq(0).addclass("active") */
				
				     }
				});
			});
		
		
		
		