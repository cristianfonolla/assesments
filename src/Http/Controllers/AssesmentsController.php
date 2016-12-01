<?php

namespace Scool\Assesments\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Scool\Assesments\Http\Requests\AssesmentCreateRequest;
use Scool\Assesments\Http\Requests\AssesmentUpdateRequest;
use Scool\Assesments\Repositories\AssesmentRepository;
use Scool\Assesments\Validators\AssesmentValidator;


class AssesmentsController extends Controller
{

    /**
     * @var AssesmentRepository
     */
    protected $repository;

    /**
     * @var AssesmentValidator
     */
    protected $validator;

    public function __construct(AssesmentRepository $repository, AssesmentValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $assesments = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $assesments,
            ]);
        }

        return view('assesments.index', compact('assesments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AssesmentCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AssesmentCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $assesment = $this->repository->create($request->all());

            $response = [
                'message' => 'Assesment created.',
                'data'    => $assesment->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assesment = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $assesment,
            ]);
        }

        return view('assesments.show', compact('assesment'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $assesment = $this->repository->find($id);

        return view('assesments.edit', compact('assesment'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  AssesmentUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(AssesmentUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $assesment = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Assesment updated.',
                'data'    => $assesment->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Assesment deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Assesment deleted.');
    }
}
