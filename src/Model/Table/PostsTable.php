<?php
namespace App\Model\Table;

use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 */
class PostsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
		//hasMany
	      $this->hasMany('Comments', [
            'foreignKey' => 'id_post',
            'dependent' => true,
			'cascadeCallbacks' => true,
	
        ]);
    
	
        parent::initialize($config);

        $this->table('posts');
        $this->displayField('title');
        $this->primaryKey('id_post');
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
            ->integer('id_post')
            ->allowEmpty('id_post', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        return $validator;
    }

}
