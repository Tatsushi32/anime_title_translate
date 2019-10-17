<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Titles Controller
 *
 * @property \App\Model\Table\TitlesTable $Titles
 *
 * @method \App\Model\Entity\Title[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TitlesController extends AppController {
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $this->viewBuilder()->layout('app');
        $Anime_Title = $this->request->getQuery('Anime_Title');

        if(!empty($Anime_Title)) {
            $this->paginate = [
                'conditions'=>array('or' => array(
                    'FormalTitle_jp LIKE'=>$Anime_Title.'%', 
                    'HiraganaTitle LIKE'=>$Anime_Title.'%',
                    'KatakanaTitle LIKE'=>$Anime_Title.'%',
                    'ShortTitle LIKE'=>$Anime_Title.'%',
                    'FormalTitle_eg LIKE'=>$Anime_Title.'%',
                    'CapitalTitle LIKE'=>$Anime_Title.'%',
                    'SmallTitle LIKE'=>$Anime_Title.'%',
                )),
            ];
        }
        $titles = $this->paginate($this->Titles);
        $this->set(compact('titles'));
        
    }

    public function view($id = null)
    {
        $title = $this->Titles->get($id, [
            'contain' => ['Comments']
        ]);

        $this->set('title', $title);
    }


    public function getTitles() {
        $title = $this->request->getParam('title');

        if(empty($title)) {
            echo json_encode([]);exit;
        }

        $sql = "SELECT FormalTitle_jp, HiraganaTitle, KatakanaTitle, ShortTitle, FormalTitle_eg, CapitalTitle, SmallTitle FROM titles WHERE FormalTitle_jp LIKE '$title%' OR HiraganaTitle LIKE '$title%' OR KatakanaTitle LIKE '$title%' OR ShortTitle LIKE '$title%' OR FormalTitle_eg LIKE '$title%' OR CapitalTitle LIKE '$title%' OR SmallTitle LIKE '$title%' ";

        $conn = ConnectionManager::get('default');
        $stmt = $conn->execute($sql);
        $data = $stmt->fetchAll('assoc');
        echo json_encode($data);exit;
    }

    public function result() {

        $Anime_Title = $this->request->query('Anime_Title');

        if(!empty($Anime_Title)) {
            $this->paginate = [
                'conditions'=>array('or' => array(
                    'FormalTitle_jp LIKE'=>'%'.$Anime_Title.'%', 
                    'HiraganaTitle LIKE'=>'%'.$Anime_Title.'%',
                    'KatakanaTitle LIKE'=>'%'.$Anime_Title.'%',
                    'ShortTitle LIKE'=>'%'.$Anime_Title.'%',
                    'FormalTitle_eg LIKE'=>'%'.$Anime_Title.'%',
                    'CapitalTitle LIKE'=>'%'.$Anime_Title.'%',
                    'SmallTitle LIKE'=>'%'.$Anime_Title.'%',
                )),
            ];
        }
        $titles = $this->paginate($this->Titles);
        $this->set(compact('titles'));
    }

    public function requesttitle() {
        $requesttitle = $this->Requesttitles->newEntity();
        if ($this->request->is('post')) {
            $requesttitle = $this->Requesttitles->patchEntity($requesttitle, $this->request->data());
            if ($this->Requesttitles->save($requesttitle)) {
                $this->Flash->success(__('The title has been sended.'));
            }
            $this->Flash->error(__('The title could not be sended. Please, try again.'));
        }
        $this->set(compact('requesttitle'));
	}
    
}
