<?php

namespace App\Http\Controllers;

abstract class ApiControllers {

    protected $model;

    public function get(){

        $limit = (int) $request->get(key: 'limit', default: 100);
        $offset = (int) $request->get(key: 'offset', default: 0);

        $result = $this->model->limit($limit)->offset($offset)->get();

        $this->sendResponse($result, 'OK', 200);
    }

    public function detail(string $objectName = null){

        $entity = $this->model->find($entityId)->first();

        if (!$entity){
            return $this->sendError('Not Found',404);
        }

        return $this->sendResponse($entity, 'OK', 200);
    }

    public function update(int $objectId){

        $entity = $this->model->find($entityId)->first();

        if (!$entity){
            return $this->sendError('Not Found',404);
        }

        $data = $request->validates();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Updated', 204);

    }

    public function delete(int $objectId){

        $entity = $this->model->find($entityId);

        if (!$entity){
            return $this->sendError('Not Found',404);
        }

        $entity->delete();

        return $this->sendResponse(null, 'Deleted', 204);
        
    }

    public function create(){
        
        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Created', 201);

    }

};