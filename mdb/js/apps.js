/la

var app = angular.module('apps',[]);

app.controller('mahasiswaController', function($http, $scope) {

  // $http.get("http://localhost/kemahasiswaan/Service/get").then(
  $http.get("http://localhost/skripsiku-kemahasiswaan/Service/get").then(

    function success(data){
        $scope.mhs = data.data;
    },

    function error(){
      console.log("error");
    }

  );

});

app.controller('',function(){})

app.controller('bebasControlelr',function($http, $scope){

$http.post()

$htpp.get("").then(

  function success($data){
    $scope.bebas = data.data;
  },

  function error($data){
    console.log("error");
  }

);

});
