# 项目使用须知

### 使用前需要执行的指令
<pre>
    1.「公开磁盘」就是指你的文件将可被公开访问，默认下， public 磁盘使用 local 驱动且将文件存放在 storage/app/public 目录下。为了能通过网络访问，你需要创建 public/storage 到 storage/app/public 的符号链接。
        php artisan storage:link
</pre>

### 注意点
<pre>
    1.在文件夹/resources/views/vendor中的模板是使用了php artisan vendor:publish命令生成出来的，目前作用不明.

</pre>