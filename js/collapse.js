/*******************************
* ACCORDION WITH TOGGLE ICONS
*******************************/
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".fa-sort-up")
        .toggleClass('fas fa-sort-down fas fa-sort-up');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);