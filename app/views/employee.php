<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>PP</title>
	<meta name='description' content='employee manage for hr'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link href='http://s.baixing.net/ace/css/bootstrap.min.css' rel='stylesheet'>
	<link href='http://s.baixing.net/ace/css/bootstrap-responsive.min.css' rel='stylesheet'>
	<link href='http://s.baixing.net/ace/css/jquery.datetimepicker.css' rel='stylesheet'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/font-awesome.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-fonts.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/progressbar.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-responsive.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-skins.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/datepicker.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/jquery.dataTables.min.css'>
	<style> #vacation td {
			vertical-align: middle
		}

		.dataTables_length {
			float: left
		}

		.dataTable .btn-mini > [class*="icon-"], .btn-minier > [class*="icon-"] {
			margin-right: 0 !important
		}

		.btn:focus, .btn:active {
			outline: none
		}

		.table {
			table-layout: fixed
		}

		#composer {
			display: table-row
		}

		#composer.hidden {
			display: none
		}

		.control-panel {
			display: block;
			margin: 0 auto;
			width: 80px
		}

		.edit-panel {
			display: none
		}

		.editing .control-panel {
			display: none
		}

		.editing .edit-panel {
			display: block;
			margin: 0 auto;
			width: 52px
		}</style>
	<script>var ErrorTrace = [];
		window.onerror = function (m, u, l) {
			ErrorTrace.push([m, u, l]);
		};</script>
</head>
<body>
<div class='navbar'>
	<div class='navbar-inner'>
		<div class='container-fluid'><a href='#' class='brand'>
				<small><i class='icon-leaf'></i>&nbsp;PP</small>
			</a></div>
	</div>
</div>
<div class='main-container container-fluid'><a id='menu-toggler' href='#' class='menu-toggler'><span class='menu-text'>123</span></a>

	<div id='sidebar' class='sidebar'>
		<div id='sidebar-shortcuts' class='sidebar-shortcuts'>
			<div id='sidebar-shortcuts-mini' class='sidebar-shortcuts-mini'><span class='btn btn-success'></span><span
					class='btn btn-info'></span><span class='btn btn-warning'></span><span
					class='btn btn-danger'></span></div>
		</div>
		<!-- #sidebar-shortcuts-->
		<ul class='nav nav-list'>
			<li class='active'><a href='/hrmanage/employee_manage'><span class='menu-text'>人员管理</span></a></li>
			<li><a href='/hrmanage/vacation'><span class='menu-text'>假期查询</span></a></li>
		</ul>
	</div>
