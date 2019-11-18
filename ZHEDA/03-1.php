<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/03-1人员岗责.js"></script>
<body>
    <div class="all">
    <div class="header">
        <div class="header_top">
            <div class="right">2019年4月22日  星期一&nbsp;&nbsp;<img src="images/head portrait.png" alt="" class="dl">&nbsp;登录</div>
        </div>
        <div class="header_middle">
            <img class="img01" src="images/国徽.png" alt="">
            <span class="title">浙江省大企业税收服务和管理信息平台</span>
            <input type="text" placeholder="请输入需要搜索的内容" class="search01">
            <input type="button" value="搜索" class="search02">
			<!-- <style>
				div.header_bottom>ul>li>a{
					color: #FFFFFF;
					text-decoration: none;
				}
				div.header_bottom>ul>li:hover{
					color: #0000FF;
				}
			</style> -->
        </div>
        <div class="header_bottom">
            <ul>
                <!-- <li class="li_01">首页</li>
                <li>业务平台</li>
                <li>职能概括</li>
                <li>工作动态</li>
                <li>制度规范</li>
                <li>知识库</li>
                <li>下载专区</li> -->
				<li class="li_01"><a href="index.php">首页</a></li>
				<li><a href="#">业务平台</a></li>
				<li><a href="03-1.php">职能概括</a></li>
				<li><a href="index4.php">工作动态</a></li>
				<li><a href="index5.php">制度规范</a></li>
				<li><a href="index6.php">知识库</a></li>
				<li><a href="index7.php">下载专区</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="container_left">
            <ul class="ul_01">
                <div><span class="s1"></span><li class="li_01">主要职责</li></div>
                <div><span class="s2"></span><li class="li_02">内设机构</li></div>
                <div id="s3"><span class="s3"></span><li class="li_03">人员岗责</li></div>
                <div class="special hide">
                    <ul class="ul_02">
                        <li>省局大企业管理局</li>
                        <li>省局税费征收管理局</li>
                        <li class="add">省市局第一税局分局</li>
                        <li>人员信息维护</li>
                    </ul>
                </div>
                <div id="add" style="display: none;">
                    <input type="text" placeholder="请输入税务机关">
                    <ul id="city">
                        <li>
                            <a href="#">杭州</a>
                            <ul>
                                <li><a href="#">杭州市地税局</a></li>
                                <li><a href="#">杭州市地税局开发区分局</a></li>
                                <li><a href="#">杭州市高新地税局</a></li>
                                <li><a href="#">杭州市地税局开发区税务分局</a></li>
                                <li><a href="#">杭州市地方税务局拱墅税务分局</a></li>
                                <li><a href="#">杭州市萧山区地税局</a></li>
                                <li><a href="#">杭州市余杭地税局</a></li>
                                <li><a href="#">杭州市地税局</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">温州</a>
                        </li>
                        <li><a href="#">绍兴</a></li>
                        <li><a href="#">湖州</a></li>
                        <li><a href="#">嘉兴</a></li>
                        <li><a href="#">金华</a></li>
                        <li><a href="#">衢州</a></li>
                        <li><a href="#">台州</a></li>
                        <li><a href="#">丽水</a></li>
                        <li><a href="#">舟山</a></li>
                    </ul>
                </div>
                <div><span class="s4"></span><li class="li_04">大事记</li></div>
                <div><span class="s5"></span><li class="li_05">领导批示</li></div>
                <div><span class="s6"></span><li class="li_06">通讯录</li></div>
            </ul>
        </div>
        <div class="container_right">
            <table>
                <tr style="background-color: #F4F6F9;">
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">序号</td>
                    <td id="xm">姓名</td>
                    <td id="jg">机关</td>
                    <td id="cs">处室</td>
                    <td id="zt">状态</td>
                    <td id="fbr">发布人</td>
                    <td id="fbsj">发布时间</td>
                    <td id="cz">操作</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
                <tr>
                    <td id="ch"><input type="checkbox" name="" id=""></td>
                    <td id="xh">1</td>
                    <td id="xm">张三</td>
                    <td id="jg">主管税务机关</td>
                    <td id="cs">大企业和国际税务管理处</td>
                    <td id="zt">发布</td>
                    <td id="fbr">张三</td>
                    <td id="fbsj">2019-05-28</td>
                    <td id="cz">修改</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="footer">
        <div class="footer_top">
            友情链接：
            <a href="#">国家税务总局</a> &nbsp;&nbsp;
            <a href="#">总局大企业税收服务和管理工作平台</a>&nbsp;&nbsp;
            <a href="#">浙江省税务局内网</a>&nbsp;&nbsp;
            <a href="#">金税三期决策支持系统</a>
        </div>
        <div class="footer_bottom">
            <div class="div1"></div>
            <div class="div2">
                <span class="span1">法律声明 | 网站管理 | 网站帮助 | 关于我们 | 网站纠错</span>
                <p>国家税务总局浙江省税务局版权所有 京ICP备1234568号-2 联系电话 ：0142-123456</p>
                <p>浙公网安备 33010250025645号 网站标识码 ：bm236554412 地址：杭州市滨江区</p>
                <p>国家税务总局浙江省税务局办公室主办</p>                
            </div>
        </div>
    </div>
    </div>
</body>
</html>