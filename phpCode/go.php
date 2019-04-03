<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <script src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('table').hide();
            $("#send").click(function(){
//                console.log('提交了')
                var cont = $("#my").serialize();
//               console.log(JSON.stringify(cont))
                $.ajax({
                    url:'ab.php',
                    type:'POST',
//                    dataType:'json',
                    data:(cont),
                    contentType:'application/x-www-form-urlencoded',//给后端的传输格式,
                    success:function(data){
                        console.log(data)
//                        var str = data.username + data.age + data.job;
//                        $("#result").html(str);
                    }
                });
            });
        });
    </script>
</head>

<body>
<div id="result">一会看显示结果</div>
<form id="my" action="" method="post">
    <p><span>姓名：</span><input type="text" name="username" /></p>
    <p><span>年龄：</span><input type="text" name="age" /></p>
    <p><span>工作：</span><input type="text" name="job" /></p>
</form>
<button id="send">提交</button>
<button id="show" onclick="showUserInfo()">显示</button>
<script>
    function showUserInfo() {
        $('table').show();
        $.ajax({
            url:"showUserInfo.php",
            type:'POST',
            dataType:'json',
            success:function(data){
//              console.log(data);
                var tbody=$('#tbody1');
                tbody.empty();
               $.each(data,function (index,item) {
//                   console.log(item.name)

                   var tr="<tr><td>"+item.name+"</td><td>"+item.age+"</td><td>"+item.job+"</td></tr>"
                   tbody.append(tr);
               })

//                $.each(data,function (index, item) {
//                    console.log(item)
//                })
//                        var str = data.username + data.age + data.job;
//                        $("#result").html(str);
            }
        })
    }
</script>

<table border="1">
    <thead>
    <tr>
        <th>姓名</th>
        <th>年龄</th>
        <th>工作</th>
    </tr>
    </thead>
    <tbody id="tbody1">
    <tr >
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>

</body>
</html>