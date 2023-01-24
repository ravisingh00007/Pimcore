$(document).jQuery(function(){
   
});

$(document).on('change','blog-sort-by, .blog-per-page',function(){
    if($($this).hasClass('blog-sort-by')){
        $('.blog-sort-by-hidden').val($($this).val());
    }

    if($(this).hasClass('blog-per-page')){
        $('.blog-per-page-hidden').val($(this).val());
    }

    $('.blog-search-form').submit();
});