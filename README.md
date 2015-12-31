# enjelly-down
> 本版本基于[SegmentFault/HyperDown](https://github.com/SegmentFault/HyperDown)markdown解析器，为laravel封装了一个package。

> laravel5.1.*以上版本可用

## 安装

1. 安装包文件

  ```shell
  composer require havenshen/enjelly-down
  ```

## 配置

### Laravel 应用

1. 注册 `ServiceProvider`:

  ```php
  HavenShen\EnjellyDown\EnjellyDownProvider::class,
  ```

2. （可选）添加外观到 `config/app.php` 中的 `aliases` 部分:

  ```php
  'EnjellyDown' => HavenShen\EnjellyDown\Facades\EnjellyDown::class,
  ```
  
6.使用

  ```php
  /*
  * 传入解析内容文本
  */
  \EnjellyDown::markdown('需要解析内容文本');
  ```
  
## License

MIT