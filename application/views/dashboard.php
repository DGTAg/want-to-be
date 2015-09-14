<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9njKAJdNm1HEhsrO2fHpNn23Vtl_uBdU&sensor=true&libraries=places">
</script>
<script type="text/javascript">
  function mapInit() {
    var centerCoord = new google.maps.LatLng(4.210484, 101.975766);
    //ROADMAP, SATELLITE, HYBRID, TERRAIN

		var mapOptions = {
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoom:5,
				center:new google.maps.LatLng(4.210484, 101.975766)
		};
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
  }

  google.maps.event.addDomListener(window, 'load', mapInit);

</script>
<script type="text/javascript">
  .weighting-box a:hover {
    background: red;
  }
</script>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">W<b>2</b>B</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Want<b>2</b>Be</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?=$user_profile['name']?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" class="img-circle" alt="User Image">
                    <p>
                      <?=$user_profile['name']?>
                      <small>Premium Member</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?=$user_profile['name']?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Predictive Analysis Based On Social Interest
            <small>Beta Version</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">

              <!-- My Profile -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">My Profile</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-3">
                      <img src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large&height=120&width=120" class="img-thumbnail" alt="User Image">
                    </div>
                    <div class="col-md-8">
                      <p class="lead">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;<?=$user_profile['name']?><br/>
                        <i class="fa fa-intersex"></i>&nbsp;&nbsp;<?=$me['gender'] ?><br/>
                        <i class="fa fa-location-arrow"></i>&nbsp;&nbsp;<?=$me['location']['name']?><br/>
                        <i class="fa fa-commenting-o"></i>&nbsp;&nbsp;<?=$me['about']?>
                      </p>

                    </div>

                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div>

            </div>
              <?php
              $top = 0;
              foreach ($weighting as $w) {
                if($top < 4) {
              ?>
              <div class="col-md-3">
                <a href="#">
                <div class="info-box weighting-box">

                    <div class="info-box-content" style="margin-left:0px;">
                      <span class="info-box-text"><?=$w->like_category?></span>
                      <span class="info-box-number" style="font-size:35px;"><?=$w->weight?>&nbsp;%</span>
                    </div><!-- /.info-box-content -->

                </div><!-- /.info-box -->
                </a>
              </div><!-- /.col -->
              <?php
                  $top++;
                }
              }
              ?>
            </div>

            <!-- Weightage -->
            <div class="row">
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Location</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-12" style="min-height:300px;">
                        <div id="map"style="width:100%; height:300px;"></div>
                      </div>


                      </div>

                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
              <!-- DONUT CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">STATISTIK Pekerjaan</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <!-- <div class="chart" id="revenue-chart" style="height: 300px;"></div> -->
                      <div id="canvas-holder">
                        <canvas id="chart-area" class="chart" style="height: 300px;"/>
                      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Pemegang Ijazah dan Diploma Mengikut Negeri</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <!-- <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div> -->
                  <canvas class="chart" id="canvas-bar" style="height: 300px; position: relative;"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Peluang Kerjaya vs Kursus Mengikut Negeri</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <!-- <div class="chart" id="line-chart" style="height: 300px;"></div> -->
                  <canvas class="chart" id="canvas-line" style="height: 285px;"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Senarai Kursus Mengikut Minat</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body chart-responsive">
                  <!-- <div class="chart" id="bar-chart" style="height: 300px;"></div> -->
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Negeri</th>
                        <th>Universiti</th>
                        <th>Kod</th>
                        <th>Nama Program</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($jobs_edu as $job_data) {
                          echo "<tr>
                          <td>". $job_data['UNI_STATE'] ."</td>
                          <td>". $job_data['UNI_DESC'] ."</td>
                          <td>". $job_data['KSS_KOD_PROG'] ."</td>
                          <td>". $job_data['KSS_PROG_DESC'] ."</td>
                          </tr>";
                        }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Negeri</th>
                        <th>Universiti</th>
                        <th>Kod</th>
                        <th>Nama Program</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 33 hour
        </div>
        <strong>2015</strong> What do you want to be?.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->
    <!-- DATA TABES SCRIPT -->
    <script src="http://jejakasnaf.esy.es/backend/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="http://jejakasnaf.esy.es/backend/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

    <!-- line chart -->
    <script type="text/javascript">
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var lineChartData = {
        labels : [ <?php print_r($dataY); ?>],
        datasets : [
          {
            label: "Peluang Kerjaya",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [<?php print_r($dataX); ?> ]
          },
          {
            label: "Kursus Berkaitan",
            fillColor : "rgba(116, 165, 193,0.2)",
            strokeColor : "rgba(116, 165, 193,1)",
            pointColor : "rgba(116, 165, 193,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(116, 165, 193,1)",
            data : [<?php print_r($dataZ); ?> ]
          }
        ]

      }

    var barChartData = {
      labels : [<?php print_r($legX); ?>],
      datasets : [
        {
          fillColor : "rgba(0, 166, 90,0.5)",
          strokeColor : "rgba(0, 166, 90,0.8)",
          highlightFill: "rgba(0, 166, 90,0.75)",
          highlightStroke: "rgba(0, 166, 90,1)",
          data : [<?php print_r($degY); ?>]
        },
        {
          fillColor : "rgba(245, 105, 84,0.5)",
          strokeColor : "rgba(245, 105, 84,0.8)",
          highlightFill : "rgba(245, 105, 84,0.75)",
          highlightStroke : "rgba(245, 105, 84,1)",
          data : [<?php print_r($dipY); ?>]
        }
      ]

    }

    var doughnutData = [
        {
          value: 141123,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Pendaftaran Aktif"
        },
        {
          value: 3310,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Pendaftaran Baharu"
        },
        {
          value: 83712,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Kekosongan"
        },
        {
          value: 298,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Penempatan"
        }

      ];

    window.onload = function(){
      var ctx = document.getElementById("canvas-line").getContext("2d");
      window.myLine = new Chart(ctx).Line(lineChartData, {
        responsive: true
      });

      var ctx = document.getElementById("canvas-bar").getContext("2d");
      window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive : true
      });

      var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
    }
   </script>

   <!-- Bar Chart -->
    <script  type="text/javascript">
    // var randomScalingFactor = function(){ return Math.round(Math.random()*100)};


    </script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

    <script type="text/javascript">
      $(function () {
        "use strict";

        // AREA CHART
        var area = new Morris.Area({
          element: 'revenue-chart',
          resize: true,
          data: [
            {y: '2011 Q1', item1: 2666, item2: 2666},
            {y: '2011 Q2', item1: 2778, item2: 2294},
            {y: '2011 Q3', item1: 4912, item2: 1969},
            {y: '2011 Q4', item1: 3767, item2: 3597},
            {y: '2012 Q1', item1: 6810, item2: 1914},
            {y: '2012 Q2', item1: 5670, item2: 4293},
            {y: '2012 Q3', item1: 4820, item2: 3795},
            {y: '2012 Q4', item1: 15073, item2: 5967},
            {y: '2013 Q1', item1: 10687, item2: 4460},
            {y: '2013 Q2', item1: 8432, item2: 5713}
          ],
          xkey: 'y',
          ykeys: ['item1', 'item2'],
          labels: ['Item 1', 'Item 2'],
          lineColors: ['#a0d0e0', '#3c8dbc'],
          hideHover: 'auto'
        });

        // LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [ <?php print_r($json_data); ?> ],
          xkey: 'y',
          ykeys: ['a'],
          labels: ['Item 1'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });

        //DONUT CHART
        var donut = new Morris.Donut({
          element: 'sales-chart',
          resize: true,
          colors: ["#3c8dbc", "#f56954", "#00a65a"],
          data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
          ],
          hideHover: 'auto'
        });
        //BAR CHART
        var bar = new Morris.Bar({
          element: 'bar-chart',
          resize: true,
          data: [<?php print_r($json_data); ?> ],
          barColors: ['#00a65a', '#f56954'],
          xkey: 'y',
          ykeys: ['a'],
          labels: ['Total Jobs'],
          hideHover: 'auto'
        });
      });
    </script>
  </body>
