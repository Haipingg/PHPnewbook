// JavaScript Document
function DisTable()
{
	var a=document.getElementById("collect");
	a.style.display="block";
}

function confirmOrder()
  {
     if (confirm("你确认要购买这些书？"))
	 {
        alert("购买成功")
     }else{
           alert("继续购买吧")
          }
}

