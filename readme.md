#Ip Location Zh
[![Build Status](https://api.travis-ci.org/zhuzhichao/ip-location-zh.svg?branch=master)](https://travis-ci.org/zhuzhichao/ip-location-zh)

数据最后更新时间为 2016-6-1, 更新时间:不定期。 数据源于: http://www.ipip.net/

IPIP典型客户
![ipip客户](http://7xkxib.com1.z0.glb.clouddn.com/ipipservercom.png)

这是一个能够通过 Ip，获取该 IP 所在的位置，例如通过 ip：`1.192.94.203` 可以获得是 `中国河南郑州`, 同样能获得国外的地址，但是没有国内详细。

>注意: 该免费数据库不提供经纬度、运营商、行政区等更详细的内容, 如果你有更多的需求可以考虑使用他们的收费服务。本包的目的是提供给需求简单, 手里没钱的程序员来获取定时更新的IP信息

>国家码和邮编不是该包负责的内容, 需自行构建相关的程序


建议之前使用 v1 版本的同学更新到 v2 上面。 v1 的引用和命名空间不够规范,在 v2 版本中使用了 psr-4 标准。 v1 将数据库更新支持到2016年底。 v2 版本将长期更新

##特点

1. 不配置和使用数据库，妈妈再也不用担心配置问题了
2. 使用简单，功能专（dān）注（yī）
3. 使用 [composer](https://getcomposer.org/) 进行安装管理，国际标准，方便快捷，即安即用，随时更新数据库

##Install

这里不详细介绍安装 composer 了，大家根据 [链接](https://getcomposer.org/) 自行安装吧！什么？没听过？你真的需要脑补了，赶快行动吧！^^

`composer require "zhuzhichao/ip-location-zh"`

##Usage

####Common
可以这样来用
```php
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

#### Laravel
对于`laravel`可以这样优雅的用:

1.安装该插件

2.在 `app/config/app.php`(Laravel 4) 或 `config/app.php`(Laravel 5)，或者你自定义配置的 app.php 文件内添加

```php
	'aliases' => array( 
        'Ip'  => 'Zhuzhichao\IpLocationZh\Ip', 
	),
```

3.然后开始在你的项目里面使用了 `Ip::find('1.192.94.203')` 或 `Ip::find(Request::getClientIp())`


**对，很简单，只用一个方法，那就是 `find`**

##Contributing
有什么新的想法和建议，欢迎提交 [issue](https://github.com/zhuzhichao/ip-location-zh/issues) 或者 [Pull Requests](https://github.com/zhuzhichao/ip-location-zh/pulls) 。

##License
MIT

