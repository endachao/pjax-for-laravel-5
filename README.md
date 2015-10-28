在 Laravel 5.* 的版本中，使用 Pjax 实现无刷新效果，以及酷炫的进度条


`求 star`

`求 star`

`求 star`

### 起因

群里面的朋友老是在问 laravel 怎么和  pjax 结合，于是今天早上答应了给大家写一篇文章，到准备写的时候，发现其实挺简单的，也没有多少可写的东西，于是乎，干脆直接封装成包，大家直接安装用就好了


感谢以下开源项目

1. jquery.pjax.js

2. nprogress



### 效果

<img src="http://www.phpyc.com/images/pjax.jpg"  align=center />


### 安装

1.在 `composer.json` 的 require里 加入


```
"yuanchao/pjax-for-laravel-5": "dev-master"

```


2.执行 `composer update`


3.在config/app.php 的 `providers` 数组加入一条


```
YuanChao\Pjax\EndaPjaxServiceProvider::class

```

4.在 `Kernel` 的 `$middleware` 数组里添加

```

\YuanChao\Pjax\EndaPjaxMiddleware::class,

```


5.执行 `php artisan vendor:publish`


### 使用

`要先引入 jquery`


在`布局`文件中，插入以下代码

```

@include('pjax::pjax')


```

### 交流

欢迎加入laravel学习小组交流：`365969825 `


