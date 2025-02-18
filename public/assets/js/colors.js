$(document).ready(function () {
    for (let i = 1; i <= 12; i++) {
        $(`.color${i}`).click(function () {
            $("#colors").attr("href", `assets/css/color/color${i}.css`);
            return false;
        });
    }

    $('.color-plate .color-plate-icon').on("click", function () {
        $('.color-plate').toggleClass('active');
    });
});
