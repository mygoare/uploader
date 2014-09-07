uploader
========

Upload base place built on sinaapp. [trello.sinaapp.com](http://trello.sinaapp.com)

最大上传是10M


How to use
===

1.	通过网页直接访问:  [trello.sinaapp.com](http://trello.sinaapp.com)

2.	通过 Command Line:

		curl -F uploadFile=@/Users/exampleUser/example.tar http://trello.sinaapp.com/upload.php
		
		
最终会返回json数据：

	{
		fileName: "ping.sh",
		fileUrl: "http://trello-abc.stor.sinaapp.com/540bdcf121b81c558a5b25243b06e24942e1dac9a47a8.sh"
	}
