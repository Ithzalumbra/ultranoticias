<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Client;

/**
 * Newsletter Controller
 *
 * @property \App\Model\Table\NewsletterTable $Newsletter
 *
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsletterController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index', 'view']);
    }

    public function index()
    {
//        pr);die;
        $http = new Client();
        $response = $http->get($this->getApiUrl().'/news/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $news = $data->data;
        $this->set(compact('news'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {
        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/news/'.$this->request->getParam("id"), [], ['type' => 'json']);
        $data = json_decode($response->body());
        $newsletter = $data->data;


        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/users/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $users = $data->data;


        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/comments/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $comments = $data->data;
        foreach ($comments as $key => $comen){
            if($comen->id_news != $newsletter->id){
                unset($comments[$key]);
            }
        }
//        pr($comments); die;
        $this->set(compact('newsletter', 'comments', 'users'));
    }

    public function ajax($id){
        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/users/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $users = $data->data;

        $this->viewBuilder()->autoLayout(false);
        $http = new Client();
        $response = $http->get('http://127.0.0.1:8000/api/v1/comments/', [], ['type' => 'json']);
        $data = json_decode($response->body());
        $comments = $data->data;
        foreach ($comments as $key => $comen){
            if($comen->id_news != $id){
                unset($comments[$key]);
            }
        }
        $this->set(compact('comments', 'users'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
//        $newsletter = $this->Newsletter->newEntity();
        if($this->request->is('post')){
//            $newsletter = $this->Newsletter->patchEntity($newsletter, $this->request->getData());
            $data = $this->request->data;
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);
            $api = ['title' => $data['title'],
                'short_description' => $data['short_description'],
                'main_content' => $data['main_content'],
                'imagen' => $data['imagen'],
                'autor' =>  $this->Auth->user()['id'] ];
            //     pr(json_encode($api)); die;
            $response = $http->post(
                'http://127.0.0.1:8000/api/v1/news/',
                json_encode($api),
                ['type' => 'json']
            );
            $response = json_decode($response->body(), true);
            $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $http = new Client(['headers' => [
            'Content-Type' => 'application/json']
        ]);
        $response = $http->get(
            'http://127.0.0.1:8000/api/v1/news/'.$id,
            [],
            ['type' => 'json']
        );
        $newsletter = $response->body();
        $newsletter = json_decode($newsletter)->data;
        if($this->request->is('post')){
//            $newsletter = $this->Newsletter->patchEntity($newsletter, $this->request->getData());
            $data = $this->request->data;
            $http = new Client(['headers' => [
                'Content-Type' => 'application/json']
            ]);
            $api = ['title' => $data['title'],
                'short_description' => $data['short_description'],
                'main_content' => $data['main_content'],
                'imagen' => $data['imagen'],
                'autor' =>  $this->Auth->user()['id'] ];
            //     pr(json_encode($api)); die;
            $response = $http->put(
                'http://127.0.0.1:8000/api/v1/news/'.$id,
                json_encode($api),
                ['type' => 'json']
            );
            $response = json_decode($response->body(), true);
//            pr($response); die;
            $this->redirect(['controller' => 'newsletter', 'action' => 'index']);
        }
        $this->set(compact('newsletter'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $newsletter = $this->Newsletter->get($id);
//        if ($this->Newsletter->delete($newsletter)) {
//            $this->Flash->success(__('The newsletter has been deleted.'));
//        } else {
//            $this->Flash->error(__('The newsletter could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }*/
}
