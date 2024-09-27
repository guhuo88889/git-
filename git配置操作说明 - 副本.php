<?php
/**
 * 绝对重要
 * 当报错：github报错（完美解决）：获取token。remote: Support for password authentication was removed on August 13, 2021.时，如何应对
 * 解决：个人中心-》setting->左下点击developer settings->personal access tokens下的fine-grained tokens->点击generate new token
 * ->token name(自己填写)-》expiration(选择过期时间)-》description(自己写描述)-》resource owner(选第二个all repositories)->
 * ->permissions选repository permissions点开，全选所有权限-》generate token创建即可获取token,
 * 
 */

/**
 * 代码操作
 * echo 123 > one.txt    将123写入one.txt中
 * echo 456 >> one.txt    将456追加到one.txt中
 * clear:清空面板
 * ls:显示当前目录或者文件
 * git ls-files:查看暂存区文件
 * git status:查看git的状态
 * git rm --cached file1.txt:将暂存区的文件删除,file1为文件名,于从 Git 跟踪中删除文件，但保留在工作目录中。这个命令将文件从 Git 的索引（也称为缓存）中移除，但不会从物理磁盘中删除该文件
 * git log:查看提交记录
 * git reset --hard HEAD^:回退到上一个版本（工作区和暂存区的版本都会消失）
 * git reset HEAD^:回退到上一个版本（工作区版本存在，暂存区版本不存在）
 * git reset --soft 版本id,git log可以查看要回退的id(工作区和暂存区都会存在)例如：git reset --soft de96268c4125756d3a76300f0a1f82d71d7a7975
 * git rm two.txt:删除two.txt,(这里是将工作区和暂存区的文件都删除了，最后进行commit提交)
 * ssh-keygen -t rsa -b 4096   //生成key，一直回车会生成id_rsa私钥和id_rsa.pub公钥，在github中配置公钥，具体看https://www.bilibili.com/video/BV1HM411377j?spm_id_from=333.788.player.switch&vd_source=04aa5783d9790d082f89820e52b34a67&p=11

 * 命令方式
*1、新建一个文件夹，鼠标右键运行：Git Bash Here 打开命令窗口；

*2、git init 初始化生成 .git文件；

*3、git  remote add origin  https://github.com/projects.git  为远程仓库地址创建别名；

*4、git checkout -b branch_name  创建并切换分支 ；(创建本地分支名称，不用和远程仓库分支对应，自定义)

*5、git  pull origin  (远程仓库地址)  master(远程分支名称) : branch_name(本地分支名称) 拉取远程仓库代码到本地分支；

*6、对本地分支进行代码添加、修改、删除操作；

*7、git add . 将变更内容提交到暂存区；

*8、git commit -m '备注'  将暂存区内容提交本地仓库；

*9、git push origin  (远程仓库地址)   branch_name(本地分支名称) : master(远程分支名称) 将本地仓库分支推送到远程仓库分支，代码提交完成，在浏览器刷新远程分支目录，可以看到提交内容；
 */












/**
 * 图形化操作：注意：密码写上面获取的token
 * 1.注册github账户->创建一个仓库(new repository)，比如叫video_upload
 * 2.克隆仓库video_upload到本地电脑上，需要按顺序安装两个软件，先装git和后装tortoiseGit(软件在360中有)
 * 		安装git->一直点next->安装成功-》在桌面上右击查看是否有git
 * 		安装tortoiseGit->一直点next->安装成功-》在桌面上右击查看是否有tortoiseGit
 * 		a.克隆网上项目到本地----到指定位置-》右击git clone->选择github中的url-》ok----这个时候本地的代码中就可以添加自己的代码了
 * 		b.提交代码----在你的本地项目位置-》右击tortoiseGit-》add/commit/push
 * 
 * 
 */


/**
 * 加速器下载：https://steampp.net/，这个是用于访问github加速使用
 * steam2.69:win7
 * steam3.0:win10及以上
 * 慎用
 */
























?>