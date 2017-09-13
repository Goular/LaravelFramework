# 项目使用须知

### 使用前需要执行的指令
<pre>
    1.「公开磁盘」就是指你的文件将可被公开访问，默认下， public 磁盘使用 local 驱动且将文件存放在 storage/app/public 目录下。为了能通过网络访问，你需要创建 public/storage 到 storage/app/public 的符号链接。
        php artisan storage:link
</pre>

### 项目前端和图片等静态资源构建(gulp.js)
<pre>
    什么是gulp？ 
        gulp是新一代的前端项目构建工具，你可以使用gulp及其插件对你的项目代码（less,sass）进行编译，还可以压缩你的js和css代码，甚至压缩你的图片，gulp仅有少量的API，所以非常容易学习。 gulp 使用 stream 方式处理内容。
    
    gulp和grunt的异同点
        易于使用：采用代码优于配置策略，Gulp让简单的事情继续简单，复杂的任务变得可管理。
        高效：通过利用Node.js强大的流，不需要往磁盘写中间文件，可以更快地完成构建。
        高质量：Gulp严格的插件指导方针，确保插件简单并且按你期望的方式工作。
        易于学习：通过把API降到最少，你能在很短的时间内学会Gulp。构建工作就像你设想的一样：是一系列流管道。

    因为gulp是用node.js写的，所以你需要在你的终端上安装好npm。npm是node.js的包管理器，所以先在你的机子上安装好node.js吧
    
    gulp安装命令 
        sudo npm install -g gulp
    
    在根目录下新建package.json文件
        npm init .    
    
    安装gulp包
        npm install gulp --save-dev  
    

</pre>


### 注意点
<pre>
    1.在文件夹/resources/views/vendor中的模板是使用了php artisan vendor:publish命令生成出来的，目前作用不明.
</pre>