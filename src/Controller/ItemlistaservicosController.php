<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Itemlistaservicos Controller
 *
 * @property \App\Model\Table\ItemlistaservicosTable $Itemlistaservicos
 * @method \App\Model\Entity\Itemlistaservico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemlistaservicosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $itemlistaservicos = $this->paginate($this->Itemlistaservicos);

        $this->set(compact('itemlistaservicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Itemlistaservico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemlistaservico = $this->Itemlistaservicos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('itemlistaservico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemlistaservico = $this->Itemlistaservicos->newEmptyEntity();
        if ($this->request->is('post')) {
            $itemlistaservico = $this->Itemlistaservicos->patchEntity($itemlistaservico, $this->request->getData());
            if ($this->Itemlistaservicos->save($itemlistaservico)) {
                $this->Flash->success(__('The itemlistaservico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemlistaservico could not be saved. Please, try again.'));
        }
        $this->set(compact('itemlistaservico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Itemlistaservico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemlistaservico = $this->Itemlistaservicos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemlistaservico = $this->Itemlistaservicos->patchEntity($itemlistaservico, $this->request->getData());
            if ($this->Itemlistaservicos->save($itemlistaservico)) {
                $this->Flash->success(__('The itemlistaservico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The itemlistaservico could not be saved. Please, try again.'));
        }
        $this->set(compact('itemlistaservico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Itemlistaservico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemlistaservico = $this->Itemlistaservicos->get($id);
        if ($this->Itemlistaservicos->delete($itemlistaservico)) {
            $this->Flash->success(__('The itemlistaservico has been deleted.'));
        } else {
            $this->Flash->error(__('The itemlistaservico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
