jQuery(document).ready(function($) {
    var fileInput = '';
    window.send_to_editor = function(html) {
     imgurl = jQuery('img',html).attr('src');
     fileInput.val(imgurl);
     tb_remove();
    }  
    $("#fb-checkall").change(function(){
        $(".live_chat_facebook_show").prop('checked', $(this).prop("checked"));
    }) 
    $("#fb-checkall1").change(function(){
        $(".live_chat_facebook_show1").prop('checked', $(this).prop("checked"));
    })
    $('.njt_lcf_premium_click').click(function(event) {
        njt_fb_live_chat_premium_only();
    });
    $('#ninja-display').change(function(event) {
        var $this = $(this);
        if ($this.val() == '1') {
            njt_fb_live_chat_premium_only();
            $this.val('0');
        }
    });
    $('select[name="live_chat_facebook_lang"]').change(function(event) {
        var $this = $(this);
        if ($this.val() != 'en_US') {
            njt_fb_live_chat_premium_only();
            $this.val('en_US');
        }
    });
});
function njt_fb_live_chat_premium_only()
{
    toastr.success('', njt_fb_live_chat.premium_text, {"timeOut": 300000000, "closeButton": true, "positionClass": "toast-top-right"})
}