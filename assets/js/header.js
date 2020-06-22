$().ready(() => {
    $(".btn-icon-ticket").hover(hoverIn, hoverOut);
    SA.redirection_mobile ({
        tablet_redirection : "true",
        mobile_url : "m.mirage.victoriapereira.fr",
        mobile_prefix : "https"
    });
});

function hoverIn() {
    $(this).find('img').attr('src', 'assets/icons/ticket_black.svg');
}

function hoverOut() {
    $(this).find('img').attr('src', 'assets/icons/ticket.svg');
}