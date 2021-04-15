<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQatnashchiRequest;
use App\Http\Requests\UpdateQatnashchiRequest;
use App\Repositories\QatnashchiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class QatnashchiController extends AppBaseController
{
    /** @var  QatnashchiRepository */
    private $qatnashchiRepository;

    public function __construct(QatnashchiRepository $qatnashchiRepo)
    {
        $this->qatnashchiRepository = $qatnashchiRepo;
    }

    /**
     * Display a listing of the Qatnashchi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $qatnashchis = $this->qatnashchiRepository->all();

        return view('qatnashchis.index')
            ->with('qatnashchis', $qatnashchis);
    }

    /**
     * Show the form for creating a new Qatnashchi.
     *
     * @return Response
     */
    public function create()
    {
        return view('qatnashchis.create');
    }

    /**
     * Store a newly created Qatnashchi in storage.
     *
     * @param CreateQatnashchiRequest $request
     *
     * @return Response
     */
    public function store(CreateQatnashchiRequest $request)
    {
        $input = $request->all();

        $qatnashchi = $this->qatnashchiRepository->create($input);

        Flash::success('Qatnashchi saved successfully.');

        return redirect(route('qatnashchis.index'));
    }

    /**
     * Display the specified Qatnashchi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $qatnashchi = $this->qatnashchiRepository->find($id);

        if (empty($qatnashchi)) {
            Flash::error('Qatnashchi not found');

            return redirect(route('qatnashchis.index'));
        }

        return view('qatnashchis.show')->with('qatnashchi', $qatnashchi);
    }

    /**
     * Show the form for editing the specified Qatnashchi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $qatnashchi = $this->qatnashchiRepository->find($id);

        if (empty($qatnashchi)) {
            Flash::error('Qatnashchi not found');

            return redirect(route('qatnashchis.index'));
        }

        return view('qatnashchis.edit')->with('qatnashchi', $qatnashchi);
    }

    /**
     * Update the specified Qatnashchi in storage.
     *
     * @param int $id
     * @param UpdateQatnashchiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQatnashchiRequest $request)
    {
        $qatnashchi = $this->qatnashchiRepository->find($id);

        if (empty($qatnashchi)) {
            Flash::error('Qatnashchi not found');

            return redirect(route('qatnashchis.index'));
        }

        $qatnashchi = $this->qatnashchiRepository->update($request->all(), $id);

        Flash::success('Qatnashchi updated successfully.');

        return redirect(route('qatnashchis.index'));
    }

    /**
     * Remove the specified Qatnashchi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $qatnashchi = $this->qatnashchiRepository->find($id);

        if (empty($qatnashchi)) {
            Flash::error('Qatnashchi not found');

            return redirect(route('qatnashchis.index'));
        }

        $this->qatnashchiRepository->delete($id);

        Flash::success('Qatnashchi deleted successfully.');

        return redirect(route('qatnashchis.index'));
    }
}
