var data = [
	{
		"name": "刘三",
		"cellnumber": "123456",
		"address": "Shandong"
	},
	{
		"name": "金四",
		"cellnumber": "123654",
		"address": "Hunan"
	},
	{
		"name": "杨五",
		"cellnumber": "123546",
		"address": "Beijing"
	}
];

var str = "";
$.each( data, function(){
	str += "<p>" +
				 "姓名：" + this["name"] + "<br />" +
				 "手机：" + this["cellnumber"] + "<br />" +
				 "地址：" + this["address"] + "<hr />" +
				 "</p>";
} );
$("#container").html( str );