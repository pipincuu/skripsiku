

var app = angular.module('apps',[]);

app.controller('mahasiswaController', function($http, $scope) {

  $http.get("../mdb/json/mahasiswa.json").then(

    function success(data){
        $scope.mhs = data.data;
    },

    function error(){
      console.log("error");
    }

  );

});
