$('#myTabs').on('click', '.nav-tabs a', function(){
    $(this).closest('.dropdown').addClass('dontClose aktif');
})

$('#myDropDown').on('hide.bs.dropdown', function(e) {
    if ( $(this).hasClass('dontClose') ){
        e.preventDefault();
    }
    $(this).removeClass('dontClose');
});
