'use strict';
var app = angular.module('petsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('PetsController', ['$http', '$scope',  function($http, $scope){

    function createDropzone () {
        var myDropzone = new Dropzone("#image-upload", { 
            url: "/pets/image",
            sending: function(file, xhr, formData){
                formData.append('pet_id', $scope.newPet.id);
                formData.append('csrf_token', $scope.csrfToken);
            },
            success: function(file, response){
                $scope.getPets();
            }
        });
    }

    function onPostSuccess (response) {
        if (response.data.success){
            $scope.newPet.id = response.data.pet.id;
            createDropzone();
            $('#image-upload-modal').openModal();
        } else {
            var errors = response.data.errors;
            for (var err in errors) {
                errors[err] = errors[err].pop();
            }
            $scope.errors = errors;
            $('#errors').openModal();
        }
        $scope.getPets();
    }

    $scope.getPets = function(){
        $http.get('/pets').then(function(response){
            $scope.pets = response.data.pets;
            $scope.user = response.data.user;
        },function(e){
            console.log(e);
        });
    };

    $scope.openPetModal = function(id){
        $scope.displayedPet = $scope.pets.filter(pet => pet.id == id).pop();
        $('#show-pet-modal').openModal();
        setTimeout( function(){
            $('#show-pet-modal').css({
                "transition": "all 0.3s",
                "top": "5%"
            });
        }, 400);
    };

    $scope.addPet = function(pet){
        $('#pets-create-modal').closeModal();
        pet.user_id = $scope.user.id;
        $http.post('/pets', pet).then(onPostSuccess, console.log);
    };

    $scope.finishNewPet = function(){
        $scope.newPet = {};
    };

    $scope.verifyUser = function(){
        if ( !$scope.user ) {
            $('#pets-create-modal').closeModal();
            $('#auth-modal').openModal();
        }
    };

    $scope.pets = [];
    $scope.displayedPet = {};
    $scope.newPet = {};
    $scope.errors = {};
    $scope.user = {};

    $scope.csrfToken = $('#csrf-token input').val();

    $scope.getPets();
}]);