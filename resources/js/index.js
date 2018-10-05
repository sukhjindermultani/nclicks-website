var Index = {
	init : function()
	{
		Index.getVideoPlayList();
		Index.initComponents();
		Index.initEventListeners();	
	},
	
	initComponents : function()
	{
		
	},
	
	
	initEventListeners : function()
	{
		
	},
	
	getVideoPlayList : function()
	{
		Global.ajaxCall('','/resources/videoList.json',Index.getVideoPlayListCallback)
	},
	
	getVideoPlayListCallback : function(response)
	{
		var playListItem = '';
		
		
		$.each(response.data, function (index, value) {
			
			playListItem += '<div class="col-xs-12';
			if(index > 0 )
			{
				playListItem += ' border-top-black ';
			}
			playListItem += '">';
			playListItem += '<img src="'+value.videoThumbnailSource+'" class="img-responsive cursor-hand videoPlaylistContent">';
			playListItem += '<input type="hidden" class="videoSource" value="'+value.videoSource+'">';
			playListItem += '</div>';
		});
		
		$('#videoPlayListDiv').html("");
		$('#videoPlayListDiv').html(playListItem);
		
		$("#videoPlayListDiv").mCustomScrollbar({
			 theme:"dark",
			scrollInertia: 0			 
		});
		
		$('.videoPlaylistContent').on('click',function(){
			Index.playVideoFromPlayList($(this))	
		});
	},
	
	playVideoFromPlayList : function(playListItem)
	{
		var videoURL = $(playListItem).parent('div').find('.videoSource').val();
		
		videojs("videoPlayer").ready(function(){
			var myPlayer = this;
			myPlayer.src(videoURL);
			myPlayer.play();
		});
	}
}