</div>
<div class='main-content'>
	<div id='breadcrumbs' class='breadcrumbs'>
		<ul class='breadcrumb'>
			<li><i class='icon-home home-icon'></i><a href='/hrmanage/'>PP</a><span class='divider'>></span></li>
			<li class='active'>人员管理</li>
		</ul>
	</div>
	<div class='page-content'>
		<table id='vacation' class='table table-striped table-bordered dataTable'>
			<thead>
			<tr>
				<th>工号</th>
				<th>姓名</th>
				<th>部门</th>
				<th>入职日期</th>
				<th style='width:80px'>
					<button id='insert' style='display:block;margin:0 auto' class='btn btn-mini btn-success'><i
							class='icon icon-plus'></i></button>
				</th>
			</tr>
			<tr id='composer' class='hidden'>
				<td><input type='text' name='eid' id='eid-input' class='input-small'></td>
				<td><input type='text' name='name' id='name-input' class='input-small'></td>
				<td><input type='text' name='department' id='department-input' class='input-small'></td>
				<td><input type='text' name='date' value='2014-10-20' id='date-input' class='input-small'></td>
				<td>
					<div style='width:52px;margin:0 auto;'>
						<button id='submit' class='btn btn-mini btn-warning'><i class='icon icon-ok'></i></button>
						<button id='drop'   class='btn btn-mini'><i class='icon icon-remove'></i>
						</button>
					</div>
				</td>
			</tr>
			<tr class='hidden'>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			</thead>
			<tbody>
			<?php
				foreach($data as $employee) {
					?>
					<tr>
						<td><?php echo $employee['userId'];?></td>
						<td><?php echo $employee['name'];?></td>
						<td><?php echo $employee['department'];?></td>
						<td><?php echo $employee['enterDate'];?></td>
						<td>
							<div class='edit-panel'>
								<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
								<button class='btn btn-mini edit-discard'><i
										class='icon icon-remove'></i></button>
							</div>
							<div class='control-panel'>
								<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i>
								</button>
								<button class='btn btn-mini btn-success line-edit'><i
										class='icon icon-edit'></i></button>
								<button class='btn btn-mini btn-danger line-erase'><i
										class='icon icon-minus'></i></button>
							</div>
						</td>
					</tr>
				<?php
				}
				?>
			<tr>
				<td>8</td>
				<td>张婷婷</td>
				<td>管理部</td>
				<td>2005-07-05</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>9</td>
				<td>潘晓良</td>
				<td>管理部</td>
				<td>2005-07-11</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>19</td>
				<td>姜丰波</td>
				<td>产品部</td>
				<td>2005-09-23</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>24</td>
				<td>梁溢</td>
				<td>管理部</td>
				<td>2006-04-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>42</td>
				<td>虞冰</td>
				<td>管理部</td>
				<td>2007-08-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>45</td>
				<td>葛颖</td>
				<td>市场部</td>
				<td>2007-11-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>55</td>
				<td>季寅健</td>
				<td>营收部</td>
				<td>2008-01-07</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>62</td>
				<td>徐雪</td>
				<td>运营部</td>
				<td>2008-01-07</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>80</td>
				<td>王卫华</td>
				<td>技术部</td>
				<td>2008-04-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>98</td>
				<td>华清怡</td>
				<td>财务部</td>
				<td>2008-06-30</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>121</td>
				<td>李广彦</td>
				<td>运营部</td>
				<td>2010-04-27</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>124</td>
				<td>徐玉苏</td>
				<td>财务部</td>
				<td>2010-05-24</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>127</td>
				<td>高明</td>
				<td>运营部</td>
				<td>2010-06-22</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>130</td>
				<td>潘捷</td>
				<td>技术部</td>
				<td>2010-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>138</td>
				<td>齐艳梅</td>
				<td>人力资源部</td>
				<td>2010-11-08</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>143</td>
				<td>李苏晋</td>
				<td>市场部</td>
				<td>2011-01-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>144</td>
				<td>赵润</td>
				<td>营收部</td>
				<td>2011-01-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>166</td>
				<td>曹飞</td>
				<td>技术部</td>
				<td>2011-07-04</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>167</td>
				<td>梁宏昊</td>
				<td>技术部</td>
				<td>2011-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>174</td>
				<td>孙蕤</td>
				<td>人力资源部</td>
				<td>2011-08-15</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>178</td>
				<td>张新雪</td>
				<td>产品部</td>
				<td>2011-04-06</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>181</td>
				<td>周翔</td>
				<td>技术部</td>
				<td>2011-10-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>184</td>
				<td>仇雯晶</td>
				<td>人力资源部</td>
				<td>2011-11-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>186</td>
				<td>高奕峰</td>
				<td>管理部</td>
				<td>2011-11-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>188</td>
				<td>罗颖</td>
				<td>管理部</td>
				<td>2012-02-08</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>194</td>
				<td>贺师俊</td>
				<td>技术部</td>
				<td>2012-05-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>196</td>
				<td>张林</td>
				<td>技术部</td>
				<td>2012-05-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>197</td>
				<td>何颖</td>
				<td>管理部</td>
				<td>2012-06-04</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>198</td>
				<td>诸德超</td>
				<td>运营部</td>
				<td>2012-06-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>201</td>
				<td>张伟</td>
				<td>数据部</td>
				<td>2012-06-25</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>208</td>
				<td>杨敏达</td>
				<td>技术部</td>
				<td>2012-07-16</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>214</td>
				<td>韩时佳</td>
				<td>产品部</td>
				<td>2012-09-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>215</td>
				<td>朱骏</td>
				<td>技术部</td>
				<td>2012-12-19</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>216</td>
				<td>杨玮玮</td>
				<td>营收部</td>
				<td>2013-02-16</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>221</td>
				<td>张敏华</td>
				<td>财务部</td>
				<td>2013-03-25</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>222</td>
				<td>叶楠</td>
				<td>运营部</td>
				<td>2013-04-07</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>225</td>
				<td>丁桂涛</td>
				<td>数据部</td>
				<td>2013-04-22</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>228</td>
				<td>朱秋翾</td>
				<td>数据部</td>
				<td>2013-06-20</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>229</td>
				<td>贺涛</td>
				<td>营收部</td>
				<td>2013-06-24</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>230</td>
				<td>黄凌洁</td>
				<td>人力资源部</td>
				<td>2013-06-26</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>232</td>
				<td>王中杰</td>
				<td>市场部</td>
				<td>2013-06-27</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>233</td>
				<td>叶婵</td>
				<td>营收部</td>
				<td>2013-06-27</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>234</td>
				<td>徐钰炜</td>
				<td>财务部</td>
				<td>2013-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>235</td>
				<td>孙甜</td>
				<td>营收部</td>
				<td>2013-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>236</td>
				<td>陈凯斐</td>
				<td>技术部</td>
				<td>2013-07-15</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>237</td>
				<td>赵路</td>
				<td>人力资源部</td>
				<td>2013-08-05</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>239</td>
				<td>谭嘉明</td>
				<td>产品部</td>
				<td>2013-08-19</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>240</td>
				<td>郭嘉</td>
				<td>技术部</td>
				<td>2013-09-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>241</td>
				<td>徐雁斐</td>
				<td>技术部</td>
				<td>2013-09-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>243</td>
				<td>凌竹馨</td>
				<td>财务部</td>
				<td>2013-10-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>244</td>
				<td>甘婷</td>
				<td>营收部</td>
				<td>2013-10-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>245</td>
				<td>张鹏</td>
				<td>技术部</td>
				<td>2013-10-12</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>246</td>
				<td>同欢</td>
				<td>产品部</td>
				<td>2013-10-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>248</td>
				<td>翟冰洁</td>
				<td>技术部</td>
				<td>2013-11-04</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>249</td>
				<td>尹川</td>
				<td>技术部</td>
				<td>2013-11-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>250</td>
				<td>王冠立</td>
				<td>技术部</td>
				<td>2013-12-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>251</td>
				<td>史祺</td>
				<td>营收部</td>
				<td>2013-12-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>253</td>
				<td>常楚白</td>
				<td>技术部</td>
				<td>2013-12-23</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>254</td>
				<td>许耀升</td>
				<td>数据部</td>
				<td>2014-01-03</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>255</td>
				<td>王彦华</td>
				<td>产品部</td>
				<td>2014-01-06</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>258</td>
				<td>赵征宇</td>
				<td>产品部</td>
				<td>2014-01-09</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>259</td>
				<td>王强</td>
				<td>技术部</td>
				<td>2014-01-06</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>261</td>
				<td>沈洁琼</td>
				<td>营收部</td>
				<td>2014-01-13</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>262</td>
				<td>任剑钢</td>
				<td>技术部</td>
				<td>2014-02-07</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>264</td>
				<td>顾立维</td>
				<td>产品部</td>
				<td>2014-02-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>267</td>
				<td>胡洪伟</td>
				<td>人力资源部</td>
				<td>2014-02-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>269</td>
				<td>张明卿</td>
				<td>技术部</td>
				<td>2014-02-20</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>270</td>
				<td>吴佩华</td>
				<td>人力资源部</td>
				<td>2014-03-03</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>272</td>
				<td>于博</td>
				<td>产品部</td>
				<td>2014-03-03</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>274</td>
				<td>杜波涛</td>
				<td>市场部</td>
				<td>2014-03-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>275</td>
				<td>刘杰</td>
				<td>技术部</td>
				<td>2014-02-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>276</td>
				<td>张翼飞</td>
				<td>营收部</td>
				<td>2014-03-03</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>279</td>
				<td>彭思萌</td>
				<td>产品部</td>
				<td>2014-03-03</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>280</td>
				<td>夏冬青</td>
				<td>市场部</td>
				<td>2014-03-10</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>281</td>
				<td>李潇琳</td>
				<td>营收部</td>
				<td>2014-03-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>282</td>
				<td>刘泉</td>
				<td>数据部</td>
				<td>2014-04-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>283</td>
				<td>夏志迪</td>
				<td>技术部</td>
				<td>2014-03-17</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>284</td>
				<td>梁燕</td>
				<td>市场部</td>
				<td>2014-04-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>285</td>
				<td>朱永亮</td>
				<td>产品部</td>
				<td>2014-04-08</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>288</td>
				<td>艾娟</td>
				<td>技术部</td>
				<td>2014-04-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>290</td>
				<td>陈曦</td>
				<td>运营部</td>
				<td>2014-04-08</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>291</td>
				<td>张燕枝</td>
				<td>营收部</td>
				<td>2014-04-08</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>292</td>
				<td>李欣</td>
				<td>数据部</td>
				<td>2014-04-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>293</td>
				<td>曾劲</td>
				<td>技术部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>294</td>
				<td>高帆</td>
				<td>技术部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>295</td>
				<td>毛瑞婷</td>
				<td>营收部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>296</td>
				<td>杨依薇</td>
				<td>运营部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>297</td>
				<td>陈旭园</td>
				<td>营收部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>298</td>
				<td>孙一凡</td>
				<td>数据部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>299</td>
				<td>程静</td>
				<td>运营部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>300</td>
				<td>高阳</td>
				<td>营收部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>302</td>
				<td>张海林</td>
				<td>技术部</td>
				<td>2014-07-02</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>303</td>
				<td>肖剑</td>
				<td>技术部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>306</td>
				<td>张秀娟</td>
				<td>营收部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>308</td>
				<td>张瑶丹</td>
				<td>技术部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>309</td>
				<td>张洋</td>
				<td>产品部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>311</td>
				<td>曹维杰</td>
				<td>技术部</td>
				<td>2014-07-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>323</td>
				<td>刘佳</td>
				<td>产品部</td>
				<td>2014-07-14</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>324</td>
				<td>蔡辰霏</td>
				<td>产品部</td>
				<td>2014-06-23</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>325</td>
				<td>吴名扬</td>
				<td>技术部</td>
				<td>2014-07-07</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>326</td>
				<td>万捷妮</td>
				<td>市场部</td>
				<td>2014-07-18</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>327</td>
				<td>甘洪翔</td>
				<td>技术部</td>
				<td>2014-07-21</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>328</td>
				<td>赖君杰</td>
				<td>营收部</td>
				<td>2014-08-04</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>329</td>
				<td>宋云霄</td>
				<td>市场部</td>
				<td>2014-08-11</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>330</td>
				<td>刘荣亮</td>
				<td>市场部</td>
				<td>2014-08-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>332</td>
				<td>钟轶辰</td>
				<td>运营部</td>
				<td>2014-08-04</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>333</td>
				<td>叶子昊</td>
				<td>营收部</td>
				<td>2014-08-11</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>334</td>
				<td>周美玲</td>
				<td>市场部</td>
				<td>2014-08-05</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>335</td>
				<td>卢曦曦</td>
				<td>产品部</td>
				<td>2014-09-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>336</td>
				<td>晋晓炜</td>
				<td>技术部</td>
				<td>2014-09-22</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>337</td>
				<td>王文沛</td>
				<td>技术部</td>
				<td>2014-08-18</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>338</td>
				<td>彭恺</td>
				<td>产品部</td>
				<td>2014-08-18</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>339</td>
				<td>严翔</td>
				<td>产品部</td>
				<td>2014-09-01</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>341</td>
				<td>申文军</td>
				<td>校园PP</td>
				<td>2014-08-25</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>342</td>
				<td>邵正兴</td>
				<td>技术部</td>
				<td>2014-09-05</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>343</td>
				<td>屠淑斐</td>
				<td>校园PP</td>
				<td>2014-09-05</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>344</td>
				<td>徐鑫</td>
				<td>技术部</td>
				<td>2014-09-11</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			<tr>
				<td>345</td>
				<td>何淼</td>
				<td>市场部</td>
				<td>2014-09-13</td>
				<td>
					<div class='edit-panel'>
						<button class='btn btn-mini btn-warning edit-save'><i class='icon icon-ok'></i></button>
						<button   class='btn btn-mini edit-discard'><i
								class='icon icon-remove'></i></button>
					</div>
					<div class='control-panel'>
						<button class='btn btn-mini btn-info line-vacation'><i class='icon icon-calendar'></i></button>
						<button   class='btn btn-mini btn-success line-edit'><i
								class='icon icon-edit'></i></button>
						<button   class='btn btn-mini btn-danger line-erase'><i
								class='icon icon-minus'></i></button>
					</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
