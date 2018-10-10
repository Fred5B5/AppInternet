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
	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['index', 'view']);
	}
	public function isAuthorized($user)
	{
		$action = $this->request->getParam('action');
		// Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
		// authentifiés sur l'application
		if (in_array($action, ['index','view'])) {
			return true;
		}
		
		if ($this->Auth->user('typeuser_id') == '3') {
			return true;
		}
		
		return false;
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emplacements']
        ];
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
            'contain' => ['Emplacements', 'Reservations']
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
        $emplacements = $this->Vols->Emplacements->find('list', ['limit' => 200]);
        $this->set(compact('vol', 'emplacements'));
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
        $emplacements = $this->Vols->Emplacements->find('list', ['limit' => 200]);
        $this->set(compact('vol', 'emplacements'));
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
