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
 * clear:清空面板
 * ls:显示当前目录或者文件
 * 命令方式
 * 		创建一个仓库，会看到这些命令，按顺序执行即可，在最后一个命令输入你的用户名，密码就是上面创建的token。
 *		git init-----初始化
 *		git add README.md-----readme.md时文件名，不写则默认所有，add是将改动文件加到暂存区
 *		git commit -m "first commit"  -----将暂存区中的内容提交到本地仓库
 *		git branch -M main   ----将本地分支从master重命名为main
 *		git remote add origin https://github.com/fengfanli/front-and-back.git
 *		git push -u origin main----条命令会将本地的 main 分支推送到远程仓库的 main 分支，并设置远程的 main 分支为跟踪分支
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