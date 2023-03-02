$('#menu-btn').click(function(){
    $('#menu').toggleClass("active");
    console.log('test');
});

function nav(loc){
    window.location.href = "/admin/" + loc;
    // console.log(loc);
}

$('#items-btn').click(function(){
    $("#items-btn").css({"border-left": "4px solid #fff"});
})