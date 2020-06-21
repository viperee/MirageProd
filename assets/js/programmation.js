$().ready(() => {
    $("#tabs").tabs();
    $('.timeline').timeline();
    $( "#accordion" )
        .accordion({
            header: "> div > span",
            collapsible: true,
            active: false
        })
});