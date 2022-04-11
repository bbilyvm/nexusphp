<?php

$lang_tags = array
(
	'text_description' => "簡介:",
	'text_syntax' => "語法:",
	'text_example' => "例子:",
	'text_result' => "結果:",
	'text_remarks' => "說明:",
	'head_tags' => "標籤",
	'text_tags' => "標籤",
	'text_bb_tags_note' => "<b>".$SITENAME."</b>論壇支援一些<i>BBCode標籤代碼</i>，你可以在帖子中使用它們改變顯示效果。",
	'submit_test_this_code' => "測試標籤！",
	'text_bold' => "粗體",
	'text_bold_description' => "使文字變粗",
	'text_bold_syntax' => "[b]<i>文字</i>[/b]",
	'text_bold_example' => "[b]這是粗體[/b]",
	'text_italic' => "斜體",
	'text_italic_description' => "使文字斜體",
	'text_italic_syntax' => "[i]<i>文字</i>[/i]",
	'text_italic_example' => "[i]這是斜體[/i]",
	'text_underline' => "下劃線",
	'text_underline_description' => "在文字下加劃線",
	'text_underline_syntax' => "[u]<i>文字</i>[/u]",
	'text_underline_example' => "[u]這是下劃線[/u]",
	'text_color_one' => "顏色 (方式1)",
	'text_color_one_description' => "改變文字顏色",
	'text_color_one_syntax' => "[color=<i>Color</i>]<i>文字</i>[/color]",
	'text_color_one_example' => "[color=blue]這是藍色文字[/color]",
	'text_color_one_remarks' => "有效顏色取決於流覽器，一些基本顏色如red, green, blue, yellow, pink等一般都支援",
	'text_color_two' => "顏色(方式2)",
	'text_color_two_description' => "改變文字顏色",
	'text_color_two_syntax' => "[color=#<i>RGB</i>]<i>文字</i>[/color]",
	'text_color_two_example' => "[color=#0000ff]這是藍色文字[/color]",
	'text_color_two_remarks' => "<i>RGB</i>必須是六位元的十六進位數位",
	'text_size' => "字型大小",
	'text_size_description' => "改變文字的大小",
	'text_size_syntax' => "[size=<i>n</i>]<i>文字</i>[/size]",
	'text_size_example' => "[size=4]這是4號字體的文字[/size]",
	'text_size_remarks' => "<i>n</i>必須是在1(最小)到7(最大)間的整數。默認字型大小為2",
	'text_font' => "字體",
	'text_font_description' => "改變文字的字體",
	'text_font_syntax' => "[font=<i>字體</i>]<i>文字</i>[/font]",
	'text_font_example' => "[font=Impact]Hello world![/font]",
	'text_font_remarks' => "你可以通過在字體名稱間加逗號來設定備用字體",
	'text_hyperlink_one' => "超連結(方式1)",
	'text_hyperlink_one_description' => "插入超連結",
	'text_hyperlink_one_syntax' => "[url]<i>URL</i>[/url]",
	'text_hyperlink_one_example' => "[url]http://".$BASEURL."[/url]",
	'text_hyperlink_one_remarks' => "該標籤是多餘的，所有URL都會自動加超連結",
	'text_hyperlink_two' => "超連結(方式2)",
	'text_hyperlink_two_description' => "插入超連結",
	'text_hyperlink_two_syntax' => "[url=<i>URL</i>]<i>鏈結文字</i>[/url]",
	'text_hyperlink_two_example' => "[url=http://".$BASEURL."]".$SITENAME."[/url]",
	'text_hyperlink_two_remarks' => "當你需要將文字加超鏈結時使用。",
	'text_image_one' => "圖片(方式1)",
	'text_image_one_description' => "插入圖片",
	'text_image_one_syntax' => "[img=<i>URL</i>]",
	'text_image_one_example' => "[img=http://$BASEURL/pic/nexus.png]",
	'text_image_one_remarks' => "URL必須是<b>.gif</b>, <b>.jpg</b>, <b>jpeg</b>或<b>.png</b>",
	'text_image_two' => "圖片(方式2)",
	'text_image_two_description' => "插入圖片",
	'text_image_two_syntax' => "[img]<i>URL</i>[/img]",
	'text_image_two_example' => "[img]http://$BASEURL/pic/nexus.png[/img]",
	'text_image_two_remarks' => "URL必須是<b>.gif</b>, <b>.jpg</b>, <b>jpeg</b>或<b>.png</b>",
	'text_quote_one' => "引用(方式1)",
	'text_quote_one_description' => "插入引用",
	'text_quote_one_syntax' => "[quote]<i>引用的文字</i>[/quote]",
	'text_quote_one_example' => "[quote]我愛".$SITENAME."[/quote]",
	'text_quote_two' => "引用(方式2)",
	'text_quote_two_description' => "插入引用",
	'text_quote_two_syntax' => "[quote=<i>作者</i>]<i>引用的文字</i>[/quote]",
	'text_quote_two_example' => "[quote=".$CURUSER['username']."]我愛".$SITENAME."[/quote]",
	'text_list' => "列表",
	'text_description' => "插入列表項目",
	'text_list_syntax' => "[*]<i>文字</i>",
	'text_list_example' => "[*]這是項目1\n[*]這是項目2",
	'text_preformat' => "預格式化",
	'text_preformat_description' => "預格式化(等寬)文字。不自動換行",
	'text_preformat_syntax' => "[pre]<i>文字</i>[/pre]",
	'text_preformat_example' => "[pre]這是預格式化文字[/pre]",
	'text_code' => "代碼",
	'text_code_description' => "文字特殊裝飾顯示",
	'text_code_syntax' => "[code]文字[/code]",
	'text_code_example' => "[code]這是代碼[/code]",
	'text_you' => "[you]",
	'text_you_description' => "顯示任何查看者的用戶名",
	'text_you_syntax' => "[you]",
	'text_you_example' => "你正在看這段文字啊，[you]",
	'text_you_remarks' => "適合用于惡作劇",
	'text_site' => "[site]",
	'text_site_description' => "顯示站點名字",
	'text_site_syntax' => "[site]",
	'text_site_example' => "你正在訪問[site]",
	'text_siteurl' => "[siteurl]",
	'text_siteurl_description' => "顯示站點的網址",
	'text_siteurl_syntax' => "[siteurl]",
	'text_siteurl_example' => "[site]的網址是[siteurl]",
	'text_flash' => "Flash(方式1)",
	'text_flash_description' => "在頁面內插入指定寬度與高度的Flash",
	'text_flash_syntax' => "[flash,width,height]Flash URL[/flash]",
	'text_flash_example' => "[flash,500,300]http://$BASEURL/flash.demo.swf[/flash]",
	'text_flash_two' => "Flash(方式2)",
	'text_flash_two_description' => "在頁面內插入默認寬度與高度的Flash",
	'text_flash_two_syntax' => "[flash]Flash URL[/flash]",
	'text_flash_two_example' => "[flash]http://$BASEURL/flash.demo.swf[/flash]",
	'text_flv_one' => "Flash視頻(方式1)",
	'text_flv_one_description' => "在頁面內插入指定寬度與高度的Flash視頻",
	'text_flv_one_syntax' => "[flv,width,height]Flash視頻的URL[/flv]",
	'text_flv_one_example' => "[flv,320,240]http://$BASEURL/flash.video.demo.flv[/flv]",
	'text_flv_two' => "Flash視頻(方式2)",
	'text_flv_two_description' => "在在頁面內插入默認寬度與高度(320 * 240)的Flash視頻",
	'text_flv_two_syntax' => "[flv]Flash視頻的URL[/flv]",
	'text_flv_two_example' => "[flv]http://$BASEURL/flash.video.demo.flv[/flv]",
	'text_youtube' => "YouTube",
	'text_youtube_description' => "在頁面內插入YouTube網站的在線視頻",
	'text_youtube_syntax' => "[youtube,width,height]YouTube視頻的URL[/youtube]",
	'text_youtube_example' => "[youtube,560,315]https://www.youtube.com/watch?v=DWDL3VTCcCg&ab_channel=ESPNMMA[/youtube]",
	'text_youku' => "優酷",
	'text_youku_description' => "在頁面內插入優酷網的在線視頻",
	'text_youku_syntax' => "[youku]優酷網視頻的URL[/youku]",
	'text_youku_example' => "[youku]http://player.youku.com/player.php/sid/XMzM1MDExODg=/v.swf[/youku]",
	'text_tudou' => "土豆",
	'text_tudou_description' => "在頁面內插入土豆網的在線視頻",
	'text_tudou_syntax' => "[tudou]土豆網視頻的URL[/tudou]",
	'text_tudou_example' => "[tudou]http://www.tudou.com/v/1jaI4LNa7sk[/tudou]",
	'text_ninety_eight_image' => "CC98圖片",
	'text_ninety_eight_image_description' => "顯示保存于CC98論壇的圖片",
	'text_ninety_eight_image_syntax' => " [98img=[auto|number]]圖片文件[/98img]",
	'text_ninety_eight_image_example' => "[98img=150]uploadfile/2008/10/30/2362924185.png[/98img]",
	'text_ninety_eight_image_remarks' => "CC98是浙江大學的一個論壇",
    'text_spoiler' => '折疊',
    'text_spoiler_description' => '在頁面插入可展開/收縮的內容',
    'text_spoiler_syntax' => '[spoiler=標題]這是被折疊的內容[/spoiler]',
    'text_spoiler_example' => '[spoiler=英雄最後的結局怎麽樣了？]英雄最後死掉了！[/spoiler]',

);

?>
