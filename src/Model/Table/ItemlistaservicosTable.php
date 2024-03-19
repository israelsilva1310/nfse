<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itemlistaservicos Model
 *
 * @method \App\Model\Entity\Itemlistaservico newEmptyEntity()
 * @method \App\Model\Entity\Itemlistaservico newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Itemlistaservico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itemlistaservico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Itemlistaservico findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Itemlistaservico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Itemlistaservico[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itemlistaservico|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemlistaservico saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemlistaservico[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Itemlistaservico[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Itemlistaservico[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Itemlistaservico[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ItemlistaservicosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('itemlistaservicos');
        $this->setDisplayField('item');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('item')
            ->maxLength('item', 10)
            ->requirePresence('item', 'create')
            ->notEmptyString('item');

        $validator
            ->scalar('subitem')
            ->maxLength('subitem', 10)
            ->requirePresence('subitem', 'create')
            ->notEmptyString('subitem');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('cnae')
            ->maxLength('cnae', 10)
            ->requirePresence('cnae', 'create')
            ->notEmptyString('cnae');

        return $validator;
    }
}
