$(function (){
			var data=document.getElementById("data");
			var myDate = new Date();
			var xingqi = Math.ceil(myDate.getTime()/1000/3600/24%7);
			var menth = myDate.getMonth()+1;
			var day = myDate.getDate();
			var arr= ["三","四","五","六","日","一","二","三"];
			data.innerHTML = myDate.getFullYear()+"年"+menth+"月"+day+"日" +"&nbsp;&nbsp;"+ "星期"+arr[xingqi];
			var li=$("#navigation li");
			console.log(li);
			li.each(function (index){
				console.log(index);
				$(this).click(function (){
					$(this).siblings().removeClass("active").end().addClass("active");
				})
			})
			//轮播图
			var div1=$(".context>.left>.img");
			var div1width=div1.width();
			var ul=$(".context>.left>.img>ul");
			var li=$(".context>.left>.img>ul>li");
			console.log(li)
			var a=$(".context>.left>.img>#img2>a");
			var index2=0;
			var set;
			a.each(function (index){
			    $(this).click(function (){
			        bannerRun(index);
			    })
			});
			function bannerRun(index){
			    index2=index;
			    a.removeClass("active").eq(index).addClass("active");
			    ul.stop().animate({"left":-div1width*index},600);
			}
			//自动滚动
			autoRum();
			function autoRum(){
			    set = setInterval(function (){
			        if(index2==li.length-1){
			            seamless();
			            index2=0;
			        }else{
			            index2++;
			            bannerRun(index2);
			        }
			    },2000)
			};
			function seamless(){
			    ul.append($(".context>.left>.img>ul>li:first").clone());
				console.log($(".context>.left>.img>ul>li:first"))
			    var left=-div1width*(li.length);
			    console.log(left);
			    ul.stop().animate({"left":left},function (){
			        ul.css({"left":0});
			        $(".context>.left>.img>ul>li:last").remove();
			    })
			    a.removeClass("active").eq(0).addClass("active");
			}
			div1.hover(function (){
			    clearInterval(set);
			},function (){
			    autoRum();
			})
		})