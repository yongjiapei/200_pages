
var zData = {token:localStorage.getItem('token')};

//热门检索
function A10(){
    zData['type']='pc';
    $.ajax({
        url: domain+'/apipc/search/book_search_hot',
        data: zData,
        method: "POST",
        dataType:"json",
        success: function (res) {
            console.log(res);
            var str = "";
            for(var i in res.data){
                str += `<a href="">`+res.data[i]+`</a>`;
            }
            $(".scw2").append(str);
        }
    })
}

//高级搜索出版时间
function A11time(Yname,Mname){
    var startY = 1960,
        endY = new Date().getFullYear(),
        startM = 1,
        endM = 12;
    var year = "",
        month = "";
    for(var i=startY;i<=endY;i++){
        year += `<option>`+i+`</option>`;
    }
    for(var i=startM;i<=endM;i++){
        month += `<option>`+i+`</option>`;
    }
    console.log(year);
    $("#"+Yname).html(year);
    $("#"+Mname).html(month);
}

//高级检索提交
function A11(){

}