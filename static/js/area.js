function select1() {
		var province=$('#S1').attr("data-s");
            $.ajax(
            {
                type: "post",
                url: "/common/area.json",
                data: { "type": "province" },
                success: function (msg) {
                	msg = eval("(" + msg + ")");
                	var selected="";
                    for (var i = 0; i < msg.length; i++) {
                    	if(msg[i].ProvinceID==province){
                    		selected="selected";
                    	}else{
                    		selected="";
                    	}
                        $("#S1").append("<option value=" + msg[i].ProvinceID + " "+selected+">" + msg[i].ProvinceName + "</option>");
                    }
                    select2();
                }
            })
};
function select2() {
	 $("#S2").html("");
            var provinceID=$('#S1').val();
            var city=$('#S2').attr("data-s");
            $.ajax(
            {
                type: "post",
                url: "/common/area.json",
                data: { "type": "city","provinceID":provinceID },
                success: function (msg) {
                	msg = eval("(" + msg + ")");
                	var selected="";
                    for (var i = 0; i < msg.length; i++) {
                    	if(msg[i].CityID==city){
                    		selected="selected";
                    	}else{
                    		selected="";
                    	}
                        $("#S2").append("<option value=" + msg[i].CityID + " "+selected+">" + msg[i].CityName + "</option>");
                    }
                    select3();
                }
            })
};
function select3() {
	 $("#S3").html("");
            var cityID=$('#S2').val();
            var district=$('#S3').attr("data-s");
            $.ajax(
            {
                type: "post",
                url: "/common/area.json",
                data: { "type": "district","cityID":cityID },
                success: function (msg) {
                	msg = eval("(" + msg + ")");
                	var selected="";
                    for (var i = 0; i < msg.length; i++) {
                    	if(msg[i].DistrictID==district){
                    		selected="selected";
                    	}else{
                    		selected="";
                    	}
                        $("#S3").append("<option value=" + msg[i].DistrictID + " "+selected+">" + msg[i].DistrictName + "</option>");
                    }
                }
            })
};