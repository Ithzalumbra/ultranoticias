<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Http\Client;
use Illuminate\Contracts\Hashing\Hasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['register', 'login']);
    }


    public function index()
    {
        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/users/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $users = $data->data;
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $api = ['Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'password' => $data['password'],
                'Correo' => $data['Correo'],
                'Telefono' => $data['Telefono'],
                'id_type_user' =>'3'];
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);
            $data_api = json_encode($api);
            $response = $http->post(
                'http://127.0.0.1:8000/api/v1/users/',
                 $data_api,
                ['type' => 'json']
            );
            $this->redirect(['controller' => 'users', 'action' => 'index']);
            $this->Flash->success(__('El usuario se ha creado correctamente.'));
        }
    }

    public function register()
    {

        if ($this->request->is('post')) {
            $data = $this->request->data;
            $api = ['Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'password' => $data['password'],
                'Correo' => $data['Correo'],
                'Telefono' => $data['Telefono'],
                'id_type_user' => 3 ];
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);
            $data_api = json_encode($api);
            $response = $http->post(
                'http://127.0.0.1:8000/api/v1/users/',
                $data_api,
                ['type' => 'json']
            );
            $this->redirect(['controller' => 'users', 'action' => 'index']);
            $this->Flash->success(__('Se ha registrado correctamente.'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $http = new Client(['headers' => [
            'Content-Type' => 'application/json']
        ]);
        $response = $http->get(
            'http://127.0.0.1:8000/api/v1/users/'.$id,
            [],
            ['type' => 'json']
        );
        $user = $response->body();
        $user = json_decode($user)->data;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;

            $api = ['Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'password' => $data['password'],
                'Correo' => $data['Correo'],
                'Telefono' => $data['Telefono'],
                'id_type_user' =>'3'];
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);

            $response = $http->put(
                'http://127.0.0.1:8000/api/v1/users/'.$data['id'],
                json_encode($api),
                ['type' => 'json']
            );
            $this->Flash->success(__('El usuario se ha modificado correctamente.'));
            $this->redirect(['action' => 'index']);
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $http = new Client(['headers' => [
            'Content-Type' => 'application/json']
        ]);

        $response = $http->delete(
            'http://127.0.0.1:8000/api/v1/users/'.$id,
            [],
            ['type' => 'json']
        );
        $this->Flash->success(__('El usuario se ha borrado correctamente.'));
        $this->redirect(['action' => 'index']);
    }

    public function login(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);
            $api = ['email' => $data['email'], 'password' => $data['password']];

            $response = $http->post(
                'http://127.0.0.1:8000/api/v1/login/',
                json_encode($api),
                ['type' => 'json']
            );
            $response = json_decode($response->body(), true);
            /*pr($response['data']);
            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntities($user, $response['data']);
            die;
            pr($user);*/
            $this->Flash->success(__('El usuario se ha logueado correctamente.'));
            $this->Auth->setUser($response['data']);
            $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
        }
    }

    public function logout(){
        $this->Auth->logout();
        $this->Flash->success(__('El usuario ha cerrado sesion correctamente.'));
        $this->redirect(['controller' => 'users', 'action' => 'login']);
    }
}
