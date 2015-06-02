#Ip Location Zh
[![Build Status](https://api.travis-ci.org/zhuzhichao/ip-location-zh.svg?branch=master)](https://travis-ci.org/zhuzhichao/ip-location-zh)
数据最后更新时间为2015-6-1，预计下次更新时间为2015年8月1日。若需更新频率更高的数据，请购买该[ip服务](http://www.ipip.net/price.html)

这是一个能够通过Ip，获取该IP所在的位置，例如通过ip：`1.192.94.203`可以获得是`中国河南郑州`,同样能获得国外的地址，但是没有国内详细。
**注：基于[ipip.net](http://www.ipip.net/download.html)的IP数据库进行制作，该数据库每2个月更新一次，届时同步更新该插件**

##特点

1. 不配置和使用数据库，妈妈再也不用担心配置问题了
2. 使用简单，功能专（dān）注（yī）
3. 使用[composer](https://getcomposer.org/)进行安装管理，国际标准，方便快捷，即安即用，随时更新数据库

##Install

这里不详细介绍安装composer了，大家根据[链接](https://getcomposer.org/)自行安装吧！什么？没听过？你真的需要脑补了，赶快行动吧！^^

如果已经有了`composer.json`文件的话，直接添加`"zhuzhichao/ip-location-zh": "dev-master"` 到依赖，然后执行`composer update`。
或者直接`composer require "zhuzhichao/ip-location-zh"`。

##Use

可以这样来用
```php
<?php 
require 'vendor/autoload.php';  
use Zhuzhichao\IpLocationZh\Ip;  
var_dump(Ip::find('1.192.94.203'));
```

```
// 返回结果
array (size=4)
  0 => string '中国' (length=6)
  1 => string '河南' (length=6)
  2 => string '郑州' (length=6)
  3 => string '' (length=0)
```

对于`laravel`可以这样优雅的用:

1.安装该插件

2.在`app/config/app.php`(Laravel 4) 或 `config/app.php`(Laravel 5)，或者你自定义配置的app.php文件内添加

```php
	'aliases' => array( 
        'Ip'  => 'Zhuzhichao\IpLocationZh\Ip', 
	),
```

3.然后开始在你的项目里面使用了`Ip::find('1.192.94.203')`
提示：在`laravel`中可以使用`Request::getClientIp()`来获取访问者的Ip


**对，很简单，只用一个方法，那就是`find`**

##Contributing
有什么新的想法和建议，欢迎提交[issue](https://github.com/zhuzhichao/ip-location-zh/issues)或者[Pull Requests](https://github.com/zhuzhichao/ip-location-zh/pulls)。

##License
MIT

