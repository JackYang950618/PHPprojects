/**
 * Created by 950618 on 2019/3/30.
 */

function initBody() {
    // alert("进入目录")
    var data=[{
        "name":'yh',
        'age':22
    },{
        "name":'jack',
        'age':33
    }];
    var data1=[{"apple":'苹果123','banana':'香蕉'}];
    // console.log(JSON.stringify(data))
    $.ajax({
        url:"target.php",
        type:"POST",
        data:{'array':data1},
        dataType:'json',
        // contentType:'application/json',
        success:function (res) {
            console.log(res)
        }
    });
}
