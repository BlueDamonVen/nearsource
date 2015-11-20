'use strict';

app
.controller('employeeController', employeeController);
function employeeController($scope, $uibModal, $cookieStore, $rootScope, $location, $window, EmployeeService, employees, DTOptionsBuilder, DTColumnDefBuilder) {
    var vm = this;
    vm.employees = employees.data;
	vm.dtOptions = DTOptionsBuilder.newOptions()
		.withPaginationType('full_numbers')
		.withDisplayLength(10)
		.withDOM('T<"clearfix"f>t<"bottom"rp>')
		.withTableTools('public/swf/copy_csv_xls_pdf.swf')
		.withOption('responsive', true);
    vm.dtColumnDefs = [
        DTColumnDefBuilder.newColumnDef(0),
        DTColumnDefBuilder.newColumnDef(1),
        DTColumnDefBuilder.newColumnDef(2),
        DTColumnDefBuilder.newColumnDef(3).notVisible(),
        DTColumnDefBuilder.newColumnDef(4).notSortable()
    ];
    vm.employee2Add = _buildEmployee2Add(1);
    vm.addEmployee = addEmployee;
    vm.modifyEmployee = modifyEmployee;
    vm.removeEmployee = removeEmployee;    

	function _buildEmployee2Add(id) {
		return {
			id: id,
			firstName: 'Foo' + id,
			lastName: 'Bar' + id
		};
    }
	function addEmployee() {
		$uibModal.open({
			templateUrl: "public/views/addEmployee.html",
			scope: $scope,
			controller: function($uibModalInstance) {
				$scope.cancel = function() {
					$uibModalInstance.dismiss('cancel');
				};
				$scope.ok = function() {	
					$uibModalInstance.close();
				};
			}
		});				
	}
	function modifyEmployee(index) {
		vm.employees.splice(index, 1, angular.copy(vm.employee2Add));
		vm.employee2Add = _buildEmployee2Add(vm.employee2Add.id + 1);
	}
	function removeEmployee(index) {
		vm.employees.splice(index, 1);
	}

	$scope.dateFrom = moment().startOf("month");
	$scope.dateTo = moment().endOf("month");

	$scope.update = function (pickedDateFrom,pickedDateTo) {
		if (pickedDateFrom === undefined || pickedDateTo === undefined) {
			if($scope.dateFrom === undefined || $scope.dateTo === undefined) {
				$scope.dateFrom = moment().startOf("month");
				$scope.dateTo = moment().endOf("month");
			}
		}else{
			if($scope.dateFrom.diff(moment(pickedDateFrom), 'days') > 0) {
				$scope.dateFrom = moment(pickedDateFrom);
			}
			if (moment(pickedDateTo).diff($scope.dateTo, 'days') > 0) {
				$scope.dateTo = moment(pickedDateTo);
			}
		}
		console.log('cambio',$scope.dateFrom,$scope.dateTo);
	}	    
}