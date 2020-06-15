$().ready(() => {
    $(".img-ambiance").click(function(){
        console.log("CLICK");
        console.log($(this));
        let imgSrcMain = $(this).attr('src');
        console.log(imgSrcMain);
        $("#img-ambiance-main").attr('src', imgSrcMain);
    })
    }
);