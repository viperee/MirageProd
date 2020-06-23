$().ready(() => {
    $(".btn-with-icon").hover(hoverIn, hoverOut);
    SA.redirection_mobile ({
        tablet_redirection : "true",
        mobile_url : "m.mirage.victoriapereira.fr",
        mobile_prefix : "https"
    });
});

function hoverIn() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace("_black.svg", ".svg");
    $(this).find('img').attr('src', imgSrc);
}

function hoverOut() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace(".svg", "_black.svg");
    console.log(imgSrc);
    $(this).find('img').attr('src', imgSrc);
}