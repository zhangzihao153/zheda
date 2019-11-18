$(function (){
			var data=document.getElementById("data");
			var myDate = new Date();
			var xingqi = Math.ceil(myDate.getTime()/1000/3600/24%7);
			var menth = myDate.getMonth()+1;
			var day = myDate.getDate();
			var arr= ["三","四","五","六","日","一","二","三"];
			console.log(xingqi)
			data.innerHTML = myDate.getFullYear()+"年"+menth+"月"+day+"日" +"&nbsp;&nbsp;"+ "星期"+arr[xingqi];
			var li=$("#navigation li");
			console.log(li);
			li.each(function (index){
				// console.log(index);
				$(this).click(function (){
					$(this).siblings().removeClass("active").end().addClass("active");
				})
			})
		})