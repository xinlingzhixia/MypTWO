$(function(){
	
	$(".seach-input").focus(function(){
		$(".seach2").css("display","block");
		$(".seach-input2").focus();
	})
	
	$(".seach-input2").blur(function(){
		$(".seach2").css("display","none");
		
	})
	
	$(".seach-button").click(function(){
		$(".seach-input").attr('placeholder','请输入关键');
	})
	
	
	
//	导航栏的显示隐藏子菜单
	$("#hmheadlefta").focus(function(){
		$("#hmhead_top_left_dianul").css("display","block");
		$("#hmheadleftspan").css("border","2px solid rgb(165,199,254)");
		$("#hmhead_top_left_dianul").focus();
	})
	$("#hmheadlefta").blur(function(){
		$("#hmhead_top_left_dianul").css("display","none");
		$("#hmheadleftspan").css("border","0px");
	})
	
	$("#hmheadrightul1li").mouseover(function(){
		$("#hmhead_top_right_dianul").css("display","block");
	})
	$("#hmhead_top_right_dianul").mouseover(function(){
		$("#hmhead_top_right_dianul").css("display","block");
	})
	$("#hmhead_top_right_dianul").mouseout(function(){
		$("#hmhead_top_right_dianul").css("display","none");
	})
	$("#hmheadrightul1li").mouseout(function(){
		$("#hmhead_top_right_dianul").css("display","none");
	})
	
	
	$("#hmheadmenu_ulli1").mouseover(function(){
		$(".hmheadmenuhover1").css("display","block");
	})
	$("#hmheadmenu_ulli1").mouseout(function(){
		$(".hmheadmenuhover1").css("display","none");
	})
	
	$("#hmheadmenu_ulli2").mouseover(function(){
		$(".hmheadmenuhover2").css("display","block");
	})
	$("#hmheadmenu_ulli2").mouseout(function(){
		$(".hmheadmenuhover2").css("display","none");
	})
	
	$("#hmheadmenu_ulli3").mouseover(function(){
		$(".hmheadmenuhover3").css("display","block");
	})
	$("#hmheadmenu_ulli3").mouseout(function(){
		$(".hmheadmenuhover3").css("display","none");
	})
	
	$("#hmheadmenu_ulli4").mouseover(function(){
		$(".hmheadmenuhover4").css("display","block");
	})
	$("#hmheadmenu_ulli4").mouseout(function(){
		$(".hmheadmenuhover4").css("display","none");
	})
	
	$("#hmheadmenu_ulli5").mouseover(function(){
		$(".hmheadmenuhover5").css("display","block");
	})
	$("#hmheadmenu_ulli5").mouseout(function(){
		$(".hmheadmenuhover5").css("display","none");
	})
	
	
	
//	<!--新品newproduct-->
	$("#xing11").click(function(){
		$("#xing11").css("display","none");
		$("#xing12").css("display","block");
	})
	$("#xing12").click(function(){
		$("#xing12").css("display","none");
		$("#xing11").css("display","block");
	})
	
	$("#xing21").click(function(){
		$("#xing21").css("display","none");
		$("#xing22").css("display","block");
	})
	$("#xing22").click(function(){
		$("#xing22").css("display","none");
		$("#xing21").css("display","block");
	})
	
	$("#xing31").click(function(){
		$("#xing31").css("display","none");
		$("#xing32").css("display","block");
	})
	$("#xing32").click(function(){
		$("#xing32").css("display","none");
		$("#xing31").css("display","block");
	})
	
	$("#xing41").click(function(){
		$("#xing41").css("display","none");
		$("#xing42").css("display","block");
	})
	$("#xing42").click(function(){
		$("#xing42").css("display","none");
		$("#xing41").css("display","block");
	})
	
	

	
	
	
	
})


	





//	加入H&M Club	
function joinhmclubdisplay() {
	//	加入H&M Club	
    var rclubc = document.getElementById("rclubc1");
    var rbox = document.getElementById("rbox1"); 
    if (rclubc.checked == true) {
        rbox.style.display = "block";
    }else{
        rbox.style.display = "none";
    }
}

//	第一行导航栏的显示隐藏子菜单
function Show_Hidden(obj)
{
	 if(obj.style.display=="none")
	 {
	  	obj.style.display='block';

	 }
	 else
	 {
	  	obj.style.display='none';

	 }
}

window.onload=function()
{
//	登录/加入 
	 var olinkr=document.getElementById("hmheadrighta1");
	 var odivr=document.getElementById("hmhead_top_right_dianul1");
	 olinkr.onclick=function()
	 {
		  Show_Hidden(odivr);

	 }

	 

}