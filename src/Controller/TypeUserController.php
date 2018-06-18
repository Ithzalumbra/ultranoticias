<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeUser Controller
 *
 * @property \App\Model\Table\TypeUserTable $TypeUser
 *
 * @method \App\Model\Entity\TypeUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeUserController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeUser = $this->paginate($this->TypeUser);

        $this->set(compact('typeUser'));
    }

    /**
     * View method
     *
     * @param string|null $id Type User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeUser = $this->TypeUser->get($id, [
            'contain' => []
        ]);

        $this->set('typeUser', $typeUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeUser = $this->TypeUser->newEntity();
        if ($this->request->is('post')) {
            $typeUser = $this->TypeUser->patchEntity($typeUser, $this->request->getData());
            if ($this->TypeUser->save($typeUser)) {
                $this->Flash->success(__('The type user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type user could not be saved. Please, try again.'));
        }
        $this->set(compact('typeUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeUser = $this->TypeUser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeUser = $this->TypeUser->patchEntity($typeUser, $this->request->getData());
            if ($this->TypeUser->save($typeUser)) {
                $this->Flash->success(__('The type user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type user could not be saved. Please, try again.'));
        }
        $this->set(compact('typeUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeUser = $this->TypeUser->get($id);
        if ($this->TypeUser->delete($typeUser)) {
            $this->Flash->success(__('The type user has been deleted.'));
        } else {
            $this->Flash->error(__('The type user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
