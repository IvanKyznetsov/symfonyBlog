window.onload = function(){
    // var comments = document.querySelector('.submit_comment');
    //
    // comments.onclick = function () {
    //     console.log('test');
    //     return false;
    // }

    // $(function(){
    //     $(".submit_comment").click(function(){
    //         //console.log('123');
    //         var message = $("#blogger_blogbundle_comment_comment").val();
    //         $.ajax({
    //             type: "POST",
    //             url: "/comment/ajax",
    //             data: {"blogger_blogbundle_comment[comment]": comment},
    //             cache: false
    //         });
    //         return false;
    //     });
    // });
    //     $(function(){
    //         $(".submit_comment").click(function(){
    //             $.ajax({
    //                 type: "POST",
    //                 url: "{{ path('BloggerBlogBundle_comment_ajax') }}",
    //                 data: {"blogger_blogbundle_comment[comment]": comment},
    //                 cache: false,
    //                 success: function(data){
    //                     ('.view').html(data);
    //                 },
    //                 error: function(){
    //                     alert('test');
    //                 },
    //             });
    //         });
    //     });

    // $(".submit_comment").click(function(){
    //             var test =$("form").serialize();
    //             var message = $("#blogger_blogbundle_comment_comment").val();
    //             if (test) {
    //                 console.log(test);
    //             } else {
    //                 console.log('321');
    //             }
    //             return false;
    // });

    $(function(){
                $(".submit_comment").click(function(){
                    var path = "{{ path('BloggerBlogBundle_comment_ajax') }}";
                    var message = $("#blogger_blogbundle_comment_comment").val();
                    $.ajax({
                        type: "POST",
                        //url: "http://symfonyblog/app_dev.php/comment/ajax",
                        url: path,
                        data: message,
                        success: function(){
                            console.log('123');
                        },
                        error: function(){
                            console.log('321');
                        }
                    });
                    return false;
                });
            });
};