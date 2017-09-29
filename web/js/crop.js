var x1, y1, x2, y2, crop = '/images/users/';
var jcrop_api;

jQuery(function($){             

	$('.modal_button').click(function(){
        // console.log($('.jcrop-holder').first());
        // var hide = $('.jcorp-holder').first();
        // console.log(hide);
        $('.jcrop-holder')[1].remove();
        // console.log($('.crop_image').width());
        var width = $('.crop_image').width()+5;
        // console.log(width);
        $('.modaldiv').css('width', width)
	});

	$('#target').Jcrop({
		onChange:   showCoords,
		onSelect:   showCoords
	},function(){
		jcrop_api = this;
	});
    $('#release').click(function(e) {		
		release();
    });
    $('#ar_lock').change(function(e) {
		jcrop_api.setOptions(this.checked?
			{ aspectRatio: 4/3 }: { aspectRatio: 0 });
		jcrop_api.focus();
    });
   $('#size_lock').change(function(e) {
		jcrop_api.setOptions(this.checked? {
			minSize: [ 80, 80 ]
			// maxSize: [ 350, 350 ]
		}: {
			minSize: [ 0, 0 ],
			maxSize: [ 0, 0 ]
		});
		jcrop_api.focus();
    });
	function showCoords(c){
		x1 = c.x; $('#x1').val(c.x);		
		y1 = c.y; $('#y1').val(c.y);		
		x2 = c.x2; $('#x2').val(c.x2);		
		y2 = c.y2; $('#y2').val(c.y2);
		
		$('#w').val(c.w);
		$('#h').val(c.h);
		
		if(c.w > 0 && c.h > 0){
			$('#crop').show();
		}else{
			$('#crop').hide();
		}
		
	}	
});

function release(){
	jcrop_api.release();
	$('#crop').hide();
}
jQuery(function($){
	$('#crop').click(function(e) {
		var img = $('#target').attr('src');
		// console.log('----');
		// console.log(x1);
		// console.log(y1);
		// console.log(x2);
		// console.log(y2);
		var url = 'http://symfonyblog/app_dev.php/profile/crop/release';
        // var path = "{{ path('BloggerBlogBundle_profile_release') }}";
        // var route = "{{ path('BloggerBlogBundle_profile_release')|escape('js') }}";
		// $.post( url, {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'crop': crop});
		$.post(url, {'x1': x1, 'x2': x2, 'y1': y1, 'y2': y2, 'img': img, 'crop': crop}, function(data) {
			// $('#cropresult').append('<img src="'+crop+file+'" class="mini">');
			// release();
			// console.log('test');
            // $('#cropresult').html(data);
            // console.log(data);
            // window.top.location.href = '{{ $redirect }}';
            window.location.replace('http://symfonyblog/app_dev.php/profiles');
		});
		
    });   
});