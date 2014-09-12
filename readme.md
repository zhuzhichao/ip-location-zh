#Ip Location Zh
----
这是一个能够通过Ip，获取该IP所在的位置，例如通过ip：`1.192.94.203`可以获得是`中国河南郑州`,同样能获得国外的地址，但是没有国内详细。
**注：基于[17mon.cn]([http://tool.17mon.cn/ipdb.html])的IP数据库进行制作，该数据库每2个月更新一次，届时同步更新该插件**

##特点
----
1. 不配置和使用数据库，妈妈再也不用担心配置问题了
2. 使用简单，功能专（dan）注（yi）
3. 使用[composer]([https://getcomposer.org/])进行安装管理，国际标准，方便快捷，即安即用，随时更新数据库
4. 部分数据参考了纯真 IP 库、淘宝 IP 库、腾讯 IP 库、新浪 IP 库、中国互联网广告行业 IP 库的数据，还包括 BGP.HE.NET 以及全球各大地区的 IP 管理机构的 WHOIS 信息数据

##Install && Use
----
###Install Composer
这里不详细介绍安装composer了，大家根据[链接]([https://getcomposer.org/])自行安装吧！什么？没听过？你真的需要脑补了，赶快行动吧！^^

###Use
如果已经有了`composer.json`文件的话，直接添加`"zhuzhichao/ip-location-zh": "~1.0"` 到依赖，然后执行`composer update`。
或者直接`composer require "zhuzhichao/ip-location-zh"`。
对于非`laravel`框架来说，可以这样来用

	<?php 
	require 'vendor/autoload.php';  
	use Zhuzhichao\IpLocationZh\Ip;  
	var_dump(Ip::find('1.192.94.203'));
对于`laravel`可以这样优雅的用:
1. 安装该插件
2. 在`app/config/app.php`，或者你自定义配置的app.php文件内添加

	'aliases' => array( 	‘Ip’
	 		  => 'Zhuzhichao\IpLocationZh\IP', 
	),
3. 然后开始在你的项目里面使用了`Ip::find('1.192.94.203')`

对，很简单，只用一个方法，那就是`find`。

##Contributing
有什么新的想法和建议，欢迎提交[issue]([https://github.com/zhuzhichao/ip-location-zh/issues])或者[Pull Requests]([https://github.com/zhuzhichao/ip-location-zh/pulls])。

##License
MIT

