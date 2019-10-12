<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Titles Model
 *
 * @property \App\Model\Table\CommentsTable&\Cake\ORM\Association\HasMany $Comments
 *
 * @method \App\Model\Entity\Title get($primaryKey, $options = [])
 * @method \App\Model\Entity\Title newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Title[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Title|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Title saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Title patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Title[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Title findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TitlesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('titles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('FormalTitle_jp')
            ->maxLength('FormalTitle_jp', 255)
            ->allowEmptyString('FormalTitle_jp');

        $validator
            ->scalar('HiraganaTitle')
            ->maxLength('HiraganaTitle', 255)
            ->allowEmptyString('HiraganaTitle');

        $validator
            ->scalar('KatakanaTitle')
            ->maxLength('KatakanaTitle', 255)
            ->allowEmptyString('KatakanaTitle');

        $validator
            ->scalar('ShortTitle')
            ->maxLength('ShortTitle', 255)
            ->allowEmptyString('ShortTitle');

        $validator
            ->scalar('FormalTitle_eg')
            ->maxLength('FormalTitle_eg', 255)
            ->allowEmptyString('FormalTitle_eg');

        $validator
            ->scalar('CapitalTitle')
            ->maxLength('CapitalTitle', 255)
            ->allowEmptyString('CapitalTitle');

        $validator
            ->scalar('SmallTitle')
            ->maxLength('SmallTitle', 255)
            ->allowEmptyString('SmallTitle');

        $validator
            ->scalar('imageurl')
            ->maxLength('imageurl', 1000)
            ->allowEmptyString('imageurl');

        return $validator;
    }
}
