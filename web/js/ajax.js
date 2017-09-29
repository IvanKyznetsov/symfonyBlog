window.onload = function(){
    $(function(){
        $(".submit_comment").click(function(){
            var message = $("#blogger_blogbundle_comment_comment").val();
            var blogid = location.href;
            var path = "{{ path('BloggerBlogBundle_comment_ajax') }}";
            var url = 'http://symfonyblog/app_dev.php/comment/ajax';
            var style = $('.article_comment').last();
            if (style.hasClass('odd')) {
                var art_class = 'article_comment comment even';
            } else {
                var art_class = 'article_comment comment odd';
            }

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    message: message,
                    blogid: blogid
                },
                success: function(response){
                    $('.article_comment').last().after(
                        "<article class=\" " + art_class +"\" id=\"comment-"+response.cmnt+"\">" +
                            "<header>" +
                                "<p><span class=\"highlight\">"+response.user+"</span>" + " " +
                                "<a href=\"/app_dev.php/comment/delete/"+response.cmnt+"\">X</a>" +
                                "</p>" +
                            "</header>" +
                            "<p class=\"comment_blog\">" +response.message+ "</p>" +
                        "</article>"
                    );
                },
                error: function(response){
                    console.log(response);
                }
            });
            return false;
        });
    });
};