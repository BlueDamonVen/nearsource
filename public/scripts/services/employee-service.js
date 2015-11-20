app
    .factory('EmployeeService', 
        ['$rootScope', '$http', '$q', 
        function($rootScope, $http, $q) {
        return {
            $list: function() {
                var deferred = $q.defer();
                var url = "http://localhost/nearsource/api/employee";

                $http.get(url)
                .success(function(response) {
                    deferred.resolve(response);
                })
                .error(function(response) {
                    deferred.reject(response);
                });
                return deferred.promise;
            },
            $add: function(user,password) {
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
            },
            $update: function(user,password) {
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
            },
            $delete: function(user,password) {
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