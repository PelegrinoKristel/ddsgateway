<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2Service{
    use ConsumesExternalService;
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri =config('services.users2.base_uri');
        $this->secret =config('services.users2.secret');
    }
    public function obtainUsers2(){
        return $this->performRequest('GET','/users2'); 
    }
    /**
 * Create one user using the User1 service
 * @return string
 */
    public function createUser2($data){
        return $this->performRequest('POST', '/users2',
        $data);
    }
    public function obtainUser2($id) {
        return $this->performRequest('GET', "/users2/{$id}");
    }
    public function editUser2($data, $id){
        return $this->performRequest('PUT',"/users2/{$id}", $data);
    }
    public function delete($id){
        return $this->performRequest('DELETE', "/users2/{$id}");
    }
}