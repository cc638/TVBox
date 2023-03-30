https://gitea.com/52670576/tvbox/raw/branch/master/ysc.json  学习克隆
------
### 开源仓库
https://github.com/  
https://gitlab.com/  
https://gitee.com/  
https://coding.net/  
https://gitcode.net/  
https://gitea.com/  仓库名是 mao,tvbox,box,tv等类似的，有几率出现 1.删除仓库 2.删除用户 3.封禁账户 4.黑名单  
https://agit.ai/  
https://notabug.org/  
EGP源  
http://epg.51zmt.top:8000/e.xml  
https://epg.112114.xyz/pp.xml  
------
### 给英文不好的朋友
GitHub 中文化插件   🔰[https://greasyfork.org/zh-CN/scripts/435208](https://greasyfork.org/zh-CN/scripts/435208)  
Github 增强-高速下载 🔰[https://greasyfork.org/zh-CN/scripts/412245](https://greasyfork.org/zh-CN/scripts/412245)    
------
### Github 静态加速  
`https://cdn.staticaly.com/gh/liu673cn/box/main/m.json`  
`https://cdn.jsdelivr.net/gh/liu673cn/box@main/m.json`  
`https://purge.jsdelivr.net/gh/`  
------
## 增加软件内置源，改软件图标，替换系统菜单图标和修改软件名等操作
#### NP.管理器-3.0.44-v8a,v7a.apk   
[https://wwn.lanzouj.com/im1yy096b8id](https://wwn.lanzouj.com/im1yy096b8id)  
[https://liucn.lanzouv.com/iYyvj092us2h](https://liucn.lanzouv.com/iYyvj092us2h)  
#### MT.管理器v2.11.3.apk  
([https://liucn.lanzouv.com/i7i5g092us8d](https://liucn.lanzouv.com/iDrnn0980rlg)
#### 如果要替换文件，
 - MT管理器中打开安装包，在res文件夹内找到  
 - 如图标 原包里的图标名5j.png 需先改名，如 “5j1.png”，然后在导入相同名的图标名5j.png。
 - 桌面图标：5j.png   设置菜单：7A.png  直播菜单：E1.png搜索菜单：NR.png历史菜单：Yu.png 背景图片：o8.png  
#### 内置链接方法：
 - MT管理器中打开安装包，找到 classes.dex文件，打开方式 “Dex编辑器++”
 - 发起新搜索 查找内容 HomeActivity
 - 找到 com.github.tvbox.osc.ui.activity 目录下的 HomeActivity 文件
 - 打开 HomeActivity 文件，右上方按钮点开搜索 const-string v5,""
 - 内置的源地址输入到" "引号中就完成了内置源。按 Esc 保存并退出，最后点安装包 “功能” 签名
 123 | 456
 ---------|---------
![box](https://liu673cn.github.io/box/sub/img/mt01.jpg) | ![Pluto](https://liu673cn.github.io/box/sub/img/mt04.jpg)
![box](https://liu673cn.github.io/box/sub/img/mt02.jpg) | ![Pluto](https://liu673cn.github.io/box/sub/img/mt05.jpg)
![box](https://liu673cn.github.io/box/sub/img/mt03.jpg) | ![Pluto](https://liu673cn.github.io/box/sub/img/mt06.jpg)