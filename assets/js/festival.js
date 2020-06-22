$().ready(() => {
    $(".img-ambiance").click(function(){
        let imgSrcMain = $(this).attr('src');
        var imgSrcFull = imgSrcMain.replace(/.*[0-9]/g, function (str) {
            return str.concat("-full")
        });
        imgSrcFull = imgSrcFull.replace('-hover.png','.svg');
        $("#img-ambiance-main").attr('src', imgSrcFull);
    })
        $(".img-ambiance").hover(hoverIn, hoverOut);
    }
);

function hoverIn() {
    let imgSrc = $(this).attr('src');
    let imgSrcHover = imgSrc.replace(/.*[0-9]/g, function (str) {
        return str.concat("-hover")
    });
    imgSrcHover = imgSrcHover.replace('.svg','.png');
    $(this).attr('src', imgSrcHover);
}

function hoverOut() {
    let imgSrcHover = $(this).attr('src');
    let imgSrcNoHover = imgSrcHover.replace('-hover.png', '.svg');
    $(this).attr('src', imgSrcNoHover);
}