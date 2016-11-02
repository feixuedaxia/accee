<header class="">
        <div class="container">
          <a class="navbar-brand" href="#">Brand</a>
          <form class="navbar-form navbar-right">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
           </form>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                  <li class="active"><a href="{{ url('/') }}">首页 <span class="sr-only">(current)</span></a></li>
                  <li><a href="{{ url('/about') }}">关于商会</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">萨省简介 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/sk/land-environment-cultural') }}">土地、环境、人文</a></li>
                      <li><a href="{{ url('/sk/city-trafic') }}">城市和交通</a></li>
                      <li><a href="{{ url('/sk/policy') }}">政策、法规</a></li>
                      <li><a href="{{ url('/sk/immigration') }}">移民</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="{{ url('/sk/resources') }}">萨省资源</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商会活动 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/activity/calender') }}">日历</a></li>
                      <li><a href="{{ url('/activity/accee') }}">商会活动</a></li>
                      <li><a href="{{ url('/activity/exchange') }}">考察交流</a></li>
                      <li><a href="{{ url('/activity/public-spirit') }}">公益活动</a></li> 
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">会员企业 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/membership/members') }}">各会员企业简介</a></li>
                      <li><a href="{{ url('/membership/service') }}">会员服务</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">投资平台 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/investment/demand') }}">项目需求</a></li>
                      <li><a href="{{ url('/investment/sale') }}">项目出售</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('/gallery') }}">图片视频</a></li>
                  <li><a href="{{ url('/contact') }}">联系我们</a></li>
                </ul>
                
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
      
      </header>    