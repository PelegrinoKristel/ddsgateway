<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
    use ConsumesExternalService;
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri =config('services.users1.base_uri');
        $this->secret =config('services.users1.secret');
    }
    public function obtainUsers1(){
        return $this->performRequest('GET','/users1'); 
    }
    /**
 * Create one user using the User1 service
 * @return string
 */
    public function createUser1($data){
        return $this->performRequest('POST', '/users1',
        $data);
    }
    public function obtainUser1($id) {
        return $this->performRequest('GET', "/users1/{$id}");
    }
    public function editUser1($data, $id){
        return $this->performRequest('PUT',"/users1/{$id}", $data);
    }
    public function delete($id){
        return $this->performRequest('DELETE', "/users1/{$id}");
    }
}