<script src='http://s.baixing.net/ace/js/jquery-2.0.3.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.ui.touch-punch.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.slimscroll.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.easy-pie-chart.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.dataTables.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.pie.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.resize.min.js'></script>
<script src='http://s.baixing.net/ace/js/ace-elements.min.js'></script>
<script src='http://s.baixing.net/ace/js/ace.min.js'></script>
<script src='http://s.baixing.net/ace/js/date-time/bootstrap-datepicker.min.js'></script>
<script src='http://s.baixing.net/ace/js/bootstrap.min.js'></script>
<script src='http://s.baixing.net/Puerh/js/bootstrap.js'></script>
<script src='http://s.baixing.net/ace/js/ace.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.datetimepicker.js'></script>
<script src='http://s.baixing.net/ace/js/progressbar.min.js'></script>
<script> var dateregex = /^\d{4}-\d{2}-\d{2}$/;
	var halfYear = ((new Date()).getMonth() >= 6);
	/*0-11*/
	window.send = (function () {
		var method = function (data) {
			var methods = {
				enter: 'get',
				leave: 'get',
				update: 'get',
				stat: 'get',
				detail: 'get',
				who: 'get',
				qingjia: 'get'
			};
			return methods[data.operation];
		};
		var url = function (data) {
			var urls = {
				enter: '/hrmanage/employee',
				leave: '/hrmanage/employee',
				update: '/hrmanage/employee',
				stat: '/hrmanage/vacation_stat',
				detail: '/hrmanage/vacation_stat_detail',
				who: '/hrmanage/who',
				qingjia: '/hrmanage/qingjia'
			};
			return urls[data.operation];
		};
		return function (data) {
			var param = $.type(data.data) == 'string' ? data.data : $.param(data.data || {});
			param += '&operation=' + data.operation;
			$.ajax({
				success: data.success || function (response) {
					if (response.result != 'success') {
						alert(response.result || '未知错误');
						return;
					}
					if (data.callback) {
						data.callback.call(this, response);
					}
				}, error: data.error || function () {
					alert('网络错误, 请刷新再试试');
				}, url: url(data), type: method(data), dataType: data.expect || 'json', data: param
			});
		};
	})();</script>
