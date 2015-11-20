app
    .factory('UserService', 
        ['$rootScope', '$http', '$q', 
        function($rootScope, $http, $q) {
        return {
            $login: function(user,password) {
                var deferred = $q.defer();
                if(user===undefined || password===undefined) deferred.reject(undefined);

                var url = "http://localhost/nearsource/login/dologin" +
                    "?user=" + user + 
                    "&password=" + password;

                $http.get(url)
                .success(function(response) {
                    deferred.resolve(response);
                })
                .error(function(response) {
                    deferred.reject(response);
                });
                return deferred.promise;
            }
        }
    }]);