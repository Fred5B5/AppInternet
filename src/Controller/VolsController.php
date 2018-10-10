<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vols Controller
 *
 * @property \App\Model\Table\VolsTable $Vols
 *
 * @method \App\Model\Entity\Vol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VolsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vols = $this->paginate($this->Vols);

        $this->set(compact('vols'));
    }

    /**
     * View method
     *
     * @param string|null $id Vol id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vol = $this->Vols->get($id, [
            'contain' => []
        ]);

        $this->set('vol', $vol);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vol = $this->Vols->newEntity();
        if ($this->request->is('post')) {
            $vol = $this->Vols->patchEntity($vol, $this->request->getData());
            if ($this->Vols->save($vol)) {
                $this->Flash->success(__('The vol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vol could not be saved. Please, try again.'));
        }
        $this->set(compact('vol'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vol id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vol = $this->Vols->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vol = $this->Vols->patchEntity($vol, $this->request->getData());
            if ($this->Vols->save($vol)) {
                $this->Flash->success(__('The vol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vol could not be saved. Please, try again.'));
        }
        $this->set(compact('vol'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vol = $this->Vols->get($id);
        if ($this->Vols->delete($vol)) {
            $this->Flash->success(__('The vol has been deleted.'));
        } else {
            $this->Flash->error(__('The vol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