<script> var validate_employee = function (inputs) {
		var keys = ['工号', '姓名', '部门', '入职日期'];
		for (var i in keys) {
			if ($.trim(inputs[i].value).length == 0) {
				alert('请填写' + keys[i]);
				return false;
			}
		}
		if (isNaN($.trim(inputs[0].value))) {
			alert(keys[0] + '必须是数字');
			return false;
		}
		if (!dateregex.test($.trim(inputs[3].value))) {
			alert(keys[3] + '格式: 2000-01-01');
			return false;
		}
		return true;
	};
	var table = $('#vacation').DataTable({
		columnDefs: [{
			targets: -1,
			defaultContent: '<div class="edit-panel">' + '<button class="btn btn-mini btn-warning edit-save">' + '<i class="icon icon-ok"></i>' + '</button>' + '<button class="btn btn-mini edit-discard" style="margin-left:2px">' + '<i class="icon icon-remove"></i>' + '</button>' + '</div>' + '<div class="control-panel">' + '<button class="btn btn-mini btn-info line-vacation">' + '<i class="icon icon-calendar"></i>' + '</button>' + '<button class="btn btn-mini btn-success line-edit" style="margin-left:2px">' + '<i class="icon icon-edit"></i>' + '</button>' + '<button class="btn btn-mini btn-danger line-erase" style="margin-left:2px">' + '<i class="icon icon-minus"></i>' + '</button>' + '</div>'
		}],
		order: [0, 'asc'],
		ordering: true,
		language: {
			paginate: {first: '首页', last: '尾页', next: '下一页', previous: '上一页'},
			search: '搜索',
			lengthMenu: '一页_MENU_条',
			infoFiltered: '...',
			info: '第_START_到_END_条，共_MAX_条',
			infoEmpty: '没有记录',
			zeroRecords: '没有找到'
		},
		paging: true
	});
	var bind_insert_click = function () {
		$('#insert').prop('disabled', false).click(function (e) {
			$(this).unbind('click');
			$(this).prop('disabled', true);
			$('#composer').removeClass('hidden');
		});
	};
	bind_insert_click();
	$('#drop').click(function (e) {
		$('#composer').addClass('hidden');
		bind_insert_click();
	});
	$('#submit').click(function (e) {
		var inputs = $('#composer').find('input');
		if (!validate_employee(inputs)) {
			return;
		}
		window.send({
			operation: 'enter', data: inputs.serialize(), callback: function (response) {
				$('#drop').click();
				table.row.add([response.data.eid, response.data.name, response.data.department, response.data.enterDate,]).order([0, 'asc']).draw();
			}
		});
	});
	var today = function () {
		var today = new Date();
		var month = ('0' + (today.getMonth() + 1)).substr(-2);
		var date = ('0' + today.getDate()).substr(-2);
		return today.getFullYear() + '-' + month + '-' + date;
	};
	var vacation_apply = function (eid) {
		return '<table class="table table-bordered" style="margin:0">' + '<thead><tr>' + '<th>请假日期</th>' + '<th>类型</th>' + '<th>时间</th>' + '<th>备注</th>' + '<th style="width:52px"></th>' + '</tr></thead>' + '<tbody><tr>' + '<input type="hidden" name="eid" value="' + eid + '"/>' + '<td><input type="text" name="date" value="' + today() + '"/></td>' + '<td><select name="type">' + '<option selected value="annual">事假</option>' + '<option value="sick">病假</option>' + '</select></td>' + '<td><select name="duration">' + '<option selected value="all">一天</option>' + '<option value="morning">上午</option>' + '<option value="afternoon">下午</option>' + '</select></td>' + '<td><input type="text" name="comment" placeholder="备注"/></td>' + '<td>' + '<div style="width:52px;margin:0 auto">' + '<button class="btn btn-mini btn-warning submit-vacation">' + '<i class="icon icon-ok"></i>' + '</button>' + '<button class="btn btn-mini cancel-vacation" style="margin-left:2px">' + '<i class="icon icon-remove"></i>' + '</button>' + '</div>' + '</td>' + '</tr></tbody>' + '</table>';
	};
	$('#vacation').on('click', '.line-erase', function (e) {
		var leaveDate = prompt('请填写离职日期', today());
		if (leaveDate === null) return;
		if (!dateregex.test(leaveDate)) {
			alert('离职日期格式: 2000-01-01');
			return;
		}
		var $tr = $(this).closest('tr');
		window.send({
			operation: 'leave',
			data: {eid: $tr.children()[0].innerHTML.trim(), leaveDate: leaveDate},
			callback: function (response) {
				if (response.result == 'success') {
					table.row($tr).remove().draw();
				} else {
					alert(response.result || '删除失败');
				}
			}
		});
	}).on('click', '.line-vacation', function (e) {
		var row = table.row($(this).closest('tr'));
		if (row.child.isShown()) {
			row.child.hide();
		} else {
			if (!$(this).data('child')) {
				$(this).data('child', true);
				row.child(vacation_apply(row.data()[0]));
			}
			row.child.show();
		}
	}).on('click', '.submit-vacation', function (e) {
		var that = $(this);
		window.send({
			operation: 'qingjia',
			data: $(this).closest('tr').find('input,select').serialize(),
			callback: function (response) {
				that.next().click();
				/*click cancel*/
				alert('请假成功!');
			}
		});
	}).on('click', '.cancel-vacation', function (e) {
		table.row($(this).closest('table').closest('tr').prev()).child.hide();
	}).on('click', '.line-edit', function (e) {
		var $tr = $(this).closest('tr');
		$tr.addClass('editing');
		var tds = $tr.children();
		var editable = function (td, name) {
			var val = $.trim(td.innerHTML);
			td.innerHTML = '<input name="' + name + '" type="text" value="' + val + '"/>';
		};
		var keys = ['eid', 'name', 'department', 'date'];
		$(tds[0]).append('<input type="hidden" name="eid" value="' + $.trim(tds[0].innerHTML) + '"/>');
		for (var i = 1; i < 4; ++i) {
			editable(tds[i], keys[i]);
		}
	}).on('click', '.edit-save', function (e) {
		var that = $(this);
		var inputs = $(this).closest('tr').find('input');
		if (!validate_employee(inputs)) {
			return;
		}
		window.send({
			operation: 'update', data: inputs.serialize(), callback: function (response) {
				that.next().click();
			}
		});
	}).on('click', '.edit-discard', function (e) {
		var $tr = $(this).closest('tr');
		$tr.removeClass('editing');
		var tds = $tr.children();
		var textify = function (td) {
			$(td).text($(td).find('input').val());
		};
		$(tds[0]).find('input').remove();
		for (var i = 1; i < 4; ++i) {
			textify(tds[i]);
		}
	});</script>
</html>