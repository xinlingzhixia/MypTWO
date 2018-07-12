
// goods1-4html商品详情页的图片点击变大函数
function changeimg1() {
    var goodsimg1 = document.getElementById("goodsimg1");
    var goodsimg = document.getElementById("goodsimg");
    goodsimg.src = goodsimg1.src;
}

function changeimg2() {
    var goodsimg2 = document.getElementById("goodsimg2");
    var goodsimg = document.getElementById("goodsimg");
    goodsimg.src = goodsimg2.src;
}

function changeimg3() {
    var goodsimg3 = document.getElementById("goodsimg3");
    var goodsimg = document.getElementById("goodsimg");
    goodsimg.src = goodsimg3.src;
}

// cart.html删除商品函数
function delGoods(id) {
    if (window.confirm('你确定要删除商品吗？'+id)){
        location.href = "index.php?g=home&c=goods&a=delete&id="+id;
    }
}