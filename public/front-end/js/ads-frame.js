$(document).ready(function(){
	var chatMessages = [{
		name: "ms1",
		msg: "気づいてました？",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms2",
		msg: "<img src=\"../front-end/image/ads-bg.jpg\" style=\"width: 150px; height: 150px;\">",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "mszoom",
		msg: "あの<span style=\"color: red\">逗子２LDKマンション</span>なんですが、",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms3",
		// msg: "<img src=\"image/ads-bg.jpg\" style=\"width: 150px; height: 150px;\"><br>大宮駅5.4万円の1Kマンション、IHクッキングヒータで暮らしの安心",
		msg: "<span style=\"color: red\">冢美農不動産</span>の",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms4",
		msg: "覚えてますよ。気になってるんで。",
		delay: 1000,
		align: "right",
		img: "",
		showTime: true,
		time: "既読"
	},
	{
		name: "mszoom",
		msg: "<span style=\"color: red\">駅徒歩１０分、始発駅で、駅アクセスの良さが魅力</span>",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "mszoom",
		msg: "<span style=\"color: red\">しかも、サーファーにはたまらない海のちかく</span>。",
		delay: 1000,
		align: "left",
		showTime: false,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms7",
		msg: "なんですよね...。理想なんだよなあ",
		delay: 1000,
		align: "right",
		showTime: false,
		img: "",
		time: "既読"
	},
	{
		name: "mszoom",
		// msg: "ここ！<br><a href=\"https://testgfl.miraie-net.com/bukken/detail/buy/%E7%9B%B8%E6%A8%A1%E5%8E%9F%E5%B8%82%E4%B8%AD%E5%A4%AE%E5%8C%BA%E5%A3%B2%E6%88%B8%E5%BB%BA%E4%BD%8F%E5%AE%85-280451\">https://testgfl.miraie-net.com/</a>",
		msg: "<span style=\"color: red\">日勤管理人有。モニタ付きインターホン設置済。暮らしの安心安全も魅力<span>。",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms9",
		msg: "それも大事",
		delay: 1000,
		align: "right",
		showTime: true,
		img: "",
		time: "既読"
	},
	{
		name: "ms10",
		msg: "一度その目で見てお考えになっては？百間は一見に如かずって",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuko.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms11",
		msg: "言いますよね。確かに",
		delay: 1000,
		align: "right",
		showTime: true,
		img: "",
		time: "既読"
	},
	{
		name: "ms12",
		msg: "見るのと写真は違いますよー",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuo.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	{
		name: "ms14",
		msg: "お待ちしてますー",
		delay: 1000,
		align: "left",
		showTime: true,
		img: "<img src=\"../front-end/image/tatsuko.png\" style=\"width: 30px; height: 30px;\">",
		time: "既読"
	},
	// {
	// 	name: "ms15",
	// 	msg: "Thanks! Something you want to add?",
	// 	delay: 3000,
	// 	align: "left",
	// 	showTime: true,
	// 	time: "既読"
	// },
	// {
	// 	name: "ms16",
	// 	msg: "You are welcome! Yes, check out freedactics.com!",
	// 	delay: 9000,
	// 	align: "left",
	// 	showTime: true,
	// 	time: "既読"
	// }
	];
	var chatDelay = 0;

	function onRowAdded() {
		$('.chat-container').animate({
			scrollTop: $('.chat-container').prop('scrollHeight')
		});
	};
	$.each(chatMessages, function(index, obj) {
		chatDelay = chatDelay + 2000;
		chatDelay2 = chatDelay + obj.delay;
		chatDelay3 = chatDelay2 + 10;
		scrollDelay = chatDelay;
		chatTimeString = " ";
		msgname = "." + obj.name;
		msginner = ".messageinner-" + obj.name;
		spinner = ".sp-" + obj.name;
		if (obj.showTime == true) {
			chatTimeString = "<span class='message-time'>" + obj.time + "</span>";
		}
		$(".chat-message-list").append("<li class='message-" + obj.align + " " + obj.name + "' hidden><div class='sp-" + obj.name + "'><span class='spinme-" + obj.align + "'><div class='spinner'><div class='bounce1'></div><div class='bounce2'></div><div class='bounce3'></div></div></span></div><div class='messageinner-" + obj.name + "' hidden><span class='message-avatar'>"+ obj.img + "</span><br><div class='message-bubble'><span class='message-text'>" + obj.msg + "</span></div>" + chatTimeString + "</div></li>");
		$(msgname).delay(chatDelay).fadeIn();
		$(spinner).delay(chatDelay2).hide(1);
		$(msginner).delay(chatDelay3).fadeIn();
		setTimeout(onRowAdded, chatDelay);
		setTimeout(onRowAdded, chatDelay3);
		chatDelay = chatDelay3;
	});

	setTimeout(function(){

		$('.popup').attr('class', 'popup hidden');

	}, 2000);
});