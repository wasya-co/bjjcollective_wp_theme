
function closeArticle() {
  jQuery('article').css('display', 'none');
}

jQuery(document).ready(function () {
  if (jQuery('.modal').length > 0) {
    $(".modal").dialog({ 
      modal: true, 
      width: '700px', height: 'auto',
      resizable: false,
      // draggable: false,
      open: function(){
        $(".ui-dialog").css("margin", 20);
        jQuery('.ui-widget-overlay').bind('click',function(){
          jQuery('.modal').dialog('close');
        })
      }
    });
  }
});
