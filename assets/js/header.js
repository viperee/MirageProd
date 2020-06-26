$().ready(() => {
    $(".btn-with-icon").hover(hoverInHeader, hoverOutHeader);
    SA.redirection_mobile ({
        tablet_redirection : "true",
        mobile_url : "m.mirage.victoriapereira.fr",
        mobile_prefix : "https"
    });
});

function hoverInHeader() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace("-black.svg", ".svg");
    $(this).find('img').attr('src', imgSrc);
}

function hoverOutHeader() {
    let imgSrc = $(this).find('img').attr('src');
    imgSrc = imgSrc.replace(".svg", "-black.svg");
    console.log(imgSrc);
    $(this).find('img').attr('src', imgSrc);
}