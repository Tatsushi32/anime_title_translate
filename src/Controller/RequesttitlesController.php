<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

class RequesttitlesController extends AppController {

	public function requesttitle() {
        $requesttitle = $this->Requesttitles->newEntity();
        if ($this->request->is('post')) {
            $requesttitle = $this->Requesttitles->patchEntity($requesttitle, $this->request->data());
            if ($this->Requesttitles->save($requesttitle)) {
                // $this->Flash->success(__('The title has been sended.'));

                return $this->redirect(['controller' => 'titles', 'action' => 'index']);
            }
            $this->Flash->error(__('The title could not be sended. Please, try again.'));
		}
        $this->set(compact('requesttitle'));
	}
	
}