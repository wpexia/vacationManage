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
				<th style='width:120px'>
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
					<div style='width:120px;margin:0 auto;'>
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
				enter: '/myla/laravel/public/employee',
				leave: '/myla/laravel/public/employee',
				update: '/myla/laravel/public/employee',
				stat: '/hrmanage/vacation_stat',
				detail: '/hrmanage/vacation_stat_detail',
				who: '/hrmanage/who',
				qingjia: '/myla/laravel/public/qingjia'
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