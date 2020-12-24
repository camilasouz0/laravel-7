<?php

namespace App\Services;

use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\GroupRepository;
use App\Validators\GroupValidator;

class GroupService
{
    private $repository;
    private $validator;

    public function __construct(GroupRepository $repository, GroupValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    public function store(array $data){
        try 
        {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $group = $this->repository->create($data);

            return[
                'success' => true,
                'messages' => "Grupo cadastrado",
                'data' => $group,
            ];
            dd($group); 
            
        } 
        catch (Exception $e) 
        {
            /* dd($e); */
            switch (get_class($e)) 
            {
                case QueryException::class;     return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class; return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class;          return ['success' => false, 'messages' => $e->getMessage()];
                default;                        return ['success' => false, 'messages' => $e->get_class($e)];
            }          
        }
    }
}