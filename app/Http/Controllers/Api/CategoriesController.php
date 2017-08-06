<?php

namespace SON\Http\Controllers\Api;

use Illuminate\Http\Request;

use SON\Http\Controllers\Controller;
use SON\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use SON\Http\Requests\CategoryRequest;
use SON\Http\Requests\CategoryUpdateRequest;
use SON\Repositories\CategoryRepository;
use SON\Validators\CategoryValidator;


class CategoriesController extends Controller
{

    /**
     * @var CategoryRepository
     */
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
        $this->repository->applyMultitenancy();
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->repository->create($request->all());
        return response()->json($category, 201);
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = $this->repository->update($request->all(), $id);
        return response()->json($category,200);
    }


    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if($deleted){
            return response()->json([],204);
        }else{
            return response()->json(['error' => 'Resource can not be deleted'],500);
        }
    }
}
