<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>抽奖</title>
</head>
    <h1>抽奖页面</h1>
<body>
    <button id="btn-prize">抽奖</button>
</body>
</html>
<script src="/jquery.js"></script>
<script>
    $(document).on("click","#btn-prize",function(){
        // alert(111);
        $.ajax({
            
            url:"/add",
            type:"get",
            adtaType: 'json',
            success:function(d){
                console.log(d)
                if(d.errno==400003){
                    window.location.href = '/login'
                }
            }
        });
    })
</script>