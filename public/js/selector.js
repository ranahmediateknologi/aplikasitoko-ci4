const modal = document.querySelectorAll('.modal');
          M.Modal.init(modal);

  $(document).ready(function($){

        $('.tabel tbody').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.formcari').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.tabel tbody').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });