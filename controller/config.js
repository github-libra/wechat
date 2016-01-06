angular.module('app')
  .controller('configCtrl', configCtrl);

configCtrl.$inject = ['$scope', 'equipmentService']

function configCtrl($scope, equipmentService) {
  $scope.global.curPage = 4;

  $scope.equipments = equipmentService.getEquipment();

  $scope.edit = function(equipment) {
    //alert(equipment.name);
    equipment.name = "hello";
  }
  
  $scope.delete = function(equipment){
    var index = 0;
    for(var i = 0; i < $scope.equipments.length; i++) {
      if($scope.equipments[i].name === equipment.name) {
        index = i;
      }
    } 
    $scope.equipments.splice(index, 1)
  }
}