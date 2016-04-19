<?php
namespace App\Model\Table;

use App\Model\Entity\Comment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comments Model
 *
 */
class CommentsTable extends Table
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

        $this->table('comments');
        $this->displayField('name');
        $this->primaryKey('id_comment');

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
            ->integer('id_comment')
            ->notEmpty('id_comment', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
			->add('email', 'validFormat', [
			'rule' => array('custom', '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/'),
			'message' => 'E-mail must be valid'
			]);
				
        $validator
            ->requirePresence('text_comment', 'create')
            ->notEmpty('text_comment');

        $validator
            ->integer('id_post')
            ->requirePresence('id_post', 'create')
            ->notEmpty('id_post');

        return $validator;
    }

}
