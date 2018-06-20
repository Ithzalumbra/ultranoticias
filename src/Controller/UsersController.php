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
    }


    public function index()
    {
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
            $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
            $this->Flash->success(__('The comment has been saved.'));
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
            $this->Auth->setUser($response['data']);
            $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
        }
    }

    public function logout(){
        $this->Auth->logout();
        $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
    }
}
