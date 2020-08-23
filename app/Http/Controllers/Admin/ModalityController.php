<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modality;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ModalityRequest;

class ModalityController extends Controller
{
    use UploadTrait;
    private $modality;

    public function __construct(Modality $modality)
    {
        $this->modality = $modality;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalities = $this->modality->paginate(10);

        return view('admin.modalities.index', compact('modalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modalities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModalityRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->imageUpload('photo_modalities', $request->file('photo'));
        }

        $this->modality->create($data);

        flash('Modalidade criada com Sucesso')->success()->important();
        return redirect()->route('dashboard.modalities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($modality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $modality
     * @return \Illuminate\Http\Response
     */
    public function edit($modality)
    {
        $modality = $this->modality->find($modality);

        return view('admin.modalities.edit', compact('modality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModalityRequest $request, $modality)
    {
        $data = $request->all();
        $modality = $this->modality->find($modality);

        if ($request->hasFile('photo')) {
            if (Storage::disk('public')->exists($modality->photo)) {
                Storage::disk('public')->delete($modality->photo);
            }
            $data['photo'] = $this->imageUpload('photo_modalities', $request->file('photo'));
        }
        $modality->update($data);
        flash('Modalidade Atualizada com Sucesso')->success()->important();
        return redirect()->route('dashboard.modalities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $modality
     * @return \Illuminate\Http\Response
     */
    public function destroy($modality)
    {
        $modality = $this->modality->find($modality);
        $modality->delete();
        flash('Modalidade Removida com Sucesso')->success()->important();
        return redirect()->route('dashboard.modalities.index');
    }
}
